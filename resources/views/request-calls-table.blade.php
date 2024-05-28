<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Text</th>
        <th scope="col">Created at</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($request_calls as $call)
        <tr>
            <th scope="row">{{$request_calls->firstItem() + $loop->index}}</th>
            <td>{{$call->name}}</td>
            <td>{{$call->phone_number}}</td>
            <td>{{\Illuminate\Support\Str::limit($call->text,100)}}</td>
            <td>{{$call->created_at}}</td>
            <td><a href="{{route('request-call.show', ['requestCall' => $call->id])}}" class="btn btn-success" role="button" aria-pressed="true">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="text-center w-100">{{ $request_calls->links() }}</div>

