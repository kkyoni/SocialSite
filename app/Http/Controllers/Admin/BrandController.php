<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DataTables,Notify,Validator,Str,Storage;
use Yajra\DataTables\Html\Builder;
use Auth;
use Event;
use Settings;
use App\Helpers\Helper;
use App\Models\Brand;

class BrandController extends Controller
{
    protected $authLayout = '';
    protected $pageLayout = '';
    /**
     * * Create a new controller instance.
     * *
     * * @return void
     * */
    public function __construct(){
        $this->authLayout = 'admin.auth.';
        $this->pageLayout = 'admin.pages.brand.';
        $this->middleware('auth');
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function Index Page
    ---------------------------------------------------------------------------------- */
    public function index(Builder $builder, Request $request){
        $brand = Brand::orderBy('id','desc');
        if (request()->ajax()) {
            return DataTables::of($brand->get())->addIndexColumn()
            ->editColumn('status', function (Brand $brand) {
                if ($brand->status == "active") {
                    return '<span class="label label-success">Active</span>';
                } else {
                    return '<span class="label label-danger">Block</span>';
                }
            })
            
            ->editColumn('action', function (Brand $brand) {
                $action  = '';
                $action .= '<a class="btn btn-warning btn-circle btn-sm" href='.route('admin.brand.edit',[$brand->id]).'><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>';
                $action .='<a class="btn btn-danger btn-circle btn-sm m-l-10 deletebrand ml-1 mr-1" data-id ="'.$brand->id.'" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';
                $action .= '<a href="javascript:void(0)" class="btn btn-primary btn-circle btn-sm Showbrand" data-id="'.$brand->id.'" data-toggle="tooltip" title="Show"><i class="fa fa-eye"></i></a>';
                if($brand->status == "active"){
                    $action .= '<a href="javascript:void(0)" data-value="1" data-toggle="tooltip" title="Active" class="btn btn-dark btn-circle btn-sm ml-1 mr-1 changeStatusRecord" data-id="'.$brand->id.'" title="Active"><i class="fa fa-unlock"></i></a>';
                }else{
                    $action .= '<a href="javascript:void(0)" data-value="0" data-toggle="tooltip" title="Block" class="btn btn-dark btn-circle btn-sm ml-1 mr-1 changeStatusRecord" data-id="'.$brand->id.'" title="Block"><i class="fa fa-lock" ></i></a>';
                }
                return $action;
            })
            ->rawColumns(['action','status'])
            ->make(true);
        }
        $html = $builder->columns([
            ['data' => 'DT_RowIndex', 'name' => '', 'title' => 'Sr no','width'=>'5%',"orderable" => false, "searchable" => false],
            ['data' => 'brand_name', 'name' => 'brand_name', 'title' => 'Brand Name','width'=>'10%'],
            ['data' => 'status', 'name' => 'status', 'title' => 'Status','width'=>'10%'],
            ['data' => 'action', 'name' => 'action', 'title' => 'Action','width'=>'10%',"orderable" => false, "searchable" => false],
        ])
        ->parameters([ 'order' =>[] ]);
        return view($this->pageLayout.'index',compact('html'));
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Create Blog
    ---------------------------------------------------------------------------------- */
    public function create(){
        return view($this->pageLayout.'create');
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Store Blog
    ---------------------------------------------------------------------------------- */
    public function store(Request $request){
        $customMessages = [
            'brand_name.required'             => 'Brand Name is Required',
            'status.required'            => 'status is Required',
        ];
        $validatedData = Validator::make($request->all(),[
            'brand_name'              => 'required',
            'status'             => 'required',
        ],$customMessages);
        if($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData)->withInput();
        } try{
            Brand::create([
                'brand_name'               => @$request->get('brand_name'),
                'status'              => @$request->get('status'),
            ]);
            smilify('success', 'Brand Created Successfully ⚡️');
            return redirect()->route('admin.brand.index');
        }catch(\Exception $e){
            smilify('error', 'Brand Not Created Successfully ⚡️');
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Edit Brand
    ---------------------------------------------------------------------------------- */
    public function edit($id){
        try{
            $brand = Brand::where('id',$id)->first();
            if(!empty($brand)){
                return view($this->pageLayout.'edit',compact('brand'));
            }else{
                smilify('error', 'Edit Brand Not Found ⚡️');
                return redirect()->route('admin.brand.index');
            }
        }catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Update Brand
    ---------------------------------------------------------------------------------- */
    public function update(Request $request,$id){
        $customMessages = [
            '.required'             => 'Brand Name is Required',
            'status.required'            => 'status is Required',
        ];
        $validatedData = Validator::make($request->all(),[
            'brand_name'             => 'required',
            'status'            => 'required',
        ],$customMessages);
        if($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData)->withInput();
        }try{
            Brand::where('id',$id)->update([
                'brand_name'             => @$request->get('brand_name'),
                'status'  => @$request->get('status'),
            ]);
            smilify('success', 'Brand Updated Successfully ⚡️');
            return redirect()->route('admin.brand.index');
        } catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /* ----------------------------------------------------------------------------------
    @Description: Function for Delete Brand
    ---------------------------------------------------------------------------------- */
    public function delete($id){
        try{
            $brand = Brand::where('id',$id)->first();
            $brand->delete();
            smilify('success', 'Brand Deleted Successfully ⚡️');
            return response()->json([
                'status'    => 'success',
                'title'     => 'Success!!',
                'message'   => 'Brand Deleted Successfully..!'
            ]);
        }catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for show Brand
    ---------------------------------------------------------------------------------- */
    public function show(Request $request) {
        $brand = Brand::find($request->id);
        return view($this->pageLayout.'show',compact('brand'));
    }

    /* -----------------------------------------------------------------------------------------
    @Description: Function for Change Brand Status
    -------------------------------------------------------------------------------------------- */
    public function change_status(Request $request){
        try{
            $brand = Brand::where('id',$request->id)->first();
            if(!empty($brand)){
                if($brand->status == "active"){
                    Brand::where('id',$request->id)->update([
                        'status' => "inactive",
                    ]);
                }else{
                    Brand::where('id',$request->id)->update([
                        'status'=> "active",
                    ]);
                }
                smilify('success', 'Brand Status Update Successfully ⚡️');
                return response()->json([
                    'status'    => 'success',
                    'title'     => 'Success!!',
                    'message'   => 'Brand Status Updated Successfully..!'
                ]);
            }else{
                smilify('error', 'Brand Status Update Successfully ⚡️');
                return response()->json([
                    'status'    => 'error',
                    'title'     => 'Error!!',
                    'message'   => 'Brand Status Updated Successfully..!'
                ]);
            }
        }catch (Exception $e){
            return response()->json([
                'status'    => 'error',
                'title'     => 'Error!!',
                'message'   => $e->getMessage()
            ]);
        }
    }
}