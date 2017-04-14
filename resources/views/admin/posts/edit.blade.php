@extends('layouts.admin')





@section('content')

    <h1>Edit Posts</h1>

    <div class="row">

        @include('includes.form_error')

    </div>

    <div class="row">

    <div class="col-sm-3">

        <img src="{{$post->photo ? $post->photo->file : "http://placehold.it/400x400"}}" alt="" class="img-responsive img-rounded">
    </div>




    <div class="col-sm-9">

        {!! Form::model($post,['method'=>'PATCH', 'action'=>['AdminPostsController@update',$post->id],'file'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title','Post Title') !!}
            {!! Form::text('title' , null,['class'=>'form-control'])  !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id','Category type') !!}
            {!! Form::select('category_id' , $category, null,['class'=>'form-control'])  !!}
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
            {!! Form::submit('Update',['class'=>'btn btn-info col-sm-6']) !!}
        </div>

        {!! Form::close() !!}

      {!! Form::model($post,['method'=>'DELETE', 'action'=>['AdminPostsController@destroy',$post->id]]) !!}


         {!! Form::submit('Delete',['class'=>'btn btn-danger col-sm-6']) !!}

      {!! Form::close() !!}

    </div>

   </div>





@stop