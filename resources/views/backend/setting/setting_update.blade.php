

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
					  <li class="breadcrumb-item active" aria-current="page">Site Setting Page  </li>
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
					<form method="post" action="{{ route('update.sitesetting') }}" enctype="multipart/form-data" >
						@csrf


	 				<input type="hidden" name="id" value="{{ $setting->id }}">

				   <div class="col-lg-12 mx-auto">
					<div class="card">
					  <div class="card-header py-3 bg-transparent"> 
						<div class="d-sm-flex align-items-center">
						  <h5 class="mb-2 mb-sm-0">Update Setting </h5>
						  <div class="ms-auto">
							<input type="submit" class="btn btn-secondary" value="Update">
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
										<label class="form-label">    Site Logo     <span class="text-danger">*</span></label>
										<input type="file" name="logo" class="form-control" onChange="mainThamUrl(this)"   placeholder="product_thambnail" >
										@error('product_thambnail') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
										
									 </div>

									  <div class="col-12 col-lg-4">
										<label class="form-label">Phone One <span class="text-danger">*</span></label>
										<input type="text" name="phone_one" class="form-control"    value="{{ $setting->phone_one }}" >
										@error('phone_one') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">Phone Two <span class="text-danger">*</span></label>
										<input type="text" name="phone_two" class="form-control"     value="{{ $setting->phone_two }}">
										@error('phone_two') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>
 
									 <div class="col-12 col-lg-4">
										
										<label class="form-label">    Email <span class="text-danger">*</span></label>
										<input type="email" name="email" class="form-control " value="{{$setting->email }}"  >
										@error('product_tags_en') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>
									 
									 <div class="col-12 col-lg-4">
										<label class="form-label">    Company Name <span class="text-danger">*</span></label>
										<input type="text" name="company_name" class="form-control"  value="{{ $setting->company_name }}" >
										@error('product_tags_hin') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">    Company Address <span class="text-danger">*</span></label>
										<input type="text" name="company_address" class="form-control" value="{{ $setting->company_address }}" >
										@error('product_tags_hin') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">    Facebook <span class="text-danger">*</span></label>
										<input type="text" name="facebook" class="form-control"value="{{ $setting->facebook }}"   >
										@error('product_size_en') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">Twitter <span class="text-danger">*</span></label>
										<input type="text" name="twitter" class="form-control"  value="{{ $setting->twitter }}" >
										@error('product_size_hin') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">Linkedin     <span class="text-danger">*</span></label>
										<input type="text" name="linkedin" class="form-control"  value="{{ $setting->linkedin }}"    >
										@error('product_color_en') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
									 </div>

									 <div class="col-12 col-lg-4">
										<label class="form-label">Youtube <span class="text-danger">*</span></label>
										<input type="text" name="youtube" class="form-control"  value="{{ $setting->youtube }}" >
										@error('product_color_hin') 
											<span class="text-danger">{{ $message }}</span>
										@enderror 
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




