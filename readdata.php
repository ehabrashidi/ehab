<!DOCTYPE html>
	<html>
		<?php
		 require_once('style2.css');
		 session_start();
		 require_once('header1.php');
		?>

		<head>
		<title>تسجيل قراءة العداد</title>
		</head>
		<body>
		</br></br></br>
		
		<p align="center"></p>


					<form action="insert_readdata.php"class="modal-content animate">
						<label for="cust_c"><b>الاشتراك</b></label>
						<div class=""><input type="text" name="cust_c" value="" autocomplete="off"></div><br>
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