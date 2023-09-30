<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tangara|Teacher's Portal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>


  <header id="header" class="fixed-top bg-black ">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo me-auto"><a href="index.html">Tangara</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="teacher.php" class="logo me-auto nav-link text-white"><img src="assets/img/favicon.png" alt="" class="img-fluid">Tangara Schools</a>
      

      <nav id="navbar mb-5" class="navbar">
        <div class="container-fluid">
        <ul>
          <li <?php if(@$_GET['q']==0) echo 'class="active"'; ?>><a class="nav-link scrollto active" href="dashboard.php?q=0"><i class="fa fa-home"></i>Home</a></li>
          
          <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a class="nav-link scrollto active" href="dashboard.php?q=1"><i class="fa fa-users"></i>Students</a></li>
          <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a class="nav-link scrollto active" href="dashboard.php?q=2"><i class="fa fa-home"></i>Ranking</a></li>
          <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active"'; ?>">
                    <li><a href="dashboard.php?q=4" class="nav-link"><i class="fa fa-add"></i>Add Quiz</a></li>
                    <li><a href="dashboard.php?q=5" class="nav-link"><i class="fa fa-subtract"></i>Remove Quiz</a></li>
          
          

          <li <?php echo''; ?> ><a class="nav-link scrollto" id="abt" href="logout1.php?q=dashboard.php"><i class="fa fa-power-off"></i>Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </li>
    </ul>
  </div>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


<style type="text/css">
  .loglogo img{
    height: 100px;
    width: 100px;
    margin-top: -30px;
    
  }
  .container{
    margin-top: 20px;

  }
</style>

</html>