<?php 
  ob_start();
  // session_start();
  error_reporting(0);
  include('../db/connection.php');

   $user_email = $_SESSION['user']['email'];
   $select_query = "SELECT * FROM `user` WHERE `user_id` ='".$_SESSION['user']['user_id']."'";
   $result = mysqli_query($connection,$select_query);
    $rows =mysqli_fetch_array($result);


 ?>
         <header class="header header-bg">
            <nav class="navbar navbar-expand-lg header-nav">
               <div class="navbar-header">
                  <a id="mobile_btn" href="javascript:void(0);">
                  <span class="bar-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                  </span>
                  </a>
                  <a href="index.php" class="navbar-brand logo">
                  <img src="assets/img/logo1.png" width="50px" class="img-fluid" alt="Logo">
                  </a>
               </div>
               <div class="main-menu-wrapper">
                  <div class="menu-header">
                     <a href="index.php" class="menu-logo">
                     <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                     </a>
                     <a id="menu_close" class="menu-close" href="javascript:void(0);">
                     <i class="fas fa-times"></i>
                     </a>
                  </div>
                  <ul class="main-nav">
                  <li>
                                <a href="../index.php">Home</a>
                            </li>
                            <li>
                                <a href="../about.php">About</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <a href="../blogs.php">Blogs</a>
                            </li>
                  </ul>
               </div>
               <ul class="nav header-navbar-rht">
                  <li class="nav-item dropdown has-arrow main-drop account-item">
                     <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                     <span class="user-img">
                     <img src="../uploads/<?php echo $rows['image']; ?>" alt>
                     </span>
                     <span><?php echo $rows['name']; ?></span>
                     </a>
                     <div class="dropdown-menu emp">
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="client-profile.php"><i class="material-icons">verified_user</i> View profile</a>
                        <div class="drop-head">Projects Settings</div>
                        <a class="dropdown-item" href="manage-cases.php"><i class="material-icons">business_center</i> cases</a>
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="client-profile-settings.php"> <i class="material-icons">settings</i> Profile Settings</a>
                        <a class="dropdown-item" href="../logout.php"><i class="material-icons">power_settings_new</i> Logout</a>
                     </div>
                  </li>
                  <li><a href="post-case.php" class="login-btn">Post a Case </a></li>
               </ul>
            </nav>
         </header>