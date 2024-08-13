@extends('layouts.admin')
@section('content')
    <div class="container bg-white py-3">
        @include('error')
        <form action="{{route('user.update', [$user->id])}}" method="post" class="needs-validation">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" maxlength="50" size="50" name="name" class="form-control"
                       id="recipient-name" value="{{$user->name}}">
                <div class="invalid-feedback">
                    Please print new name.
                </div>
            </div>
            <label for="my-tel" class="col-form-label">Email</label>
            <div class="mb-3 input has-validation">
                <input type="email" class="form-control" id="email" maxlength="255"
                      pattern=".*@.*\..*"
                       placeholder="Your email" name="email"
                       value="{{$user->getRawOriginal('email')}}">
                <div class="invalid-feedback">
                    Please print correct email.
                </div>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">
                 Approved
                </label>
                <select class="form-select" name="approved" id="inputGroupSelect01">
                    <option value="1" @selected( $user->approved)>approved</option>
                    <option value="0" @selected(!$user->approved)>disapproved</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a type="button" href="{{route('admin')}}" class="btn btn-danger">Cancel</a>

        </form>
    </div>
@endsection
@section('script')
    @vite(['resources/js/form-validation.js'])
@endsection

