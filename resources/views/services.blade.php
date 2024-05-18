@extends('layouts.app')

@section('scripts')
    @vite(['resources/sass/video.scss', 'resources/js/app.js'])
    <script>
        window.onload = function () {
            var polaroids = document.querySelectorAll('.polaroid');
            polaroids.forEach(item => {
                const randomRotation = Math.floor(Math.random() * (6 - -6 + 1) + -6);
                item.style.transform = `rotate(${randomRotation}deg)`
            })
        };
    </script>
@endsection

@section('content')
    <div class="video-wrap fixed-top z-0 video-screen">
        <div class="ratio ratio-16x9">
            <video autoplay loop muted playsinline src="{{asset('/video/main.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="caption">
        <div class="container-fluid p-0 position-relative">
            <div class="top-left d-flex flex-row bd-highlight"><h1 class="p3">When the grass gets growing </br> we get
                    mowing</h1>
            </div>
            <div class="bottom-right d-flex flex-row-reverse bd-highlight"><h1 class="p3">Gardening </br> services</h1>
            </div>
        </div>
    </div>
    <div class="main-content z-1">
        <div class="container-fluid">
            <div class="container__items">
                <div class="polaroid one">
                    <div class="polaroid__content">
                        <div class="polaroid__content-image">
                            <img src="{{asset('images/tools/tractor.jpg')}}" alt=''>
                        </div>
                        <div class="polaroid__content-caption">
                            <p>the good ol' boy</p>
                        </div>
                    </div>
                </div>
                <div class="polaroid two">
                    <div class="polaroid__content">
                        <div class="polaroid__content-image">
                            <img src="{{asset('images/tools/fixingman.jpg')}}" alt=''>
                        </div>
                        <div class="polaroid__content-caption">
                            <p>mr i didn't do it</p>
                        </div>
                    </div>
                </div>
                <div class="polaroid three">
                    <div class="polaroid__content">
                        <div class="polaroid__content-image">
                            <img src="{{asset('images/tools/fixing.jpg')}}" alt=''>
                        </div>
                        <div class="polaroid__content-caption">
                            <p>do you want a flower?</p>
                        </div>
                    </div>
                </div>
                <div class="polaroid four">
                    <div class="polaroid__content">
                        <div class="polaroid__content-image">
                            <img src="{{asset('images/tools/gardering/cuting-trees-2.jpg')}}" alt=''>
                        </div>
                        <div class="polaroid__content-caption">
                            <p>im cute and i know it</p>
                        </div>
                    </div>
                </div>
                <div class="polaroid five">
                    <div class="polaroid__content">
                        <div class="polaroid__content-image">
                            <img src="{{asset('images/tools/fence/scissors.jpg')}}" alt=''>
                        </div>
                        <div class="polaroid__content-caption">
                            <p>let's play! </p>
                        </div>
                    </div>
                </div>
                <div class="polaroid six">
                    <div class="polaroid__content">
                        <div class="polaroid__content-image">
                            <img src="{{asset('images/tools/gardering/push.jpg')}}" alt=''>
                        </div>
                        <div class="polaroid__content-caption">
                            <p>nothin' can stop us!</p>
                        </div>
                    </div>
                </div>
                <div class="polaroid seven">
                    <div class="polaroid__content">
                        <div class="polaroid__content-image">
                            <img src="{{asset('images/tools/gardering/trimmer.jpg')}}" alt=''>
                        </div>
                        <div class="polaroid__content-caption">
                            <p>please forgive me?</p>
                        </div>
                    </div>
                </div>
                <div class="polaroid eight">
                    <div class="polaroid__content">
                        <div class="polaroid__content-image">
                            <img src="{{asset('images/tools/gardering/cuting-trees-1.jpg')}}" alt=''>
                        </div>
                        <div class="polaroid__content-caption">
                            <p>i give you kiss? plz?</p>
                        </div>
                    </div>
                </div>
                <div class="polaroid nine">
                    <div class="polaroid__content">
                        <div class="polaroid__content-image">
                            <img src="{{asset('images/tools/gardering/push-2.jpg')}}" alt=''>
                        </div>
                        <div class="polaroid__content-caption">
                            <p>study buddy</p>
                        </div>
                    </div>
                </div>
                <div class="polaroid ten">
                    <div class="polaroid__content">
                        <div class="polaroid__content-image">
                            <img src="{{asset('images/tools/gardering/scissors-2.jpg')}}" alt=''>
                        </div>
                        <div class="polaroid__content-caption">
                            <p>we're glad ur home!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

