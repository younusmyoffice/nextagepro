
 



@extends('admin.admin_master')
@section('admin')

           <!--breadcrumb-->
				            <!--breadcrumb-->
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                      <div class="breadcrumb-title pe-3">eCommerce</div>
                      <div class="ps-3">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">All reports</li>
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
                        <div class="card-header py-3">
                          <h6 class="mb-0">ALL Reports</h6>
                        </div>
                        <div class="card-body">
                           <div class="row">
							<div class="col-12 col-lg-4 d-flex">
								<div class="card border shadow-none w-100">
								  <div class="card-body">
									<form class="row g-3" method="POST" action="{{route('search-by-date')}}">
									 @csrf 
									 <div class="col-12">
										<label class="form-label">Search By Date</label>
										<input type="date" class="result form-control"  id="time" name="date" placeholder=" Date" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
									 </div>
									  
							   
											 @error('date')
												 
												 <div class="text-danger">{{$message}}</div>
												 
											 @enderror
 
									 <div class="col-12">
										   <div class="d-grid"> 
											 <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">					 
										  
										   </div>
									 </div>
									</form>
								  </div>
								</div>
							  </div>

							  <div class="col-12 col-lg-4 d-flex">
								<div class="card border shadow-none w-100">
								  <div class="card-body">
									<form class="row g-3" method="POST" action="{{route('search-by-month')}}">
									 @csrf 
										<div class="col-12">
											<label class="form-label">Select Month</label>
											<div class="input-group">
											
												
												<select name="month" class="single-select form-select  form-control"  >
														<option value="" selected="" disabled="">Choose Month</option>
														<option value="January">January</option>
														<option value="February">February</option>
														<option value="March">March</option>
														<option value="April">April</option>
														<option value="May">May</option>
														<option value="Jun">Jun</option>
														<option value="July">July</option>
														<option value="August">August</option>
														<option value="September">September</option>
														<option value="October">October</option>
														<option value="November">November</option>
														<option value="December">December</option> 
												</select>
												<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
												</button>
											</div>
											
											@error('month') 
												<span class="text-danger">{{ $message }}</span>
											@enderror 
										</div>
										<div class="col-12">
											<label class="form-label">Select Year</label>
											<div class="input-group">
												
												<select name="year_name" class="single-select form-select  form-control"  >
														<option value="" selected="" disabled="">Choose Year</option>
	 
														<option value="2020">2020</option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
														<option value="2026">2026</option> 
												</select>
												<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
												</button>
											</div>
											
											@error('year_name') 
												<span class="text-danger">{{ $message }}</span>
											@enderror 	
										</div>




										<div class="col-12">
										   <div class="d-grid"> 
											 <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">					 
										  
										   </div>
									 </div>
									</form>
								  </div>
								</div>
							  </div>

							  <div class="col-12 col-lg-4 d-flex">
								<div class="card border shadow-none w-100">
								  <div class="card-body">
									<form class="row g-3" method="POST" action="{{route('search-by-year')}}">
									 @csrf 
										<div class="col-12"> 
											<label class="form-label">Select Year</label>
											<div class="input-group">
												
												<select name="year" class="single-select form-select  form-control"  >
														<option value="" selected="" disabled="">Choose year</option>
														<option value="2020">2020</option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
														<option value="2025">2025</option>
														<option value="2026">2026</option> 
												</select>
												<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
												</button>
											</div>
											@error('year') 
												<span class="text-danger">{{ $message }}</span>
											@enderror 	
										</div>




										<div class="col-12">
										<div class="d-grid"> 
											<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">					 
										
										</div>
									</div>
									</form>
								  </div>
								</div>
							  </div>

                             
                           </div><!--end row-->
                        </div>
                      </div>


                      {{--  --}}
				{{-- <h6 class="mb-0 text-uppercase">DataTable Import</h6> --}}



@endsection