<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <nav class="home-nav">
     	<a href="change-password.php">Change Password</a>
       
		<a href="viewprofile.php">Profile</a>
     </nav>
	 
	 <div class="welcome">
	 <a href="index.html">
			<button> Welcome to the Website</button>
			</a>
     </div>
</body>
</html>

<?php 
}else{
     header("Location: loginStart.php");
     exit();
}
 ?>