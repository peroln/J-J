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
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12+Charted&family=Protest+Revolution&display=swap"
          rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>

<div id="app">
    <div class="container-fluid p-0 position-relative">
        <img src="{{url('/images/main_bg_image.jpeg')}}" class="img-fluid">
        @include("layouts.menu-test")
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
                                    Why Chose Us
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
                                    <p class="accordion-body text-white pt-0 px-0">
                                        <img src="{{asset('images/why.jpg')}}"
                                             class="img-thumbnail float-start me-2 me-md-3 my-2 my-md-3 first-block-img w-50"
                                             alt="...">
                                        With over 30 years of experience in lawn and hedge trimming, we bring
                                        unparalleled expertise to every job. Our commitment to value, service, customer
                                        care, and reliability is unmatched. We strive not only to meet but exceed your
                                        expectations. Trust us to transform your outdoor space with precision and
                                        professionalism.
                                        When you choose J&J, you're choosing a team of professionals dedicated to
                                        delivering exceptional results. From our initial consultation to the completion
                                        of the project, we prioritize clear communication, reliable service, and your
                                        complete satisfaction.--}}
                                        Contact us today for all your lawn and hedge trimming needs.
                                    </p>

                                    {{--                                        Welcome to J&J, where expertise meets excellence in lawn and hedge trimming services. With three decades of dedicated experience in the fields of Britain and Ireland, we bring a wealth of knowledge and skill to every project we undertake.--}}

                                    {{--                                        At J&J, we hold our core values of value, service, customer care, and reliability in the highest regard. These principles guide us in every interaction and task, ensuring that our clients receive nothing short of the best. Whether it's a meticulous lawn trim or precise hedge shaping, we approach each job with attention to detail and a commitment to excellence.--}}

                                    {{--                                        Our aim is simple: to not only meet your expectations but to surpass them. We understand the importance of a well-maintained outdoor space, and we take pride in our ability to transform lawns and hedges into beautiful, polished features of your property.--}}

                                    {{--                                        When you choose J&J, you're choosing a team of professionals dedicated to delivering exceptional results. From our initial consultation to the completion of the project, we prioritize clear communication, reliable service, and your complete satisfaction.--}}

                                    {{--                                        Experience the difference that three decades of expertise can make. Contact us today for all your lawn and hedge trimming needs.--}}
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
                                        <p class="text-white">We specialize in precise lawn trimming, ensuring your
                                            outdoor space boasts a lush, well-manicured appearance. Our expertise
                                            extends to meticulous hedge shaping, crafting elegant and tidy hedges that
                                            enhance the beauty of your landscape.</p>
                                    </button>
                                </h1>
                                <div id="panels2-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="panels2-headingOne">
                                    <p class="accordion-body text-white pt-0 px-0">
                                    <ol>
                                        <li>Lawn Trimming: Achieving pristine lawns through precise cuts and meticulous
                                            care, enhancing the beauty of your outdoor space.
                                        </li>
                                        <li>Hedge Shaping: Crafting beautifully manicured hedges that complement your
                                            landscape, creating a polished and inviting atmosphere.
                                        </li>
                                        <li> Gardening Services: Providing comprehensive gardening solutions tailored to
                                            your needs, from planting and maintenance to landscaping design, ensuring
                                            your outdoor oasis thrives year-round.
                                        </li>
                                    </ol>


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
                                        <p class="text-white">Contact us and we will help you solve the problem.</p>
                                    </button>
                                </h1>
                                <div id="panels3-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="panels3-headingOne">
                                    <p class="accordion-body text-white pt-0 px-0">
                                        <img
                                            src="https://as2.ftcdn.net/v2/jpg/03/11/52/79/1000_F_311527981_cpzTxjBwgu3Z8q7GzPAA4oxkp3R9YwU0.jpg"
                                            class="rounded-circle float-end m-sm-3 call-img" alt="...">
                                        By clicking on the link you will find where our office is located.
                                        You can also fill out the form and we will call you back at a time convenient
                                        for you.</br>
                                        <a class="btn btn-lg btn-success mt-3" href="{{route('contact-us')}}" role="button">Continue</a>
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
                                        <p class="text-white">Here's what our clients say:</p>
                                    </button>
                                </h1>
                                <div id="panels4-collapseOne" class="accordion-collapse collapse"
                                     aria-labelledby="panels4-headingOne">
                                    <p class="accordion-body text-white pt-0 px-0">
                                        <img
                                            src="https://media.istockphoto.com/id/1347784849/photo/scenic-view-of-a-beautiful-landscape-garden-with-a-green-mowed-lawn.webp?b=1&s=612x612&w=0&k=20&c=NXYgs2-QGp5HMxVdi2mrR-1AcNvteyVAPa4638lZSpI="
                                            class="img-thumbnail float-end  ms-3 my-3" alt="...">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>"Absolutely thrilled with the lawn trimming service provided by [Company
                                                Name]. Their attention to detail is unmatched, and my yard has never
                                                looked better. Highly recommend their expertise to anyone seeking
                                                top-notch lawn care!"</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            client <cite title="Source Title">Oleh Peretiatko</cite>
                                        </figcaption>
                                    </figure>
                                    </p>
                                </div>
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
