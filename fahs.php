

<?php

  require_once('style2.css');

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="logo.png"  />
<meta charset="UTF-8">
<title>تسجيل طلب فحص عداد</title>
</head>
<body>
<?php
session_start();

require_once('header1.php');
?>
<h2>
</h2>
<p align="center"></p>

			<form action="insert_fahs.php" class="modal-content animate">
			 <label for="cust_c"><b>الاشتراك</b></label>
				<div class="">
					<input type="text" value="" placeholder="رقم الاشتراك" id="cust_c" class="" name="cust_c" required="" >
				</div>
				<label for="date_of_day"><b>التاريخ</b></label>
				<div class="topright2"><input type="text" name="date_of_day" value="<?php echo date('Y-m-d')." "; ?>" autocomplete="off"></div><br>
				<div class="topright1"><input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" autocomplete="off"></div><br>
				
				
				<div class="">
					<button class="" type="submit">تاكيد الرقم</button> 
				</div>
	
			</form>
		<?php include 'footer.php'; ?>	
</body>
</html>