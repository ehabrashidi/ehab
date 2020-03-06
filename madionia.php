<?php
 require_once('config2.php');
?>

<?php
 require_once('style3.css');
 require_once('header1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>الاستعلام عن المديونية</title>
</head>
<body>
<?php
//session_start();
 
?>
<h2></h2>
<p align="center">الاستعلام عن المديونية</p>
			<form action="madionia1.php"class="modal-content animate">
			 <label for="cust_c"><b>الاشتراك</b></label>
				<div class=""><input type="text" name="cust_c" value="" autocomplete="off"></div><br>
				
				<div class="">
					<button class="" type="submit">تاكيد الرقم</button> 
				</div>
				
			</form>
</body>
<?php include 'footer1.php'; ?>	
</html>