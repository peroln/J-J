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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacquard+12+Charted&family=Protest+Revolution&display=swap"
          rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/video.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <div class="banner-contact">
        <img src="{{asset('/images/houses.jpg')}}" alt="" class="w-100 banner-img">
    </div>
    <div class="map">
        @include("layouts.menu-test")
        <div class="container-fluid">
            <div class="card-map">
                <div class="card-body ps-md-5">
                    <h1 class="card-title">Our address</h1>
                    <h3 class="card-text">Lios Mor apt/14 </br> Newport</br>
                        Co.Mayo<br/> F28YP78
                    </h3>
                    <div class="d-grid col-6 mx-auto">
                        <button type="button" class="btn btn-primary w-50  mb-3 mt-3" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                data-bs-whatever="@mdo">Call Me
                        </button>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('message')}}" method="post" class="needs-validation" novalidate >
                                        @csrf
                                        <div class="mb-3 input-group has-validation">
                                            <label for="my-tel" class="col-form-label">My number:</label>
                                            <div class="input-group-text">+353</div>
                                            <input type="tel" class="form-control" id="my-tel" maxlength="9"
                                                   pattern="[0-9]{9}"
                                                   placeholder="123456789" name="phone_number" required>
                                            <div class="invalid-feedback">
                                                Please print your phone number.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">My name:</label>
                                            <input type="text" maxlength="50" size="50" name="name" class="form-control" id="recipient-name" required>
                                            <div class="invalid-feedback">
                                                Please print your name.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea name="text" maxlength="255" size="255" class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">Send message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <iframe class="img-thumbnail google-map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9406.189275593606!2d-9.5571608184024!3d53.88647530613031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48596f8cb5512909%3A0xede3d6dded5710b5!2z0J3RjNGO0L_QvtGA0YIsIENvLiDQnNCw0LnQviwgRjI4IFlQNzg!5e0!3m2!1sru!2sie!4v1714062401693!5m2!1sru!2sie"
                                allowfullscreen="yes" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include("layouts.footer")
</body>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to

        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
</html>
