
<link rel="shortcut icon" href="assets/img/logo1.png" type="image/x-icon">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      
      <?php
      error_reporting(0);
      if(isset($_SESSION['user']) && $_SESSION['user']['role']==1){

      }else{
            header("location: ../login.php");
      }
      ?>