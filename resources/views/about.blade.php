@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<link href="{{asset('link/socicon.css')}}" media="all" rel="stylesheet" type="text/css"/>
<link href="{{asset('link/entypo.css')}}" media="all" rel="stylesheet" type="text/css"/>
<link href="{{asset('link/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>
=======

<link href="{{asset('link/socicon.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('link/entypo.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('link/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

>>>>>>> d4b6d0c560fc0cd437ed4213ceffc7005fff5ce3
<div class="main-container">
    <section class="space-lg bg-gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-5 mb-md-0 position-relative">
                    <h1 class="display-4">
                        About Us
                    </h1>
                    <p align="justify">
                        When students need to request for our services, one of the things they require may be the idea or knowledge. Our services of writing papers will help you get the knowledge on how writing works after we have submitted your order. There are many Professional term paper writing services where people can hire organizations, but we believe we are best.
                    </p>
                </div>
                <!--end of col-->
            </div>
        </div>
    </section>
</div>
<!--end of col-->
<!--end of row-->
<!--end of container-->
<!--end of section-->
<section class="bg-white">
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-12 col-md-6 col-lg-5 text-center text-md-left section-intro">
                <!-- <span class="title-decorative">
                    “Lorem ipsum dolor sit amet, .
                </span> -->
                <h3 class="h1">
                    Why choose our services in writing
                </h3>
                <span class="lead">
                    We understand how to get help in writing term papers can somehow be tough so why not contact us on our website and ask our experts with a sample quote like ‘I need help to write my term paper’ and I do assure you that at the end, you will receive a good term paper writing.
                </span>
                <p>
                    <a class="btn btn-lg btn-primary" href="/register" role="button">
                        Join us
                    </a>
                </p>
            </div>
            <!--end of col-->
            <div class="col-8 col-md-6 col-lg-4">
                <img alt="Image" class="img-fluid shadow" src="{{asset('img/contract.svg')}}"/>
            </div>
        </div>
    </div>
    <!--end of col-->
</section>
<!--end of row-->
<!--end of container-->
<!--end of section-->
<section class="bg-gradient text-white space-lg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="media">
                    <img alt="Image" class="avatar avatar-lg" src="{{asset('img/avatar-male-3.jpg')}}"/>
                    <div class="media-body">
                        <p class="h2">
                            “Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes”
                        </p>
                        <span>
                            writter
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!--end of col-->
    </div>
    <!--end of row-->
</section>
<!--end of container-->
<!--end of section-->
<section>
    <div class="justify-content-center py-3">
        <div class="row justify-content-center">
            <h2 class="featurette px-4">
                Why you need to buy term paper writing from our site
            </h2>
        </div>
        <br>
            <br>
                <!--end of row-->
                <div class="row justify-content-around align-items-center">
                    <div class="col-12 col-md-6 col-lg-5 order-md-2">
                        <ul class="nav" id="myTab" role="tablist">
                            <li>
                                <a aria-controls="home" aria-selected="true" class="active card" data-toggle="tab" href="#home" id="tab-1" role="tab">
                                    <div class="card-body">
                                        <h5>
                                            The presentation is unique.
                                        </h5>
                                        <p align="justify">
                                            Our experts know how the work is handled, and papers are written according to the requirements.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a aria-controls="profile" aria-selected="false" class="card" data-toggle="tab" href="#profile" id="tab-2" role="tab">
                                    <div class="card-body">
                                        <h5>
                                            The papers are plagiarism free
                                        </h5>
                                        <p align="justify">
                                            The company uses updated software to show and capture plagiarized parts on the      documents thereby producing non-plagiarized term paper writing.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a aria-controls="contact" aria-selected="false" class="card" data-toggle="tab" href="#contact" id="tab-3" role="tab">
                                    <div class="card-body">
                                        <h5>
                                            Cheap and affordable prices
                                        </h5>
                                        <p align="justify">
                                            The available term paper writing agency provides cheap and also affordable term paper writing service anytime. There might be loads of work to handle, but we are a fast term paper writing agency
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--end of col-->
                    <div class="col-12 col-md-6 order-md-1">
                        <div class="tab-content" id="myTabContent">
                            <div aria-labelledby="tab-1" class="tab-pane fade show active" id="home" role="tabpanel">
                                <img alt="Image" class="img-fluid shadow rounded-circle dotter" src="{{asset('img/be22.PNG')}}"/>
                            </div>
                            <div aria-labelledby="tab-2" class="tab-pane fade" id="profile" role="tabpanel">
                                <img alt="Image" class="img-fluid shadow rounded-circle dotter" src="{{asset('img/be11.PNG')}}"/>
                            </div>
                            <div aria-labelledby="tab-3" class="tab-pane fade" id="contact" role="tabpanel">
                                <img alt="Image" class="img-fluid shadow rounded-circle dotter" src="{{asset('img/be1.jpg')}}"/>
                            </div>
                        </div>
                    </div>
                    <!--end of col-->
                </div>
                <!--end of row-->
            </br>
        </br>
    </div>
    <!--end of container-->
</section>
<!--end of section-->
<section class="bg-gradient p-0 text-white">
    <svg class="decorative-divider" preserveaspectratio="none" viewbox=" 0 0 100 100">
        <polygon fill="#F8F9FB" points="0 0 100 0 100 100">
        </polygon>
    </svg>
    <div class="container">
        <div class="row justify-content-center section-intro">
            <div class="col-auto">
                <h2 class="h1" id="faq">
                    Frequently Asked Questions
                </h2>
            </div>
            <!--end of col-->
        </div>
        <!--end of row-->
        <ul class="row feature-list feature-list-sm justify-content-center">
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6>
                            How does ....?
                        </h6>
                        <p align="justify">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
							natoque penatibus et magnis dis parturient montes,
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
							natoque.
                        </p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6>
                            How do i ...?
                        </h6>
                        <p align="justify">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
													natoque penatibus et magnis dis parturient montes,
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
													natoque.
                        </p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6>
                            What do you mean by ....?
                        </h6>
                        <p align="justify">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque.
                        </p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6>
                            What do you mean by.......?
                        </h6>
                        <p align="justify">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
							natoque.
                        </p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6>
                            Is this site legit?
                        </h6>
                        <p align="justify">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
							natoque penatibus et magnis dis parturient montes,
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
							natoque.
                        </p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6>
                            how will i....?
                        </h6>
                        <p align="justify">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
																			natoque penatibus et magnis dis parturient montes,
																			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
																			natoque.
                        </p>
                    </div>
                </div>
            </li>
        </ul>
        <!--end of row-->
        <!--end of col-->
    </div>
    <!--end of row-->
</section>
<!--end of container-->
@include('includes.footer')
@endsection
