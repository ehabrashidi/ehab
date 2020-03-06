<!DOCTYPE html>
<html>
<body>
<?php
 require_once('style.css');
  require_once('style2.css');
 require_once('header1.php');
?>
<?php
$servername = "localhost";
$username = "root";
$password = "2531588";
$dbname = "water_company";
$v_NO =$_GET['v_NO'];
$name =$_GET['name'];
$password =$_GET['password'];
$cust_c =$_GET['cust_c'];
$conn = mysqli_connect("localhost", "root", "2531588", "water_company");
// Check connection
if($conn === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}



$sql = "SELECT *  FROM visa_details Where  (v_NO ='".$v_NO."')  AND (password ='".$password."') ";
$result = $conn->query($sql);

?> 

<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>






</br></br></br>
	<h1> بيانات العميل</h1>
	<table class="data-table">
		<caption class="title"></caption>
		<thead>
			<tr>
	
				
				<th>الرصيد</th>
				<th>رقم البطاقة</th>
				<th>اسم العميل</th>
				
				
			</tr>
		</thead>
		<tbody>
				<?php
		$cc 	= 1;
		$total 	= 0;
		$total1 	= 0;
		$total11 	= 0;
		
	
		
		while($row = $result->fetch_assoc())
		{
		
			
			echo '
					<td>'.$row['balance'].'</td>
					<td>'.$row['v_NO'].'</td>
					
					<td>'.$row['name'].'</td>
					';
					
					
					
					
			
		}?>
			
		
		
		</tbody>
		
		
	</table>
	<form action="update_payment.php" method="get">

<div class="toprightx3"><input type="hidden" name="v_NO" id="v_NO" value="<?php echo $_GET['v_NO']; ?>" autocomplete="off"></div><br>
<div class="toprightx3"><input type="hidden" name="name" id="name" value="<?php echo $_GET['name']; ?>" autocomplete="off"></div><br>
<div class="toprightx3"><input type="hidden" name="password" id="password" value="<?php echo $_GET['password']; ?>" autocomplete="off"></div><br>
<div class="toprightx3"><input type="hidden" name="cust_c" id="cust_c" value="<?php echo $_GET['cust_c']; ?>" autocomplete="off"></div><br>
<div class="toprightx3"><input type="hidden" name="balance2" id="balance2" value="<?php echo $_GET['balance2']; ?>" autocomplete="off"></div><br>
<center>
<div class="topright3"> <input type="submit" value="تسجيل البيانات النهائية"class="button"></div><br>
</center>
</form>
<?php //include 'footer.php'; ?>	