<!DOCTYPE html>
<html lang="en">
<head>

  <title>شركة مياة الشرب</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap/boost/jquery.min.js"></script>
 <script src="bootstrap/boost/bootstrap.min.js"></script>
 <link href="bootstrap/boost/bootstrap.min.css" rel="stylesheet">
       <link rel="icon" href="logo.png"  />
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 0px;      
      font-size: 20px;
      color: #111;
  }
  h2 {
    margin: 100px 0px 0px 550px;
	padding: 0px 0px;
    letter-spacing: 0px;      
    font-size: 40px;
    color: red;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(10%);
      filter: grayscale(10%); /* make all photos black and white */ 
      width: 35%; /* Set width to 40% */
	   margin-top: 100px;
	    margin-left: 500px;
    
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
 
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #0c0c0d;
      border: 0;
      font-size: 18px !important;
     
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
	line-height: 60px;
    height: 75px;
    padding-top: 0;	  
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="logout.php">تسجيل الخروج</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">اماكن الفروع
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="maps-hadar.php">فروع المدن</a></li>
            <li><a href="maps-reef.php">فروع الريف</a></li>
			<li><a href="https://www.google.com/maps/place/%D8%B4%D8%B1%D9%83%D8%A9+%D9%85%D9%8A%D8%A7%D8%A9+%D8%A7%D9%84%D8%B4%D8%B1%D8%A8+%D9%88%D8%A7%D9%84%D8%B5%D8%B1%D9%81+%D8%A7%D9%84%D8%B5%D8%AD%D9%8A+%D9%81%D8%B1%D8%B9+%D8%A7%D9%85%D8%A8%D8%A7%D8%A8%D8%A9%E2%80%AD/@30.063666,31.2151983,17z/data=!4m8!1m2!2m1!1z2YXYrdi32Ycg2YXZitin2Ycg2KfZhdio2KfYqNmH!3m4!1s0x0:0xe0bae2340bc9630f!8m2!3d30.0640428!4d31.2136602">المقر الرئيسي</a></li>
           
          </ul>
        </li>
	
        <li><a href="fahs.php">فحص العداد</a></li>
        <li><a href="readdata.php">ادخال القراءات</a></li>
        <li><a href="shakwa.php">الشكاوي</a></li>
		<li><a href="eshtrak.php">اجراءات التعاقد</a></li>
      
		<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">خدمة تنظيف الخزانات
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="kzan-m.php">لمشتركين الشركة</a></li>
            <li><a href="kzan.php">لغير المشتركين</a></li>
           
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">المديونية
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="madionia.php">استعلام عن المديونية</a></li>
            <li><a href="madionia_pay.php">سداد المديونية</a></li>
			
           
          </ul>
        </li>
		<li><a href="main.php">الرئيسية</a></li>
		<li><a href="main.php"><img src="logo.png" title="main" width="60" height="40" /></a></li>

      </ul>
    </div>
  </div>
</nav>