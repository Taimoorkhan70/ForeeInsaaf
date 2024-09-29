<?php
   session_start();
    include('../db/connection.php');
   $user_email = $_SESSION['user']['email'];
     $select_query = "SELECT * FROM `user` WHERE email ='$user_email'";
     $result = mysqli_query($connection,$select_query);
      $rows =mysqli_fetch_array($result);
      if(isset($_REQUEST['view_project'])){
        extract($_REQUEST);
        // echo "working";
        $query = "SELECT * FROM `project` WHERE project_id='$project_id'";
        $run_query =mysqli_query($connection,$query);
        $row =mysqli_fetch_array($run_query);
      }
   
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
                              <li class="breadcrumb-item"><a href="index.html"><img src="assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
                              <li class="breadcrumb-item" aria-current="page">Employee</li>
                              <li class="breadcrumb-item" aria-current="page">Milestones</li>
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
                  <div class="col-xl-3 col-md-4 theiaStickySidebar">
                     <div class="settings-widget">
                        <div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
                           <a href="user-account-details.html"><img alt="profile image" src="../uploads/<?php echo $rows['image']; ?>" class="avatar-lg rounded-circle"></a>
                           <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                              <p class="mb-2">Welcome,</p>
                              <a href="user-account-details.html">
                                 <h3 class="mb-0"><?php echo $rows['name']; ?></h3>
                              </a>
                              <p class="mb-0"><?php echo $rows['email']; ?></p>
                           </div>
                        </div>
                        <div class="settings-menu">
                           <ul>
                              <li class="nav-item">
                                 <a href="dashboard.html" class="nav-link">
                                 <i class="material-icons">verified_user</i> Dashboard
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="manage-projects.html" class="nav-link active">
                                 <i class="material-icons">business_center</i> Projects
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="favourites.html" class="nav-link">
                                 <i class="material-icons">local_play</i> Favourites
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="review.html" class="nav-link">
                                 <i class="material-icons">record_voice_over</i> Reviews
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="chats.html" class="nav-link">
                                 <i class="material-icons">chat</i> Messages
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="membership-plans.html" class="nav-link">
                                 <i class="material-icons">person_add</i> Membership
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="milestones.html" class="nav-link">
                                 <i class="material-icons">pie_chart</i> Milestones
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="verify-identity.html" class="nav-link">
                                 <i class="material-icons">person_pin</i> Verify Identity
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="deposit-funds.html" class="nav-link">
                                 <i class="material-icons">wifi_tethering</i> Payments
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="profile-settings.html" class="nav-link">
                                 <i class="material-icons">settings</i> Settings
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="index.html" class="nav-link">
                                 <i class="material-icons">power_settings_new</i> Logout
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-md-8">
                     <nav class="user-tabs mb-4">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                           <li class="nav-item">
                              <a class="nav-link active" href="view-project-detail.html">Overview & Discussions</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="milestones.html">Milestones</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="tasks.html">Tasks</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="files.html">Files</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="project-payment.html">Payments</a>
                           </li>
                        </ul>
                     </nav>
                     <div class="my-projects">
                        <div class="my-projects-list pro-list-view">
                           <div class="row">
                              <div class="col-lg-10 flex-wrap">
                                 <div class="projects-card flex-fill">
                                    <div class="card-body">
                                       <div class="projects-details align-items-center">
                                          <div class="project-info">
                                             <h2><?php echo $row['project_name']; ?></h2>
                                             <div class="customer-info">
                                                <ul class="list-details">
                                                   <li>
                                                      <div class="slot">
                                                         <p>Price type</p>
                                                         <h5>Fixed</h5>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="slot">
                                                         <p>Location</p>
                                                         <h5><img src="assets/img/en.png" height="13" alt="Lang"><?php echo $row['country']; ?></h5>
                                                      </div>
                                                   </li>
                                                   <li>
                                                      <div class="slot">
                                                         <p>Expiry</p>
                                                         <h5>4 Days Left</h5>
                                                      </div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="project-hire-info">
                                             <div class="content-divider"></div>
                                             <div class="projects-amount">
                                                <h3>$500.00</h3>
                                                <h5>in 12 Days</h5>
                                             </div>
                                             <div class="content-divider"></div>
                                             <div class="projects-action text-center">
                                                <a href="#" class="hired-detail">Hired on 19 JUN 2021</a>
                                                <div class="pro-status">
                                                   <div class="hire-select">
                                                      <select class="form-control select">
                                                         <option> Is job completed? </option>
                                                         <option>Ongoing</option>
                                                         <option>Completed</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-2 d-flex flex-wrap">
                                 <div class="projects-card flex-fill">
                                    <div class="card-body">
                                       <div class="prj-proposal-count text-center hired">
                                          <img src="assets/img/developer/developer-01.jpg" alt class="img-fluid">
                                          <p class="mb-2">Hannah Finn</p>
                                          <a href="chats.html" class="btn btn-chat">Chat Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pro-post widget-box">
                        <h3 class="pro-title">Overview</h3>
                        <div class="pro-overview">
                           <h4>Project Description</h4>
                           <p><?php echo $row['project_desc']; ?></p>
                           <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. </p>
                              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus.</p> -->
                        </div>
                     </div>
                     <div class="pro-post widget-box">
                        <h3 class="pro-title">Skills Required</h3>
                        <div class="pro-content">
                           <div class="tags">
                              <span class="badge badge-pill badge-design">After Effects</span>
                              <span class="badge badge-pill badge-design">Illustrator</span>
                              <span class="badge badge-pill badge-design">HTML</span>
                              <span class="badge badge-pill badge-design">Whiteboard</span>
                              <span class="badge badge-pill badge-design">HTML</span>
                              <span class="badge badge-pill badge-design">Whiteboard</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php include("../lawyer_portal/inc/footer.php"); ?>
      </div>
      <?php include('inc/footer_links.php'); ?>
   </body>
</html>