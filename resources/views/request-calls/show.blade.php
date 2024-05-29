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
                    <a href="{{route('request-call.edit', ['requestCall' => $requestCall->id])}}"
                       class="btn btn-warning">Update</a>
                    <a href="{{route('request-call.destroy', $requestCall->id)}}" class="btn btn-danger"
                       data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
                </p>

            </div>
            <div class="card-footer text-muted">
                {{$requestCall->created_at}}
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete request</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure wanted to delete request call?
                    </div>
                    <div class="modal-footer">
                        <form action="{{route('request-call.destroy', $requestCall->id)}}" id="modal-form" method="post">
                            @method('delete')
                            @csrf
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="btn-submit" data-bs-dismiss="modal" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
@endsection
