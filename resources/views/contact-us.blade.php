<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="icon" href="{{url('/images/person-mowing-the-grass.png')}}" type="image/x-icon">
    @include('layouts.base-head')
    @vite(['resources/sass/video.scss', 'resources/js/app.js', 'resources/js/form-validation.js'])
</head>
<body>
<div id="app">
    <div class="banner-contact">
        <img src="{{asset('/images/houses.jpg')}}" alt="" class="w-100 banner-img">
    </div>
    <div class="map">
        @include("layouts.menu")
        <div class="container-fluid">
            <div class="card-map">
                <div class="card-body ps-md-5">
                    <h1 class="card-title">Our address</h1>
                    <h3 class="card-text">Ballinvoash</br> Breaffy</br>
                        Co.Mayo<br/> F23F303
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
                                    <form action="{{route('message')}}" method="post" class="needs-validation"
                                          novalidate>
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
                                            <input type="text" maxlength="50" size="50" name="name" class="form-control"
                                                   id="recipient-name" required>
                                            <div class="invalid-feedback">
                                                Please print your name.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea name="text" maxlength="255" size="255" class="form-control"
                                                      id="message-text"></textarea>
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
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d130090.85292061538!2d-9.364689562946882!3d53.87281390930948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48595c639fad63df%3A0xb95c50c45e6308e1!2z0JHQsNC70LvQuNC90LLQvtGN0YgsIENvLiDQnNCw0LnQviwgRjIzIEYzMDM!5e0!3m2!1sru!2sie!4v1723561465481!5m2!1sru!2sie"
                            class="img-thumbnail google-map" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include("layouts.footer")
</body>
</html>
