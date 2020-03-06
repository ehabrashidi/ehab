<?php
require_once('config.php');
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

				// bind the values
				$stmt->bindValue(":uname", $username);
				$stmt->bindValue(":upass", $pass);

				// execute Query
				$stmt->execute();
				$results = $stmt->fetchAll();

				if (count($results) > 0) {
					$_SESSION["errorType"] = "success";
					$_SESSION["errorMsg"] = "تم تسجيل الدخول بنجاح";

					echo "تم تاكيد وجود الاشتراك";
					
				} else {
					$_SESSION["errorType"] = "info";
					$_SESSION["errorMsg"] = "username or password does not exist.";
					echo "أنت غير مشترك بالشركة برجاء ادخال رقم اشتراك صحيح";
				}
			} catch (Exception $ex) {

				$_SESSION["errorType"] = "danger";
				$_SESSION["errorMsg"] = $ex->getMessage();
			}


// close connection
mysqli_close($link);
?>
<?php
require_once('style3.css');
require_once('header1.php');
?>
<html>
<h2><?php if (count($results) > 0) {
						echo "تم تاكيد وجود الاشتراك";
					} else {
						header( "refresh:1;madionia_pay.php" );
						echo "رقم الاشتراك غير صحيح برجاء تاكيد الرقم";}?>		
		</h2>		 
		<form action="madionia1_100.php"class="modal-content animate">
		<label for="cust_c"><b>الاشتراك</b></label>
<div class=""><input type="text" name="cust_c" readonly value="<?php echo $_GET['cust_c']; ?>" autocomplete="off"></div><br>
<label for="cust_c"><b>التاريخ</b></label>
				<div class="topright2"><input type="text" name="date_of_day" id="date_of_day" value="<?php echo date('Y-m-d')." "; ?>" autocomplete="off"></div><br>
				<div class="topright1"><input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>" autocomplete="off"></div><br>
<div class="">
					<button class="" type="submit">ارسال الطلب</button> 
				</div>
</form>
<?php include 'footer.php'; ?>	
</html>
