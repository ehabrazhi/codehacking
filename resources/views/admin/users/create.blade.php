@extends('layouts.admin')




@section('content')


    <h1>Create Users</h1>

  {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=>true]) !!}

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
        {!! Form::select("role_id" ,[''=>'Choose Option'] + $roles, null,['class'=>'form-control'])  !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active','User Status') !!}
        {!! Form::select("is_active",array(0=>'Not Active',1=>'Active') , 0 ,['class'=>'form-control'])  !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','User Photo') !!}
        {!! Form::file("photo_id" ,null ,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password("password" ,['class'=>'form-control'])  !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create',['class'=>'btn btn-info']) !!}
    </div>

    {!! Form::close() !!}


    @include('includes.form_error')



@stop

