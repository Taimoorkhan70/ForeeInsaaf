<?php
  include('db/connection.php');
  session_start();
  if(isset($_POST['submit_client'])){
       extract($_POST);
       $select_query = "SELECT * FROM `user` WHERE `email`='$email'";
       $result= mysqli_query($connection,$select_query);
       $rows= mysqli_num_rows($result);
        if($rows>0){
            header("location: register.php?msg=Already Registered Email");
            }else{
               if($confirm_password != $password){
                  header("location: register.php?msg=Password must be Same.");
                }else{
                    date_default_timezone_set("asia/karachi");
                    $date_time   = date('Y-m-d');
                    $folder      = "uploads";
                    $file_name   = $_FILES['image']['name'];
                    $temp_name   = $_FILES['image']['tmp_name'];
                    $folder_path = $folder."/".$file_name;
                    move_uploaded_file($temp_name,$folder_path);
                    $insert_query = "INSERT INTO `user`(`role`,`name`,`image`,`email`,`country`,`city`,`password`,`register_time`) VALUES('0','".$name."','".$file_name."','".$email."','".$country."','".$city."','".$password."','".$date_time."')";
                    $result = mysqli_query($connection,$insert_query);
                     mysqli_error($connection);
                  
                    if($result){
                    header("location: register.php?msg=Account Registered");
                    }else{
                    header("location: register.php?msg=Something wrong please Try Again");
                }
            }
        }
    }


   if(isset($_POST['submit_lawyer'])){
       extract($_POST);
        $select_query = "SELECT * FROM `user` WHERE `email`='$email'";
        $result       = mysqli_query($connection,$select_query);
        $rows         = mysqli_fetch_array($result);
            if($rows>0)
            {
                header("location: register.php?msg=Already Registered Email");
            }else
            {
            if($confirm_password != $password){
               header("location: register.php?msg=Password must be Same.");
            }else
            {
            date_default_timezone_set("asia/karachi");
            $date_time   = date('Y-m-d');
            $folder      = "uploads";
            $file_name   = $_FILES['image']['name'];
            $temp_name   = $_FILES['image']['tmp_name'];
            $folder_path = $folder."/".$file_name;
            move_uploaded_file($temp_name,$folder_path);
            $insert_query = "INSERT INTO `user`(`role`,`name`,`image`,`email`,`country`,`city`,`password`,`category`,`office_address`,`description`,`register_time`) VALUES('1','".$name."','".$file_name."','".$email."','".$country."','".$city."','".$password."','".$category."','".$address."','".$description."','".$date_time."')";
            $result = mysqli_query($connection,$insert_query);
         
             if($result){
                header("location: register.php?msg=Account Registered");
             }else{
              header("location: register.php?msg=Something wrong please Try Again");
            }
            }
         }
         }


    if(isset($_POST['login'])){
        extract($_POST);
         $select_query= "SELECT * FROM `user` WHERE `email`='$email'";
        $result = mysqli_query($connection,$select_query);
        $rows   = mysqli_fetch_array($result);
        // print_r($_POST);
        if($rows['email'] != $email || $rows['password'] != $password){
            header("location: login.php?msg=Invalid Email or Password");
            
        }else{
            if($rows['email'] == $email || $rows['password'] == $password){
                if($rows['role']=="0"){
                 $_SESSION['user']=$rows;

                header("location: client_portal/dashboard.php");

                }else{
                    if($rows['role']=="1"){
                     $_SESSION['user']=$rows;
                        header("location: lawyer_portal/dashboard.php");
                    }
                }
            }
        }
        }


        //////////////////////////proposel sending script/////////////

        if(isset($_POST['send_proposel'])){

     
            extract($_POST);
            $Q="INSERT INTO `proposels`(`user_id`,`project_id`, `p_price`, `p_hearings`, `p_cover_desc`, `p_status`, `p_ex1`, `p_ex2`)
             VALUES ('".$_SESSION['user']['user_id']."','$id','$h_price','$hearing_qty','$cover','1','','')";
             if(mysqli_query($connection,$Q)){
                header("location: lawyer_portal/lawyer-proposels.php");
             }
        }


        if(isset($_POST['count']) && $_POST['count']==1){
            $Q="Select * From proposels where project_id='".$_POST['project_id']."' and user_id='".$_SESSION['user']['user_id']."'";
            $res=mysqli_query($connection,$Q);
            
            if(mysqli_num_rows($res)>0){
                echo 0;

            }else{
                echo 1;
            }
        }


?>