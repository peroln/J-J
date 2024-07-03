@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="card text-center">
            <img src="{{asset('storage/'.$review->src)}}" class="card-img-top" alt="{{$review->alt}}">
            <div class="card-header">
                Status: @if($review->publish)
                            published
                @else
                unpublished
                @endif
            </div>
            <div class="card-body">
                <h1>The review has made by {{$review->name}}.</h1>
                <p class="card-text my-3">
                        {{$review->text}}
                </p>
                <p class="my-3">
                    <a href="{{route('review.edit', [$review->id])}}"
                       class="btn btn-warning">Update</a>
                    <a href="{{route('review.destroy', $review->id)}}" class="btn btn-danger"
                       data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
                </p>

            </div>
            <div class="card-footer text-muted">
                {{$review->created_at}}
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure wanted to delete this review?
                    </div>
                    <div class="modal-footer">
                        <form action="{{route('review.destroy', $review->id)}}" id="modal-form" method="post">
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

