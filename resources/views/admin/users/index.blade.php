@extends('layouts.admin')




@section('content')


    @if(Session::has('deleted_user'))

       <p class="bg-danger">{{session('deleted_user')}}</p>

    @endif


    <h1>Users</h1>


<div class="table-responsive">

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created_At</th>
            <th>Updated_At</th>
            <th>Photo_id</th>

        </tr>
        </thead>
        <tbody>

        @if($users)

            @foreach($users as $user)


                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="50" src="{{$user->photo ? $user->photo->file : "No Photo" }}" alt=""></td>
                    <td><a href="{{route('admin.users.edit',$user->id)}}"> {{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td>{{$user->photo_id}}</td>
                </tr>

            @endforeach

        @endif
        </tbody>
    </table>

</div>

@endsection


