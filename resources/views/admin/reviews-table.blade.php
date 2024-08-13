<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">img</th>
        <th scope="col">Text</th>
        <th scope="col">Created at</th>
        <th scope="col"><a href="{{route('review.create')}}" class="btn btn-success" role="button" aria-pressed="true">Create</a></th>
    </tr>
    </thead>
    <tbody>
    @foreach($reviews as $review)
        <tr>
            <th scope="row">{{$reviews->firstItem() + $loop->index}}</th>
            <td>{{$review->name}}</td>
            <td><img src="{{asset('storage/'.$review->src)}}" style="width: 50px"></td>
            <td>{{\Illuminate\Support\Str::limit($review->text,100)}}</td>
            <td>{{$review->created_at}}</td>
            <td><a href="{{route('review.show', ['review' => $review->id])}}" class="btn btn-info" role="button" aria-pressed="true">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="text-center w-100">{{ $reviews->links() }}</div>

