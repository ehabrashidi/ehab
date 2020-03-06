<?php
session_start();
?>
<?php require_once "config.php"; ?>
<!Doctype html>
<html>
<head>

 

<title>شركة مياة الشرب</title>
<meta charset="utf-8" />


<link rel="stylesheet" href="<?php echo BASEURL; ?>style.css" >


</head>
<body>

<header>



<div id="header">
<img src="logo.png" />
  
</div>

<div id="nav">


<nav id="menu">
<ul>
<li><a href="fahs.php"> فحص العداد</a></li>
<li><a href="readdata.php">ادخال القراءات</a></li>
<li><a href="shakwa.php">الشكاوي</a></li>
<li><a href="kzan.php">خدمة تنظيف الخزانات</a></li>
<li><a href="madionia.php">الاستعلام عن المديونية</a></li>
<li><a href="madionia_pay.php">سداد المديونية</a></li>
<li><a href="eshtrak.php">اجراءات التعاقد</a></li>
</li>

</ul>
</nav>
</div>

</header>
