<?php
session_start();
include('../db/connection.php');
date_default_timezone_set("Asia/Karachi");
$rows = [];
if(isset($_POST['edit_project'])){
       extract($_POST);
       // print_r($_POST);
       // die();
       $project_id =$_REQUEST['project_id'];
       $_SESSION['id']=$project_id;
     // die();
   /*$_SESSION['edit_project'] = $_POST['project_id'];
       $project_id = $_SESSION['edit_project'];*/
   // $project = $project_id;
   $select_query ="SELECT * FROM `project` WHERE project_id='$project_id'";
   $result = mysqli_query($connection,$select_query);
   $data = $rows =mysqli_fetch_array($result);



}


?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
      <title>Fori Insaaf</title>
      <?php include("inc/links.php"); ?>
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
   <body>
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
                              <li class="breadcrumb-item" aria-current="page">Post a Case</li>
                           </ol>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div> 
         <h1 class="text-center mt-5 text-danger"><?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg'];} ?></h1>
         <div class="content">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="select-project mb-4">
                        <form action="<?php if(isset($data)){ echo ""; }else{ echo "project_process.php";} ?>" method="POST" enctype="multipart/form-data">
                           <div class="title-box widget-box">
                              <div class="title-content">
                                 <div class="title-detail">
                                    <h3>Case Title</h3>
                                    <div class="form-group mb-0">
                                       <input type="text" name="project_name"  class="form-control" value="<?php if(isset($data)){ echo $data['project_name'];} ?>">
                                    </div>
                                 </div>
                              </div>
                      
                              <div class="title-content" >
                                 <div class="title-detail">
                                    <h3>Case Type</h3>
                                    <div class="form-group mb-0">
                                       <select name="case_type" class="form-control select" >
                                          <option value="" selected disabled>Select Case Category</option>
                                          <?php
                                          $Q="SELECT * FROM `case_categories` order by `cat` asc";
                                          $re=mysqli_query($connection,$Q);
                                          while($cat=mysqli_fetch_assoc($re)){
                                             if(isset($data)){
                                                if($data['case_type']==$cat['cat']){
                                                   ?>
                                                <option value="<?php echo $cat['cat'] ?>" selected><?php echo $cat['cat'] ?></option>

                                                   <?php
                                                }else{
                                                   ?>
                                                   <option value="<?php echo $cat['cat'] ?>"><?php echo $cat['cat'] ?></option>
   
                                                      <?php
                                                }
                                    
                                             }else{
                                                ?>
                                                <option value="<?php echo $cat['cat'] ?>"><?php echo $cat['cat'] ?></option>
                                             <?php
                                             }
                                             
                                          }
                                          ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                       
                            

                            <!--   <div class="title-content">
                                 <div class="title-detail">
                                    <h3>Add Document</h3>
                                    <div class="custom-file">
                                       <input type="file" name="file" class="custom-file-input" >
                                       <label class="custom-file-label"></label>
                                    </div>
                                    <p class="mb-0">Size of the Document should be Below 30MB (ZIP Only)</p>
                                 </div>
                              </div> -->
                              <div class="title-content">
                                 <div class="title-detail">
                                    <h3>City</h3>
                                    <div class="links-info">
                                       <div class="row form-row links-cont">
                                          <div class="col-12 col-md-12">
                                             <div class="form-group mb-0">
                                                <input type="text" name="city" class="form-control" value="<?php if(isset($data)){ echo $data['city'];} ?>">
                                               
                                             </div>
                                          </div>
                                         
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="title-content">
                                 <div class="title-detail">
                                    <h3>Country</h3>
                                    <div class="links-info">
                                       <div class="row form-row links-cont">
                                          <div class="col-12 col-md-12">
                                             <div class="form-group mb-0">
                                                <input type="text" name="country" class="form-control" value="<?php if(isset($data)){ echo $data['country'];} ?>">
                                               
                                             </div>
                                          </div>
                                         
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="title-content pb-0">
                                 <div class="title-detail">
                                    <h3>Write Description of Case </h3>
                                    <div class="form-group mb-0">
                                       <textarea name="description" class="form-control summernote" rows="5"><?php if(isset($data)){ echo $data['project_desc'];} ?></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12 text-end">
                                    <div class="btn-item">
                                       <button type="submit" name="<?php if(isset($data)){ echo "update_project";
                                    }else{ echo "case_submit";} ?>" class="btn next-btn"><?php if(isset($data)){ echo "Update";
                                    }else{ echo "Submit";} ?></button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
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


<?php

  if(isset($_POST['update_project'])){
   extract($_REQUEST);
   // print_r($_POST);
  $id =$_SESSION['id'];
   // die();
   $date_time= date('Y-m-d h:i:s');
   $update_query ="UPDATE `project` SET `project_name`='$project_name',`project_type`='$project_type',`case_type`='$case_type',`city`='$city',`country`='$country',`project_desc`='$description',`updated_at`='".$date_time."' WHERE project_id=".$id;
  
   $result=mysqli_query($connection,$update_query);
   if($result){
      header("location: manage-cases.php?msg=Updated Successfully..");
   }


  }
  


?>