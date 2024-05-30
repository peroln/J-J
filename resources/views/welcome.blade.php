<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.base-head')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <div class="container-fluid p-0 position-relative">
        <img src="{{url('/images/main_bg_image.jpeg')}}" class="img-fluid">
        @include("layouts.menu")
        <div class="top-left"><h1 class="p3">When the grass gets growing </br> we get mowing</h1></div>
        <div class="bottom-right"><h1 class="p3">Gardening </br> services</h1></div>
    </div>
    <div class="main-content">
        <div class="mask">
            <div class="d-flex align-items-start flex-column first-wrap">
                <div class="card first-element-main-content rounded-end-4">
                    <div class="card-body p-md-5">
                        <div class="accordion" id="accordionPanel1">
                            <div class="accordion-item">
                                <h1 class="card-title text-white mb-0" id="panels1-headingOne">
                                    Why Choose Us
                                    <button class="accordion-button collapsed text-white pb-0 px-0" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#panels1-collapseOne"
                                            aria-expanded="false"
                                            aria-controls="panels1-collapseOne">
                                        <p class="text-white">Value, Service, Customer care & Reliability are core
                                            values to us. We aim to meet &
                                            surpass your expectations.</p>
                                    </button>
                                </h1>
                                <div id="panels1-collapseOne" class="accordion-collapse collapse "
                                     aria-labelledby="panels1-headingOne">
                                    @include('welcome.choose-us')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-end flex-column">
                <div class="card  second-element-main-content rounded-start-4">
                    <div class="card-body p-md-5">
                        <div class="accordion" id="accordionPanel2">
                            <div class="accordion-item">
                                <h1 class="card-title text-white mb-0" id="panels2-headingOne">
                                    What We Do
                                    <button class="accordion-button collapsed text-white pb-0 px-0" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#panels2-collapseOne"
                                            aria-expanded="false"
                                            aria-controls="panels2-collapseOne">
                                        <p class="text-white">We specialize in precise lawn trimming, ensuring your
                                            outdoor space boasts a lush, well-manicured appearance. </p>
                                    </button>
                                </h1>
                                <div id="panels2-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="panels2-headingOne">
                                    @include('welcome.what-we-do')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="third" class="d-flex align-items-start flex-column third-wrap">
                <div class="card  third-element-main-content  rounded-end-4">
                    <div class="card-body p-md-5">
                        <div class="accordion" id="accordionPanel3">
                            <div class="accordion-item">
                                <h1 class="card-title text-white mb-0" id="panels3-headingOne">
                                    Contact Us
                                    <button class="accordion-button collapsed text-white pb-0 px-0" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#panels3-collapseOne"
                                            aria-expanded="false"
                                            aria-controls="panels3-collapseOne">
                                        <p class="text-white">Contact us and we will help you solve the problem.</p>
                                    </button>
                                </h1>
                                <div id="panels3-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="panels3-headingOne">
                                    @include('welcome.contact-us')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-end flex-column fourth-wrap">
                <div class="card  second-element-main-content rounded-start-4 mb-0">
                    <div class="card-body p-md-5">
                        <div class="accordion" id="accordionPanel4">
                            <div class="accordion-item">
                                <h1 class="card-title text-white mb-0" id="panels4-headingOne">
                                    Reviews
                                    <button class="accordion-button collapsed text-white pb-0 px-0" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#panels4-collapseOne"
                                            aria-expanded="false"
                                            aria-controls="panels4-collapseOne">
                                        <p class="text-white">Here's what our clients say:</p>
                                    </button>
                                </h1>
                                <div id="panels4-collapseOne" class="accordion-collapse collapse pt-5"
                                     aria-labelledby="panels4-headingOne">
                                    @include('welcome.reviews')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include("layouts.footer")
</body>
</html>
