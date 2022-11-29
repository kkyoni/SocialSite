<script src="{{ asset('assets/front/js/vendor/jquery-3.1.1.min.js')}}"></script>
<script src="{{ asset('assets/front/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/front/lib/js/jquery.nivo.slider.js')}}"></script>
<script src="{{ asset('assets/front/js/plugins.js')}}"></script>
<script src="{{ asset('assets/front/js/main.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>

<script type="text/javascript">
    $(document).on("click","a.Quick_product",function(e){
        var row = $(this);
	    var id = $(this).attr('data-id');
        $.ajax({
		url:"{{ route('front.quick_product') }}",
		type: 'get',
		data: {id: id},
		success:function(msg){
            // alert("sucess"); 
			$('.quick_product_show').html(msg);
			$('#productModal').modal('show');
		},
		error:function(){
			swal("Error!", 'Error in Record Not Show', "error"); 
		}
	});
    });
    $(document).on("click",".single_add_to_cart_button",function(e){
        var row = $(this);
		var product_id = $(this).attr('data-id');
        var cart_item = $('#french-hens').val();
		var quick_price = $('#quick_price').val();
        $.ajax({
		url:"{{ route('front.store_quick_product') }}",
		type: 'post',
		data: {"_token": "{{ csrf_token() }}",product_id:product_id,cart_item:cart_item,quick_price:quick_price},
		success:function(msg){
            if(msg.status == 'success'){
						swal({title: "Success",text: msg.message,type: "success"},
							function(){ 
								location.reload();
							});
					}else{
                        swal({title: "Error",text: msg.message,type: "error"},
							function(){ 
                                window.location.href = "{{ route('front.showLoginForm')}}";
								// location.reload();
							});
						// swal("Warning!", msg.message, "warning");
					}
            // alert("sucess"); 
			// $('.quick_product_show').html(msg);
			// $('#productModal').modal('show');
		},
		error:function(){
            alert("error");
			// swal("Error!", 'Error in Record Not Show', "error"); 
		}
	});
    });
	$(document).on("click","a.cart_remove_product",function(e){
		var row = $(this);
		var id = $(this).attr('data-id');
		swal({
			title: "Are you sure?",
			text: "You will not be able to recover this record",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#e69a2a",
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel please!",
			closeOnConfirm: false,
			closeOnCancel: false
		}, function(isConfirm){
			if (isConfirm) {
				$.ajax({
					url:"{{route('front.cart_remove_product',[''])}}"+"/"+id,
					type: 'post',
					data: {"_token": "{{ csrf_token() }}"
				},
				success:function(msg){
					if(msg.status == 'success'){
						swal({title: "Deleted",text: msg.message,type: "success"},
							function(){ 
								location.reload();
							});
					}else{
						swal("Warning!", msg.message, "warning");
					}
				},
				error:function(){
					swal("Error!", 'Error in delete Record', "error");
				}
			});
			} else {
				swal("Cancelled", "Your Cart is safe :)", "error");
			}
		});
		return false;
	})
	
	$(document).on("click","a.add_to_cart",function(e){
		var row = $(this);
		var product_id = $(this).attr('data-id');
        $.ajax({
		url:"{{ route('front.store_cart_product') }}",
		type: 'post',
		data: {"_token": "{{ csrf_token() }}",product_id:product_id},
		success:function(msg){
            if(msg.status == 'success'){
						swal({title: "Success",text: msg.message,type: "success"},
							function(){ 
								location.reload();
							});
					}else{
                        swal({title: "Error",text: msg.message,type: "error"},
							function(){ 
                                window.location.href = "{{ route('front.showLoginForm')}}";
							});
					}
		},
		error:function(){
            alert("error");
			// swal("Error!", 'Error in Record Not Show', "error"); 
		}
	});
    });
    </script>
@yield('scripts')