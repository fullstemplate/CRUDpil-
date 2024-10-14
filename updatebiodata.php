<?php
session_start();

if (!isset($_SESSION["user"])) {
    echo "<script>alert('Session anda belum terdaftar, silakan login kembali'); document.location='login.php';</script>";
} else {
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
  padding: 11px 40px;
  border-radius: 6px; 
  transition: 0.3s;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-orange w3-wide w3-padding w3-card">
    <a href="dashboard.php" class="w3-bar-item w3-orange w3-button">Back to Dashboard</a>
    <a href="logout.php" class="w3-bar-item w3-button  w3-right">LogOut</a>    
  </div>
</div>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Update Biodata</h3>
    <div class="w3-row">
    <table class="w3-table-all">
    <thead>
      <tr class="w3-orange">
        <th>NAMA</th>
        <th>PHONE</th>
        <th>EMAIL</th>
        <th>FOTO</th>
        <th>GENDER</th>
        <th>AKSI</th>
      </tr>
    </thead>
    <?php   
        include "config/koneksi.php";

        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }

        $no_of_records_per_page = 10;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $total_pages_sql = "SELECT COUNT(*) FROM biodata";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM biodata LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);

        if(mysqli_num_rows($res_data) > 0) { 
          while($row = mysqli_fetch_array($res_data)){		
    ?>
        <tr>
          <td><?php echo $row["nama"];?></td>
          <td><?php echo $row["phone"];?></td>
          <td><?php echo $row["email"];?></td>
          <td><?php echo $row["foto"];?></td>
          <td><?php echo $row["gender"];?></td>
          <td><a href="update.php?id=<?php echo $row['id'];?>" class="w3-button w3-tiny">Update</a></td>
        </tr>

    <?php
          }
        } else { 
    ?>
      <tr>
          <td colspan="6"><p align="center">No Data</p></td>
      </tr>
    <?php
        }
    ?>
    </table>
    <?php $conn->close(); ?>
    <div class="w3-bar w3-border ">
      <?php
      $pagLink = ""; 
      if ($pageno >=2 ) {?>
        <a class='w3-bar-item w3-button ' href='<?php echo "updatebiodata.php?pageno=".($pageno-1); ?>' >&laquo;</a>
      <?php 
      } else if ($pageno == 1) 
      {?>
         <a href="#" class="w3-bar-item w3-button w3-white" disabled>&laquo;</a>
      <?php } ?>
      <?php  

      for ($i=1; $i<=$total_pages; $i++) {   
        if ($i == $pageno) {   
            $pagLink .= "<a class='w3-bar-item w3-button' href='updatebiodata.php?pageno=".$i."'>".$i." </a>";   
        }               
        else  {   
            $pagLink .= "<a class='w3-bar-item w3-button  w3-white' href='updatebiodata.php?pageno=".$i."'>".$i." </a>";     
        }   
      };     
      echo $pagLink; 
      if($pageno < $total_pages){  ?>
        <a class='w3-bar-item w3-button' href='<?php echo "updatebiodata.php?pageno=".($pageno+1);?>'>&raquo;</a>  
        <?php } else {    
        ?>
        <a href="#" class="w3-bar-item w3-button ">&raquo;</a>
        <?php } ?>

      </div>
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
<?php
session_start();

if (!isset($_SESSION["user"])) {
    echo "<script>alert('Session anda belum terdaftar, silakan login kembali'); document.location='login.php';</script>";
    exit();
}

include "config/koneksi.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if all required POST variables are set
    if (isset($_POST['id'], $_POST['nama'], $_POST['phone'], $_POST['email'], $_POST['gender'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        
        $foto = isset($_FILES['filefoto']['name']) ? $_FILES['filefoto']['name'] : '';
        $tmp = isset($_FILES['filefoto']['tmp_name']) ? $_FILES['filefoto']['tmp_name'] : '';

        // If a new photo is uploaded, replace the old one
        if (!empty($foto) && !empty($tmp)) {
            move_uploaded_file($tmp, "images/$foto");
            $sql = "UPDATE biodata SET nama='$nama', phone='$phone', email='$email', gender='$gender', foto='$foto' WHERE id=$id";
        } else {
            $sql = "UPDATE biodata SET nama='$nama', phone='$phone', email='$email', gender='$gender' WHERE id=$id";
        }

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Biodata berhasil diupdate'); document.location='updatebiodata.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Data tidak lengkap'); document.location='viewbiodata.php';</script>";
    }

    mysqli_close($conn);
}
?>
