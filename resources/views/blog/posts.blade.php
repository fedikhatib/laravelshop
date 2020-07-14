@extends('blog.masterBlog')
@section('content')

<div class="row">
    <div class="col-md-8">
        <h1>Posts</h1>
        @foreach ($myPosts as $post)
            
        
        <div class="card text-center">
        <a href="{{url('posts/article/'.$post->slug)}}">
        
          <img class="card-img-top" src="{{asset('storage/'.$post->image)}}" alt="">
        </a>
          <div class="card-body">
            <h4 class="card-title"><a href="{{url('posts/article/'.$post->slug)}}">{{$post->title}}</a></h4>
            <p class="card-text">{{str_limit($post->excerpt,200)}}</p>
          <span class="badge badge-primary">{{$post->category->name}}</span>
          </div>
        </div>
        @endforeach

    </div>
    <div class="col-md-4">
      <li class="list-group-item @if(!$id) active @endif">
      <a  class="list-group-item-action"href="{{url('/posts')}}">
        All
      </li>
      <ul class="list-group">
        @foreach ($myCatageries as $category)
      <li class="list-group-item @if($category->id == $id) active @endif"> <a class="list-group-item-action" href="{{url('posts/'.$category->id)}}" active>{{$category->name}}</a></li>

        @endforeach
        
      </ul>
    </div>
</div>

<div class="paginatation">
    {{$myPosts->links()}}
</div>

@endsection