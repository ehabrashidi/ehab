<?php
$servername = "localhost";
$username = "root";
$password = "2531588";
$dbname = "water_company";

$cust_c =$_GET['cust_c'];
$v_NO =$_GET['v_NO'];
$name =$_GET['name'];
$balance2 =$_GET['balance2'];




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	echo 'ddd';
} 	


//INSERT INTO totala SELECT * FROM total WHERE sect_c=10;

	$sql = " INSERT INTO visa_payment (v_NO, name  , cust_c,date_of_day, total_due)values ('$v_NO', '$name', '$cust_c',now() , '$balance2')";

if(mysqli_query($conn, $sql)){
	$sql2 = " UPDATE visa_details SET balance = balance - '$balance2' where v_NO ='".$v_NO."'";
	if(mysqli_query($conn, $sql2)){
		$sql3 = " UPDATE madionia SET value = value - '$balance2' where cust_c ='".$cust_c."'";
		if(mysqli_query($conn, $sql3)){
		}
	}echo ".";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



$conn->close();
?> 
<script src="/js/jquery.min.js"></script>
			<script src="/js/sweetalert2.all.min.js"></script>
<script>    
          sweetAlert({
                title:'تم الدفع بنجاح',
                text: '',
                type:'success'
          },function(isConfirm){
                alert('ok');
          });
          $('.swal2-confirm').click(function(){
                window.location.href = 'main.php';
          });
</script>