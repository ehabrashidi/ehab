	<?php

	require_once("config.php");
	require_once("functions.php");
	$title = "شاشة تسجيل الدخول";
	$mode = $_REQUEST["mode"];
	if ($mode == "login") {
		$username = trim($_POST['username']);
		$pass = trim($_POST['user_password']);

		if ($username == "" || $pass == "") {

			$_SESSION["errorType"] = "danger";
			$_SESSION["errorMsg"] = "Enter manadatory fields";
		} else {
			$sql = "SELECT * FROM user WHERE username = :uname AND password = :upass ";

			try {
				$stmt = $DB->prepare($sql);

				// bind the values
				$stmt->bindValue(":uname", $username);
				$stmt->bindValue(":upass", $pass);

				// execute Query
				$stmt->execute();
				$results = $stmt->fetchAll();

				if (count($results) > 0) {
					$_SESSION["errorType"] = "success";
					$_SESSION["errorMsg"] = "تم تسجيل الدخول بنجاح";

				  
				 
					$_SESSION["username"] = $results[0]["username"];
					$_SESSION["name"] = $results[0]["name"];
					$_SESSION["id"] = $results[0]["id"];

					redirect("main.php");
					exit;
				} else {
					$_SESSION["errorType"] = "info";
					$_SESSION["errorMsg"] = "username or password does not exist.";
				}
			} catch (Exception $ex) {

				$_SESSION["errorType"] = "danger";
				$_SESSION["errorMsg"] = $ex->getMessage();
			}
		}
		redirect("index.php");
	}

	//include 'header.php';
	?>
<!doctype html>
<html>
	<center>



<div id="id01" class="">

		<form class="modal-content animate" name="contact_form" id="contact_form" method="post" action="">
			<input type="hidden" name="mode" value="login" >	
 <div class="imgcontainer">
     
      <img src="logo.png" alt="logo" class="avatar">
    </div>			
				 <label for="username"><b>اسم المستخدم</b></label>
				<div class="">
					<input type="text" value="" placeholder="اسم المستخدم" id="username" class="" name="username" required="" >
				</div>
  
				<label  for="user_password"><b>كلمة السر</b></label>
				<div class="">
					<input type="password" value="" placeholder="كلمة السر" id="user_password" class="form-control" name="user_password" required="" >
				</div>

				<div class="">
					<button class="" type="submit">تسجيل الدخول</button> 
				</div>

	   <label>
		<p> <a href='registration.php'>التسجيل من هنا</a></p>
		 </label>
		</form>
			
	</div>
	
	

        
     
 
		</form>
	</div>
	</center> 


</html>





<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	text-align: right; 
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 20%;
    <!--border-radius: 70%;-->
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
