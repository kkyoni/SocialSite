@extends('front.layouts.app')
@section('title', 'Single Blog')
@section('mainContent')
<section id="page-content" class="page-wrapper section">
    <div class="blog-section mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-area">
                        <div class="blog-details-photo bg-img-1 p-20 mb-30">
                            <img src="{!! url("storage/blog/".@$single_blog->image) !!}" alt="">
                            <div class="today-date bg-img-1">
                                <span class="meta-date">{{Carbon\Carbon::parse($single_blog->created_at)->format('j')}}</span>
                                <span class="meta-month">{{Carbon\Carbon::parse($single_blog->created_at)->format('F')}}</span>
                            </div>
                        </div>
                        <ul class="blog-like-share mb-20">
                            <li><a href="javascript:void(0)" class="@if(!empty($like_blog)) active @endif" id="blog_like" data-id="{{$single_blog->id}}"><i class="zmdi zmdi-favorite"></i>{{$like_blog_count}} Like</a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-comments"></i>{{$comment_count}} Comments</a></li>
                        </ul>
                        <h3 class="blog-details-title mb-30">{{$single_blog->title}}</h3>
                        <div class="blog-description mb-60">
                            {!! $single_blog->description !!}
                        </div>
                        <div class="blog-share-tags box-shadow clearfix mb-60">
                            <div class="blog-share f-left">
                                <p class="share-tags-title f-left">share</p>
                                <ul class="footer-social f-left">
                                    <li><a class="facebook" href="#" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a class="linkedin" href="#" title="Linkedin"><i class="zmdi zmdi-linkedin"></i></a></li>
                                    <li><a class="google-plus" href="#" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>
                                    <li><a class="twitter" href="#" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a class="rss" href="#" title="RSS"><i class="zmdi zmdi-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        @if(sizeof($comment) > 0)
                        <div class="post-comments mb-60">
                            <h4 class="blog-section-title border-left mb-30">comments on this Blog</h4>
                            @foreach ($comment as $val)
                            <div class="media mt-30">
                                <div class="media-left pr-30">
                                    <a href="#">
                                        @if(!empty($val->user->avatar))
                                        <img class="media-object" src="{!! @$val->user->avatar !== '' ? url("storage/avatar/".@$val->user->avatar) : url('storage/avatar/default.png') !!}" alt="{{$val->user->avatar}}" height="75px" width="80px">
                                        @else
                                        <img class="media-object" src="{!! url('storage/avatar/default.png') !!}" alt="{{$val->user->avatar}}" height="75px" width="80px">
                                        @endif
                                    </a>
                                </div>
                                <div class="media-body">
                                    <div class="clearfix">
                                        <div class="name-commenter f-left">
                                            <h6 class="media-heading"><a href="#">{{$val->user->name}}</a></h6>
                                            <p class="mb-10">{{ \App\Helpers\Helper::DateFormate($val->created_at) }}</p>
                                        </div>
                                    </div>
                                    <p class="mb-0">{{$val->comment}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                        <div class="leave-comment">
                            <h4 class="blog-section-title border-left mb-30">your comment</h4>
                            <div class="row">
                                <input type="hidden" name="blog_id" id="blog_id" value="{{$single_blog->id}}">
                                <div class="col-lg-12">
                                    <textarea class="custom-textarea" name="comment" id="comment" placeholder="Your comment here..."></textarea>
                                </div>
                            </div>
                            <button class="submit-btn-1 black-bg mt-30 btn-hover-2 comment-submit" type="submit">submit comment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('styles')
<style>
.blog-like-share li .active{color: #ff7f00;}
</style>
@endsection
@section('scripts')
<script>
$(document).on("click","a#blog_like",function(e){
    var row = $(this);
    var blog_id = $(this).attr('data-id');
    $.ajax({
        url:"{{ route('front.store_like_blog') }}",
        type: 'post',
        data: {"_token": "{{ csrf_token() }}",blog_id:blog_id},
        success:function(msg){
            if(msg.status == 'success'){
                swal({title: "Success",text: msg.message,type: "success"},
                function(){
                    location.reload();
                });
            }else{
                swal({title: "Error",text: msg.message,type: "error"},
                function(){ 
                    window.location.href = "{{ route('front.showLoginForm')}}";
                });
            }
        },error:function(){
            alert("error");
        }
    });
});
$(document).on("click",".comment-submit",function(e){
    var row = $(this);
    var comment = $("#comment").val();
    var blog_id = $("#blog_id").val();
    $.ajax({
        url:"{{ route('front.bloginsert') }}",
        type: 'post',
        data: {"_token": "{{ csrf_token() }}",comment:comment,blog_id:blog_id},
        success:function(msg){
            if(msg.status == 'success'){
                swal({title: "Success",text: msg.message,type: "success"},
                function(){
                    location.reload();
                });
            }else{
                swal({title: "Error",text: msg.message,type: "error"},
                function(){ 
                    window.location.href = "{{ route('front.showLoginForm')}}";
                });
            }
        },error:function(){
            alert("error");
        }
    });
	});
</script>
@endsection