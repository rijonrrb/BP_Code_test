@extends('Blogger.layouts.dash')
@section('content')
<head>
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
</head>
<body>
<div class="container">
<div class="card bg-warning" style="max-width: 600px; margin: auto; border-radius: 30px;">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center text-light">Create A Blog</h4>
	<br>
	<form action="{{route('blogAdd')}}" method="post" name="form" enctype="multipart/form-data">

    {{csrf_field()}}
                        
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                                     <ul>
                                         @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                         @endforeach
                                     </ul>
                                </div>
                         @endif


                         @if (\Session::has('failed'))
                         <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        {!! \Session::get('failed') !!}
                        </div>
                        @endif

                        @if (\Session::has('success'))
                         <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        {!! \Session::get('success') !!}
                        </div>
                        @endif


        <input type="text" name="title" class="form-control" placeholder="Enter Title"><br>
        <input name="slug" class="form-control" placeholder="Enter slugs" type="text"><br>
        <textarea name="description" class="form-control" placeholder="Enter description"></textarea><br>
        <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Upload Post">
       </div>                                                                    
</form>
</article>
</div> 
</div> 
</body>
@endsection