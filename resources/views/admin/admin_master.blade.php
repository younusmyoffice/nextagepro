<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('backend/admin_assets/assets/images/favicon-32x32.png')}}" type="image/png" />
  <!--plugins-->
  <link href="{{asset('backend/admin_assets/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/admin_assets/assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/plugins/input-tags/css/tagsinput.css')}}" rel="stylesheet" />
  
  <!-- Bootstrap CSS -->
  <link href="{{asset('backend/admin_assets/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  
  {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> --}}
  <link href="{{asset('backend/admin_assets/assets/css/toastr.css')}}" rel="stylesheet" />
  <!-- loader-->
	<link href="{{asset('backend/admin_assets/assets/css/pace.min.css')}}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{asset('backend/admin_assets/assets/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/css/light-theme.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/css/header-colors.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/admin_assets/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />




  <!--plugins-->

  <link href="{{asset('backend/admin_assets/assets/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/admin_assets/assets/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/admin_assets/assets/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>NextAge Nutrition</title>
</head>

<body>


  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    <header class="top-header">        
      
        @include('admin.body.header')

    </header>
     <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
         
        @include('admin.body.sidebar')

       </aside>
       <!--end sidebar -->

       <!--start content-->
          <main class="page-content">
              
           @yield('admin')


          </main>
       <!--end page main-->

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

       <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
       <!--End Back To Top Button-->

       <!--start switcher-->
       <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
          <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <h6 class="mb-0">Theme Variation</h6>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
              <label class="form-check-label" for="LightTheme">Light</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
              <label class="form-check-label" for="DarkTheme">Dark</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
              <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
            </div>
            <hr>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
              <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
            </div>
            <hr/>
            <h6 class="mb-0">Header Colors</h6>
            <hr/>
            <div class="header-colors-indigators">
              <div class="row row-cols-auto g-3">
                <div class="col">
                  <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                  <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
       <!--end switcher-->

  </div>
  <!--end wrapper-->


  

  <!-- Bootstrap bundle JS -->
  <script src="{{asset('backend/admin_assets/assets/js/bootstrap.bundle.min.js')}}"></script>
  <!--plugins-->
  <script src="{{asset('backend/admin_assets/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/js/pace.min.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/plugins/chartjs/js/Chart.min.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/plugins/chartjs/js/Chart.extension.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
  <!--app-->
  <script src="{{asset('backend/admin_assets/assets/js/app.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/js/index2.js')}}"></script>
  <script>
    new PerfectScrollbar(".best-product")
 </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

 

  <script src="{{asset('backend/admin_assets/assets/plugins/datetimepicker/js/legacy.js')}}"></script>
	<script src="{{asset('backend/admin_assets/assets/plugins/datetimepicker/js/picker.js')}}"></script>
	<script src="{{asset('backend/admin_assets/assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
	<script src="{{asset('backend/admin_assets/assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
	<script src="{{asset('backend/admin_assets/assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
	<script src="{{asset('backend/admin_assets/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/js/form-date-time-pickes.js')}}"></script>




<script>
      @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('message') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
               toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
      @endif
   </script>  
   <script src="{{asset('backend/admin_assets/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('backend/admin_assets/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
   <script src="{{asset('backend/admin_assets/assets/js/table-datatable.js')}}"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   {{-- <script type="text/javascript">
    $(function(){
      $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

                  Swal.fire({
                  title: "Are you sure?",
                  text: "You won't be able to revert this!",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#3085d6",
                  cancelButtonColor: "#d33",
                  confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                  if (result.isConfirmed) {
                    Swal.fire("Deleted!", "Your file has been deleted.", "success");
                  }
                });   
      });
    });

  </script> --}}
  <script src="{{asset('backend/admin_assets/assets/plugins/select2/js/select2.min.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/js/form-select2.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/plugins/input-tags/js/tagsinput.js')}}"></script>
  <script src="{{asset('backend/admin_assets/assets/js/ckeditor.js')}}"></script>
  {{-- <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script> --}}
  <script src="{{ asset('backend/admin_assets/assets/js/code.js') }}"></script>
	
	
  <script>
    ClassicEditor
            .create( document.querySelector( '#editor1' ) )
            .then( editor1 => {
                    console.log( editor1 );
            } )
            .catch( error => {
                    console.error( error );
            } );
  </script>
    <script>
      ClassicEditor
              .create( document.querySelector( '#editor2' ) )
              .then( editor2 => {
                      console.log( editor2 );
              } )
              .catch( error => {
                      console.error( error );
              } );
    </script>
    <script>
      ClassicEditor
              .create( document.querySelector( '#editor3' ) )
              .then( editor3 => {
                      console.log( editor3 );
              } )
              .catch( error => {
                      console.error( error );
              } );
    </script>
    <script>
      ClassicEditor
              .create( document.querySelector( '#editor4' ) )
              .then( editor4 => {
                      console.log( editor4 );
              } )
              .catch( error => {
                      console.error( error );
              } );
    </script>





    
  </body>

</html>