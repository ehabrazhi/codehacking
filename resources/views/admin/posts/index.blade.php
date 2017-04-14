@extends('layouts.admin')




@section('content')

<h1>All Posts</h1>

@if(Session::has('deleted_post'))

  <p class="bg-danger">{{session('deleted_post')}}</p>

@endif

 <table class="table">
     <thead>
       <tr>
         <th>Id</th>
         <th>User</th>
         <th>Category</th>
         <th>Photo</th>
         <th>Title</th>
         <th>Content</th>
         <th>Created</th>
         <th>Updated</th>
       </tr>
     </thead>
     <tbody>

  @if($posts)

      @foreach($posts as $post)
       <tr>
         <td>{{$post->id}}</td>
         <td><img height="70" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/100x50'}}" alt=""></td>
         <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
         <td>{{$post->category ? $post->category->name :'Uncategorized' }}</td>
         <td> {{$post->title}}</td>
         <td>{{$post->content}}</td>
         <td>{{$post->created_at->diffForhumans()}}</td>
         <td>{{$post->updated_at->diffForhumans()}}</td>
       </tr>
      @endforeach

  @endif
     </tbody>
   </table>


@stop

