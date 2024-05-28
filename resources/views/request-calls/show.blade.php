@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                Status: active
            </div>
            <div class="card-body">
                <h1>The request was sent by {{$requestCall->name}}.</h1>
                <h5 class="card-title">His phone number {{$requestCall->phone_number}}</h5>
                <p class="card-text my-3">
                    @if($requestCall->text)
                        {{$requestCall->text}}
                    @else
                        No massage
                    @endif
                </p>
                <p class="my-3">
                    <a href="tel:{{$requestCall->phone_number}}" class="btn btn-success">Call</a>
                    <a href="#" class="btn btn-warning">Update status</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </p>

            </div>
            <div class="card-footer text-muted">
                {{$requestCall->created_at}}
            </div>
        </div>
    </div>

@endsection
