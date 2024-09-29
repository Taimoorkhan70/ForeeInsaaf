        <div class="navbar-custom bg-dark">
            <ul class="list-unstyled topnav-menu float-right mb-0">
               <li class="dropdown notification-list">
                  <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                  <img src="assets/images/users/<?php echo $db_user_image;?>" alt="user-image" class="rounded-circle">
                  <span class="pro-user-name ml-1">
                  <?php echo $db_fname; ?> <i class="mdi mdi-chevron-down"></i> 
                  </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                     <!-- item-->
                     <!--<a href="javascript:void(0);" class="dropdown-item notify-item">-->
                     <!--    <i class="dripicons-user"></i>-->
                     <!--    <span>My Account</span>-->
                     <!--</a>-->
                     <!-- item-->
                     <a href="logout.php" class="dropdown-item notify-item">
                     <i class="dripicons-power"></i>
                     <span>Logout</span>
                     </a>
                  </div>
               </li>
            </ul>
         </div>