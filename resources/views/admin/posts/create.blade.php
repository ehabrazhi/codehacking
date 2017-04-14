@extends('layouts.admin')





@section('content')

    <h1>Create Posts</h1>

    <div class="row">

        @include('includes.form_error')

    </div>

    <div class="row">

    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title','Post Title') !!}
            {!! Form::text('title' , null,['class'=>'form-control'])  !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id','Category type') !!}
            {!! Form::select('category_id' , array(''=>'Choose Options') + $category, null,['class'=>'form-control'])  !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Photo') !!}
            {!! Form::file('photo_id' , null,['class'=>'form-control'])  !!}
        </div>

        <div class="form-group">
           {!! Form::label('content','Description') !!}
           {!! Form::textarea('content' , null,['class'=>'form-control'])  !!}
        </div>





        <div class="form-group">
          {!! Form::submit('Create',['class'=>'btn btn-info']) !!}
        </div>

    {!! Form::close() !!}


    </div>


@stop