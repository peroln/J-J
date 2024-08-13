@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-light py-3">
                <!-- Nav tabs -->
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3 px-5" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-reviews-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-reviews" type="button" role="tab"
                                aria-controls="v-pills-reviews" aria-selected="true">Reviews
                        </button>
                        <button class="nav-link " id="v-pills-request-calls-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-request-calls" type="button" role="tab"
                                aria-controls="v-pills-request-calls"
                                aria-selected="false">Request Calls
                        </button>
                        <button class="nav-link " id="v-pills-users-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-users" type="button" role="tab" aria-controls="v-pills-users"
                                aria-selected="false">Users
                        </button>
                    </div>
                    <div class="tab-content " id="v-pills-tabContent">
                        <div class="tab-pane show active" id="v-pills-reviews" role="tabpanel"
                             aria-labelledby="v-pills-reviews-tab">
                            @include('admin.reviews-table')
                        </div>
                        <div class="tab-pane fade fade" id="v-pills-request-calls" role="tabpanel"
                             aria-labelledby="v-pills-request-calls-tab">
                            @include('admin.request-calls-table')
                        </div>
                        <div class="tab-pane fade fade" id="v-pills-users" role="tabpanel"
                             aria-labelledby="v-pills-users-tab">
                            @include('admin.users-table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

