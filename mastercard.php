<?php

 require_once('style3.css');
 require_once('header1.php');
$cust_c = $_GET['cust_c'];


$link = mysqli_connect("localhost", "root", "2531588", "water_company");
// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<body>
</br></br></br>
	<p align="center"></p>
		<form action="mastercard2.php"class="modal-content animate">
		<label for="v_NO"><b>رقم البطاقة</b></label>
				<div class="">
					<input type="text" value="" placeholder="رقم البطاقة" id="v_NO" class="" name="v_NO" required="" >
				</div>
					<label for="name"><b>اسم العميل</b></label>
				<div class="">
					<input type="text" value="" placeholder="اسم العميل" id="name" class="" name="name" required="" >
				</div>
					<label for="password"><b>الرقم السري</b></label>
				<div class="">
					<input type="password" value="" placeholder="الرقم السري" id="password" class="" name="password" required="" >
				</div>
					<label for="balance2"><b>المبلغ المدفوع</b></label>
				<div class="">
					<input type="text" value="" placeholder="المبلغ المدفوع" id="balance2" class="" name="balance2" required="" >
				</div>
				<label for="cust_c"><b>الاشتراك</b></label>
				<div class="">
					<input type="text" value="<?php echo $_GET['cust_c']; ?>" readonly  placeholder="الاشتراك" id="cust_c" class="" name="cust_c" required="" >
				</div>
			
			
			<div class="">
					<button class="" type="submit">حفظ البيانات</button> 
				</div>
			
			
		</form>
		 <?php include 'footer.php'; ?>	
	</body>