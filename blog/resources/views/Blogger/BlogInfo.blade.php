@extends('Blogger.layouts.dash')
@section('content')
<head>
<style>

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
}


.upload-btns-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
</style>
</head>
<body>
<div class="container rounded bg-white mt-5 mb-5">
	<form action="{{route('blogInfoUp')}}" method="post" name="form" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="row">
    	
        <div class="col-md-3 border-right align-self-center">

            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="mt-3 border border-secondary p-2 mb-3 bg-white" width="250px" height="200px" src="../blog/{{$blog->image}}">
            <div class="upload-btns-wrapper"> 
            <button class="btn btn-outline-warning">Update Picture</button>
            <input type="file"  name="image" id="image" value="{{$blog->image}}">
            </div>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Blog Info Update</h4>
                </div>
                <div class="row mt-3">              
        <input type="text" name="idd" class="form-control" value ="{{$blog->id}}" disabled><br><br>
        <input type="text" name="bid" class="form-control" value ="{{$blog->id}}" hidden>
        <input type="text" name="title" class="form-control" placeholder="Enter Title" value ="{{$blog->title}}"><br><br>
        <textarea name="description" class="form-control" placeholder="Enter description" value = "{{$blog->description}}">{{$blog->description}}</textarea>
        <p></p><input name="slug" class="form-control" placeholder="Enter slugs" type="text" value ="{{$blog->slug}}"><br><br>
    <div class="form-group"><br>
        <input type="submit" class="btn btn-primary btn-block" value="Update Blog">
    </div>
             </div>
            </div>
        </div>

        <div class="col-md-4 border-right align-self-center">
                      <div class="p-3 py-5">
            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
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
                    </div>
        </div>

    </div>
</form>
</div>
</body>
@endsection