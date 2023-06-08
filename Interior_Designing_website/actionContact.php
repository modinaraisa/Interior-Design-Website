
<?php
include "databaseContact.php";
        if (!empty($_POST)) {
            $fullname =$_POST['usernamefirst'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
            $sql="INSERT INTO contact(FullName, Phone, Email, Message) VALUES ('$fullname','$phone','$email','$message')";
            $result = $conn->query($sql);
            if($result){?>
            <div style="text-align: center;">
                <p class="text-white">Message Sent Successfully!</p>
            </div>
        <?php
        }}
        ?>





