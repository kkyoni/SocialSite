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
use App\Models\Colors;
use App\Models\Comment;
use App\Models\Product;
use App\Models\ProductImges;

class ProductController extends Controller
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
        $this->pageLayout = 'admin.pages.product.';
        $this->middleware('auth');
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function Index Page
    ---------------------------------------------------------------------------------- */
    public function index(Builder $builder, Request $request){
        $product = Product::orderBy('id','desc');
        if (request()->ajax()) {
            return DataTables::of($product->get())->addIndexColumn()
            ->editColumn('brand_id', function (Product $product) {
                return $product->brand->brand_name;
            })
            ->editColumn('images', function (Product $product){
                if(!$product->images){
                    return '<img class="img-thumbnail" src="' . asset('storage/single_product/default.png').'" style="width:60px; height:48px;">';
                }else{
                    return '<img class="img-thumbnail" src="' . asset('storage/single_product' . '/' . $product->images) . '" style="width:60px; height:48px;">';
                }
            })
            ->editColumn('color_id', function (Product $product) {
                return $product->color->color_name;
            })
            ->editColumn('status', function (Product $product) {
                if ($product->status == "active") {
                    return '<span class="label label-success">Active</span>';
                } else {
                    return '<span class="label label-danger">Block</span>';
                }
            })
            
            ->editColumn('action', function (Product $product) {
                $action  = '';
                $action .= '<a class="btn btn-warning btn-circle btn-sm" href='.route('admin.product.edit',[$product->id]).'><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>';
                $action .='<a class="btn btn-danger btn-circle btn-sm m-l-10 deleteproduct ml-1 mr-1" data-id ="'.$product->id.'" href="javascript:void(0)" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>';
                $action .= '<a href="javascript:void(0)" class="btn btn-primary btn-circle btn-sm Showproduct" data-id="'.$product->id.'" data-toggle="tooltip" title="Show"><i class="fa fa-eye"></i></a>';
                if($product->status == "active"){
                    $action .= '<a href="javascript:void(0)" data-value="1" data-toggle="tooltip" title="Active" class="btn btn-dark btn-circle btn-sm ml-1 mr-1 changeStatusRecord" data-id="'.$product->id.'" title="Active"><i class="fa fa-unlock"></i></a>';
                }else{
                    $action .= '<a href="javascript:void(0)" data-value="0" data-toggle="tooltip" title="Block" class="btn btn-dark btn-circle btn-sm ml-1 mr-1 changeStatusRecord" data-id="'.$product->id.'" title="Block"><i class="fa fa-lock" ></i></a>';
                }
                // $action .= '<a class="btn btn-success btn-circle btn-sm" href='.route('admin.user.product_comment',[$product->id]).'><i class="fa fa-product-hunt" data-toggle="tooltip" title="Product Comment"></i></a>';
                return $action;
            })
            ->rawColumns(['action','description','images','status','brand_id'])
            ->make(true);
        }
        $html = $builder->columns([
            ['data' => 'DT_RowIndex', 'name' => '', 'title' => 'Sr no','width'=>'5%',"orderable" => false, "searchable" => false],
            ['data' => 'brand_id', 'name' => 'brand_id', 'title' => 'Brand Name','width'=>'10%'],
            ['data' => 'images', 'name' => 'images', 'title' => 'images','width'=>'10%'],
            ['data' => 'product_name', 'name' => 'product_name', 'title' => 'Product Name','width'=>'10%'],
            ['data' => 'color_id', 'name' => 'color_id', 'title' => 'Color Name','width'=>'10%'],
            ['data' => 'price', 'name' => 'price', 'title' => 'Price','width'=>'10%'],
            ['data' => 'status', 'name' => 'status', 'title' => 'Status','width'=>'10%'],
            ['data' => 'action', 'name' => 'action', 'title' => 'Action','width'=>'10%',"orderable" => false, "searchable" => false],
        ])
        ->parameters([ 'order' =>[] ]);
        return view($this->pageLayout.'index',compact('html'));
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Create Product
    ---------------------------------------------------------------------------------- */
    public function create(){
        $brand_list = Brand::pluck('brand_name','id');
        $color_list = Colors::pluck('color_name','id');
        return view($this->pageLayout.'create',compact('brand_list','color_list'));
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Store Product
    ---------------------------------------------------------------------------------- */
    public function store(Request $request){
        $customMessages = [
            'brand_id.required'       => 'Brand Name is Required',
            'product_name.required'   => 'Product Name is Required',
            'color_id.required'       => 'Color Name is Required',
            'price.required'          => 'Price is Required',
            'status.required'         => 'Status is Required',
            'information.required'    => 'Information is Required',
            'description.required'    => 'Description is Required',
        ];
        $validatedData = Validator::make($request->all(),[
            'brand_id'        => 'required',
            'product_name'    => 'required',
            'color_id'        => 'required',
            'price'           => 'required',
            'status'          => 'required',
            'information'     => 'required',
            'description'     => 'required',
        ],$customMessages);
        if($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData)->withInput();
        } try{
            if($request->hasFile('images')){
                $file = $request->file('images');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(10).'.'.$extension;
                Storage::disk('public')->putFileAs('single_product', $file,$filename);
            }else{
                $filename = 'default.png';
            }
            $product = Product::create([
                'brand_id'            => @$request->get('brand_id'),
                'images'              => @$filename,
                'product_name'        => @$request->get('product_name'),
                'information'         => @$request->get('information'),
                'description'         => @$request->get('description'),
                'color_id'            => @$request->get('color_id'),
                'price'               => @$request->get('price'),
                'status'              => @$request->get('status'),
            ]);
            if($request->hasFile('product_image_gallery')){
                $names = [];
                foreach($request->file('product_image_gallery') as $image){
                    $filename = '';
                    $filename = $image->store('product', ['disk' => 'public']);
                    $input['images'] = $filename;
                    $input['product_id']=$product->id;
                    ProductImges::create($input);
                }
            }
            smilify('success', 'Product Created Successfully ⚡️');
            return redirect()->route('admin.product.index');
        }catch(\Exception $e){
            smilify('error', 'Product Not Created Successfully ⚡️');
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Edit Product
    ---------------------------------------------------------------------------------- */
    public function edit($id){
        try{
            $brand_list = Brand::pluck('brand_name','id');
            $color_list = Colors::pluck('color_name','id');
            $product_imges=ProductImges::where('product_id',$id)->get();
            $product = Product::where('id',$id)->first();
            if(!empty($product)){
                return view($this->pageLayout.'edit',compact('product','brand_list','color_list','product_imges'));
            }else{
                smilify('error', 'Edit Product Not Found ⚡️');
                return redirect()->route('admin.product.index');
            }
        }catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for Update Product
    ---------------------------------------------------------------------------------- */
    public function update(Request $request,$id){
        // dd($request->all());
        $customMessages = [
            'brand_id.required'       => 'Brand Name is Required',
            'product_name.required'   => 'Product Name is Required',
            'color_id.required'       => 'Color Name is Required',
            'price.required'          => 'Price is Required',
            'status.required'         => 'Status is Required',
            'information.required'    => 'Information is Required',
            'description.required'    => 'Description is Required',
        ];
        $validatedData = Validator::make($request->all(),[
            'brand_id'        => 'required',
            'product_name'    => 'required',
            'color_id'        => 'required',
            'price'           => 'required',
            'status'          => 'required',
            'information'     => 'required',
            'description'     => 'required',
        ],$customMessages);
        if($validatedData->fails()){
            return redirect()->back()->withErrors($validatedData)->withInput();
        }try{
            $oldDetails = Product::find($id);
            if($request->hasFile('images')){
                $file = $request->file('images');
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(10).'.'.$extension;
                Storage::disk('public')->putFileAs('single_product', $file,$filename);
            }else{
                
                if($oldDetails->images !== null){
                    $filename = $oldDetails->images;
                }else{
                    $filename = 'default.png';
                }
            }
            $product = Product::where('id',$id)->update([
                'brand_id'            => @$request->get('brand_id'),
                'images'              => @$filename,
                'product_name'        => @$request->get('product_name'),
                'information'         => @$request->get('information'),
                'description'         => @$request->get('description'),
                'color_id'            => @$request->get('color_id'),
                'price'               => @$request->get('price'),
                'status'              => @$request->get('status'),
            ]);
            if($request->hasFile('product_image_gallery')){
                $names = [];
                foreach($request->file('product_image_gallery') as $image){
                    // dd($id);
                    $filename = '';
                    $filename = $image->store('product', ['disk' => 'public']);
                    $input['images'] = $filename;
                    $input['product_id']=$id;
                    ProductImges::create($input);
                }
            }
            smilify('success', 'Product Updated Successfully ⚡️');
            return redirect()->route('admin.product.index');
        } catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /* ----------------------------------------------------------------------------------
    @Description: Function for Delete Product
    ---------------------------------------------------------------------------------- */
    public function delete($id){
        try{
            $product = Product::where('id',$id)->first();
            $product->delete();
            smilify('success', 'Product Deleted Successfully ⚡️');
            return response()->json([
                'status'    => 'success',
                'title'     => 'Success!!',
                'message'   => 'Product Deleted Successfully..!'
            ]);
        }catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    /*-----------------------------------------------------------------------------------
    @Description: Function for show Product
    ---------------------------------------------------------------------------------- */
    public function show(Request $request) {
        $product = Product::find($request->id);
        $product_imges=ProductImges::where('product_id',$request->id)->get();
        return view($this->pageLayout.'show',compact('product','product_imges'));
    }

    /* -----------------------------------------------------------------------------------------
    @Description: Function for Change Product Status
    -------------------------------------------------------------------------------------------- */
    public function change_status(Request $request){
        try{
            $product = Product::where('id',$request->id)->first();
            if(!empty($product)){
                if($product->status == "active"){
                    Product::where('id',$request->id)->update([
                        'status' => "inactive",
                    ]);
                }else{
                    Product::where('id',$request->id)->update([
                        'status'=> "active",
                    ]);
                }
                smilify('success', 'Product Status Update Successfully ⚡️');
                return response()->json([
                    'status'    => 'success',
                    'title'     => 'Success!!',
                    'message'   => 'Product Status Updated Successfully..!'
                ]);
            }else{
                smilify('error', 'Product Status Update Successfully ⚡️');
                return response()->json([
                    'status'    => 'error',
                    'title'     => 'Error!!',
                    'message'   => 'Product Status Updated Successfully..!'
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
    public function product_comment(Request $request,$id){
        $product_commet = Comment::where('type','product')->where('user_id',$id)->get();
        dd($product_commet);
    }

    public function remove_productImage($id){
        $product_imges = ProductImges::find($id);
        $product_imges->delete();
        if($product_imges){
            $file= $product_imges->images;
            return ["status"=>'success',"message"=>'Record deleted sucessfully'];
        }else{
            return ["status"=>'error',"message"=>'Product Not Found'];
        }
    }

    
}
