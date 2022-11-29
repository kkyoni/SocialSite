<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class BlogController extends Controller{
    function blog(){
        return view('front.pages.blog.getblog');
    }
    
    function load_data(Request $request){
        if($request->ajax()){
            if($request->id > 0){
                $data = Blog::where('status','active')->where('id', '<', $request->id)->orderBy('id','desc')->limit(3)->get();
            }else{
                $data = Blog::where('status','active')->orderBy('id','desc')->limit(3)->get();
            }
            $output = '';
            $last_id = '';
            if(!$data->isEmpty()){
                foreach($data as $row){
                    $coment_count = Comment::where('only_id',$row->id)->where('type','blog')->count();
                    $like_blog_count = Like::where('only_id',$row->id)->where('type','blog')->count();
                    $output .= '<div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                    <img src="/storage/blog/'.$row->image.'" alt="">
                    <div class="blog-desc">
                    <h5 class="blog-title"><a href="single_blog/'.$row->id.'">'.$row->title.'</a></h5>
                    <p>'.str_limit($row->description, 120).'</p>
                    <div class="read-more">
                    <a href="single_blog/'.$row->id.'">Read more</a>
                    </div>
                    <ul class="blog-meta">
                    <li><a href="#"><i class="zmdi zmdi-favorite"></i>'.$like_blog_count.' Like</a></li>
                    
                    <li><a href="#"><i class="zmdi zmdi-comments"></i>'.$coment_count.' Comments</a></li>
                    <li><a href="#"><i class="zmdi zmdi-share"></i>29 Share</a></li>
                    </ul>
                    </div>
                    </div>
                    </div>';
                    $last_id = $row->id;
                }
                $output .= '<div class="col-lg-12 mt-20 text-center" id="load_more">
                <a class="button small mb-20" href="javascript:void(0)" name="load_more_button" data-id="'.$last_id.'" id="load_more_button"><span>Load More Blog</span> </a>
                </div>';
            }else{
                $output .= '<div class="col-lg-12 mt-20 text-center" id="load_more">
                <a class="button small mb-20" href="javascript:void(0)" name="load_more_button" disabled><span>No Data Found </span> </a>
                </div>';
            }
            echo $output;
        }
    }

    public function single_blog($id){
        $single_blog = Blog::where('id',$id)->first();
        $comment_count = Comment::where('only_id',$id)->where('type','blog')->count();
        $comment = Comment::with('user')->where('only_id',$id)->where('type','blog')->get();
        @$like_blog = Like::where('only_id',$id)->where('user_id',Auth::user()->id)->where('type','blog')->first();
        $like_blog_count = Like::where('only_id',$id)->where('type','blog')->count();
        return view('front.pages.blog.single_blog',compact('single_blog','comment','comment_count','like_blog','like_blog_count'));
    }

    public function bloginsert(Request $request){
        try{
            if(Auth::user()){
                    Comment::create([
                        'user_id'           => Auth::user()->id,
                        'only_id'           => @$request->get('blog_id'),
                        'type'              => 'blog',
                        'comment'           => $request->comment,
                    ]);
                    return response()->json([
                        'status'    => 'success',
                        'title'     => 'Success!!',
                        'message'   => 'Comment Blog Successfully..!'
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
}