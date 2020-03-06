<?php

$cust_c = $_GET['cust_c'];
$id = $_GET['id'];
$date_of_day =$_GET['date_of_day'];
$reading =$_GET['reading'];
 $link = mysqli_connect("localhost", "root", "2531588", "water_company");
// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "INSERT INTO readdata (id,date_of_day,cust_c,reading)VALUES ('$id','$date_of_day','$cust_c','$reading')";
 
if(mysqli_query($link, $sql)){
   echo ".";
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
                title:'تم إرسال البيانات بنجاح',
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