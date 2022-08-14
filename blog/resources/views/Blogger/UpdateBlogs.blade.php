@extends('Blogger.layouts.dash')
@section('content')

<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<style>

body {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  background-color: #efefef;
  font-weight: 300; }

p {
  color: #b3b3b3;
  font-weight: 300; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }
.cd{
    border-radius: 50px;
}
.img{
    margin-top: 10px;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
}

</style>
</head>
<body>

<h2 class="d-flex justify-content-center text-secondary">Blog list</h2>
<div class="container mt-4">
          <div class="card-deck">
            @foreach($bloglist as $blog)


  <div class="card shadow cd">
    <img src="blog/{{$blog->image}}" class="card-img-top img">
    <div class="card-body">
      <h5 class="card-title d-flex justify-content-center">{{$blog->title}}</h5>
      <p class="card-text">{{$blog->description}}</p>
      <p class="card-text"><small class="text-muted">{{$blog->slug}}</small></p>
      <br> 
      <div class="d-flex justify-content-center">
            <a href="{{route('blogUp',['id'=>$blog->id])}}" class="btn btn-warning w-75" style="color:white"> Update</a>
      </div>
    </div>
  </div>

            @endforeach
            
            </div>
            <br><br>
            <div class="d-flex justify-content-center">
            {!! $bloglist->links() !!}
        </div>
    </div>
  </body>
  

@endsection
