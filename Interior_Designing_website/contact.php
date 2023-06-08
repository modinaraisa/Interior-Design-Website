
	
	
   <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "design";
    $conn = new mysqli($servername, $username, $password, $dbname); ?>

<head>
    <title>Conatct Us</title>
	 <meta charset="UTF-8" />
	 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/gallery.css">
</head>

<body>

	
	<div class="header"> 
	<div class="containerSection">
		
		<div class="headline">
		<h2> Interior Designing Website <h2> 
	
	</div>
	
<!--	<div class="navbar">
		<nav>
		
			<input type="checkbox" id="check">
			<label for ="check">
			<i class="fas fa-bars" id="btn"></i>
			<i class="fas fa-times" id="cancel"></i>
			</label>
			
			<ul>
				
				<li> <a href="index.html"> Home </a> </li>
				<li> <a href="#"> Log In </a> </li>
				<li> <a href="about.html"> About </a> </li>
				<li> <a href="designGallery.html"> Design Gallery </a> </li>
				<li> <a href="services.html"> Services </a> </li>
				<li> <a href="#"> Team Page </a> </li>
				<li> <a href="contact.php"> Contact US </a> </li>
			</ul>
			
			</nav>
			
	
	</div> -->

<div class="form-page">

<section class="contact">
	<div class="content">
		<h2>Contact Us </h2>
		<p> To get any consultation or for a proper discussion regarding 
		your choices and to have appointment of designers Please contact by providing 
		with this information </p>
	</div>

	<div class="container_contact">
		<div class="contactInfo">
			<div class="box">
				<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
				<div class="text">
					<h3> Address </h3>
					<p>30/A,Eskaton Road,Moghbazar,Dhaka,Bangladesh</p>
				</div>	
			</div>	

			<div class="box">
				<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
				<div class="text">
					<h3> Phone </h3>
					<p>+8801711000000</p>
				</div>	
			</div>

			<div class="box">
				<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
				<div class="text">
					<h3> Email </h3>
					<p>designInterior@gmail.com</p>
				</div>	
			</div>	
			
			<a href="index.html">
			<button> Back to HomePage </button>
			</a>
		</div>	
		
		 <div class="form-holder">
            <form action="" method="POST">
				<h2> LET US KNOW</h2>
				<div class="inputBox">
                <input type="text" name="name" placeholder="Enter your name..." required />
				<span>Full Name </span>
				</div>
				
				<div class="inputBox">
                <input type="email" name="gmail" placeholder="Enter your gmail..." required />
				<span>Email </span>
				</div>
				
				<div class="inputBox">
                <textarea id="message" name="message" rows="4" cols="67" placeholder="Enter your message here..." required></textarea>
				<span>Your Message </span>
				</div>
				
				<div class="inputBox">
                <input type="submit" class="btn btn-primary btn-lg" value="Submit" />
				
				</div>	
				
            </form>
        </div>
		
	</div>
	
	 
   
		
</section>	  
</div>		
        <?php
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $gmail = $_POST['gmail'];
            $message = $_POST['message'];
            $sql = "INSERT INTO message (name,gmail,message) VALUES('$name','$gmail','$message')";
            $result = $conn->query($sql);
            ?>
            <div style="text-align: center;">
                <p class="text-white">Message Sent Successfully!</p>
            </div>
        <?php
        }
        ?>
