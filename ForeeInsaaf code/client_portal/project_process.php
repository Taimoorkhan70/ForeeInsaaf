<?php
  session_start();
  include("../db/connection.php");
  $user_id = $_SESSION['user']['user_id'];
  if(isset($_POST['case_submit'])){
    extract($_POST);
   date_default_timezone_set("asia/karachi");
     $date_time   = date('Y-m-d');
   /*  $folder      = "uploads";
      $file_name   = $_FILES['file']['name'];
      $temp_name   = $_FILES['file']['tmp_name'];
      $folder_path = $folder."/".$file_name;*/
      
        $insert_query = "INSERT INTO `project`(user_id,project_name,project_type,case_type,city,country,project_desc,created_at) VALUES('".$user_id."','".$project_name."','','".$case_type."','".$city."','".$country."','".$description."','".$date_time."')";
          $result = mysqli_query($connection,$insert_query);
          if($result){
            header("location: post-case.php?msg=Successfully Submitted..");
          }else{
            header("location: post-case.php?msg=Try Again..");
          }
      }
  
    /*if(isset($_POST['update_profile'])){
      echo "working";
    }*/

    if(isset($_POST['update_profile_image'])){
      print_r($_POST);

      if(isset($_FILES['image'])){
        $errors= array();
        $file_ext=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $file_name = $_FILES["image"]["name"];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $imagename =  time() . "." . $file_ext;
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){

          echo "<script>window.location='edi-profile-images.php?status=error'</script>";
        
        }else{
          if(empty($errors)==true){

            $query ="
            UPDATE `user` SET `image`='$imagename' WHERE `user_id`='$user_id';
            ";
            $result =mysqli_query($connection,$query);
           if($result){
            if(move_uploaded_file($file_tmp,"../uploads/".$imagename)){
              echo "done";
      
               header("location: edi-profile-images.php?status=true");
            }
          
           }else{
             echo mysqli_error($connection);
           }
             
             echo "Success";
          }else{
             print_r($errors);
          }
        }

        
  
     }
    }


      if(isset($_POST['update_data'])){
          extract($_POST);
         // echo "working";
         // print_r($_POST);
         // die();
         date_default_timezone_set("asia/karachi");
         $date_time   = date('Y-m-d');
         /*$file_name_banner   = $_FILES['banner']['name'];
          $temp_name_banner  = $_FILES['banner']['tmp_name'];
         $folder_path = $folder."/".$file_name_banner;
        move_uploaded_file($temp_name_banner,$folder_path);*/
       // die();

        // $folder      = "../uploads";



         $query ="
         UPDATE `user` SET `name`='$name',`gender`='$gender',`country`='$country',`city`='$city',`office_address`='$address',`description`='$description',`number`='$number' WHERE `user_id`='$user_id';
         ";
         $result =mysqli_query($connection,$query);
        if($result){
          header("location: client-profile-settings.php?msg=Profile Updated..");
        }else{
          echo mysqli_error($connection);
        }
    
      }




      if(isset($_POST['add_skill'])){
        // echo "working";
        extract($_POST);
        // $user_id;
        // print_r($_POST);
       $query ="INSERT INTO `user_experience`(user_id,title,company,start_date,end_date,summary) VALUES('".$user_id."','".$title."','".$company."','".$start_date."','".$end_date."','".$summary."')";
        // die();
        $result =mysqli_query($connection,$query);
        // die();
          if($result){
            header("location: client-profile-settings.php?msg=New Skill Added..");
          }

      }



       if(isset($_POST['add_detail'])){
        // echo "working";
        extract($_POST);
        // $user_id;
         $query ="INSERT INTO `education`(user_id,degree,university,start_date,end_date,summary) VALUES('".$user_id."','".$degree."','".$university."','".$start_year."','".$end_year."','".$summary_desc."')";
          $result =mysqli_query($connection,$query);
          if($result){
            header("location: client-profile-settings.php?msg=Education Added..");
          }

      }
?>