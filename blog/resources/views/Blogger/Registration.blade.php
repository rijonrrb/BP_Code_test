@extends('Blogger.layouts.app')
@section('content')
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <style>
    body{
        background: linear-gradient(90deg, #00ffc8, #ffd000);	
    }
    </style>

</head>
<body>


<br><br>
<div class="container">
<div class="card bg-light" style="max-width: 600px; margin: auto; border-radius: 30px;">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<br>
	
	<form action="{{route('bloggerRegistration')}}" method="post" name="form" enctype="multipart/form-data">

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

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input type="text" name="fname" class="form-control" placeholder="Full name">
    </div> 


    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-venus-mars"></i> </span>
		 </div>
            <select class="custom-select" name="gender">
		    <option selected="">Gender</option>
		    <option value="Male">Male</option>
		    <option value="Female">Female</option>
		    <option value="Others">Others</option>
		</select>
    </div> 


    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		 </div>
        <input type="date" name="dob" class="form-control" placeholder="Full name">
    </div> 


    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
		 </div>
        <textarea name="address" class="form-control" placeholder="Address"></textarea>
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div>


	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Username" type="text">
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="password" placeholder="Create password" type="password">
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="cpassword" placeholder="Repeat password" type="password">
    </div>   

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-file"></i> </span>
		</div>
        <input class="form-control" type="file" id="formFile" name="image" id="image" placeholder="Upload Image">
    </div>  
     

    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Create Account">
    </div>    
    <p class="text-center">Have an account? <a href="{{route('bloggerLogin')}}">Login</a> </p>                                                                 
</form>
</article>
</div> 
</div> 
<br><br>
</body>