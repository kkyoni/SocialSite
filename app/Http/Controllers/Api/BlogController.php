<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BlogController extends Controller
{
    public function index(Request $request){
        try{
            $blog = Blog::where('status','active')->orderBy('id','desc')->LIMIT(3)->get();

            return response()->json([
                'blog'  => $blog,
                'status' => 'success',
                'message' => 'Blog Listed Successfully !!'
                ]);

        }catch (\Exception $e){
            return [
            'value'  => [],
            'status' => 'error',
            'message'   => $e->getMessage()

            ];
        }
    }

    public function allBlog(Request $request){
        try{
            $blog = Blog::where('status','active')->orderBy('id','desc')->get();

            return response()->json([
                'blog'  => $blog,
                'status' => 'success',
                'message' => 'Blog Listed Successfully !!'
                ]);

        }catch (\Exception $e){
            return [
            'value'  => [],
            'status' => 'error',
            'message'   => $e->getMessage()

            ];
        }
    }

    public function blogdetail(Request $request,$id){
        try{
            $blogdetail = Blog::where('id','4')->first();

            return response()->json([
                'blogdetail'  => $blogdetail,
                'status' => 'success',
                'message' => 'Blog Detail Listed Successfully !!'
                ]);

        }catch (\Exception $e){
            return [
            'value'  => [],
            'status' => 'error',
            'message'   => $e->getMessage()

            ];
        }
    }
}
