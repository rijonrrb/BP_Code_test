<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Blog Site</title>		

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
    border-radius: 20px;
}
.img{
    margin-top: 10px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
}


</style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top shadow-sm">
<div class="container">
<a class="navbar-brand" href="{{route('welcome')}}">
<img  src="https://www.svgrepo.com/show/25163/blogger.svg" alt="Logo"  width="40" height="40"> &nbsp; &nbsp; Blogsite</span> 
</a>
<div class="d-flex justify-content-end">
<a href="{{route('bloggerLogin')}}" type="button" class="btn btn-primary">Login</a>
        </div>
</div>
</nav>
<div class="container-fluid mt-5">
	<div class="row">
    <div class="col-lg-12">
			<div class="jumbotron">
            
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
    </div>
    	<div class="flex-grow-0 py-3 px-4 border-top">
			<div class="input-group">
				<input title="Only authorized user can comment on it" type="text" class="form-control" placeholder="Type your comment" disabled>
				<button title="Only authorized user can comment on it" class="btn btn-primary" disabled>Send</button>
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

			</div>
		</div>
	</div>
</div>
@include('Blogger.footer.footer')
</body>
</html>
