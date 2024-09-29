<?php 
  ob_start();
  // session_start();
  include('../db/connection.php');
   $user_email = $_SESSION['user']['email'];
   $select_query = "SELECT * FROM `user` WHERE email ='$user_email'";
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
                  <a href="index.html" class="navbar-brand logo">
                  <img class="img" src="assets/img/logo1.png" class="img-fluid" alt="Logo">
                  </a>
               </div>
               <div class="main-menu-wrapper">
                  <div class="menu-header">
                     <a href="index.html" class="menu-logo">
                     <img class="img" src="assets/img/logo1.png" class="img-fluid" alt="Logo">
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
                     <?php
                     if($rows['role']==1){
                        ?>

                     <div class="dropdown-menu emp">
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="lawyer-profile.php"><i class="material-icons">verified_user</i> View profile</a>
                        <div class="drop-head">Projects Settings</div>
                        <a class="dropdown-item" href="lawyer-proposels.php"><i class="material-icons">business_center</i> Proposels</a>
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="lawyer-profile-settings.php"> <i class="material-icons">settings</i> Profile Settings</a>
                        <a class="dropdown-item" href="../logout.php"><i class="material-icons">power_settings_new</i> Logout</a>
                     </div>
                        <?php
                     }else{
                        ?>
   <div class="dropdown-menu emp">
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="client-profile.php"><i class="material-icons">verified_user</i> View profile</a>
                        <div class="drop-head">Projects Settings</div>
                        <a class="dropdown-item" href="manage-cases.php"><i class="material-icons">business_center</i> cases</a>
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="client-profile-settings.php"> <i class="material-icons">settings</i> Profile Settings</a>
                        <a class="dropdown-item" href="../logout.php"><i class="material-icons">power_settings_new</i> Logout</a>
                     </div>

                        <?php
                     }
                     
                     ?>
                     <div class="dropdown-menu emp">
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="lawyer-profile.php"><i class="material-icons">verified_user</i> View profile</a>
                        <div class="drop-head">Projects Settings</div>
                        <a class="dropdown-item" href="lawyer-proposels.php"><i class="material-icons">business_center</i> Proposels</a>
                        <div class="drop-head">Account Details</div>
                        <a class="dropdown-item" href="lawyer-profile-settings.php"> <i class="material-icons">settings</i> Profile Settings</a>
                        <a class="dropdown-item" href="../logout.php"><i class="material-icons">power_settings_new</i> Logout</a>
                     </div>
                  </li>
                  <li><a href="../cases.php" class="login-btn">Find a Case</a></li>
               </ul>
            </nav>
         </header>