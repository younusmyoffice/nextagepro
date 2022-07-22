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
					  <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
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
					<form method="post" action="{{ route('product-store') }}" enctype="multipart/form-data" >
						@csrf
				   <div class="col-lg-12 mx-auto">
					<div class="card">
					  <div class="card-header py-3 bg-transparent"> 
						<div class="d-sm-flex align-items-center">
						  <h5 class="mb-2 mb-sm-0">Add New Product</h5>
						  <div class="ms-auto">
							<input type="submit" class="btn btn-secondary" value="Add Product">
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
									  <label class="form-label">Brand Select <span class="text-danger">*</span></label>
									  	<div class="input-group">
											<select name="brand_id" class="single-select form-select  form-control"  >
													<option value="" selected="" disabled="">Select Brand</option>
													@foreach($brands as $brand)
														<option value="{{ $brand->id }}">{{ $brand->brand_name_en }}</option>	
													@endforeach
											</select>
											<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
											</button>
											@error('brand_id') 
												<span class="text-danger">{{ $message }}</span>
											@enderror 
										</div>
									</div>
									<div class="col-12 col-lg-4">
										<label class="form-label">Category Select <span class="text-danger">*</span></label>
										<div class="input-group">
											<select name="category_id" class="single-select form-select form-control"  >
												<option value="" selected="" disabled="">Select Category</option>
												@foreach($categories as $category)
														<option value="{{ $category->id }}">{{ $category->category_name_en }}</option>	
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
										<label class="form-label">SubCategory Select <span class="text-danger">*</span></label>
										<div class="input-group">
											<select name="subcategory_id" class="single-select form-select form-control"  >
												<option value="" selected="" disabled="">Select SubCategory</option> 
											
											</select>
											@error('subcategory_id') 
												<span class="text-danger">{{ $message }}</span>
											@enderror 
											<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
											</button>
										</div>
									  </div>

									  <div class="col-12 col-lg-4">
										
										<label class="form-label">SubSubCategory Select <span class="text-danger">*</span></label>
										<div class="input-group">
											<select name="subsubcategory_id" class="single-select form-select form-control"  >
												<option value="" selected="" disabled="">Select SubSubCategory</option>
											
											</select>
											@error('subsubcategory_id') 
												<span class="text-danger">{{ $message }}</span>
											@enderror 
											<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
											</button>
										</div>
									  </div>

									  <div class="col-12 col-lg-4">
										<label class="form-label">Product Name En <span class="text-danger">*</span></label>
										<input type="text" name="product_name_en" class="form-control"  placeholder="product_name_en" >
										@error('product_name_en') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">Product Name hin <span class="text-danger">*</span></label>
										<input type="text" name="product_name_hin" class="form-control"  placeholder="product_name_hin" >
										@error('product_name_hin') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>
 
									 <div class="col-12 col-lg-4">
										
										<label class="form-label">Product Tags En <span class="text-danger">*</span></label>
										<input type="text" name="product_tags_en" class="form-control " data-role="tagsinput" value=""  >
										@error('product_tags_en') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>
									 
									 <div class="col-12 col-lg-4">
										<label class="form-label">Product Tags hin <span class="text-danger">*</span></label>
										<input type="text" name="product_tags_hin" class="form-control"data-role="tagsinput" value="" >
										@error('product_tags_hin') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">Product size En <span class="text-danger">*</span></label>
										<input type="text" name="product_size_en" class="form-control" data-role="tagsinput" value=""   placeholder="product_size_en" >
										@error('product_size_en') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">Product size hin <span class="text-danger">*</span></label>
										<input type="text" name="product_size_hin" class="form-control" data-role="tagsinput" value=""   placeholder="product_size_hin" >
										@error('product_size_hin') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">Product Color En <span class="text-danger">*</span></label>
										<input type="text" name="product_color_en" class="form-control" data-role="tagsinput" value=""   placeholder="product_color_en" >
										@error('product_color_en') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">Product Color hin <span class="text-danger">*</span></label>
										<input type="text" name="product_color_hin" class="form-control" data-role="tagsinput" value=""   placeholder="product_color_hin" >
										@error('product_color_hin') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-3">
										<label class="form-label">Product Code <span class="text-danger">*</span></label>
										<input type="text" name="product_code" class="form-control"  placeholder="product_code" >
										@error('product_code') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-3">
										<label class="form-label">Product Quantity <span class="text-danger">*</span></label>
										<input type="text" name="product_qty" class="form-control"  placeholder="product_qty" >
										@error('product_qty') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-3">
										<label class="form-label">Product Selling Price     <span class="text-danger">*</span></label>
										<input type="text" name="selling_price" class="form-control"  placeholder="selling_price" >
										@error('selling_price') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>


									 <div class="col-12 col-lg-3">
										<label class="form-label">Product Discount Price     <span class="text-danger">*</span></label>
										<input type="text" name="discount_price" class="form-control"  placeholder="discount_price" >
										@error('discount_price') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-6">
										<label class="form-label">    Main Thambnail     <span class="text-danger">*</span></label>
										<input type="file" name="product_thambnail" class="form-control" onChange="mainThamUrl(this)"   placeholder="product_thambnail" >
										@error('product_thambnail') 
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

									 <div class="col-12 col-lg-6">
										<label class="form-label">Short Description English  </label>
										<textarea name="short_descp_en" id="textarea" class="form-control"   placeholder="Textarea text" rows="4" cols="4" ></textarea>
									 </div>
									
									 <div class="col-12 col-lg-6">
										<label class="form-label">Short Description Hindi  </label>
										<textarea name="short_descp_hin" id="textarea" class="form-control"  placeholder="Textarea text" rows="4" cols="4" ></textarea>
									 </div>


									 <div class="col-12 col-lg-6">
										<label class="form-label">Long Description English  </label>
										<textarea id="editor1" name="long_descp_en"  class="form-control"   placeholder="Textarea text" rows="4" cols="4" ></textarea>
									 </div>
									
									 <div class="col-12 col-lg-6">
										<label class="form-label">Long Description Hindi  </label>
										<textarea  id="editor2" name="long_descp_hin"  class="form-control"  placeholder="Textarea text" rows="4" cols="4" ></textarea>
									 </div>

									 <div class="col-12 col-lg-4 form-check">
										<fieldset>
											<input class="form-check-input" type="checkbox" id="checkbox_2" name="hot_deals" value="1">
											<label class="form-check-label" for="checkbox_2">Hot Deals</label>
										</fieldset>
										<fieldset>
											<input class="form-check-input" type="checkbox" id="checkbox_3" name="featured" value="1">
											<label class="form-check-label" for="checkbox_3">  Featured</label>
										</fieldset>
									  </div>

									  <div class="col-12 col-lg-4 form-check">
										<fieldset>
											<input class="form-check-input" type="checkbox" id="checkbox_4" name="special_offer" value="1">
											<label class="form-check-label" for="checkbox_4">Special offer</label>
										</fieldset>
										<fieldset>
											<input class="form-check-input" type="checkbox" id="checkbox_5" name="featured" value="1">
											<label class="form-check-label" for="checkbox_5">  Special Deals</label>
										</fieldset>
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
				</div><!--end row-->   

 
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