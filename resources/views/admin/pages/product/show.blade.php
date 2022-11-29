<link href="{{ asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/admin/css/plugins/blueimp/css/blueimp-gallery.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/admin/css/style.css')}}" rel="stylesheet">
<div class="table-responsive">
	@if(sizeof($product_imges) > 0)
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
@foreach($product_imges as $key=>$images)
<div class="carousel-item @if ($key === 0) active @endif">
<img class="d-block w-100" src="{{ asset("/storage/".@$images->images) }}" alt="First slide" style="width:738px;height:415px">
</div>
@endforeach
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
@endif
	<table class="table table-bordered">
		<tr>
			<th>Brand Name</th>
			<td>{{$product->brand->brand_name}}</td>
		</tr>
		<tr>
			<th>images</th>
			<td>
				@if(!empty($product->images))
				<div class="lightBoxGallery">
					<a href="{!! @$product->images !== '' ? url("storage/single_product/".@$product->images) : url('storage/default.png') !!}" title="Image from Unsplash" data-gallery=""><img src="{!! @$product->images !== '' ? url("storage/single_product/".@$product->images) : url('storage/default.png') !!}"></a>
					<div id="blueimp-gallery" class="blueimp-gallery">
						<div class="slides"></div>
					</div>
				</div>
				@else
				<div class="lightBoxGallery">
					<a href="{!! url('storage/single_product/default.png') !!}" title="Image from Unsplash" data-gallery=""><img src="{!! url('storage/single_product/default.png') !!}"></a>
					<div id="blueimp-gallery" class="blueimp-gallery">
						<div class="slides"></div>
					</div>
				</div>
				@endif
			</td>
		</tr>
		<tr>
			<th>Product Name</th>
			<td>{{$product->product_name}}</td>
		</tr>
		<tr>
			<th>Information</th>
			<td>{!! $product->information !!}</td>
		</tr>
		<tr>
			<th>Description</th>
			<td>{!! $product->description !!}</td>
		</tr>
		<tr>
			<th>Color Name</th>
			<td>{{$product->color->color_name}}</td>
		</tr>
		<tr>
			<th>Price</th>
			<td>{{$product->price}}</td>
		</tr>
		<tr>
			<th>status</th>
			<td>{{$product->status}}</td>
		</tr>
	</table>
</div>
<script src="{{ asset('assets/admin/js/plugins/blueimp/jquery.blueimp-gallery.min.js')}}"></script>