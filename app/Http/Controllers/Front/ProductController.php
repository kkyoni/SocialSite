<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Colors;
use App\Models\Product;
use App\Models\ProductImges;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $request){
        $colors = Colors::where('status','active')->orderBy('id','desc')->get();
        $brand = Brand::with('product')->where('status','active')->orderBy('id','desc')->get();
        $product_count = Product::where('status','active')->count();
        return view('front.pages.product.product',compact('colors','brand','product_count'));
    }
    function load_data(Request $request){
        // dd($request->all());
       
        if($request->ajax()){
            if($request->id > 0){
                $data = Product::where('status','active')->where('id', '<', $request->id)->orderBy('id','desc')->limit(3)->get();
            }elseif(!empty($request->brand_id)){
                $data = Product::where('brand_id',$request->brand_id)->where('status','active')->orderBy('id','desc')->get();
            }elseif(!empty($request->color_id)){
                $data = Product::where('color_id',$request->color_id)->where('status','active')->orderBy('id','desc')->get();
            }else{
                $data = Product::where('status','active')->orderBy('id','desc')->limit(3)->get();
            }
            $output = '';
            $last_id = '';
            if(!$data->isEmpty()){
                foreach($data as $row){
                    $output .= '<div class="col-lg-4 col-md-6">
                    <div class="product-item">
                    <div class="product-img">
                    <a href="single_product/'.$row->id.'">
                    <img src="/storage/single_product/'.$row->images.'" alt=""/>
                    </a>
                    </div>
                    <div class="product-info">
                    <h6 class="product-title">
                    <a href="single_product/'.$row->id.'">'.$row->product_name.'</a>
                    </h6>
                    <div class="pro-rating">
                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                    <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                    </div>
                    <h3 class="pro-price">$ '.number_format((float)$row->price, 2, '.', '').'</h3>
                    <ul class="action-button">
                    <li><a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a></li>
                    <li><a href="javascript:void(0)" data-toggle="modal" class="Quick_product" title="Quickview" data-id="'.$row->id.'"><i class="zmdi zmdi-zoom-in"></i></a></li>
                    <li><a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a></li>
                    <li><a href="javascript:void(0)" class="add_to_cart" title="Add to cart" data-id="'.$row->id.'" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a></li>
                    </ul>
                    </div>
                    </div>
                    </div>';
                    $last_id = $row->id;
                }
                $output .= '<div class="col-lg-12 mt-20 text-center" id="load_more">
                <a class="button small mb-20" href="javascript:void(0)" name="load_more_button" data-id="'.$last_id.'" id="load_more_button"><span>Load More Product</span> </a>
                </div>';
            }else{
                $output .= '<div class="col-lg-12 mt-20 text-center" id="load_more">
                <a class="button small mb-20" href="javascript:void(0)" name="load_more_button" disabled><span>No Data Found </span> </a>
                </div>';
            }
            return response()->json([
                'status'    => 'success',
                'title'     => 'Success!!',
                'data'      => $output,
                'message'   => 'Faq deleted successfully.'
            ]);
            // echo $output;
        }
    }
    public function single_product($id){
        $brand = Brand::with('product')->where('status','active')->orderBy('id','desc')->get();
        $single_product = Product::with('brand')->where('id',$id)->first();
        $product_image = ProductImges::where('product_id',$id)->get();
        $related_product = Product::where('id','!=',$single_product->id)->where('brand_id',$single_product->brand_id)->get();
        return view('front.pages.product.single_product',compact('single_product','product_image','brand','related_product'));
    }
}
