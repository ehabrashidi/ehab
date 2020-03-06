	<?php

	require_once("config.php");
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
	 
		<form class="" name="contact_form" id="contact_form" method="post" action="">
			<input type="hidden" name="mode" value="login" >			  
				<label class="" for="username"><span class="required">*</span>Username:</label>
				<div class="">
					<input type="text" value="" placeholder="User Name" id="username" class="" name="username" required="" >
				</div>
  
				<label class="" for="user_password"><span class="required">*</span>Password:</label>
				<div class="">
					<input type="password" value="" placeholder="Password" id="user_password" class="form-control" name="user_password" required="" >
				</div>

				<div class="">
					<button class="" type="submit">Submit</button> 
				</div>           
		</form>
	</center> 

<?php //include 'footer.php'; ?>
</html>