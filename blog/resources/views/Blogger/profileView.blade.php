@extends('Blogger.layouts.dash')
@section('content')

<head>
<style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8;

}
.upload-btns-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
  cursor: pointer;
}

.btns {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 10px;
  font-weight: bold;
  cursor: pointer;
}

.upload-btns-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  cursor: pointer;
}
</style>
</head>
<body>
<div class="container rounded bg-white mt-5 mb-5">

    <div class="row">

<div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5 shadow p-2 mb-5 bg-white rounded" width="250px" src="img/{{Session::get('image')}}">

        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile View</h4>
                </div>
                <div class="row mt-3">     

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input type="text" name="fname" class="form-control" value="{{Session::get('name')}}" disabled>
    </div> 


    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-venus-mars"></i> </span>
		 </div>
            <select class="custom-select" name="gender" value="{{Session::get('gender')}}" disabled> 
		    <option selected="{{Session::get('gender')}}">{{Session::get('gender')}}</option>
		</select>
    </div> 


    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		 </div>
        <input type="date" name="dob" class="form-control" value="{{Session::get('dob')}}" disabled>
    </div> 


    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-map-marker"></i> </span>
		 </div>
        <textarea name="address" class="form-control" disabled>{{Session::get('peraddress')}}</textarea>
    </div> 


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" type="email" value="{{Session::get('email')}}" disabled>
    </div>


            </div>
        </div>
</div>
</div>
</div>
</body>
@endsection