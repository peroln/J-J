@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                Status: {{$user->approved ? 'approved' : 'disapproved'}}
            </div>
            <div class="card-body">
                <h1>The username is {{$user->name}}.</h1>
                <h5 class="card-title">His email is {{$user->email}}</h5>
                @if($user->email_verified_at)
                <h5 class="card-title">His email verified at {{$user->email_verified_at}}</h5>
                @else
                    <h5 class="text-danger">His email has not verified yet</h5>
                @endif
                    <a href="{{route('user.edit', ['user' => $user->id])}}"
                       class="btn btn-warning">Update</a>
                    <a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger"
                       data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
                </p>

            </div>
            <div class="card-footer text-muted">
                {{$user->created_at}}
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete user</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure wanted to delete user?
                    </div>
                    <div class="modal-footer">
                        <form action="{{route('user.destroy', $user->id)}}" id="modal-form" method="post">
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

