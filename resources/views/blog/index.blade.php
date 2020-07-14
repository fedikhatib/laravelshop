@extends('blog.masterBlog')
@section('content')

<div class="row">
    <div class="col-md-12">
        <h1>Welcome to our blog</h1>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                @foreach ($myPosts as $post)
                <div class="carousel-item @if($loop->first) active @endif">
                  <a href="{{url('posts/article/'.$post->slug)}}">
                    <img src="{{asset('/storage/'.$post->image)}}" class="d-block w-100" alt="{{$post->title}}">
                  </a>
                  </div>
                @endforeach
              
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


    </div>


</div>

<div class="row">
@foreach ($myPosts as $post)
<div class="col-md-4 my-2">
    <div class="card">
      <a href="{{url('posts/article/'.$post->slug)}}">
    <img class="card-img-top" src="{{asset('/storage/'.$post->image)}}" alt="">
      </a>
        <div class="card-body">
            <h4 class="card-title">{{$post->title}}</h4>
            <p class="card-text">{{str_limit($post->excerpt,100)}}</p>
        </div>
    </div>
</div>
    
@endforeach
    
</div>

@endsection

@section('javascript')
<script>
  $(document).ready(function () {
    $('.carousel').carousel()

       
   })
</script>
    
@endsection