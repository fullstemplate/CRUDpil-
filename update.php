<?php
session_start();

if (!isset($_SESSION["user"])) {
    echo "<script>alert('Session anda belum terdaftar, silakan login kembali'); document.location='login.php';</script>";
} else {
    include "config/koneksi.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM biodata WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
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
  padding: 11px 38px;
  border-radius: 10px; 
  transition: 0.3s;
}
.w3-row {
  border-radius: 14px; 
  background-color: #8AA79F;
  padding: 11px 40px;
  height: 650px;
  width: 37%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
}
.peringatan {
  text-align: center;
  color: black;
  font-weight: bold;
  font-size: 24px;
}
.w3-input {
  border-radius: 6px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
}
.w3-select {
  border-radius: 6px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-orange w3-wide w3-padding w3-card">
    <a href="updatebiodata.php" class="w3-bar-item w3-button w3-orange">Back to Biodata</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-right">LogOut</a>    
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px ">

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Update Biodata</h3>
    <br>
    <div class="w3-row"><br>
      <p class="peringatan">Lakukan Update Biodata pada Form ini.</p>
      <form class="" action="updatebiodata.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
       
      <p><label>Nama</label>
      <input class="w3-input w3-border" name="nama" type="text" value="<?php echo $row['nama']; ?>" placeholder="Masukkan nama lengkap"></p>

      <p><label>Phone</label>
      <input class="w3-input w3-border " name="phone" type="text" value="<?php echo $row['phone']; ?>" placeholder="+62"></p>

      <p><label>Email</label>
      <input class="w3-input w3-border" name="email" type="text" value="<?php echo $row['email']; ?>" placeholder="Masukkan gmail anda"></p>

      <p><label>Foto </label>
      <input class="w3-input w3-border w3-white" name="filefoto" type="file" placeholder="Input Image"></p>

      <p><label>Gender</label>
      <select class="w3-select" name="gender">
        <option value="" disabled>Select your Gender</option>
        <option value="L" <?php if ($row['gender'] == 'L') echo 'selected'; ?>>Laki-Laki</option>
        <option value="P" <?php if ($row['gender'] == 'P') echo 'selected'; ?>>Perempuan</option>
      </select>

      <input class="w3-button w3-section" type="submit" name="submit" value="Update">
      </form>
      
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

<?php
}
?>
