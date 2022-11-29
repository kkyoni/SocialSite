@if(sizeof($slider) > 0)
<div class="slider-area plr-185 mb-80 section">
    <div class="container-fluid">
        <div class="slider-content">
            <div class="active-slider-1 slick-arrow-1 slick-dots-1">
                @foreach ($slider as $val)
                <div class="col-lg-12">
                    <div class="layer-1">
                        <div class="slider-img">
                            <img src="{!! url("storage/slider/".@$val->image) !!}" alt="{{$val->image}}">
                        </div>
                        <div class="slider-info gray-bg">
                            <div class="slider-info-inner">
                                <h1 class="slider-title-1 text-uppercase text-black-1">{{$val->sub_title}}</h1>
                                <div class="slider-brief text-black-2">
                                    {!! $val->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif