<aside class="widget widget-categories box-shadow mb-30">
    <h6 class="widget-title border-left mb-20">Categories</h6>
    <div id="cat-treeview" class="product-cat">
        <ul>
            @foreach ($brand as $val)
            <li class="closed"><a href="#">{{$val->brand_name}}</a>
                @foreach ($val['product'] as $valu)
                <ul>
                    <li><a href="{{route('front.single_product',$valu->id)}}">{{$valu->product_name}}</a></li>
                </ul>
                @endforeach
            </li>                                           
            @endforeach
        </ul>
    </div>
</aside>