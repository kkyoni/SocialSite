<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Cms;
use App\Models\Faq;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('admin.login');
    }

    public function welcome()
    {
        $slider = Slider::where('status','active')->orderBy('id','desc')->get();
        $blog = Blog::where('status','active')->orderBy('id','desc')->limit(3)->get();
        $brand = Brand::with(['product' => function($query) {
            $query->where('status','active');
            $query->groupBy('product.brand_id');
        }])->get();
        $featured_product = Product::orderBy('id','desc')->limit(10)->get();
        return view('front.welcome',compact('slider','blog','brand','featured_product'));
    }

    public function about_us()
    {
        $cms_about = Cms::where('status','active')->where('title','about_us')->first();
        return view('front.pages.cms.about_us',compact('cms_about'));
    }

    public function contact()
    {
        return view('front.pages.cms.contact');
    }

    public function quick_product(Request $request){
        $quick_product = Product::find($request->id);
        return view('front.pages.path.quick_product_show',compact('quick_product'));
    }

    public function store_quick_product(Request $request){
        try{
        if(Auth::user()){
            Cart::create([
                'user_id'           => Auth::user()->id,
                'product_id'        => @$request->get('product_id'),
                'price'             => @$request->get('quick_price'),
                'quantity'          => @$request->get('cart_item'),
                'total_price'       => @$request->quick_price*$request->cart_item,
                'status'            => 'inactive',
            ]);
            return response()->json([
                'status'    => 'success',
                'title'     => 'Success!!',
                'message'   => 'Cart Product Successfully..!'
            ]);
        }else{
            return response()->json([
                'status'    => 'error',
                'title'     => 'Error!!',
                'message'   => 'Plase User Login..!'
            ]);
        }
    }catch(\Exception $e){
        return back()->with([
            'alert-type'    => 'danger',
            'message'       => $e->getMessage()
        ]);
    }
    }

    public function cart_remove_product($id){
        try{
            $cart = Cart::where('id',$id)->first();
            $cart->delete();
            return response()->json([
                'status'    => 'success',
                'title'     => 'Success!!',
                'message'   => 'Cart Product Deleted Successfully..!'
            ]);
        }catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    public function store_cart_product(Request $request){
        try{
        if(Auth::user()){
            $product = Product::where('id',$request->product_id)->first();
            Cart::create([
                'user_id'           => Auth::user()->id,
                'product_id'        => @$request->get('product_id'),
                'price'             => @$product->price,
                'quantity'          => '1',
                'total_price'       => @$product->price,
                'status'            => 'inactive',
            ]);
            return response()->json([
                'status'    => 'success',
                'title'     => 'Success!!',
                'message'   => 'Cart Product Successfully..!'
            ]);
        }else{
            return response()->json([
                'status'    => 'error',
                'title'     => 'Error!!',
                'message'   => 'Plase User Login..!'
            ]);
        }
    }catch(\Exception $e){
        return back()->with([
            'alert-type'    => 'danger',
            'message'       => $e->getMessage()
        ]);
    }
    }

    public function store_like_blog(Request $request){
        try{
            if(Auth::user()){
                $like = Like::where('only_id',$request->blog_id)->where('user_id',Auth::user()->id)->first();
                if(!empty($like)){
                    $like->delete();
                    return response()->json([
                        'status'    => 'success',
                        'title'     => 'Success!!',
                        'message'   => 'UnLike Blog Successfully..!'
                    ]);
                }else{
                    Like::create([
                        'user_id'           => Auth::user()->id,
                        'only_id'           => @$request->get('blog_id'),
                        'type'              => 'blog',
                    ]);
                    return response()->json([
                        'status'    => 'success',
                        'title'     => 'Success!!',
                        'message'   => 'Like Blog Successfully..!'
                    ]);
                }
            }else{
                return response()->json([
                    'status'    => 'error',
                    'title'     => 'Error!!',
                    'message'   => 'Plase User Login..!'
                ]);
            }
        }catch(\Exception $e){
            return back()->with([
                'alert-type'    => 'danger',
                'message'       => $e->getMessage()
            ]);
        }
    }

    public function faq(Request $request){
        $faq = Faq::where('status','active')->orderBy('id','desc')->get();
        return view('front.pages.faq.faq',compact('faq'));
    }

    
}
