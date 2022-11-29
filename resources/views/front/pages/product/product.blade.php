@extends('front.layouts.app')
@section('title', 'Product')
@section('mainContent')
<div id="page-content" class="page-wrapper section">
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="shop-content">
                        @include('front.pages.path.sort')
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane active show" role="tabpanel">
                                    {{ csrf_field() }}
                                <div class="row" id="product_data">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-1 order-2">
                    @include('front.pages.path.search')
                    @include('front.pages.path.categories')
                    @include('front.pages.path.price_filter')
                    @include('front.pages.path.color')
                    @include('front.pages.path.recent')
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
     load_data('', _token);
     function load_data(id="", _token)
     {
      $.ajax({
       url:"{{ route('front.product.loadmore') }}",
       method:"POST",
       data:{id:id, _token:_token},
       success:function(data)
       {
        $('#load_more_button').remove();
        $('#product_data').append(data.data);
       }
      })
     }
     $(document).on('click', '#load_more_button', function(){
      var id = $(this).data('id');
      $('#load_more_button').html('<b>Loading...</b>');
      load_data(id, _token);
     });
    
    });
    $('#brand_id').on('change',function(){
       var brand_id = this.value;
       $.ajax({
         url:"{{ route('front.product.loadmore') }}",
         type: 'post',
         data: {brand_id: brand_id},
         success:function(data){
             $('#product_data').empty();   
             $('#load_more_button').remove();
             if(data.status == 'success'){
               $('#product_data').append(data.data);   
             }
       },
       error:function(){
           alert("error");
       }
   });
   })
    $(document).on("click","a#color_product",function(e){
        var row = $(this);
		var color_id = $(this).attr('data-id');
       $.ajax({
         url:"{{ route('front.product.loadmore') }}",
         type: 'post',
         data: {color_id: color_id},
         success:function(data){
             $('#product_data').empty();   
             $('#load_more_button').remove();
             if(data.status == 'success'){
               $('#product_data').append(data.data);   
             }
       },
       error:function(){
           alert("error");
       }
   });
   })
   
    </script>
@endsection
