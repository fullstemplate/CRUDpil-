<?php
	session_start();
		
	if(!isset($_SESSION["user"])) 
	{ 
		echo "<script>alert('Session anda belum terdaftar, silakan login kembali'); document.location='login.php';</script>";
	}else
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
  padding: 10px 37px;
  border-radius: 10px; 
  transition: 0.3s;
  
}
.button-container {
  padding-top: 35px; 

}


</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-orange w3-wide w3-padding w3-card">
    <a href="" class="w3-bar-item w3-button w3-orange">Dashboard</a>
    <a href="logout.php" class="button-container w3-bar-item w3-button w3-sienna w3-right">LogOut</a>    
  </div>

</div>

<!-- Page content -->
<div class="w3-content w3-padding " style="max-width:870px ">

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Chose Menu</h3>
    <!-- <h4><p class="w3-center ">Choose Menu.</p></h4> --><br><br><br><br><br><br>
    <div class="w3-row">
      <div class="button-container w3-col w3-container w3-center m6">
      <a href="addbiodata.php" class="w3-button w3-border w3-xxxlarge w3-#0B3954">Add Biodata</a>
      </div>
      <div class="button-container w3-col w3-container w3-center m6">
      <a href="viewbiodata.php" class="w3-button w3-border w3-xxxlarge w3-#0B3954">Daftar Biodata</a>    
      </div>
      <div class="button-container w3-col w3-container w3-center m6"> 
      <a href="profilbiodata.php" class="w3-button w3-border w3-xxxlarge w3-#0B3954">Daftar Profil</a>
      </div>
      <div class=" button-container w3-col w3-container w3-center m6"> 
      <a href="updatebiodata.php" class="w3-button w3-border w3-xxxlarge w3-#0B3954">Update Biodata</a>
      </div>
    </div> 
  </div>
  

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-bottom w3-center w3-sienna w3-padding-16">
  <p>Powered by <a href="Eror.php" title="W3.CSS" target="blank" class="w3-hover-text-blue">Amat</a></p>
</footer>

</body>
</html>

<?php
  };
?>