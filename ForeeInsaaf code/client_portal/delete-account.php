<?php  
 session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<title>KofeJob</title>
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
<li class="breadcrumb-item"><a href="index.php"><img src="assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
<li class="breadcrumb-item" aria-current="page">Employee</li>
<li class="breadcrumb-item" aria-current="page">Settings</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</div>
<?php include('inc/side_bar.php'); ?>
<div class="col-xl-9 col-md-8">
<nav class="user-tabs mb-4">
<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
<li class="nav-item">
<a class="nav-link" href="freelancer-profile-settings.php">Basic Settings</a>
</li>
<li class="nav-item">
<a class="nav-link" href="change-password.php">Change Password</a>
</li>
<li class="nav-item">
<a class="nav-link active" href="delete-account.php">Delete Account</a>
</li>
</ul>
</nav>
<div class="setting-content">
<div class="card">
<div class="pro-head">
<h3 class="pro-title without-border mb-0">Delete Account</h3>
</div>
<div class="pro-body">
<form action="#">
<div class="form-group">
<label>Please Explain Further**</label>
<textarea class="form-control" rows="5"></textarea>
</div>
<div class="form-group">
<label>Password*</label>
<input type="password" class="form-control">
</div>
<div class="row">
<div class="col-md-12">
<a class="btn btn-primary click-btn btn-plan" data-bs-toggle="modal" href="#delete-acc">Delete Account</a>
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

<?php include("../lawyer_portal/inc/footer.php"); ?>
</div>


<div class="modal fade custom-modal" id="delete-acc">
<div class="modal-dialog modal-dialog-centered modal-md">
<div class="modal-content">
<div class="modal-body del-modal">
<form action="https://kofejob.dreamguystech.com/template/index.php">
<div class="text-center pt-0 mb-5">
<i class="fas fa-exclamation-triangle fa-3x"></i>
<h3>Are you sure? Want to delete Account</h3>
</div>
<div class="submit-section text-center">
<button data-bs-dismiss="modal" class="btn btn-primary black-btn click-btn btn-plan">Cancel</button>
<button type="submit" class="btn btn-primary click-btn btn-plan">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
<?php include('inc/footer_links.php'); ?>
</body>


</html>