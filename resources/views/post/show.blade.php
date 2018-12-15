@extends('layouts.app')
@section('content')
 
 <h2>{{$posts->title}}</h2>

 <hr>
 
   
 
     <div class="container">
      <p>{{$posts->body}}</p>
     </div>
  
  <small>posted on {{$posts->created_at}} by {{$posts->user->name}}</small>        
  <br><br>
  <hr>
  <a class="btn btn-primary" href="/tourguide/public/posts" >Go Back</a>
 @if(!Auth::guest())
   @if(Auth::user()->id == $posts->user_id)
  <a class="btn btn-primary" href="/tourguide/public/posts/{{$posts->id}}/edit">Edit Post</a>
  
  {!!Form::open(['action' => ['PostsController@destroy', $posts->id] , 'method' => 'Post', 'class' =>  'float-right']) !!}    
   {{Form::hidden('_method','DELETE')}}
   {{Form::submit('Delete',['class'=>'btn btn-danger',])}}

  {!!Form::close()  !!}
 
  @endif
  @endif
  
 
  @endsection