<?php
   session_start();
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Foree Insaaf</title>
      <?php include('inc/links.php'); ?>
      <style>
         .dropdown-toggle::after {
         color:#fff;
         }
         .name{
         color: #fff;
         }
         .sticky .name, .dropdown-toggle::after{
         color:#000;
         }
         @media (min-width: 600px) {
         .img{
         margin-left:20px;
         width:50px;
         height:50;
         border-radius:3px;
         }
         .ok{
         margin-left:60px;
         margin-top:-40px;
         }
         }
         @media (min-width: 320px) and (max-width: 320px) {
         .img{
         width:50px;
         height:50;
         border-radius:3px;
         }
         .ok{
         margin-left:60px;
         margin-top:-40px;
         }
         }
      </style>
   </head>
   <body class="dashboard-page">
      <div class="main-wrapper">
         <?php include('inc/header.php'); ?>
         <div class="bread-crumb-bar">
            <div class="container">
               <div class="row align-items-center inner-banner">
                  <div class="col-md-12 col-12 text-center">
                     <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                           <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="dashboard.php"><img src="../assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
                              <li class="breadcrumb-item" aria-current="page">Settings</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="content content-page">
            <div class="container-fluid">
            <div class="row">
               <div class="col-md-3">
                 <?php include('inc/sidebar.php'); ?>
                </div>                 
     
            <div class="col-xl-9 col-md-8">
            <nav class="user-tabs mb-4">
               <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                  <li class="nav-item">
                     <a class="nav-link" href="client-profile-settings.php">Basic Settings</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" href="change-password.php">Change Password</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="edi-profile-images.php">Change Profile Image</a>
                  </li>
               </ul>
            </nav>
            <div class="account-content setting-content">
               <div class="card">
                  <div class="pro-head">
                     <h3 class="pro-title without-border mb-0">Change Password</h3>
                  </div>
                  <div class="pro-body">
                     <div class="row">
                        <?php
                        if(isset($_GET['status']) && $_GET['status']=='true'){
                           ?>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="alert alert-success" >Password has been Successfully changed!</div>
                           </div>
                        </div>
                           <?php
                        }
                        if(isset($_GET['status']) && $_GET['status']=='old_pass_false'){
                           ?>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="alert alert-danger" >PLease insert you correct old password!</div>
                           </div>
                        </div>
                           <?php
                        }
                        if(isset($_GET['status']) && $_GET['status']=='false'){
                           ?>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="alert alert-danger" >Passwords Did not match</div>
                           </div>
                        </div>
                           <?php
                        }
                        
                        
                        ?>
                      
                        <div class="col-md-8">
                           <form action="" method="post">
                              <div class="form-group">
                                 <label>Old Password</label>
                                 <input type="password" name="old_pass" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>New Password</label>
                                 <input type="password" name="new_pass" class="form-control">
                              </div>
                              <div class="form-group">
                                 <label>Confirm Password</label>
                                 <input type="password" name="c_pass" class="form-control">
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <input class="btn btn-primary click-btn btn-plan" name="submit" type="submit" value="Update">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
               </div>
            </div>
         </div>
     
 

      </div>
      </div>
      </div>
      <?php include("../lawyer_portal/inc/footer.php"); ?>
      </div>
      <?php include('inc/footer_links.php');
      
      if($_POST['submit']){
         print_r($_POST);
         if($_POST['old_pass']==$_SESSION['user']['password']){
           if($_POST['new_pass']==$_POST['c_pass']){
              $Q="UPDATE `user` SET `password`='".$_POST['new_pass']."' WHERE `user_id`='".$_SESSION['user']['user_id']."'";
              if(mysqli_query($connection,$Q)){
               $_SESSION['user']['password']=$_POST['new_pass'];
               echo "<script> window.location='change-password.php?status=true'; </script>";
              }
           }else{
            echo "<script> window.location='change-password.php?status=false'; </script>";
           }
         }else{
            echo "<script> window.location='change-password.php?status=old_pass_false'; </script>";
         }
      }?>
   </body>
</html>