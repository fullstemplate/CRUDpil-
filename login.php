<?php
	session_start();
			
	if(isset($_SESSION["user"])) 
	{ 
		header("location:dashboard.php");
	}
	else
	{
?>

<!DOCTYPE html>
<html>
<title>TUGAS PIL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="asset/css/w3.css">
<style>

body {
  background-color: #FFECD1;

}
.w3-button {
  background-color: #0B3954;
  color: white;
  padding: 11px 42px;
  border-radius: 8px; 
  transition: 0.3s;
  
}
.w3-input{
	background-color:white;
	border-radius: 6px;
	box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.1);
	padding: 11px 30px;
	height: 48px;
    width: 95%;
}
.top{
	padding: 11px 40px; 
	font-weight: bold;
    font-size: 24px;
    color: grey; 
	text-align: center;
}

</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-orange w3-wide w3-padding w3-card">
    <a href="" class="w3-bar-item w3-button w3-orange">Login Examples</a>
        
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

 

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Login</h3><br><br><br><br><br><br><br><br>
    <p class="top">Lets Try Login.</p>
    <div class="w3-row">
		<div class="w3-col w3-container m4"></div>
		<div class="w3-col w3-container m4">
			
			<form class="w3-container" action="ceklogin.php" method="post">	
			
			<input class="w3-input w3-border" type="text" placeholder="Username" required name="userlog" id="username">
			<input class="w3-input w3-section w3-border" type="password" placeholder="Password" required name="passlog" id="password">
			
			<input class="w3-button w3-section" type="submit" name="submit" value="Login">
			<a class="button" href="view.php">
			<input class="w3-button w3-section" type="view" value="View Exemple Profile"></a>
			</form>
		</div>
		<div class="w3-col w3-container m3"></div>
    </div> 
    
  </div>
  

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-bottom w3-center w3-#FFECD1 w3-padding-5">
  <p>Powered by <a href="Eror.php" title="W3.CSS" target="_blank" class="w3-hover-text-blue">Amat</a></p>
</footer>



</body>
</html>
<?php }?>