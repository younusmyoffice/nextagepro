{{-- <x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
                {!! $terms !!}
            </div>
        </div>
    </div>
</x-guest-layout> --}}



@extends('frontend.master')
@section('content')  
<main class="main">
    <div class="page-header"
        style="background-image: url({{ asset('frontend/images/page-header/about-us.png') }}); background-color: #3C63A4;">
        <h3 class="page-subtitle">Terms of Use</h3>
        <h1 class="page-title">Titles</h1>
        <ul class="breadcrumb">
            <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
            <li class="delimiter">/</li>
            <li><a href="element.html">Terms of Use</a></li>
            <li class="delimiter">/</li>
            <li>Terms of Use</li>
        </ul>
    </div>
    <!-- End PageHeader -->
    <div class="page-content">
        <section class="mt-10 pt-8">
            <div class="container">
                <h2 class="title title-center"> Terms of Use</h2>
                <div class="title-desc-container">
                    <p>
                        Nature and Applicability of Terms
                    </p>
                </div>
            </div>
            <figure>
                <img src="{{asset('frontend/images/titles/1.png')}}" width="1903" height="732" alt="heading-woman" />
            </figure>
        </section>
        <div class="container">
            <section class="mt-10 pt-3">
                {{-- <h2 class="title title-center">Various Cross Styles</h2> --}}
                {{-- <div class="title-desc-container"> --}}
                    <p>
                        This website is operated by Nextage Nutrition. Throughout the site, the terms “we”, “us” and “our” refer to musclenutrition.in &  Nextage Nutrition. (Hereafter referred to as “ Nextage Nutrition”). The company offers this website, including all information, tools, and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, privacy policies and notices stated here.

                        By subscribing to, visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be legally bound and abide by the following terms and conditions ( hereinafter referred to as “Terms of Service” or “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.
                        
                        Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.
                        
                    </p>
                {{-- </div> --}}
                <h2 class="title title-sm mt-8 title-line title-underline"><span>Order Acceptance and Fulfillment  </span></h2>
                        <p>
                            Nextage Nutrition reserves the right at any time after the receipt of your order to accept or decline your order for any reason.  Nextage Nutrition reserves the right at any time after receipt of your order, without any prior notice to you, to supply less than the quantity you ordered of any item or not supply an item. In the event, an item is listed at an incorrect price or with incorrect information due to typographical error or error in pricing or product information received from our suppliers.  Nextage Nutrition shall have a right to refuse or cancel any orders placed for the product listed at the incorrect price.

                            We reserve the right to refuse service to anyone for any reason at any time.
                            
                            You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the service is provided, without express written permission by us.
                            
                            Certain products or services may be available exclusively online through the website. These products or services may have limited quantities and are subject to return or exchange only according to our Return Policy.

                            
                        </p>

                        <h2 class="title title-sm mt-8 title-line title-underline"><span>      Accuracy of Billing and Account Information  </span></h2>
                        <p>
                          
                            We reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order. These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e-mail and/or billing address/phone number provided at the time the order was made. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers or distributors.

                            You agree to provide current, complete and accurate purchase and account information for all purchases made at our store. You agree to promptly update your account and other information, including your email address and credit card numbers and expiration dates so that we can complete your transactions and contact you as needed.

                            For more detail, please review our Returns Policy.

                        </p>
                        <h2 class="title title-sm mt-8 title-line title-underline"><span>   User Comments, Feedback and Other Submissions </span></h2>
                        <p>
                          
                           
                            Nextage Nutrition is not responsible for any material submitted to the public areas by you, which include bulletin boards, user feedback, user comments, reviews, or any other public area found on the website. Any material (whether submitted by you or any other user) is not endorsed, reviewed or approved by  Nextage Nutrition.  Nextage Nutrition reserves the right to remove any material submitted or posted by you in public areas, without notice to you.

                            If, at our request, you send certain specific submissions (for example contest entries) or without a request from us you send creative ideas, suggestions, proposals, plans, or other materials, whether online, by email, by postal mail, or otherwise (collectively, ‘comments’), you agree that we may, at any time, without restriction, edit, copy, publish, distribute, translate and otherwise use in any medium any comments that you forward to us. We are and shall be under no obligation (1) to maintain any Comments in confidence; (2) to pay compensation for any Comments; or (3) to respond to any comments.
                            
                            We may, but have no obligation to, monitor, edit or remove content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene or otherwise objectionable or violates any party’s intellectual property or these Terms of Service.
                            
                            You agree that your comments will not violate any right of any third-party, including copyright, trademark, privacy, personality or other personal or proprietary right. You further agree that your comments will not contain libelous or otherwise unlawful, abusive or obscene material, or contain any computer virus or other malware that could in any way affect the operation of the Service or any related website. You may not use a false e-mail address, pretend to be someone other than yourself, or otherwise mislead us or third-parties as to the origin of any comments. You are solely responsible for any comments you make and their accuracy. We take no responsibility and assume no liability for any comments posted by you or any third-party.
 

                        </p>

                 
 
            </section>
            <section class="mt-8">
                {{-- <h2 class="title title-center mb-4">Description With List</h2> --}}
                <div class="font-primary ">
                    {{-- <p class="mb-3">Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent
                        mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu
                        eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                        inceptos himenaeos. Curabitur sodales ligula in libero. Vestibulum lacinia arcu eget
                        nulla. Class aptent taciti sociosqu </p> --}}
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list list-type-check mb-4">
                                <li>Personal Information -

                                    Your submission of personal information through the store is governed by our Privacy Policy. We suggest you view our Privacy Policy provided at the footer of the homepage.
                                    </li>
                                <li>
                                    Indemnification -
                                    You agree to indemnify, defend and hold harmless  Nextage Nutrition and our parent, subsidiaries, affiliates, partners, officers, directors, agents, contractors, licensors, service providers, subcontractors, suppliers, interns and employees, harmless from any claim or demand, including reasonable attorneys’ fees, made by any third-party due to or arising out of your breach of these Terms of Service or the documents they incorporate by reference or your violation of any law or the rights of a third-party.
                                    
                                </li>
                                <li>
                                    Severability -
                                    In the event that any provision of these Terms of Service is determined to be unlawful, void or unenforceable, such provision shall nonetheless be enforceable to the fullest extent permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these Terms of Service, such determination shall not affect the validity and enforceability of any other remaining provisions.
                                    
                                </li>
                                <li>
                                    Changes to Terms of Service -
                                    Any relevant terms and conditions, policies and notices shall be governed by and construed in accordance with the laws of India without giving effect to any principles of conflict of law. You hereby consent to the exclusive jurisdiction of the Courts at Delhi in respect of any disputes arising in connection with the website, or any relevant terms and conditions, policies and notices or any matter related to or in connection therewith.
                                </li>
                            </ul>
                        </div>
                         
                    </div>
                </div>
            </section>
            <section class="mt-10 pt-4">
                {{-- <h2 class="title title-center mb-4">Promo Banner</h2>
                <div class="banner-desc-container">
                    <p>Riode promo banners are the typical element of call to actions. They are commonly used
                        for advertising.</p>
                </div> --}}
                <div class="banner cta-simple">
                    <div class="banner-content bg-white d-lg-flex align-items-center">
                        <div class="banner-header pr-lg-7 pb-lg-0 pb-4 mb-lg-0 mb-6">
                            <h3 class="banner-title font-weight-bold ls-s text-uppercase">Trade-inn</h3>
                            <h4 class="banner-subtitle font-weight-normal ls-s text-body">Upgrade and save</h4>
                        </div>
                        <div class="banner-text mb-lg-0 mb-4 mr-lg-4 pl-lg-6 pr-lg-0 pl-2 pr-2">
                            <h4 class="font-weight-normal ls-normal text-uppercase mb-0">Get a Riode gift
                                card<b>+25% off</b></h4>
                            <p class="ls-m mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod.</p>
                        </div>
                        <a href="#" class="btn btn-primary btn-ellipse">Shop Now<i class="d-icon-arrow-right"></i></a>
                    </div>
                </div>
            </section><br>

        </div>
  
    </div>

</main>


                

  

 
@endsection
