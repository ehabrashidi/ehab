	<?php
	require_once('config.php');
	require_once('style2.css');
	require_once('header1.php');
	 $link = mysqli_connect("localhost", "root", "2531588", "water_company");
	// Check connection
	if($link === false){
	   die("ERROR: Could not connect. " . mysqli_connect_error());
	}

		
	$cust_c = $_GET['cust_c'];
	$id = $_GET['id'];
	$date_of_day = $_GET['date_of_day '];

	$sql = "select * from userdata where cust_c = '$cust_c'";
	try {
					$stmt = $DB->prepare($sql);

					// execute Query
					$stmt->execute();
					$results = $stmt->fetchAll();

					
				} catch (Exception $ex) {				
				}


	// close connection
	mysqli_close($link);
	?>

	<html>
		<h2><?php if (count($results) > 0) {
						echo "تم تاكيد وجود الاشتراك";
					} else {
						header( "refresh:1;fahs.php" );
						echo "رقم الاشتراك غير صحيح برجاء تاكيد الرقم";}?>		
		</h2>		 

	<form action="insert_fahs_100.php"class="modal-content animate">			
		<label for="cust_c"><b>الاشتراك</b></label>
		<div class=""><input type="text" name="cust_c" value="<?php echo $_GET['cust_c']; ?>" autocomplete="off"></div><br>
		<label for="date_of_day"><b>التاريخ</b></label>
		<div class=""><input type="text" name="date_of_day" id="date_of_day" value="<?php echo date('Y-m-d')." "; ?>" autocomplete="off"></div><br>
		<div class=""><input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" autocomplete="off"></div><br>
		
		<div class="">
			<button class="" type="submit">ارسال الطلب</button> 
		</div>
	</form>
	<?php include 'footer.php'; ?>	
	</html>
