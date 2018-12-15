@extends('layouts.app')
@section('content')
<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

        <h2 class="page-header">
            Queries
            <small>By Our Users</small>
       </h2>
<hr>

  @if($post->count() >0)
   @foreach($post as $post)
  <div style= "width:100%" >
    <div class="row">
    
      <div class="col-sm-8 col-md-8  ">
          <h3><a href="/tourguide/public/posts/{{$post->id}}"> {{$post->title}}</a> </h3>
            <small>posted on {{$post->created_at}} by {{$post->user->name}}</small> 
            <hr>
              
          
      </div>  
   
   </div>
   @endforeach
  

  
  @else

  <p>No Posts Found</p> 
 @endif


@endsection