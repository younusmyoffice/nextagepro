@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
				<div class="breadcrumb-title pe-3">eCommerce</div>
				<div class="ps-3">
				  <nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
					  <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
					  </li>
					  <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
					</ol>
				  </nav>
				</div>
				<div class="ms-auto">
				  <div class="btn-group">
					<button type="button" class="btn btn-primary">Settings</button>
					<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
					</button>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
					  <a class="dropdown-item" href="javascript:;">Another action</a>
					  <a class="dropdown-item" href="javascript:;">Something else here</a>
					  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
					</div>
				  </div>
				</div>
			  </div>
			  <!--end breadcrumb-->

			  <div class="card">
				<div class="card-body">
				  <div class="row align-items-center">
							<div class="col-lg-3 col-xl-2">
							  <a href="javascript:;" class="btn btn-primary mb-3 mb-lg-0"><i class="bi bi-plus-square-fill"></i>Add Product</a>
							</div>
							<div class="col-lg-9 col-xl-10">
							  <form class="float-lg-end">
								<div class="row row-cols-lg-auto g-2">
								  <div class="col-12">
									<a href="javascript:;" class="btn btn-light mb-3 mb-lg-0"><i class="bi bi-download"></i>Export</a>
								  </div>
								  <div class="col-12">
									<a href="javascript:;" class="btn btn-light mb-3 mb-lg-0"><i class="bi bi-upload"></i>Import</a>
								  </div>
								</div>
							  </form>
							</div>
				  </div>
				</div>
			  </div>


  
				<div class="row">
					<form method="post" action="{{ route('blog-update') }}" >
						@csrf
						<input type="hidden" name="id" value="{{ $blogpost->id }}">
					  <div class="row">
				   <div class="col-lg-12 mx-auto">
					<div class="card">
					  <div class="card-header py-3 bg-transparent"> 
						<div class="d-sm-flex align-items-center">
						  <h5 class="mb-2 mb-sm-0">Edit Blog Post</h5>
						  <div class="ms-auto">
							<input type="submit" class="btn btn-secondary" value="Update Post ">
							{{-- <button type="submit" class="btn btn-primary" >Publish Now</button> --}}
						  </div>
						</div>
					   </div>
					  <div class="card-body">
						 <div class="row g-3">
							
						   <div class="col-12 col-lg-12">
							  <div class="card shadow-none bg-light border">
								<div class="card-body">
								  <div class="row g-3">
									<div class="col-12 col-lg-3">
									  <label class="form-label">BlogCategory Select <span class="text-danger">*</span></label>
									  	<div class="input-group">
											<select name="category_id" class="single-select form-select  form-control" required="" >
												<option value="" selected="" disabled="">Select category</option>
												@foreach($blogcategory as $category)
												 <option value="{{ $category->id }}" {{ $category->id == $blogpost->category_id ? 'selected': '' }} >{{ $category->blog_category_name_en }}</option>	
												@endforeach
											</select>
											<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
											</button>
											@error('category_id') 
												<span class="text-danger">{{ $message }}</span>
											@enderror 
										</div>
									</div>
									 

									  <div class="col-12 col-lg-3">
										<label class="form-label">Post Title    En <span class="text-danger">*</span></label>
										<input type="text" name="post_title_en" class="form-control"  placeholder="post_title_en" required="" value="{{ $blogpost->post_title_en }}">
										@error('post_title_en') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-3">
										<label class="form-label">Post Title  hin <span class="text-danger">*</span></label>
										<input type="text" name="post_title_hin" class="form-control"  placeholder="post_title_hin" required="" value="{{ $blogpost->post_title_hin }}">
										@error('post_title_hin') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>
 
									  
 
{{-- 
									 <div class="col-12 col-lg-6">
										<label class="form-label">Short Description English  </label>
										<textarea name="short_descp_en" id="editor2" class="form-control"   placeholder="Textarea text" rows="4" cols="4" required="">{!! $blogpost->short_descp_en !!}</textarea>
									 </div>
									
									 <div class="col-12 col-lg-6">
										<label class="form-label">Short Description Hindi  </label>
										<textarea name="short_descp_hin" id="editor4" class="form-control"  placeholder="Textarea text" rows="4" cols="4" >{!! $blogpost->short_descp_hin !!}</textarea>
									 </div> --}}


									 <div class="col-12 col-lg-6">
										<label class="form-label">Post Details English  </label>
										<textarea id="editor1" name="post_details_en"  class="form-control"   placeholder="Textarea text" rows="4" cols="4" required="">{!! $blogpost->post_details_en !!}</textarea>
									 </div>
									
									 <div class="col-12 col-lg-6">
										<label class="form-label">LoPostng Details Hindi  </label>
										<textarea  id="editor3" name="post_details_hin"  class="form-control"  placeholder="Textarea text" rows="4" cols="4" >{!! $blogpost->post_details_hin !!}</textarea>
									 </div> 

								  </div>
								 
								</div>
							  </div>
						   </div>
 						
						  
  
						 </div><!--end row-->
					   </div>
					  </div>
				   </div>
				  </form> 

		<!-- ///////////////// Start Multiple Image Update Area ///////// -->

	 

 <section class="content">
	<div class="row">

   <div class="col-md-12">
			   <div class="box bt-3 border-info">
				 <div class="box-header">
					<h6 class="mb-0 text-uppercase">Product Multiple Image <strong>Update</strong></h6>
					<div class="my-3 border-top"></div>
				 </div>

		   
	   <form method="post" action="{{ route('update-blog-image') }}" enctype="multipart/form-data">
	   @csrf
		   <div class="row row-sm">
			   @foreach($multiImgs as $img)
			   <div class="col-md-3">

					   <div class="card ">
					   <img src="{{ asset($img->photo_name) }}" class="card-img-top" style="height: auto; width: 180px; align:center;">
					   <div class="card-body">
						   <h5 class="card-title">
					   <a href="{{ route('blog.multiimg.delete',$img->id) }}" class="btn btn-sm btn-danger" id="delete" title="Delete Data"><i class="bi bi-trash-fill"></i> </a>
						   </h5>
						   <p class="card-text"> 
							   <div class="form-group">
								   <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
								   <input class="form-control" type="file" name="multi_img[{{ $img->id }}]">
							   </div> 
						   </p>
					   
					   </div>
					   </div> 		
			   
			   </div><!--  end col md 3		 -->	
			   @endforeach

		   </div>			

		   <div class="text-xs-right">
		   <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
				   </div>
		   <br><br>



	   </form>		   





			   </div>
			 </div>


		
	</div> <!-- // end row  -->
	
