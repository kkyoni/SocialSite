<div class="form-group  row {{ $errors->has('images') ? 'has-error' : '' }}">
    <div id="imagePreview" class="profile-image">
        @if(!empty($product->images))
        <img src="{!! @$product->images !== '' ? url("storage/single_product/".@$product->images) : url('storage/single_product/default.png') !!}" alt="user-img" class="img-circle">
        @else
        <img src="{!! url('storage/single_product/default.png') !!}" alt="user-img" class="img-circle" accept="image/*">
        @endif
    </div> 
    {!! Form::file('images',['id' => 'hidden','accept'=>"image/*"]) !!}
</div>
<div class="form-group  row {{ $errors->has('brand_id') ? 'has-error' : '' }}">
    <label class="col-sm-3 col-form-label"><strong>Brand</strong> <span class="text-danger">*</span></label>
    <div class="col-sm-6">
        {!! Form::select('brand_id',$brand_list,null,['class' => 'form-control','id' => 'brand_id','placeholder'=>'Select Brand']) !!}
        <span class="help-block">
            <font color="red"> {{ $errors->has('brand_id') ? "".$errors->first('brand_id')."" : '' }} </font>
        </span>
    </div>
</div>
<div class="form-group row {{ $errors->has('product_name') ? 'has-error' : '' }}">
    <label class="col-sm-3 col-form-label">
        <strong>product_name</strong>
        <span class="text-danger">*</span>
    </label>
    <div class="col-sm-6">
        {!! Form::text('product_name',null,['class' => 'form-control','id' => 'product_name','placeholder'=>'Enter The Product Name']) !!}
        <span class="help-block">
            <font color="red"> {{ $errors->has('product_name') ? "".$errors->first('product_name')."" : '' }} </font>
        </span>
    </div>
</div>
<div class="form-group  row {{ $errors->has('color_id') ? 'has-error' : '' }}">
    <label class="col-sm-3 col-form-label"><strong>Color</strong> <span class="text-danger">*</span></label>
    <div class="col-sm-6">
        {!! Form::select('color_id',$color_list,null,['class' => 'form-control','id' => 'color_id','placeholder'=>'Select Color']) !!}
        <span class="help-block">
            <font color="red"> {{ $errors->has('color_id') ? "".$errors->first('color_id')."" : '' }} </font>
        </span>
    </div>
</div>
<div class="form-group row {{ $errors->has('price') ? 'has-error' : '' }}">
    <label class="col-sm-3 col-form-label">
        <strong>price</strong>
        <span class="text-danger">*</span>
    </label>
    <div class="col-sm-6">
        {!! Form::text('price',null,['class' => 'form-control','id' => 'price' ,'placeholder'=>'Enter The Price']) !!}
        <span class="help-block">
            <font color="red"> {{ $errors->has('price') ? "".$errors->first('price')."" : '' }} </font>
        </span>
    </div>
</div>
<div class="form-group row {{ $errors->has('status') ? 'has-error' : '' }}">
    <label class="col-sm-3 col-form-label">
        <strong>Status</strong>
    </label>
    <div class="col-sm-6 inline-block">
        <div class="i-checks">
            <label>{{ Form::radio('status', 'active' ,true,['id'=> 'active']) }} <i></i> Active</label>
            <label>{{ Form::radio('status', 'inactive' ,false,['id' => 'inactive']) }} <i></i> Inactive</label>
        </div>
        <span class="help-block">
            <font color="red">  {{ $errors->has('status') ? "".$errors->first('status')."" : '' }} </font>
        </span>
    </div>
</div>
<div class="col-lg-12">
    <div class="tabs-container">
        <ul class="nav nav-tabs" role="tablist">
            <li><a class="nav-link active" data-toggle="tab" href="#tab-1"> information</a></li>
            <li><a class="nav-link" data-toggle="tab" href="#tab-2">description</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" id="tab-1" class="tab-pane active">
                <div class="form-group row {{ $errors->has('information') ? 'has-error' : '' }}">
                    <div class="col-sm-12">
                        {!! Form::textarea('information',null,['class' => 'form-control ','id' => 'information']) !!}
                        <span class="help-block">
                            <font color="red"> {{ $errors->has('information') ? "".$errors->first('information')."" : '' }} </font>
                        </span>
                    </div>
                </div>
            </div>
            <div role="tabpanel" id="tab-2" class="tab-pane">
                <div class="form-group row {{ $errors->has('description') ? 'has-error' : '' }}">
                    <div class="col-sm-12">
                        {!! Form::textarea('description',null,['class' => 'form-control ','id'    => 'description']) !!}
                        <span class="help-block">
                            <font color="red"> {{ $errors->has('description') ? "".$errors->first('description')."" : '' }} </font>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="form-group  row {{ $errors->has('product_image_gallery') ? 'has-error' : '' }}">
    <label class="col-sm-3 col-form-label">
        <strong>Product Image Gallery</strong>
        <span class="text-danger">*</span>
    </label>
    <div class="col-sm-6">
        <label class="custom-file-label col-sm-12" for="validationCustom10"><strong>Choose file...</strong></label>
        <input type="file" name="product_image_gallery[]" value="{{ old('product_image_gallery') }}"
        class="custom-file-input" id="logo" multiple="multiple">
        <span class="help-block">
            <font color="red"> {{ $errors->has('product_image_gallery') ? "".$errors->first('product_image_gallery')."" : '' }} </font>
        </span>
    </div>
