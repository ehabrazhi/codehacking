@extends('layouts.admin')




@section('content')


<h1>All Ctegories</h1>


  <div class="row">
      <div class="row">

          @include('includes.form_error')

      </div>

   <div class="col-sm-5">

    {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

      <div class="form-group">
        {!! Form::label('name','Category Title') !!}
        {!! Form::text('name' , null,['class'=>'form-control'])  !!}
      </div>

      <div class="form-group">
       {!! Form::submit('Create',['class'=>'btn btn-info']) !!}
      </div>

    {!! Form::close() !!}

   </div>

   <div class="col-sm-6">

        <table class="table table-responsive table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Created</th>
                <th>Updated</th>
              </tr>
            </thead>
            <tbody>

         @if($categories)

             @foreach($categories as $category)
              <tr>
                <td>{{$category->id}}</td>
                <td><a href="{{route('admin.categories.edit',$category->id)}}" >{{$category->name}}</a></td>
                <td>{{$category->created_at->diffForHumans()}}</td>
                <td>{{$category->updated_at->diffForHumans()}}</td>

              </tr>

             @endforeach
         @endif
            </tbody>
          </table>


   </div>

  </div>

@stop
