            <header class="header header-five">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <a href="index.php" class="navbar-brand logo text-white">
                             <img class="img" src="assets/img/logo1.png" width="50px" class="img-fluid" alt="Logo" /> 
                           <!--<h1 class="ok" > FORI INSAF</h1>-->
                        </a>
                        <a href="index.php" class="navbar-brand logo scroll-logo">
                             <img class="img" src="assets/img/logo1.png" width="50px" class="img-fluid" alt="Logo" /> 
                            <!--<h1 class="ok"> FORI INSAF</h1>-->
                        </a>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index.php" class="menu-logo">
                                <img src="assets/img/logo1.png"  width="80px" class="img-fluid" alt="Logo" />
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <ul class="main-nav">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <a href="blogs.php">Blogs</a>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav header-navbar-rht">
                        <?php
                        if(isset($_SESSION['user'])){
                                $Q="Select * FROM user where user_id='".$_SESSION['user']['user_id']."'";
                                $r=mysqli_query($connection,$Q);
                                $user=mysqli_fetch_assoc($r);
                            ?>
                            <li>
                                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                                <span class="user-img">
                                <img src="uploads/<?php echo $user['image']; ?>" alt>
                                </span>
                                <span class="name"><?php echo $user['name']; ?></span>
                                </a>
                                <div class="dropdown-menu emp" style="left:auto;right:auto">
                                    <div class="drop-head">Account Details</div>
                                    <?php
                                    if($_SESSION['user']['role']=='0'){
                                        ?>
                                         <a class="dropdown-item" href="client_portal/client-profile.php"><i class="material-icons">verified_user</i> View profile</a>
                                        <?php
                                    }
                                    if($_SESSION['user']['role']=='1'){
                                        ?>
                                         <a class="dropdown-item" href="client_portal/lawyer-profile.php"><i class="material-icons">verified_user</i> View profile</a>
                                        <?php
                                    }
                                    
                                    ?>

                                    <div class="drop-head">Projects Settings</div>
                                    <a class="dropdown-item" href="manage-projects.html"><i class="material-icons">business_center</i> Projects</a>
                                    <a class="dropdown-item" href="favourites.html"><i class="material-icons">local_play</i> Favourites</a>
                                    <a class="dropdown-item" href="review.html"><i class="material-icons">pie_chart</i> Reviews</a>
                                    <div class="drop-head">Account Settings</div>
                                    <a class="dropdown-item" href="profile-settings.html"> <i class="material-icons">settings</i> Profile Settings</a>
                                    <a class="dropdown-item" href="logout.php"><i class="material-icons">power_settings_new</i> Logout</a>
                                </div>
                            </li>


                            <?php
                            
                        }else{
                            ?>
                                
                                <li class="sign-reg"><a href="login.php" class="log-btn"> Sign in</a> <span class="space-login">/</span><a href="register.php" class="log-btn"> Register</a></li>

                            <?php
                        }
                        if(isset($_SESSION['user']) && $_SESSION['user']['role']==0){

                            ?>
                            <li><a href="client_portal/post-case.php" class="login-btn">Post a Case </a></li>

                            <?php

                        }else{

                            ?>
                             <li><a href="cases.php" class="login-btn">Find a Case </a></li>
                            <?php
                        }
                        ?>
                        
                        
                    </ul>
                </nav>
            </header>
          