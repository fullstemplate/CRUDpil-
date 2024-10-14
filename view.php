<!DOCTYPE html>
<html>
  <title>TUGAS PIL</title>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="asset/css/w3.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-top: 98px;
  background-color: white;
  border-radius: 5px; 
  padding: 26px;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  box-shadow:  0 4px 8px 0 rgba(0, 0, 0, 4);
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px;
  color: white;
  background-color: #0B3954;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  border-radius: 5px; 
}

p {
  text-decoration: none;
  font-size: 20px;
  color: grey;
}

.h1{
  font : bold;
}
button:hover, a:hover {
  opacity: 0.7;
}
#container {
      height: 500px;
      overflow-y: auto;
    }
body {
  background-color: #FFECD1;

}
.w3-button {
  background-color: #0B3954;
  color: white;
  padding: 11px 40px;
  border-radius: 10px; 
  transition: 0.3s;
  
}
</style>
</head>
<body>
<div class="w3-top">
  <div class="w3-bar w3-orange w3-wide w3-padding w3-card">
    <a href="login.php"style="text-align:center " class="w3-bar-item w3-button w3-orange" >View Examples</a>
        
  </div>
</div>


<h2 style="text-align:center ">View profile</h2>

<div class="card">
  <img src="https://robohash.org/molestiaedelenitiillum.png?si" alt="John" style="width:100%">
  <h1 >Halley Lemarie</h1>
  <p class="title">hlemarie0@google.com.br</p>
  <p style="font-bold"class="phone">	199-877-9035</p>
  <p class="gender">Female</p>
  <!-- <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div> -->
  <a href="login.php"><button >Back</button></a>
</div>

</body>
</html>