</section>
 
	   <!-- ///////////////// End Start Multiple Image Update Area ///////// -->


	   

   <!-- ///////////////// Start Thambnail Image Update Area ///////// -->

<section class="content">
	<div class="row">

   <div class="col-md-12">
			   <div class="box bt-3 border-info">
				 <div class="box-header">
		<h4 class="box-title">Product Main Image <strong>Update</strong></h4>
				 </div>

		   
	   <form method="post" action="{{ route('update-blog-thambnail') }}" enctype="multipart/form-data">
	   @csrf

	<input type="hidden" name="id" value="{{ $blogpost->id }}">
   <input type="hidden" name="old_img" value="{{ $blogpost->post_image }}">

		   <div class="row row-sm">
				
			   <div class="col-md-3">

<div class="card">
 <img src="{{ asset($blogpost->post_image) }}" class="card-img-top" style="height: auto; width: 280px;">
 <div class="card-body">
	
   <p class="card-text"> 
	   <div class="form-group">
		   <label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
   <input type="file" name="post_image" class="form-control" onChange="mainThamUrl(this)"  >
	<img src="" id="mainThmb">
	   </div> 
   </p>
  
 </div>
</div> 		
			   
			   </div><!--  end col md 3		 -->	
				

		   </div>			

		   <div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
		</div>
<br><br>



	   </form>		   





			   </div>
			 </div>


		
	</div> <!-- // end row  -->
	
</section>
<!-- ///////////////// End Start Thambnail Image Update Area ///////// -->




				</div><!--end row-->  
				
{{-- new --}} 
			
 
 <script type="text/javascript">
	$(document).ready(function() {
	  $('select[name="category_id"]').on('change', function(){
		  var category_id = $(this).val();
		  if(category_id) {
			  $.ajax({
				  url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
				  type:"GET",
				  dataType:"json",
				  success:function(data) {
					  $('select[name="subsubcategory_id"]').html('');
					 var d =$('select[name="subcategory_id"]').empty();
						$.each(data, function(key, value){
							$('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
						});
				  },
			  });
		  } else {
			  alert('danger');
		  }
	  });



$('select[name="subcategory_id"]').on('change', function(){
		  var subcategory_id = $(this).val();
		  if(subcategory_id) {
			  $.ajax({
				  url: "{{  url('/category/sub-subcategory/ajax') }}/"+subcategory_id,
				  type:"GET",
				  dataType:"json",
				  success:function(data) {
					 var d =$('select[name="subsubcategory_id"]').empty();
						$.each(data, function(key, value){
							$('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');
						});
				  },
			  });
		  } else {
			  alert('danger');
		  }
	  });


  });
  </script>


<script type="text/javascript">
  function mainThamUrl(input){
	  if (input.files && input.files[0]) {
		  var reader = new FileReader();
		  reader.onload = function(e){
			  $('#mainThmb').attr('src',e.target.result).width(80).height(80);
		  };
		  reader.readAsDataURL(input.files[0]);
	  }
  }	
</script>


<script>

$(document).ready(function(){
 $('#multiImg').on('change', function(){ //on file input change
	if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
	{
		var data = $(this)[0].files; //this file data
		 
		$.each(data, function(index, file){ //loop though each file
			if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
				var fRead = new FileReader(); //new filereader
				fRead.onload = (function(file){ //trigger function on successful read
				return function(e) {
					var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
				.height(80); //create image element 
					$('#preview_img').append(img); //append image to output element
				};
				})(file);
				fRead.readAsDataURL(file); //URL representing the file's data.
			}
		});
		 
	}else{
		alert("Your browser doesn't support File API!"); //if File API is absent
	}
 });
});
 
</script>




@endsection