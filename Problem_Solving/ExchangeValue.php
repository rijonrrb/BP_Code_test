<!DOCTYPE html>
<html>
<head>
<title>Value Exchange</title>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 40px;
  transition: 0.3s;
  width: 40%;
  margin: auto;
}
.container {
  padding: 50px 50px;
}

</style>
</head>
<body>
<br><br>
<h2 style="color: Red; text-align: center;"><b>Value Exchange</b></h2> 
<br><br>
<div class="card">
  <div class="container">
    <span style="color: black; ">
<?php
$a=5;
$b=10;
echo "Value of <b>a</b> before exchanging: $a</br>";
echo "Value of <b>b</b> before exchanging: $b</br></br></br>";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "Value of <b>a</b> after exchanging: $a</br>";
echo "Value of <b>b</b> after exchanging: $b</br>";
?></span>
  </div>
</div>

</body>
</html>