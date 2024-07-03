@extends('layouts.admin')
@section('content')
    <div class="container bg-white py-3">
        @include('error')
        <form action="{{route('review.store')}}"
              method="post" class="needs-validation" enctype="multipart/form-data"
              novalidate>
            @csrf
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" maxlength="50" size="50" name="name" class="form-control"
                       id="recipient-name" value="">
                <div class="invalid-feedback">
                    Please print new name.
                </div>
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Text:</label>
                <textarea name="text" maxlength="2500" size="2500" class="form-control"
                          id="message-text"></textarea>
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Image</label>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">You can put here image</p>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" name="file" class="form-control" id="inputGroupFile01">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="alt" class="col-form-label">Alt:</label>
                <input type="text" maxlength="50" size="50" name="alt" class="form-control"
                       id="alt" value="">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">
                    Would you like to publish?
                </label>
                <select class="form-select" name="publish" id="inputGroupSelect01">
                    <option value="1">publish</option>
                    <option value="0" selected>unpublished</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a type="button" href="{{route('admin')}}" class="btn btn-danger">Cancel</a>
        </form>
    </div>
@endsection
@section('script')
@endsection
