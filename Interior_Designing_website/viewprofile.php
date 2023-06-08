<?php
session_start();
?><!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>View Profile</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link href="css/style.css" rel="stylesheet" type="text/css">


</head>
<body>


<div class="mt-5">
<?php 
require ('db_conn.php');
$name=$_SESSION['user_name'];

$sql ="SELECT * FROM users WHERE user_name='$name'";
$result=mysqli_query($conn,$sql);
if($result){
    while($data = mysqli_fetch_assoc($result)){
        $username = $data['user_name'];
        $name = $data['name'];
	   
	}   
    
}



?>
	
		
		<div class="container-fluid justify-content-center">

   <div align="center" class="col-lg-12 col-sm-6">
<div class="profile">
    <p>Your Profile</p>
</div>


<div class="info">
    <p>UserName: <?php echo $username; ?></p>
    <p>Name: <?php echo  $name; ?></p>
	
	</div>
     <div class="welcome">
	 <a href="home.php">
			<button> Go Back</button>
			</a>
     </div>
    
   </div>
   </div>
			  
	</div>



 
 <script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>