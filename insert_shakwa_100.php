<?php

$cust_c = $_GET['cust_c'];
$id = $_GET['id'];
$date_of_day =$_GET['date_of_day'];
$shakwa_r =$_GET['shakwa_r'];
 $link = mysqli_connect("localhost", "root", "2531588", "water_company");
// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "INSERT INTO shakwa (id,date_of_day,cust_c,shakwa_r)VALUES ('$id','$date_of_day','$cust_c','$shakwa_r')";
 
if(mysqli_query($link, $sql)){
   echo "تم حفظ البيانات بنجاح";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
<script src="/js/jquery.min.js"></script>
			<script src="/js/sweetalert2.all.min.js"></script>
<script>    
          sweetAlert({
                title:'تم إرسال الشكوي بنجاح',
                text: '',
                type:'success'
          },function(isConfirm){
                alert('ok');
          });
          $('.swal2-confirm').click(function(){
                window.location.href = 'main.php';
          });
</script>
<?php include 'footer.php'; ?>	
