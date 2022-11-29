<div class="shop-option box-shadow mb-30 clearfix">
    <div class="short-by f-left text-center">
        <span>Sort by :</span>
        <select id="brand_id">
            <option value="volvo">Select Brand</option>
            @foreach ($brand as $val)
            <option value="{{$val->id}}">{{$val->brand_name}}</option>
            @endforeach
        </select> 
    </div> 
    <div class="showing f-right text-right">
        <span>Product Count : {{$product_count}}</span>
    </div>                                   
</div>
