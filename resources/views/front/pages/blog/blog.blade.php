@if(!empty($blog))
        <div class="row">
            @foreach ($blog as $val)
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <img src="{!! url("storage/blog/".@$val->image) !!}" alt="">
                    <div class="blog-desc">
                        <h5 class="blog-title"><a href="{{route('front.single_blog',$val->id)}}">{{$val->title}}</a></h5>
                        <p>{!! str_limit($val->description, 120) !!}</p>
                        <div class="read-more">
                            <a href="{{route('front.single_blog',$val->id)}}">Read more</a>
                        </div>
                        <ul class="blog-meta">
                            @php
                                $like_blog_count = App\Models\Like::where('only_id',$val->id)->where('type','blog')->count();
                            @endphp
                            <li>
                                <a href="#"><i class="zmdi zmdi-favorite"></i>{{$like_blog_count}} Like</a>
                            </li>
                            @php
                                $coment_count = App\Models\Comment::where('only_id',$val->id)->where('type','blog')->count();
                            @endphp
                            <li>
                                <a href="#"><i class="zmdi zmdi-comments"></i>{{$coment_count}} Comments</a>
                            </li>

                            <li>
                                <a href="#"><i class="zmdi zmdi-share"></i>29 Share</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
@endif