<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Email Verified At</th>
        <th scope="col">Approved</th>
        <th scope="col">Created at</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{$users->firstItem() + $loop->index}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->email_verified_at ?? 'False'}}</td>
            <td>{{$user->approved ? 'True': 'False'}}</td>
            <td>{{$user->created_at}}</td>
            <td><a href="{{route('user.show', ['user' => $user->id])}}" class="btn btn-info" role="button" aria-pressed="true">View</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="text-center w-100">{{ $users->links() }}</div>

