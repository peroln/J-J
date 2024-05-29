@extends('layouts.admin')
@section('content')
    <div class="container bg-white py-3">
        <form action="{{route('request-call.update', [$requestCall])}}" method="post" class="needs-validation"
              novalidate>
            @method('PUT')
            @csrf
            <label for="my-tel" class="col-form-label">Phone number:</label>
            <div class="mb-3 input-group has-validation">
                <div class="input-group-text">+353</div>
                <input type="tel" class="form-control" id="my-tel" maxlength="9"
                       pattern="[0-9]{9}"
                       placeholder="123456789" name="phone_number"
                       value="{{$requestCall->getRawOriginal('phone_number')}}">
                <div class="invalid-feedback">
                    Please print correct phone number.
                </div>
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" maxlength="50" size="50" name="name" class="form-control"
                       id="recipient-name" value="{{$requestCall->name}}">
                <div class="invalid-feedback">
                    Please print new name.
                </div>
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea name="text" maxlength="255" size="255" class="form-control"
                          id="message-text"> {{$requestCall->text}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a type="button" href="{{route('admin')}}" class="btn btn-danger">Cancel</a>

        </form>
    </div>
@endsection
@section('script')
    @vite(['resources/js/form-validation.js'])
@endsection
