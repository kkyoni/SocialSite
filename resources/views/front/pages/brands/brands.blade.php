@if(sizeof($brand) > 0)
<div class="by-brand-section mb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-left mb-40">
                    <h2 class="uppercase">By Brands</h2>
                    <h6>There are many variations of passages of brands available,</h6>
                </div>
            </div>
        </div>
        <div class="by-brand-product">
            <div class="row active-by-brand slick-arrow-2">
                @foreach ($brand as $key => $val)
                @foreach($val['product'] as $k => $v) 
                <div class="col-lg-12">
                    <div class="single-brand-product">
                        <a href="{{route('front.single_product',$v->id)}}"><img src="{!! url("storage/single_product/".@$v->images) !!}" alt=""></a>
                        <h3 class="brand-title text-gray">
                            <a href="{{route('front.single_product',$v->id)}}">{{$val->brand_name}}</a>
                        </h3>
                    </div>
                </div>    
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif