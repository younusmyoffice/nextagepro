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
                            <li class="breadcrumb-item active" aria-current="page">Contact  <span class="badge rounded-pill bg-warning text-dark"> {{ count($contact) }}</span></li>
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
                          <h6 class="mb-0">View all Queries</h6>
                        </div>
                        <div class="card-body">
                           <div class="row">
       
                             <div class="col-12 col-lg-12 d-flex">
                              <div class="card border shadow-none w-100">
                                <div class="card-body">
                                  <div class="table-responsive">
                                     <table id="example2"  class="table align-middle">
                                          <thead>
                                            <tr>
                                              <th>Sl No</th>
                                              <th>Name</th>
                                              <th>Phone</th>
                                              <th>Email</th>
                                              <th>Message</th>
                                              
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($contact as $item)
                                            
                                                <tr>
                                                  <td>{{$item->id}}</td>
                                                  <td>{{$item->name}}</td>
                                                  <td>{{$item->phone}}</td>
                                                  <td>{{$item->email}}</td>
                                                  <td>{{$item->message}}</td>
                                                   
                                                
                                                </tr>
                                            @endforeach
                                          </tbody>
                                          <tfoot>
                                            <tr>
                                                <th>Sl No</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                            </tr>
                                          </tfoot>
                                          
                                     </table>
                                  </div>
                               
                                </div>
                              </div>
                            </div>
                           </div><!--end row-->
                        </div>
                      </div>


                      {{--  --}}
				{{-- <h6 class="mb-0 text-uppercase">DataTable Import</h6> --}}



@endsection