</div>

<div class="user-image mb-3 text-center">
    <div class="imgPreview"> </div>
</div>
@if(!empty($product_imges))
<div class="col-md-12 row">
@foreach($product_imges as $images)
<div class="col-md-2" id="image_{{$images->id}}">
    <div>
        <img src="{{ asset("/storage/".@$images->images) }}"  style="width:100px; height:100px;">
    </div>
    <div class="right_image_section_remove_button">
        <a href="JavaScript:Void();" id="remove_image"  class="remove_image btn btn-danger btn-xs" data-id="{{$images->id}}"><span class="fa fa-trash"></span></a>
    </div>
</div>
@endforeach
</div>
@endif
@section('styles')
<link href="{{ asset('assets/admin/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
<style>
.imgPreview img {position: relative;left: 80px;top: 2px;padding: 10px;max-width: 100px;}
</style>
@endsection
@section('scripts')
<script src="{{ asset('assets/admin/js/plugins/iCheck/icheck.min.js') }}"></script>
<script type="text/javascript">
$('.i-checks').iCheck({
    checkboxClass: 'icheckbox_square-green',
    radioClass: 'iradio_square-green',
});
</script>
<script>
var searchInput = 'search_input';
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
<script>
    $(function() {
        var multiImgPreview = function(input, imgPreviewPlaceholder) {
            if (input.files) {
                var filesAmount = input.files.length;
                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(
                            imgPreviewPlaceholder);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };
        $('#logo').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
    });
</script>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
var editor = CKEDITOR.replace( 'information', {
    language: 'en',
    toolbar :
    [
        { name: 'document', items : [ 'NewPage','Preview' ] },
        { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
        { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },
        { name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
        '/',
        { name: 'styles', items : [ 'Styles','Format' ] },
        { name: 'basicstyles', items : [ 'Bold','Italic','Strike','-','RemoveFormat' ] },
        { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote' ] },
        { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
        { name: 'tools', items : [ 'Maximize','-','About' ] }
        ],
        extraPlugins: 'notification'
        });
        editor.on( 'required', function( evt ) {
            editor.showNotification( 'This field is required.', 'warning' );
            evt.cancel();
});
</script>
<script>
var editor = CKEDITOR.replace( 'description', {
    language: 'en',
    toolbar :
    [
        { name: 'document', items : [ 'NewPage','Preview' ] },
        { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
        { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },
        { name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
        '/',
        { name: 'styles', items : [ 'Styles','Format' ] },
        { name: 'basicstyles', items : [ 'Bold','Italic','Strike','-','RemoveFormat' ] },
        { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote' ] },
        { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
        { name: 'tools', items : [ 'Maximize','-','About' ] }
        ],
        extraPlugins: 'notification'
        });
        editor.on( 'required', function( evt ) {
            editor.showNotification( 'This field is required.', 'warning' );
            evt.cancel();
});
</script>
<script>
    $(document).on("click",".remove_image",function(e){
        var id = $(this).attr("data-id");
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this record",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e69a2a",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function(isConfirm){
            if (isConfirm) {
                $.ajax({
                    url:"{{route('admin.product.remove_productImage',[''])}}"+"/"+id,
                    type: 'get',
                    data: {_method: 'delete'},
                    success:function(msg){
                        if(msg.status == 'success'){
                            $("#image_"+id).fadeOut();
                            swal("Deleted!",  msg.message, "success");
                        }else{
                            swal("Warning!", msg.message, "warning");
                        }
                    },
                    error:function(){
                        swal("Error!", 'Error in delete Record', "error");
                    }
                });
            } else {
                swal("Cancelled", "Your image is safe :)", "error");
            }
        });
        return false;
    })
</script>
@endsection