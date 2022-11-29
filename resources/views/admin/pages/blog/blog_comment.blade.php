@extends('admin.layouts.app')
@section('title')
Users Management
@endsection
@section('mainContent')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2><i class="fa fa-star" aria-hidden="true"></i> Blog Comment Management</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <span class="label label-success float-right all_backgroud"><strong>Blog Comment</strong></span>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content">
    <div class="row animated fadeInRight">
        <div class="col-md-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Blog Detail</h5>
                </div>
                <div>
                    <div class="ibox-content no-padding border-left-right">
                        <img alt="image" class="img-fluid" src="{{ asset('assets/admin/img/profile_big.jpg')}}">
                    </div>
                    <div class="ibox-content profile-content">
                        <h4><strong>{{$blog->title}}</strong></h4>
                        <p><i class="fa fa-calendar"></i> {{ \App\Helpers\Helper::DateFormate($blog->created_at) }}</p>
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Comment<strong> {{$count_comment}}</strong></h5>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <h5>Like<strong>28</strong></h5>
                            </div>
                        </div>
                        <p>{!! $blog->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Blog Comment</h5>
                </div>
                <div class="ibox-content">
                    <div>
                        {{ csrf_field() }}
                            <input type="hidden" value="{{$blog->id}}" name="blog_id" id="blog_id">
                        <div class="feed-activity-list" id="post_data"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
@endsection
@section('scripts')
<script>
$(document).ready(function(){
    
    var _token = $('input[name="_token"]').val();
    var blog_id = $('input[name="blog_id"]').val();
    load_data('', _token);
    function load_data(id="", _token){
        $.ajax({
            url:"{{ route('admin.blog.loadmorecomment') }}",
            method:"POST",
            data:{id:id, _token:_token, blog_id:blog_id},
            success:function(data){
                $('#load_more_button').remove();
                $('#post_data').append(data);
            }
        })
    }
    $(document).on('click', '#load_more_button', function(){
        var id = $(this).data('id');
        $('#load_more_button').html('<b>Loading...</b>');
        load_data(id, _token);
    });
});
</script>
@endsection