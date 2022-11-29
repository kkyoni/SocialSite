@extends('front.layouts.app')
@section('title', 'My Account')
@section('mainContent')
<div id="page-content" class="page-wrapper section">
    <div class="login-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="my-account-content" id="accordion">
                        <div class="card mb-15">
                            <div  class="card-header" id="headingOne">
                                <h4 class="card-title">
                                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">My Personal Information</a>
                                </h4>
                            </div>
                            <div  id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    {!! Form::open([
                                        'route' => 'front.updateProfileDetail',
                                        'files' => true
                                        ]) !!}
                                        <div class="new-customers">
                                            <div class="p-30">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                    <div class="ibox-content" id="imagePreview">
                                                        @if(!empty(\Auth::user()->avatar))
                                                           <img src="{!!  url("storage/avatar/".Auth::user()->avatar) !!}" alt="user-img" class="img-circle">
                                                        @else
                                                           <img src="{!! url('storage/avatar/default.png') !!}" alt="user-img" class="img-circle" accept="image/*">
                                                        @endif
                                                   </div>
                                                   {!! Form::file('avatar',['id' => 'hidden','accept'=>"image/*"]) !!}
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" placeholder="Name" name="name" value="{{$user->name}}">
                                                        @if ($errors->has('name'))
                                                            <div class="alert alert-danger" role="alert" style="padding: 5px">{{ $errors->first('name') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" placeholder="Phone here..." name="phone" value="{{$user->phone}}">
                                                        @if ($errors->has('phone'))
                                                            <div class="alert alert-danger" role="alert" style="padding: 5px">{{ $errors->first('phone') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <input type="text" placeholder="Email address here..." value="{{$user->email}}" name="email">
                                                @if ($errors->has('email'))
                                                <div class="alert alert-danger" role="alert" style="padding: 5px">{{ $errors->first('email') }}</div>
                                                @endif
                                                {{-- <input type="password" placeholder="Password">
                                                <input type="password" placeholder="Confirm Password"> --}}
                                                <div class="checkbox">
                                                    <label class="mr-10">
                                                        <small><input type="checkbox" name="signup">I wish to subscribe to the 69 Fashion newsletter.</small>
                                                    </label>
                                                    <br>
                                                    <label>
                                                        <small><input type="checkbox" name="signup">I have read and agree to the <a href="#">Privacy Policy</a></small>
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <div class="card mb-15">
                            <div class="card-header" id="headingTwo">
                                <h4 class="card-title">
                                    <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">My shipping address</a>
                                </h4>
                            </div>
                            <div  id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <form action="#">
                                        <div class="new-customers p-30">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="First Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="last Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="custom-select">
                                                        <option value="defalt">country</option>
                                                        <option value="c-1">Australia</option>
                                                        <option value="c-2">Bangladesh</option>
                                                        <option value="c-3">Unitd States</option>
                                                        <option value="c-4">Unitd Kingdom</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="custom-select">
                                                        <option value="defalt">State</option>
                                                        <option value="c-1">Melbourne</option>
                                                        <option value="c-2">Dhaka</option>
                                                        <option value="c-3">New York</option>
                                                        <option value="c-4">London</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="custom-select">
                                                        <option value="defalt">Town/City</option>
                                                        <option value="c-1">Victoria</option>
                                                        <option value="c-2">Chittagong</option>
                                                        <option value="c-3">Boston</option>
                                                        <option value="c-4">Cambridge</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Phone here...">
                                                </div>
                                            </div>
                                            <input type="text" placeholder="Company neme here...">
                                            <input type="text" placeholder="Email address here...">
                                            <textarea class="custom-textarea" placeholder="Additional information..."></textarea>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1 f-right" type="reset">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-15">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">My billing details</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <form action="#">
                                        <div class="billing-details p-30">
                                            <input type="text" placeholder="Your Name Here...">
                                            <input type="text" placeholder="Email address here...">
                                            <input type="text" placeholder="Phone here...">
                                            <input type="text" placeholder="Company neme here...">
                                            <select class="custom-select">
                                                <option value="defalt">country</option>
                                                <option value="c-1">Australia</option>
                                                <option value="c-2">Bangladesh</option>
                                                <option value="c-3">Unitd States</option>
                                                <option value="c-4">Unitd Kingdom</option>
                                            </select>
                                            <select class="custom-select">
                                                <option value="defalt">State</option>
                                                <option value="c-1">Melbourne</option>
                                                <option value="c-2">Dhaka</option>
                                                <option value="c-3">New York</option>
                                                <option value="c-4">London</option>
                                            </select>
                                            <select class="custom-select">
                                                <option value="defalt">Town/City</option>
                                                <option value="c-1">Victoria</option>
                                                <option value="c-2">Chittagong</option>
                                                <option value="c-3">Boston</option>
                                                <option value="c-4">Cambridge</option>
                                            </select>
                                            <textarea class="custom-textarea" placeholder="Your address here..."></textarea>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1 f-right" type="reset">Clear</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-15">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">My Order info</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <form action="#">
                                        <div class="payment-details p-30">
                                            <table>
                                                <tr>
                                                    <td class="td-title-1">Dummy Product Name x 2</td>
                                                    <td class="td-title-2">$1855.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Dummy Product Name</td>
                                                    <td class="td-title-2">$555.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Cart Subtotal</td>
                                                    <td class="td-title-2">$2410.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Shipping and Handing</td>
                                                    <td class="td-title-2">$15.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title-1">Vat</td>
                                                    <td class="td-title-2">$00.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="order-total">Order Total</td>
                                                    <td class="order-total-price">$2425.00</td>
                                                </tr>
                                            </table>
                                            <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">
                                    <a data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Payment Method</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="panel-body">
                                    <form action="#">
                                        <div class="new-customers p-30">
                                            <select class="custom-select">
                                                <option value="defalt">Card Type</option>
                                                <option value="c-1">Master Card</option>
                                                <option value="c-2">Paypal</option>
                                                <option value="c-3">Paypal</option>
                                                <option value="c-4">Paypal</option>
                                            </select>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Card Number">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Card Security Code">
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="custom-select">
                                                        <option value="defalt">Month</option>
                                                        <option value="c-1">January</option>
                                                        <option value="c-2">February</option>
                                                        <option value="c-3">March</option>
                                                        <option value="c-4">April</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="custom-select">
                                                        <option value="defalt">Year</option>
                                                        <option value="c-4">2017</option>
                                                        <option value="c-1">2016</option>
                                                        <option value="c-2">2015</option>
                                                        <option value="c-3">2014</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">pay now</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">cancel order</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="submit-btn-1 mt-20 f-right btn-hover-1" type="submit" value="register">continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('styles')
<style type="text/css">
    #imagePreview{width: 100%;height: 100%;text-align: center;margin-bottom:15px;}
    #imagePreview img {height: 150px;width: 150px;border: 3px solid rgba(0,0,0,0.4);padding: 3px;border-radius:150px;}
    #hidden{display: none !important;}
</style>
@endsection
@section('scripts')
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#imagePreview img').on('click',function(){
        $('input[type="file"]').trigger('click');
        $('input[type="file"]').change(function() {
            readURL(this);
        });
    });
</script>
@endsection
