@extends('front.layouts.app')
@section('title', 'Faq')
@section('mainContent')
<section id="page-content" class="page-wrapper section">
    <div class="mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        {{-- <div class="card mb-15">
                            <div class="card-header" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Collapsible Group Item #1</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div> --}}
                        @if(sizeof($faq) > 0)
                        @foreach ($faq as $key=>$val)
                        <div class="card mb-15">
                            <div class="card-header" role="tab" id="heading{{$key}}">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}}" aria-expanded="false" aria-controls="collapseTwo">{{$val->question}}</a>
                                </h4>
                            </div>
                            <div id="collapse{{$key}}" class="collapse @if($key==0) show @endif" data-parent="#accordion" aria-labelledby="heading{{$key}}">
                                <div class="card-body">
                                    <p>{{$val->answer}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection