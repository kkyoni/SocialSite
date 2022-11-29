<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Colors;
use Illuminate\Http\Request;
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

class ColorsController extends Controller
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
        $this->pageLayout = 'admin.pages.colors.';
        $this->middleware('auth');
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function Index Page
    ---------------------------------------------------------------------------------- */
    public function index(Builder $builder, Request $request){
        $colors = Colors::orderBy('id','desc');
        if (request()->ajax()) {
            return DataTables::of($colors->get())->addIndexColumn()
            ->editColumn('color_code', function (Colors $colors) {
                    return '<span class="label label-success" style="border-radius:100%; background-color:'.$colors->color_code.'"></span>';
            })
            ->editColumn('status', function (Colors $colors) {
                if ($colors->status == "active") {
                    return '<span class="label label-success">Active</span>';
                } else {
                    return '<span class="label label-danger">Block</span>';
                }
            })
            ->editColumn('action', function (Colors $colors) {
                $action  = '';
                $action .= '<a class="btn btn-warning btn-circle btn-sm" href='.route('admin.colors.edit',[$colors->id]).'><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>';
                $action .='<a class="btn btn-danger btn-circle btn-sm m-l-10 deletecolors ml-1 mr-1" data-id ="'.$colors->id.'" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';
                $action .= '<a href="javascript:void(0)" class="btn btn-primary btn-circle btn-sm Showcolors" data-id="'.$colors->id.'" data-toggle="tooltip" title="Show"><i class="fa fa-eye"></i></a>';
                if($colors->status == "active"){
                    $action .= '<a href="javascript:void(0)" data-value="1" data-toggle="tooltip" title="Active" class="btn btn-dark btn-circle btn-sm ml-1 mr-1 changeStatusRecord" data-id="'.$colors->id.'" title="Active"><i class="fa fa-unlock"></i></a>';
                }else{
                    $action .= '<a href="javascript:void(0)" data-value="0" data-toggle="tooltip" title="Block" class="btn btn-dark btn-circle btn-sm ml-1 mr-1 changeStatusRecord" data-id="'.$colors->id.'" title="Block"><i class="fa fa-lock" ></i></a>';
                }
                return $action;
            })
            ->rawColumns(['action','color_code','status'])
            ->make(true);
        }
        $html = $builder->columns([
            ['data' => 'DT_RowIndex', 'name' => '', 'title' => 'Sr no','width'=>'5%',"orderable" => false, "searchable" => false],
            ['data' => 'color_name', 'name' => 'color_name', 'title' => 'Name','width'=>'10%'],
            ['data' => 'color_code', 'name' => 'color_code', 'title' => 'Code','width'=>'1%'],
            ['data' => 'status', 'name' => 'status', 'title' => 'Status','width'=>'10%'],
            ['data' => 'action', 'name' => 'action', 'title' => 'Action','width'=>'10%',"orderable" => false, "searchable" => false],
        ])
        ->parameters([ 'order' =>[] ]);
        return view($this->pageLayout.'index',compact('html'));
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Create Colors
    ---------------------------------------------------------------------------------- */
    public function create(){
        return view($this->pageLayout.'create');
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Store Colors
    ---------------------------------------------------------------------------------- */
    public function store(Request $request){
        $customMessages = [
            'color_name.required'             => 'Color Name is Required',
            'color_code.required'       => 'Color Code is Required',
            'status.required'            => 'status is Required',
        ];
        $validatedData = Validator::make($request->all(),[
            'color_name'              => 'required',
            'color_code'        => 'required',
            'status'             => 'required',
        ],$customMessages);
        if($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData)->withInput();
        } try{
            Colors::create([
                'color_name'               => @$request->get('color_name'),
                'color_code'         => @$request->get('color_code'),
                'status'              => @$request->get('status'),
            ]);
            smilify('success', 'Colors Created Successfully ⚡️');
            return redirect()->route('admin.colors.index');
        }catch(\Exception $e){
            smilify('error', 'Colors Not Created Successfully ⚡️');
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Edit Colors
    ---------------------------------------------------------------------------------- */
    public function edit($id){
        try{
            $colors = Colors::where('id',$id)->first();
            if(!empty($colors)){
                return view($this->pageLayout.'edit',compact('colors'));
            }else{
                smilify('error', 'Edit Colors Not Found ⚡️');
                return redirect()->route('admin.colors.index');
            }
        }catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Update Colors
    ---------------------------------------------------------------------------------- */
    public function update(Request $request,$id){
        $customMessages = [
            'color_name.required'             => 'Color Name is Required',
            'color_code.required'       => 'Color Code is Required',
            'status.required'            => 'status is Required',
        ];
        $validatedData = Validator::make($request->all(),[
            'color_name'             => 'required',
            'color_code'       => 'required',
            'status'            => 'required',
        ],$customMessages);
        if($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData)->withInput();
        }try{
            Colors::where('id',$id)->update([
                'color_name'             => @$request->get('color_name'),
                'color_code'  => @$request->get('color_code'),
                'status'  => @$request->get('status'),
            ]);
            smilify('success', 'Colors Updated Successfully ⚡️');
            return redirect()->route('admin.colors.index');
        } catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /* ----------------------------------------------------------------------------------
    @Description: Function for Delete Colors
    ---------------------------------------------------------------------------------- */
    public function delete($id){
        try{
            $colors = Colors::where('id',$id)->first();
            $colors->delete();
            smilify('success', 'Colors Deleted Successfully ⚡️');
            return response()->json([
                'status'    => 'success',
                'title'     => 'Success!!',
                'message'   => 'Colors Deleted Successfully..!'
            ]);
        }catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for show Colors
    ---------------------------------------------------------------------------------- */
    public function show(Request $request) {
        $colors = Colors::find($request->id);
        return view($this->pageLayout.'show',compact('colors'));
    }

    /* -----------------------------------------------------------------------------------------
    @Description: Function for Change Colors Status
    -------------------------------------------------------------------------------------------- */
    public function change_status(Request $request){
        try{
            $colors = Colors::where('id',$request->id)->first();
            if(!empty($colors)){
                if($colors->status == "active"){
                    Colors::where('id',$request->id)->update([
                        'status' => "inactive",
                    ]);
                }else{
                    Colors::where('id',$request->id)->update([
                        'status'=> "active",
                    ]);
                }
                smilify('success', 'Colors Status Update Successfully ⚡️');
                return response()->json([
                    'status'    => 'success',
                    'title'     => 'Success!!',
                    'message'   => 'Colors Status Updated Successfully..!'
                ]);
            }else{
                smilify('error', 'Colors Status Update Successfully ⚡️');
                return response()->json([
                    'status'    => 'error',
                    'title'     => 'Error!!',
                    'message'   => 'Colors Status Updated Successfully..!'
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
