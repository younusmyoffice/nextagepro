
@extends('frontend.master')
@section('content')

@section('title')
Order Traking Page 
@endsection

<style type="text/css">
/* 	
	body {
     background-color: #eeeeee;
     font-family: 'Open Sans', serif
 } */

 .container {
     
 }

 .card {
     position: relative;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-orient: vertical;
     -webkit-box-direction: normal;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid rgba(0, 0, 0, 0.1);
     border-radius: 0.10rem
 }

 .card-header:first-child {
     border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
 }

 .card-header {
     padding: 0.75rem 1.25rem;
     margin-bottom: 0;
     background-color: #fff;
     border-bottom: 1px solid rgba(0, 0, 0, 0.1)
 }

 .track {
     position: relative;
     background-color: #ddd;
     height: 7px;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     margin-bottom: 60px;
     margin-top: 50px
 }

 .track .step {
     -webkit-box-flex: 1;
     -ms-flex-positive: 1;
     flex-grow: 1;
     width: 25%;
     margin-top: -18px;
     text-align: center;
     position: relative
 }

 .track .step.active:before {
     background: #15d247
 }

 .track .step::before {
     height: 7px;
     position: absolute;
     content: "";
     width: 100%;
     left: 0;
     top: 18px
 }

 .track .step.active .icon {
     background: #15d247;
     color: #fff
 }

 .track .icon {
     display: inline-block;
     width: 40px;
     height: 40px;
     line-height: 40px;
     position: relative;
     border-radius: 100%;
     background: #ddd
 }

 .track .step.active .text {
     font-weight: 400;
     color: #000
 }

 .track .text {
     display: block;
     margin-top: 7px
 }

 .itemside {
     position: relative;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     width: 100%
 }

 .itemside .aside {
     position: relative;
     -ms-flex-negative: 0;
     flex-shrink: 0
 }

 .img-sm {
     width: 80px;
     height: 80px;
     padding: 7px
 }

 ul.row,
 ul.row-sm {
     list-style: none;
     padding: 0
 }

 .itemside .info {
     padding-left: 15px;
     padding-right: 7px
 }

 .itemside .title {
     display: block;
     margin-bottom: 5px;
     color: #15d247
 }

 p {
     margin-top: 0;
     margin-bottom: 1rem
 }

 .btn-warning {
     color: #ffffff;
     background-color: #15d247;
     border-color: #15d247;
     border-radius: 1px
 }

 .btn-warning:hover {
     color: #ffffff;
     background-color: #15d247;
     border-color: #15d247;
     border-radius: 1px
 }


</style>
 


 
 

{{-- ---------- --}}
<main class="main">

    <div style="  box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;   border: 1px solid White;border-left: 6px solid red;border-bottom: 2px solid red;">
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href=" {{url('/')}}"><i class="d-icon-home"></i></a></li>
                    <li><a href=""> Track Order</a></li>
                    <li>My Account</li>
                 </ul>
            </div>
        </nav>
    </div><br>
    
    <div class="page-header pl-4 pr-4" style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }})">
        <h3 class="page-subtitle font-weight-bold"> </h3>
        <h1 class="page-title font-weight-bold lh-1 text-white text-capitalize">My Orders / Tracking   </h1>
        <p class="page-desc text-white mb-0"> Track your order </p>
    </div>
    <div class="page-content mt-10 pt-10">





        <section class="brand-section grey-section pt-10 pb-10 appear-animate">
            <div class="container mt-8 mb-10">


                
    <article class="card" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;">
        <header class="card-header"> <b> My Orders / Tracking </b> </header>
        <div class="card-body">
           
     <div class="row" style="margin-left: 30px; margin-top: 20px;">
     	<div class="col-md-2">
     		<b style="color: rgb(119, 0, 0)"> Invoice Number </b><br>
     		{{ $track->invoice_no }}
     	</div> <!-- // end col md 2 -->

     	<div class="col-md-2">
     	<b style="color: rgb(119, 0, 0)"> Order Date </b><br>
     		{{ $track->order_date }}
     	</div> <!-- // end col md 2 -->

     	<div class="col-md-2">
     		<b style="color: rgb(119, 0, 0)"> Shipping to - {{ $track->name }} </b><br>
      {{ $track->division->division_name ??'' }} / {{ $track->district->district_name ??''}}
     	</div> <!-- // end col md 2 -->

     	<div class="col-md-2">
     		<b style="color: rgb(119, 0, 0)"> User Mobile Number </b><br>
     		{{ $track->phone }}
     	</div> <!-- // end col md 2 -->

     	<div class="col-md-2">
     	<b style="color: rgb(119, 0, 0)"> Payment Method  </b><br>
     		{{ $track->payment_method  }}
     	</div> <!-- // end col md 2 -->

     	<div class="col-md-2">
     		<b style="color: rgb(119, 0, 0)"> Total Amount  </b><br>
     		₹ {{ $track->amount  }}
     	</div> <!-- // end col md 2 -->
     	
     </div> <!-- // end row   -->     








            <div class="track">

     @if($track->status == 'pending')

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Pending</span> </div>


<div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Confirmed</span> </div>

    <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Processing  </span> </div>

    <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Picked</span> </div>

    <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Shipped </span> </div>

     <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Delivered </span> </div>



  @elseif($track->status == 'confirm')

  <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Pending</span> </div>

<div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Confirmed</span> </div>

 <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Processing  </span> </div>

    <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Picked</span> </div>

    <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Shipped </span> </div>

     <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Delivered </span> </div>

 @elseif($track->status == 'processing')

  <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Pending</span> </div>

<div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Confirmed</span> </div>

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Processing  </span> </div>

 <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Picked</span> </div>

    <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Shipped </span> </div>

     <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Delivered </span> </div>



 @elseif($track->status == 'picked')

   <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Pending</span> </div>

<div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Confirmed</span> </div>

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Processing  </span> </div>

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Picked</span> </div>

    <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Shipped </span> </div>

     <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Delivered </span> </div>


 @elseif($track->status == 'shipped')

    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Pending</span> </div>

<div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Confirmed</span> </div>

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Processing  </span> </div>

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Picked</span> </div>

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Shipped </span> </div>

   <div class="step"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Delivered </span> </div>

    @elseif($track->status == 'delivered')

  <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Pending</span> </div>

<div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Confirmed</span> </div>

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)"> Order Processing  </span> </div>

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Picked</span> </div>

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Order Shipped </span> </div>

 <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text" style="color: rgb(232, 0, 0)">Delivered </span> </div>

     @endif  


 

            </div> <!-- // end track  -->


            <hr><br><br>
            
            
        </div>
    </article>
            
            </div>
        </section>


        <!-- End Team Section -->
    </div>

   
 

</main>
@endsection
