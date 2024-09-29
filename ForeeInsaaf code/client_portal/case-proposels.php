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
   </head>
   <body>
      <div class="main-wrapper">
      <?php include('inc/header.php'); ?>
         <div class="breadcrumb-bar">
            <div class="container">
               <div class="row align-items-center inner-banner">
                  <div class="col-md-12 col-12 text-center">
                     <h2 class="breadcrumb-title">Proposels</h2>
                     <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Proposels</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
         <div class="content">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-md-4 theiaStickySidebar">
                  <?php include('inc/sidebar.php');
                $Q="SELECT * FROM `project` WHERE `project_id`='".$_GET['id']."'";
                  $re=mysqli_query($connection,$Q);
              
                  $row=mysqli_fetch_assoc($re);
                  ?>
                  </div>
                  <div class="col-xl-9 col-md-8">
                     
                
                     <div class="my-projects-list">
                        <div class="row">
                           <div class="col-lg-10 flex-wrap">
                              <div class="projects-card flex-fill">
                                 <div class="card-body">
                                    <div class="projects-details align-items-center">
                                       <div class="project-info">
                                          <!-- <span>Dreamguystech</span> -->
                                          <h2><?Php echo $row['project_name']; ?></h2>
                                          <div class="customer-info">
                                             <ul class="list-details">
                                                <li>
                                                   <div class="slot">
                                                      <p>Case type</p>
                                                      <h5><?Php echo $row['case_type']; ?></h5>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="slot">
                                                      <p>Location</p>
                                                      <h5><?Php echo $row['city'].', '.$row['country']; ?></h5>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="slot">
                                                      <p>Date</p>
                                                      <h5><?Php echo $row['created_at']; ?></h5>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-2 d-flex flex-wrap">
                              <div class="projects-card flex-fill">
                                 <div class="card-body p-2">
                                    <div class="prj-proposal-count text-center">
                                       <span>
                                        <?php
                                         $Q="SELECT count(*) as `total` FROM `proposels` WHERE `project_id`='".$_GET['id']."'";
                                         $res=mysqli_query($connection,$Q);
                                         $total=mysqli_fetch_assoc($res);
                                         echo $total['total'];
                                          ?>
                                       </span>
                                       <h3>Proposals</h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="proposals-section mb-4">
                        <h3 class="page-subtitle">Proposals By Lawyers</h3>
                        <div class="proposal-card">
                            <?php  
                                $Q="SELECT * FROM `proposels` WHERE `project_id`='".$_GET['id']."'";
                                $res=mysqli_query($connection,$Q);
                               while($total=mysqli_fetch_assoc($res)){
                                 $Q="SELECT * FROM `user` WHERE `user_id`='".$total['user_id']."'";
                                 $re=mysqli_query($connection,$Q);
                                 $user=mysqli_fetch_assoc($re);
                                ?>
                                    <div class="project-proposals align-items-center">
                                        <div class="proposals-info">
                                            <div class="proposer-info">
                                                <div class="proposer-img">
                                                <img src="../uploads/<?php echo $user['image']; ?>" alt class="img-fluid">
                                                </div>
                                                <div class="proposer-detail">
                                                <h4><?php echo $user['name']; ?></h4>
                                                <ul class="proposal-details">
                                                    <li>Member since <?php echo $user['register_time']; ?></li>
                                                    <!-- <li><i class="fas fa-star text-primary"></i> 4 Reviews</li> -->
                                                    <li> <a href="freelancer-profile.html" class="font-semibold text-primary">View Profile</a></li>
                                                </ul>
                                                </div>
                                            </div>
                                            <div class="proposer-bid-info">
                                                <div class="proposer-bid">
                                                <h3><?php echo $total['p_price'] ?>/Hearing</h3>
                                                <h5>Total: <?php echo $total['p_hearings'] ?> Hearing</h5>
                                                </div>
                                                <div class="proposer-confirm">
                                                <a href="../chat.php?u_id=<?php echo $total['user_id']; ?>&prop_id=<?php echo $total['id'] ?>" class="projects-btn">Contact Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="description-proposal">
                                        
                                            <p><textarea name="" id="" class="form-control" cols="30" rows="3" disabled style="resize:none;background:#fff;"> <?php echo $total['p_cover_desc'] ?></textarea>
                                            </p>
                                        </div>
                                    </div>
                                <?php
                               }
                                         
                            ?>
                    
                         
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
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
         <?php include("../lawyer_portal/inc/footer.php"); ?>
      </div>
      <!-- <div class="modal fade custom-modal" id="hire">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-modal">
               <div class="modal-header">
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="text-center pt-0 mb-4">
                     <img src="assets/img/logo-01.png" alt="logo" class="img-fluid mb-1">
                     <h5 class="modal-title">Discuss your project with David</h5>
                  </div>
                  <form action="https://kofejob.dreamguystech.com/template/view-project-detail.html">
                     <div class="modal-info">
                        <div class="row">
                           <div class="col-12 col-md-12">
                              <div class="form-group">
                                 <input type="text" name="name" class="form-control" placeholder="First name & Lastname">
                              </div>
                              <div class="form-group">
                                 <input type="email" name="name" class="form-control" placeholder="Email Address">
                              </div>
                              <div class="form-group">
                                 <input type="text" name="name" class="form-control" placeholder="Phone Number">
                              </div>
                              <div class="form-group">
                                 <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                              </div>
                              <div class="form-group row">
                                 <div class="col-12 col-md-4 pr-0">
                                    <label class="file-upload">
                                    Add Attachment <input type="file" />
                                    </label>
                                 </div>
                                 <div class="col-12 col-md-8">
                                    <p class="mb-1">Allowed file types: zip, pdf, png, jpg</p>
                                    <p>Max file size: 50 MB</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="submit-section text-center">
                        <button type="submit" class="btn btn-primary btn-block submit-btn">Hire Now</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div> -->
      <?php include('inc/footer_links.php'); ?>
   </body>
</html>