<?php

$cust_c = $_GET['cust_c'];
$id = $_GET['id'];

 $link = mysqli_connect("localhost", "root", "2531588", "water_company");
// Check connection
if($link === false){
   die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "select * from madionia where cust_c='$cust_c' ";

$result = $link->query($sql);

?>
<?php
require_once('style2.css');
require_once('header1.php');
?>
<html>
<h2></h2>
<table class="data-table">
			<caption class="title"></caption>
			<thead>
				<tr>
					<th>رقم الاشتراك</th>
					<th>عدد الفواتير</th>
					<th>اجمالي المستحق</th>
					
				</tr>
			</thead>
			<tbody>
					<?php
					
		
			
			while($row = $result->fetch_assoc())
			{
			
				
				echo '
				<td>'.$row['cust_c'].'</td>
						<td>'.$row['count'].'</td>
						<td>'.$row['value'].'</td>';
						
					
						
			}?>
			</tbody>
		
		</table>

</html>
<style type="text/css">
		body {
			font-size: 10px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 10px;
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
			font-size: 12px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 3px;
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
	<?php //include 'footer.php'; ?>	