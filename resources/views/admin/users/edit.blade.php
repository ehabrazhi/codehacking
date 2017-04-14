@extends('layouts.admin')




@section('content')


    <h1>Edit Users</h1>
  <div class="row">

      @include('includes.form_error')

  </div>

 <div class="row">


  <div class="col-sm-3">

      <img src="{{$user->photo ? $user->photo->file : "http://placehold.it/400x400"}}" alt="" class="img-responsive img-rounded">
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

    <div class="form-group ">
        {!! Form::submit('Update',['class'=>'btn btn-info col-sm-6']) !!}
    </div>

   {!! Form::close() !!}


    {!! Form::model($user,['method'=>'DELETE', 'action'=>['AdminUsersController@destroy',$user->id]]) !!}

      <div class="form-group">
          {!! Form::submit('Delete',['class'=>'btn btn-danger col-sm-6']) !!}
      </div>



    {!! Form::close() !!}

  </div>

 </div>


@stop

