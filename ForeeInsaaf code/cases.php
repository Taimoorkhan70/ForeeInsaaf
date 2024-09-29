
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Fori Insaf</title>
<?php include("inc/links.php"); ?>
<?php

    include('db/connection.php');


     $query = "SELECT * FROM `project`";
     $run = mysqli_query($connection,$query);
      
     
      // $post['project_id'];
   ?>
   </head>
   <body class="">
      <div class="main-wrapper">
      <?php  $projects="active"; include("inc/header.php"); ?>
      <style>
            .main-nav li a{
                color:#333 !important;
            }
            .navbar-brand h1{
                color:#333 !important;
            }
            .sign-reg{
                background:rgba(0,0,0,0) !important;
            }
        </style>
         <div class="bread-crumb-bar">
            <div class="container">
               <div class="row align-items-center inner-banner">
                  <div class="col-md-12 col-12 text-center">
                     <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="dashboard.php"><img src="assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
                              <li class="breadcrumb-item" aria-current="page">cases</li>
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

                  <div class="col-xl-12 col-md-12">
                     <div class="page-title">
                        <div class="row justify-content-center">
                           <div class="col-xl-10">
                              <h3>All Cases</h3>
                              <h2 class="text-danger"><?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg'];} ?></h2>
                           </div>
                         
                        </div>
                     </div>
                     <!-- <nav class="user-tabs project-tabs">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                           <li class="nav-item">
                              <a class="nav-link active" href="manage-projects.php">All Cases</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">Pending Projects</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">Ongoing Projects</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">Completed Projects</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">Cancelled Projects</a>
                           </li>
                        </ul>
                     </nav> -->
                     <?php
             
                            while($post=mysqli_fetch_assoc($run)){
                            	?>
                     <div class="my-projects-list">
                        <div class="row justify-content-center">
                           <div class="col-lg-8 flex-wrap">
                              <div class="projects-card flex-fill">
                                 <div class="card-body">
                                    <div class="projects-details align-items-center">
                                       <div class="project-info">
                                          
                                          <h2><?php echo $post['project_name']; ?></h2>
                                          <p><?php echo $post['project_desc']; ?></p>
                                          <div class="customer-info">
                                             <ul class="list-details">
                                                <li>
                                                   <div class="slot">
                                                      <p>Case type</p>
                                                      <h5><?php echo $post['project_type']; ?></h5>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="slot">
                                                      <p>Location</p>
                                                      <h5><img src="assets/img/en.png" height="13" alt="Lang"> <?php echo $post['country'] ?></h5>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="slot">
                                                      <p>Date</p>
                                                      <h5><?php echo $post['created_at']; ?></h5>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="project-hire-info">
                                          <div class="content-divider"></div>
                                          <div class="projects-amount">
                                             <!-- <h3>$500.00</h3> -->
                                             <!-- <h5>in 12 Days</h5> -->
                                          </div>
                                          <div class="content-divider"></div>
                                          <div class="projects-action text-center">
                                             <?php if(isset($_SESSION['user']) ){
                                                if($_SESSION['user']['role']==1){
                                                   
                                                   ?>
                                                    <a href="project-detail.php?id=<?php echo $post['project_id']?>" class="projects-btn">Send Proposal</a>

   
                                                   <?php
                                                }
                                               

                                             }else{
                                                ?>
                                                   <a href="project-detail.php?id=<?php echo $post['project_id']?>" class="projects-btn">Send Proposal</a>

                                                <?php
                                             } ?>
                                           
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-2 d-flex flex-wrap">
                              <div class="projects-card flex-fill">
                                 <div class="card-body p-2">
                                    
                                    <div class="prj-proposal-count text-center hired">
                                        <?php 
                                        if($post['status']==0){
                                            ?>
                                                  <h3 style="color:green">Open</h3>
                                            <?php 
                                        }
                                        if($post['created_at']==1){
                                            ?>
                                                <h3>Hired</h3>
                                                <img src="assets/img/developer/developer-01.jpg" alt class="img-fluid">
                                                <p class="mb-0">Hannah Finn</p>                   
                                            <?php
                                        }
                                        
                                        ?>
                                         
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
                   
                        }
                        ?>
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <ul class="paginations list-pagination">
                              <li class="page-item"><a href="#">Previous</a></li>
                              <li class="page-item"><a href="#" class="active">1</a></li>
                              <li class="page-item"><a href="#">Next</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php include("inc/footer.php"); ?>
      </div>
      <?php include("inc/footer_links.php"); ?>
   </body>
</html>