<div class="form-group row {{ $errors->has('color_name') ? 'has-error' : '' }}">
    <label class="col-sm-3 col-form-label">
        <strong>Name</strong>
        <span class="text-danger">*</span>
    </label>
    <div class="col-sm-6">
        {!! Form::text('color_name',null,['class' => 'form-control','id'    => 'color_name']) !!}
        <span class="help-block">
            <font color="red"> {{ $errors->has('color_name') ? "".$errors->first('color_name')."" : '' }} </font>
        </span>
    </div>
</div>

<div class="form-group row {{ $errors->has('color_code') ? 'has-error' : '' }}">
    <label class="col-sm-3 col-form-label">
        <strong>Code</strong>
        <span class="text-danger">*</span>
    </label>
    <div class="col-sm-6">
        {!! Form::color('color_code',null,['class' => 'form-control','id'    => 'color_code']) !!}
        <span class="help-block">
            <font color="red"> {{ $errors->has('color_code') ? "".$errors->first('color_code')."" : '' }} </font>
        </span>
    </div>
</div>

<div class="form-group row {{ $errors->has('status') ? 'has-error' : '' }}">
    <label class="col-sm-3 col-form-label">
        <strong>Status</strong>
    </label>
    <div class="col-sm-6 inline-block">
        <div class="i-checks">
            <label>
                {{ Form::radio('status', 'active' ,true,['id'=> 'active']) }} <i></i> Active
            </label>
            <label>
                {{ Form::radio('status', 'inactive' ,false,['id' => 'inactive']) }} <i></i> Inactive
            </label>
        </div>
        <span class="help-block">
            <font color="red">  {{ $errors->has('status') ? "".$errors->first('status')."" : '' }} </font>
        </span>
    </div>
</div>
@section('styles')
<link href="{{ asset('assets/admin/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
@endsection
@section('scripts')
<script src="{{ asset('assets/admin/js/plugins/iCheck/icheck.min.js') }}"></script>
<script type="text/javascript">
    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
    });
    
</script>
<script src="{{ asset('assets/admin/js/plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
@endsection