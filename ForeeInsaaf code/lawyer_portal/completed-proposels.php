<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Fori Insaaf</title>
      <?php include("inc/links.php"); ?>
      <style>
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
                 @media (min-width: 320px) and (max-width: 480px) {
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
      <?php include("inc/header.php"); ?>
         <div class="bread-crumb-bar">
            <div class="container">
               <div class="row align-items-center inner-banner">
                  <div class="col-md-12 col-12 text-center">
                     <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.php"><img src="assets/img/home-icon.svg" alt="Post Author"> Home</a></li>
                              <li class="breadcrumb-item" aria-current="page">Freelancer</li>
                              <li class="breadcrumb-item" aria-current="page">Projects</li>
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
                  <?php include("inc/sidebar.php"); ?>
                  </div>
                  <div class="col-xl-9 col-md-8">
                     <div class="page-title">
                        <h3>Proposals</h3>
                     </div>
                     <nav class="user-tabs mb-4">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                           <li class="nav-item">
                              <a class="nav-link" href="lawyer-proposels.php">My Proposals</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="ongoing-proposels.php">Ongoing Proposels</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link active" href="completed-proposels.php">Completed Proposels</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">Cancelled Projects</a>
                           </li>
                        </ul>
                     </nav>
                     <div class="proposals-section">
                        <h3 class="page-subtitle">On Going</h3>
                        <?php 
                        $Q="SELECT *, pr.user_id as user FROM proposels p inner join project pr on pr.project_id=p.project_id where p.user_id='".$_SESSION['user']['user_id']."' and p.p_status='3' order by p.id desc";
                        $ree=mysqli_query($connection,$Q);
                        if(mysqli_num_rows($ree)>0){
                        while($proposel=mysqli_fetch_assoc($ree)){
                      
                            ?>
                             <div class="freelancer-proposals">
                           <div class="project-proposals align-items-center freelancer">
                              <div class="proposals-info">
                                 <div class="proposals-detail">
                                    <h3 class="proposals-title"><?php echo $proposel['project_name'] ?></h3>
                                    <div class="proposals-content">
                                       <div class="proposal-img">
                                          <div class="text-md-center">
                                              <?php
                                              $sql="SELECT * FROM user where user_id='".$proposel['user']."'";
                                              $rt=mysqli_query($connection,$sql);
                                             
                                              $user=mysqli_fetch_assoc($rt);
                                      
                                              ?>
                                              
                                             <img src="../uploads/<?php echo $user['image']; ?>" alt class="img-fluid">
                                             <h4><?php echo $user['name']; ?></h4>
                                             <span class="info-btn">client</span>
                                          </div>
                                       </div>
                                       <div class="proposal-client">
                                          <h4 class="title-info">Case</h4>
                                          <h2 class="client-price"><?php echo $proposel['project_name'] ?></h2>
                          
                                       </div>
                                       <div class="proposal-type">
                                          <h4 class="title-info">Case Type</h4>
                                          <h3><?php echo $proposel['case_type'] ?></h3>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="project-hire-info">
                                    <div class="content-divider-1"></div>
                                    <div class="projects-amount">
                                       <p>Your Price Per Hearing</p>
                                       <h3>PKR <?php echo $proposel['p_price'] ?></h3>
                                       <h5>in <?php echo $proposel['p_hearings'] ?> Hearings</h5>
                                    </div>
                                    <div class="content-divider-1"></div>
                                    <div class="projects-action text-center">
                                       <a href="#file" class="projects-btn edit" data-id='<?php echo $proposel['id'] ?>'>Edit Proposals </a>
                                       <!--<a href="freelancer-view-project-detail.html" class="projects-btn">View Project</a>-->
                                       <!--<a href="#" class="proposal-delete">Delete Proposal</a>-->
                                    </div>
                                 </div>
                              </div>
                              <div class="description-proposal">
                                 <h5 class="desc-title">Details</h5>
                                 <p> <?php echo $proposel['p_cover_desc'] ?>....</p>
                              </div>
                           </div>
                        </div>
                            <?php
                        }
                    }else{
                        ?>
                         <div class="freelancer-proposals">
                           <div class="project-proposals align-items-center freelancer">
                              <div class="proposals-info">
                                 <div class="proposals-detail">
                                    <h3 class="proposals-title"><?php echo $proposel['project_name'] ?></h3>
                                    <div class="proposals-content">
                                       <div class="proposal-img">
                                          <div class="text-md-center">
                                             No Proposels Are Available
                                          </div>
                                       </div>
                                       
                                    </div>
                                 </div>
                              
                              </div>
                            
                           </div>
                        </div>
                        <?php
                    }
                        ?>
                       
                        <!--<div class="freelancer-proposals">-->
                        <!--   <div class="project-proposals align-items-center freelancer">-->
                        <!--      <div class="proposals-info">-->
                        <!--         <div class="proposals-detail">-->
                        <!--            <h3 class="proposals-title">Landing Page Redesign / Sales Page Redesign (Not Entire Web)</h3>-->
                        <!--            <div class="proposals-content">-->
                        <!--               <div class="proposal-img">-->
                        <!--                  <div class="text-md-center">-->
                        <!--                     <img src="assets/img/developer/developer-01.jpg" alt class="img-fluid">-->
                        <!--                     <h4>John Doe</h4>-->
                        <!--                     <span class="info-btn">client</span>-->
                        <!--                  </div>-->
                        <!--               </div>-->
                        <!--               <div class="proposal-client">-->
                        <!--                  <h4 class="title-info">Client Price</h4>-->
                        <!--                  <h2 class="client-price">$320.00</h2>-->
                        <!--                  <span class="price-type">( FIXED )</span>-->
                        <!--               </div>-->
                        <!--               <div class="proposal-type">-->
                        <!--                  <h4 class="title-info">Job Type</h4>-->
                        <!--                  <h3>Hourly</h3>-->
                        <!--               </div>-->
                        <!--            </div>-->
                        <!--         </div>-->
                        <!--         <div class="project-hire-info">-->
                        <!--            <div class="content-divider-1"></div>-->
                        <!--            <div class="projects-amount">-->
                        <!--               <p>Your Price</p>-->
                        <!--               <h3>$300.00</h3>-->
                        <!--               <h5>in 15 Days</h5>-->
                        <!--            </div>-->
                        <!--            <div class="content-divider-1"></div>-->
                        <!--            <div class="projects-action text-center">-->
                        <!--               <a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>-->
                        <!--               <a href="freelancer-view-project-detail.html" class="projects-btn">View Project</a>-->
                        <!--               <a href="#" class="proposal-delete">Delete Proposal</a>-->
                        <!--            </div>-->
                        <!--         </div>-->
                        <!--      </div>-->
                        <!--      <div class="description-proposal">-->
                        <!--         <h5 class="desc-title">Description</h5>-->
                        <!--         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus sed cum....<a href="#" class="text-primary font-bold">Readmore</a></p>-->
                        <!--      </div>-->
                        <!--   </div>-->
                        <!--</div>-->
                        <!--<div class="freelancer-proposals">-->
                        <!--   <div class="project-proposals align-items-center freelancer">-->
                        <!--      <div class="proposals-info">-->
                        <!--         <div class="proposals-detail">-->
                        <!--            <h3 class="proposals-title">WooCommerce Product Page Back Up Restoration</h3>-->
                        <!--            <div class="proposals-content">-->
                        <!--               <div class="proposal-img">-->
                        <!--                  <div class="text-md-center">-->
                        <!--                     <img src="assets/img/developer/developer-01.jpg" alt class="img-fluid">-->
                        <!--                     <h4>John Doe</h4>-->
                        <!--                     <span class="info-btn">client</span>-->
                        <!--                  </div>-->
                        <!--               </div>-->
                        <!--               <div class="proposal-client">-->
                        <!--                  <h4 class="title-info">Client Price</h4>-->
                        <!--                  <h2 class="client-price">$500.00</h2>-->
                        <!--                  <span class="price-type">( FIXED )</span>-->
                        <!--               </div>-->
                        <!--               <div class="proposal-type">-->
                        <!--                  <h4 class="title-info">Job Type</h4>-->
                        <!--                  <h3>Hourly</h3>-->
                        <!--               </div>-->
                        <!--            </div>-->
                        <!--         </div>-->
                        <!--         <div class="project-hire-info">-->
                        <!--            <div class="content-divider-1"></div>-->
                        <!--            <div class="projects-amount">-->
                        <!--               <p>Your Price</p>-->
                        <!--               <h3>$450.00</h3>-->
                        <!--               <h5>in 18 Days</h5>-->
                        <!--            </div>-->
                        <!--            <div class="content-divider-1"></div>-->
                        <!--            <div class="projects-action text-center">-->
                        <!--               <a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals </a>-->
                        <!--               <a href="freelancer-view-project-detail.html" class="projects-btn">View Project</a>-->
                        <!--               <a href="#" class="proposal-delete">Delete Proposal</a>-->
                        <!--            </div>-->
                        <!--         </div>-->
                        <!--      </div>-->
                        <!--      <div class="description-proposal">-->
                        <!--         <h5 class="desc-title">Description</h5>-->
                        <!--         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At diam sit erat et eros. Et cursus tellus viverra adipiscing suspendisse. Semper arcu est eget eleifend. Faucibus elit massa sollicitudin elementum ut feugiat nunc ac. Turpis quam sed in sed curabitur netus laoreet. In tortor neque sapien praesent porttitor cursus sed cum....<a href="#" class="text-primary font-bold">Readmore</a></p>-->
                        <!--      </div>-->
                        <!--   </div>-->
                        <!--</div>-->
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
         <?php include("inc/footer.php"); ?>
         <div class="modal fade" id="file">
            <div class="modal-dialog modal-dialog-centered modal-md">
               <div class="modal-content">
                  <div class="modal-header">
                     <h4 class="modal-title">EDIT PROPOSAL</h4>
                     <span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a></span>
                  </div>
                  <div class="modal-body">
                     <form action="" method="post">
                        <div class="modal-info">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Cost</label>
                                    <input type="text" id="price" name="price" class="form-control">
                                    <input type="text" hidden name="id" id="isd">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Days</label>
                                    <input type="text" id="p_hearing" name="hearings" class="form-control">
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control summernote" rows="5" name="cover" id="cover"></textarea>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="submit-section text-end">
                           <button type="submit" name="update" class="btn btn-primary submit-btn">Update Proposal</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include("inc/footer_links.php"); ?>
      <?php
      if(isset($_POST['update'])){
          extract($_POST);
          $Q="UPDATE `proposels` SET `p_price`='$price',`p_hearings`='$hearings',`p_cover_desc`='$cover' WHERE `id`='$id' and `p_status`='2'";
          if(mysqli_query($connection,$Q)){
              header("location: lawyer-proposels.php");
          }
      }
      
      ?>
      <script>
          $(document).ready(function(){
              $('#file').modal('hide');
             $('.edit').on('click',function(e){
                 e.preventDefault();
                 var id=$(this).data('id');
                 $('#isd').val(id);
                 var count=1;
                 $.ajax({
                     url:"../ajax-functions.php",
                     method:"post",
                     data:{id:id,
                     count:count
                     },
                     success:function(data){
                         var result=JSON.parse(data)
                         $('#price').val(result.p_price);
                         $('#p_hearing').val(result.p_hearings);
                         $('#cover').val(result.p_cover_desc);
                            $('#file').modal('show');
                     }
                 })
             }) 
          });
      </script>
   </body>
</html>