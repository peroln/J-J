<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/video.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    @include("layouts.menu-test")
    {{--    <div class="video-background">--}}
    <div class="video-wrap fixed-top z-0 video-screen">
        <div class="ratio ratio-16x9">
            <video autoplay loop muted playsinline src="{{asset('/video/main.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
    {{--    </div>--}}

    <div class="caption ">
        <div class="container-fluid p-0 position-relative">
            <div class="top-left d-flex flex-row bd-highlight"><h1 class="p3">When the grass gets growing </br> we get
                    mowing</h1>
            </div>
            <div class="bottom-right d-flex flex-row-reverse bd-highlight"><h1 class="p3">Gardening </br> services</h1>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="mask ">
            <div class="d-flex align-items-start flex-column first-wrap">
                <div class="card first-element-main-content rounded-end-4">
                    <div class="card-body p-md-5">
                        <div class="accordion" id="accordionPanel1">
                            <div class="accordion-item">
                                <h1 class="card-title text-white mb-0" id="panels1-headingOne">
                                    Why Chose Us
                                    <button class="accordion-button collapsed text-white pb-0 px-0" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#panels1-collapseOne"
                                            aria-expanded="false"
                                            aria-controls="panels1-collapseOne">
                                        <p class="text-white">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </button>
                                </h1>
                                <div id="panels1-collapseOne" class="accordion-collapse collapse "
                                     aria-labelledby="panels1-headingOne">
                                    <p class="accordion-body text-white pt-0 px-0">
                                        <img src="{{asset('images/why.jpg')}}"
                                             class="img-thumbnail float-start me-3 my-3 first-block-img" alt="...">
                                        <strong>This is the first item's accordion body.</strong>
                                        It is shown by default, until the collapse plugin adds the appropriate classes
                                        that we use to style each element.
                                        These classes control the overall appearance, as well as the showing and hiding
                                        via CSS transitions.
                                        You can modify any of this with custom CSS or overriding our default variables.
                                    </p>
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
                                        <p class="text-white">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </button>
                                </h1>
                                <div id="panels2-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="panels2-headingOne">
                                    <p class="accordion-body text-white pt-0 px-0">
                                        <strong>This is the first item's accordion body.</strong>
                                        It is shown by default, until the collapse plugin adds the appropriate classes
                                        that we use to style each element.
                                        These classes control the overall appearance, as well as the showing and hiding
                                        via CSS transitions.
                                        You can modify any of this with custom CSS or overriding our default variables.
                                    </p>
                                    <div id="carouselExampleFade" class="carousel slide carousel-fade"
                                         data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img
                                                    src="https://media.istockphoto.com/id/1347784849/photo/scenic-view-of-a-beautiful-landscape-garden-with-a-green-mowed-lawn.webp?b=1&s=612x612&w=0&k=20&c=NXYgs2-QGp5HMxVdi2mrR-1AcNvteyVAPa4638lZSpI="
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img
                                                    src="https://www.skh.com/wp-content/uploads/2020/07/image2-e1597082437309-800x500.jpg"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img
                                                    src="https://i0.wp.com/www.bigtoolbox.com/wp-content/uploads/2018/09/Green_grass_lawn.jpg"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
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
                                        <p class="text-white">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </button>
                                </h1>
                                <div id="panels3-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="panels3-headingOne">
                                    <p class="accordion-body text-white pt-0 px-0">
                                        <img
                                            src="https://as2.ftcdn.net/v2/jpg/03/11/52/79/1000_F_311527981_cpzTxjBwgu3Z8q7GzPAA4oxkp3R9YwU0.jpg"
                                            class="rounded-circle float-end m-sm-3" alt="...">
                                        <strong>This is the first item's accordion body.</strong>
                                        It is shown by default, until the collapse plugin adds the appropriate classes
                                        that we use to style each element.
                                        These classes control the overall appearance, as well as the showing and hiding
                                        via CSS transitions.
                                        You can modify any of this with custom CSS or overriding our default variables.

                                    </p>
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
                                        <p class="text-white">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                    </button>
                                </h1>
                                <div id="panels4-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="panels4-headingOne">
                                    <p class="accordion-body text-white pt-0 px-0">
                                        <strong>This is the first item's accordion body.</strong>
                                        <img
                                            src="https://media.istockphoto.com/id/1347784849/photo/scenic-view-of-a-beautiful-landscape-garden-with-a-green-mowed-lawn.webp?b=1&s=612x612&w=0&k=20&c=NXYgs2-QGp5HMxVdi2mrR-1AcNvteyVAPa4638lZSpI="
                                            class="img-thumbnail float-end  ms-3 my-3" alt="...">
                                        It is shown by default, until the collapse plugin adds the appropriate classes
                                        that we use to style each element.
                                        These classes control the overall appearance, as well as the showing and hiding
                                        via CSS transitions.
                                        You can modify any of this with custom CSS or overriding our default variables.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include("layouts.footer")
</div>
</body>
</html>
