@extends('layouts.admin')




@section('content')


    <h1>Edit Users</h1>


  <div class="col-sm-3">

      <img src="{{$user->photo->file}}" alt="" class="img-responsive img-rounded">
  </div>

  <div class="col-sm-9">

    {!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}


    <div class="form-group">
        {!! Form::label('photo_id','User Photo') !!}
        {!! Form::file("photo_id" ,null ,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name','User Name') !!}
        {!! Form::text("name" , null,['class'=>'form-control'])  !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','User Email') !!}
        {!! Form::email("email" , null,['class'=>'form-control'])  !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id','User Role') !!}
        {!! Form::select("role_id" , $roles, null,['class'=>'form-control'])  !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active','User Status') !!}
        {!! Form::select("is_active",array(0=>'Not Active',1=>'Active') ,null,['class'=>'form-control'])  !!}
    </div>


    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password("password" ,['class'=>'form-control'])  !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create',['class'=>'btn btn-info']) !!}
    </div>

    {!! Form::close() !!}

  </div>
    @include('includes.form_error')



@stop