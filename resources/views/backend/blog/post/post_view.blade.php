


 
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
					  <li class="breadcrumb-item active" aria-current="page">Add Blog Post</li>
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
  
				<div class="row">
					<form method="post" action="{{ route('post-store') }}" enctype="multipart/form-data" >
						@csrf
				   <div class="col-lg-12 mx-auto">
					<div class="card">
					  <div class="card-header py-3 bg-transparent"> 
						<div class="d-sm-flex align-items-center">
						  <h5 class="mb-2 mb-sm-0">Add New post</h5>
						  <div class="ms-auto">
							<input type="submit" class="btn btn-primary" value="Add Post">
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
									 
									<div class="col-12 col-lg-4">
										<label class="form-label">BlogCategory Select <span class="text-danger">*</span></label>
										<div class="input-group">
											<select name="category_id" class="single-select form-select form-control"  >
												<option value="" selected="" disabled="">Select Blog Category</option>
												@foreach($blogcategory as $category)
														<option value="{{ $category->id }}">{{ $category->blog_category_name_en }}</option>	
												@endforeach
											</select>
											<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
											</button>
											@error('category_id') 
												<span class="text-danger">{{ $message }}</span>
											@enderror 
										</div>
									  </div>

							 

									  <div class="col-12 col-lg-4">
										<label class="form-label">Post Title En <span class="text-danger">*</span></label>
										<input type="text" name="post_title_en" class="form-control"  placeholder="post_title_en" >
										@error('post_title_en') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">Post Title hin <span class="text-danger">*</span></label>
										<input type="text" name="post_title_hin" class="form-control"  placeholder="post_title_hin" >
										@error('post_title_hin') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>
 
									 
									 <div class="col-12 col-lg-6">
										<label class="form-label">  Post  Main Image     <span class="text-danger">*</span></label>
										<input type="file" name="post_image" class="form-control" onChange="mainThamUrl(this)"   placeholder="post_image" >
										@error('post_image') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
										
									 </div>
									 <div class="col-12 col-lg-6">
										<img src="" id="mainThmb">
									 </div>

									 <div class="col-12 col-lg-6">
										<label class="form-label">    Multiple Image       <span class="text-danger">*</span></label>
										<input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg"  placeholder="Multiple Image" >
										@error('product_tmulti_imghambnail') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-6">
										<div class="row" id="preview_img"></div>
									 </div>

									 {{-- <div class="col-12 col-lg-6">
										<label class="form-label">    Multiple Image       <span class="text-danger">*</span></label>
										<input type="file" name="multi_img[]" class="form-control" multiple="" id="multiImg"  placeholder="Multiple Image" >
										@error('product_tmulti_imghambnail') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-6">
										<div class="row" id="preview_img"></div>
									 </div> --}}

									 


									 <div class="col-12 col-lg-6">
										<label class="form-label">Post Details English  </label>
										<textarea id="editor1" name="post_details_en"  class="form-control"   placeholder="Textarea text" rows="4" cols="4" ></textarea>
									 </div>
									
									 <div class="col-12 col-lg-6">
										<label class="form-label">Post Details Hindi  </label>
										<textarea  id="editor2" name="post_details_hin"  class="form-control"  placeholder="Textarea text" rows="4" cols="4" ></textarea>
									 </div>

									  

									  {{-- <div class="col-12 col-lg-4 ">
										<label class="form-label">Digital Product     <span class="text-danger">pdf,xlx,csv*</span></label>
										<input type="file" name="file"  class="form-control" >
									  </div> --}}

								  </div>
								 
								</div>
							  </div>
						   </div>
 						
						  
  
						 </div><!--end row-->
					   </div>
					  </div>
				   </div>
				  </form> 
				</div>
				<!--end row-->   

 
				{{-- <div class="mb-3">
					<label class="form-label">Select2 Input Group Apend</label>
					<div class="input-group">
						<select class="single-select form-select">
							<option selected>Last Visit</option>
							<option value="1">Dashboard</option>
							<option value="2">Control</option>
							<option value="3">KPI</option>
							<option value="3">Map</option>
							<option value="3">Billing Product</option>
						</select>
						<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
						</button>
					</div>
				</div> --}}


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