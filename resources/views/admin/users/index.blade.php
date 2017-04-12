@extends('layouts.admin')




@section('content')


    <h1>Users</h1>

   @if($users)


    @foreach($users as $user)

        <li>{{$user->id}}</li>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->role->name}}</li>
        <li>{{$user->is_active ==1 ? 'Active' :'Not Active'}}</li>
        <li>{{$user->created_at->diffForHumans()}}</li>
        <li>{{$user->updated_at->diffForHumans()}}</li>




     @endforeach





    @endif


@stop