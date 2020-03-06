<?php
 require_once('config2.php');
?>

<?php
 require_once('style2.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>تسجيل طلب تنظيف الخزانات</title>
</head>
<body>
<?php
session_start();
require_once('header1.php'); 
?>
<h2></h2>
<p align="center">تسجيل طلب تنظيف الخزانات</p>
			<form action="insert_kzan.php"class="modal-content animate">
			
				<div class="topright1"><input type="hidden" name="cust_c" value="0" autocomplete="off"></div><br>
				<label for="cust_c"><b>التاريخ</b></label>
				<div class="topright2"><input type="text" name="date_of_day" value="<?php echo date('Y-m-d')." "; ?>" autocomplete="off"></div><br>
				<div class="topright1"><input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" autocomplete="off"></div><br>
				<div class="">
					<button class="" type="submit">تاكيد الرقم</button> 
				</div>
			</form>
</body>
<?php include 'footer.php'; ?>	
</html>