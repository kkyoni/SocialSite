<aside class="widget widget-product box-shadow">
<h6 class="widget-title border-left mb-20">Colors products</h6>
@foreach ($colors as $val)
<div class="product-img" style="background: {{$val->color_code}}; height: 15px; width: 15px; border-radius: 50%;"></div>
<a href="javascript:void(0)" style="margin-left: 10px; padding: 0px;" data-id="{{$val->id}}" id="color_product">{{$val->color_name}}</a>
<br>
@endforeach
</aside>