<?php
  session_start();
  include('../db/connection.php');
  if(!isset($_SESSION['user']) || $_SESSION['user']['role'] != "0"){
   header("location: ../login.php?msg=Login Please..");
  }
   $user_email = $_SESSION['user']['email'];
   $select_query = "SELECT * FROM `user` WHERE email ='$user_email'";
   $result = mysqli_query($connection,$select_query);
    $rows =mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Fori Insaaf</title>
    <?php include("inc/links.php"); ?>
  
   </head>
   <body class="dashboard-page">
      <div class="main-wrapper">
<?php include("inc/header.php"); ?>
         <div class="bread-crumb-bar">
            <div class="container">
               <div class="row align-items-center inner-banner">
                  <div class="col-md-12 col-12 text-center">
                     <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="dashboard.php"><img src="../assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
                              <li class="breadcrumb-item" aria-current="page">Dashboard</li>
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
                  <?php $home='active'; include("inc/sidebar.php") ?>
                  </div>
                  <div class="col-xl-9 col-md-8">
                     <div class="dashboard-sec">
                        <div class="row">
                           <div class="col-md-6 col-lg-4">
                              <div class="dash-widget">
                                 <div class="dash-info">
                                    <div class="dash-widget-info">Cases Posted</div>
                                    <div class="dash-widget-count">
                                      <?php
                                      $SQL="Select count(*) as total from project  where user_id='".$_SESSION['user']['user_id']."'";
                                      $re=mysqli_query($connection,$SQL);
                                      $total=mysqli_fetch_assoc($re);
                                      echo $total['total'];
                                      ?>
                                    </div>
                                 </div>
                                 <div class="dash-widget-more">
                                    <a href="manage-cases.php" class="d-flex">View All <i class="fas fa-arrow-right ms-auto"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="dash-widget">
                                 <div class="dash-info">
                                    <div class="dash-widget-info">Ongoing Cases</div>
                                    <div class="dash-widget-count">
                                    <?php
                                      $SQL="Select count(*) as total from project where status='0' and user_id='".$_SESSION['user']['user_id']."'";
                                      $re=mysqli_query($connection,$SQL);
                                      $total=mysqli_fetch_assoc($re);
                                      echo $total['total'];
                                      ?>
                                    </div>
                                 </div>
                                 <div class="dash-widget-more">
                                    <a href="ongoing-cases.php" class="d-flex">View All <i class="fas fa-arrow-right ms-auto"></i></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="dash-widget">
                                 <div class="dash-info">
                                    <div class="dash-widget-info">Completed Cases</div>
                                    <div class="dash-widget-count">
                                    <?php
                                      $SQL="Select count(*) as total from project where status='1' and user_id='".$_SESSION['user']['user_id']."'";
                                      $re=mysqli_query($connection,$SQL);
                                      $total=mysqli_fetch_assoc($re);
                                      echo $total['total'];
                                      ?>
                                    </div>
                                 </div>
                                 <div class="dash-widget-more">
                                    <a href="completed-cases.php" class="d-flex">View Details <i class="fas fa-arrow-right ms-auto"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     
                        <div class="row">
                           <div class="col-md-12">
                              <div class="card card-table">
                                 <div class="card-header">
                                    <div class="row">
                                       <div class="col">
                                          <h4 class="card-title">Recently Posted Cases</h4>
                                       </div>
                                       <div class="col-auto">
                                          <a href="manage-cases.php" class="btn-right btn btn-sm fund-btn">
                                          View All
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card-body">
                                    <div class="table-responsive table-job">
                                       <table class="table table-hover table-center mb-0">
                                          <thead class="thead-pink">
                                             <tr>
                                                <th>Details</th>
                                                <th>Case Type</th>
                                                <th>Created on</th>
                                                <th>Proposals</th>
                                                <th class="text-end">Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <?php 
                                              $Q="SELECT * FROM `project` where `user_id`='".$_SESSION['user']['user_id']."' order by `project_id` desc limit 5";
                                             $re=mysqli_query($connection,$Q);
                                             while($case=mysqli_fetch_assoc($re)){
                                                 
                                                   ?>
                                                         <tr>
                                                <td>
                                                   <span class="detail-text"><?php echo $case['project_name'] ?></span>
                                                 
                                                </td>
                                                <td><?php echo $case['case_type'] ?></td>
                                                <td><?php echo $case['created_at'] ?></td>
                                                <td><?php 
                                               
                                                $SQL="Select count(*) as `total` FROM `proposels` WHERE `project_id`='".$case['project_id']."'";
                                                $re=mysqli_query($connection,$SQL);
                                                $total=mysqli_fetch_assoc($re);
                                                echo $total['total'];
                                                
                                                ?></td>
                                                <td class="text-end"><a href="case-proposels.php?id=<?php echo $case['project_id']; ?>" class="text-success">View</a></td>
                                             </tr>
                                                   <?php
                                             }
                                             
                                             ?>
                                             
                                        
                                          </tbody>
                                       </table>
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
      <?php include("inc/footer_links.php"); ?>
   </body>
</html>