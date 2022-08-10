<!DOCTYPE html>
<html>
<head>
<title>Staircase</title>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  border-radius: 40px;
  transition: 0.3s;
  width: 40%;
  margin: auto;
}
.form {
  margin-left: 40%;
}
.container {
  padding: 50px 300px;
}

</style>
</head>
<body>

<?php


$n = 0;

if($_SERVER['REQUEST_METHOD'] === "POST") {

$n = test_input($_POST['n']);

}



function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}



?>
<br><br>
<div class="form">
<h1>Staircase of length N</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<label for="name">Enter Number: </label>
<input type="text" name="n" id="n">
<input type="submit" name="submit" value="Submit">
</form>
</div>
<br><br>
<div class="card">
  <div class="container">
    <h4><b>Staircase</b></h4> 
    <span style="color: red">
<?php for ($i = 0; $i < $n; $i++) {
$pad = 1;
for ($space = 0; $space < $n-$i-1; $space++) {
    $pad++;
}
echo str_pad('#', $pad,' ',STR_PAD_LEFT);
for ($j = 0; $j < $i; $j++) {
    echo '#';
}
echo '<br>';
} ?></span>
  </div>
</div>

</body>
</html>