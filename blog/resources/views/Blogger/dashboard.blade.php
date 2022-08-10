@extends('Blogger.layouts.dash')
@section('content')

<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
</head>
<body>
<div class="w3-content" style="max-width:1500px">
<h2 class="w3-wide text-center">About us</h2>
<br>
    <p class="w3-justify">Knowledge is the thing that makes us grater and any other existence. It’s our lifeblood. It runs through our veins. It’s what gets us out of bed each morning. It pushes us to constantly reimagine how we can move better. For you. For all the places you want to go. For all the things you want to get. For all the ways you want to earn. Across the entire world. In real time. At the incredible speed of now.. My blogsite is committing to becoming a fully optimize and clean blogsite for all, you can easily post your thougths and knowledge through our blog site. We will do this by offering bloggers more ways to blog green, helping viewers to earn knowledge, making transparency a priority and partnering with NGOs and the private sector to help expedite a clean and just energy transition.</p>
    <br>
<!-- Header -->
<div class="w3-opacity">
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <p class="w3-padding-16"><button class="w3-button w3-black" onclick="myFunction()">Toggle Grid Padding</button></p>
</header>
</div>

<!-- Photo Grid -->
<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
    <img src="https://optinmonster.com/wp-content/uploads/2015/04/typesofblogposts.png" style="width:100%">
    <img src="https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/11/how-to-write-a-blog-post.jpeg" style="width:100%">
    <img src="https://www.blogtyrant.com/wp-content/uploads/2017/02/how-to-write-a-good-blog-post.png" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxodymQYQHbkcY7o849rAPeY6xDCBLt2IYA2iRzpHKBeZMnEtukXhhUON1lKt25_egx3M&usqp=CAU" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdEm4yT2dxO5aLFiaDOkEVRL7yJxGchaxHzq5c80urJuOWAk8kaZ2Pg4MjkcHwRBvEbU4&usqp=CAU" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREchKGqZsNSg3Q91KNZ4oclrlM0JRmn3HUrTzPM4eTVNRn8h6fwcQaC1vAONlnvYJBGCE&usqp=CAU" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRka6-vh73oM9ljkLJTo5mH8RtBy8W4rE0BlgRy9lyvAi4X9u-QrPmfj57SoHJC3FaVCHs&usqp=CAU" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0DFoHl4SWJEFvBGeu5_dMC6eS5INGMKH5b62Nu6x9mKSD5Zh0-FaOVwdNZSVtXb_OvQM&usqp=CAU" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3YK639Hazt8O3SUrej_HqKAYh2ovQq0gJksVykMCZ-tO26HxqPqpvKunEMt7BO5joQ5A&usqp=CAU" style="width:100%">
    <img src="https://s3.amazonaws.com/mobileappdaily/mad/uploads/img_best_ride_sharing_apps.png" style="width:100%">
    <img src="https://www.bobology.com/members/images/471.jpg" style="width:100%">
    <img src="https://codeit.us/storage/LW0GiX0PV7DRuMmW8x0SE0CLFq3nIfOEhoOhcgJ6.png" style="width:100%">
  </div>

  <div class="w3-third">
  <img src="https://codeit.us/storage/LW0GiX0PV7DRuMmW8x0SE0CLFq3nIfOEhoOhcgJ6.png" style="width:100%">
    <img src="https://prod-media-eng.dhakatribune.com/uploads/2020/06/ride-sharing-obhai-zakir-1592750284918.jpg" style="width:100%">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxodymQYQHbkcY7o849rAPeY6xDCBLt2IYA2iRzpHKBeZMnEtukXhhUON1lKt25_egx3M&usqp=CAU" style="width:100%">
    <img src="https://cdn.motor1.com/images/mgl/EM7GB/s3/van-driver-texting-with-phone-while-driving.jpg" style="width:100%">
    <img src="https://www.netsolutions.com/insights/wp-content/uploads/2019/07/essential-features-for-building-a-ride-sharing-app.jpg" style="width:100%">
    <img src="https://i.guim.co.uk/img/media/249e1da420260b3b87d0118cfe8ef4db2825e7d9/0_95_4918_2951/master/4918.jpg?width=465&quality=45&auto=format&fit=max&dpr=2&s=39d01aeb8d560c3c7bed5190ec679aa9" style="width:100%">
  </div>
</div>

</div>
</body>
<script>
function myFunction() {
  var x = document.getElementById("myGrid");
  if (x.className === "w3-row") {
    x.className = "w3-row-padding";
  } else { 
    x.className = x.className.replace("w3-row-padding", "w3-row");
  }
}
</script>


@endsection