<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>Fori Insaf</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="account-page">

    <div class="main-wrapper">


    <?php include("inc/header.php") ?>
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
                .account-page .footer {
        display: block;
    }
    .img{
        width:50px;
        height:50px;
        border-radius:3px;
    }
            </style>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">

                            <div class="account-content">
                                <div class="align-items-center justify-content-center">
                                    <div class="login-right">
                                        <div class="login-header text-center">
                                            <a href="index.php"><img class="img" src="assets/img/logo1.png" alt="logo" class="img-fluid"></a>
                                            <h3>Join Fori Insaf</h3>
                                        </div>
                                          <p class="text-danger text-center"><?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg'];}?></p>
                                        <nav class="user-tabs mb-4">
                                            <ul role="tablist" class="nav nav-pills nav-justified">
                                                <li class="nav-item">
                                                    <a href="#client" data-bs-toggle="tab" class="nav-link active">Client</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#company" data-bs-toggle="tab" class="nav-link">Lawyer</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="tab-content pt-0">
                                            <div role="tabpanel" id="client" class="tab-pane fade active show">
                                                <form action="register_process.php" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group ">
                                                        <label>Profile Image</label>
                                                        <input type="file" name="image" autocomplete="off" style="padding: 6px 10px;min-height:auto;" required class="form-control floating">
                                                       
                                                    </div>
                                                    <div class="form-group form-focus">
                                                        <input type="text" name="name" autocomplete="off" class="form-control floating" required>
                                                        <label class="focus-label">Name</label>
                                                        <input type="hidden" value='0' id="role" name="role" >
                                                       
                                                    </div>
                                                    <div class="form-group form-focus">
                                                        <input type="email" name="email" autocomplete="off" class="form-control floating" required>
                                                        <label class="focus-label">Email </label>
                                                       
                                                    </div>
                                                    <div class="form-group form-focus">
                                                        <input type="text" name="country" autocomplete="off" class="form-control floating" required>
                                                        <label class="focus-label">Country</label>
                                                       
                                                    </div>
                                                    <div class="form-group  form-focus">
                                                        <input type="text" name="city" autocomplete="off" class="form-control floating" required>
                                                        <label class="focus-label">City</label>
                                                        
                                                    </div>
                                                    <div class="form-group form-focus">
                                                        <input type="password" name="password"  autocomplete="off" class="form-control floating" required>
                                                        <label class="focus-label">Password</label>
                                                       
                                                    </div>
                                                    <div class="form-group form-focus mb-0">
                                                        <input type="password" name="confirm_password"  autocomplete="off" class="form-control floating" required>
                                                        <label class="focus-label">Confirm Password</label>
                                                       
                                                    </div>
                                                    <div class="dont-have">
                                                        <label class="custom_check">
                                                        <input type="checkbox" name="rem_password" required>
                                                        <span class="checkmark"></span> You agree to the Fori Insaf <a href="privacy-policy.php">User Agreement, Privacy Policy,</a> and <a href="privacy-policy.php">Cookie Policy</a>.
                                                        </label>
                                                    </div>
                                                        <button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit_client">AGREE TO JOIN</button>
                                                    <div class="row">
                                                        <div class="col-6 text-start">
                                                            <a class="forgot-link" href="forgot-password.php">Forgot Password ?</a>
                                                        </div>
                                                        <div class="col-6 text-end dont-have">Already on Fori Insaf <a href="login.php">Click here</a></div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div role="tabpanel" id="company" class="tab-pane fade">
                                                <form action="register_process.php" method="POST" enctype="multipart/form-data">
                                               
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-focus">
                                                                <input type="text" name="name" class="form-control floating">
                                                                <label class="focus-label">User Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-focus">
                                                                <input type="email" name="email" class="form-control floating">
                                                                <label class="focus-label">Email </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-focus">
                                                                <input type="text" name="country" class="form-control floating">
                                                                <label class="focus-label">Country</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-focus">
                                                                <input type="text" name="city" class="form-control floating">
                                                                <label class="focus-label">City </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-focus">
                                                                <input type="password" name="password" class="form-control floating">
                                                                <label class="focus-label">Password</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-focus mb-0">
                                                                <input type="password" name="confirm_password" class="form-control floating">
                                                                <label class="focus-label">Confirm Password</label>
                                                                 <p><?php if(isset($_REQUEST['pass_msg'])){ echo $_REQUEST['pass_msg']; } ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <select class="form-control floating" name="category">
                                                                    <option value="" selected disabled>Select Law Category</option>
                                                                    <option value="llb">LLB</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group form-focus">
                                                                <input type="text" name="address" class="form-control floating">
                                                                <label class="focus-label">Office Address (Optional)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group ">
                                                                <label>Profile Image</label>
                                                                <input type="file" name="image" autocomplete="off" style="padding: 6px 10px;min-height:auto;" required class="form-control floating">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="description" placeholder="Describe Yourself Briefly!" style="height:150px;"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="dont-have">
                                                                <label class="custom_check">
                                                                    <input type="checkbox" name="rem_password">
                                                                    <span class="checkmark"></span> You agree to the Fori Insaf <a href="privacy-policy.php">User Agreement, Privacy Policy,</a> and <a href="privacy-policy.php">Cookie Policy</a>.
                                                                 </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit_lawyer">Agree TO JOIN</button>


                                                    <div class="row form-row">
                                                        <div class="col-6 text-start">
                                                        <a class="forgot-link" href="forgot-password.php">Forgot Password ?</a>
                                                        </div>
                                                        <div class="col-6 text-end dont-have">Already on Fori Insaf <a href="login.php">Click here</a></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


    <?php include('inc/footer.php') ?>

    </div>

<?php include('inc/footer_links.php') ?>
</body>

<!-- Mirrored from Fori Insaf.dreamguystech.com/template/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Oct 2023 12:22:30 GMT -->
</html>
<?php
   include('db/connection.php');
   if(isset($_POST['submit_client'])){
    extract($_POST);
    $folder      = "uploads";
    $image_name = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $folder_path = $folder."/".$image_name;
    
    
    if(move_uploaded_file($temp_name,$folder_path)){

    $insert_query = "INSERT INTO `user`(role,name,image,email,country,city,password) VALUES('0','".$name."','".$image_name."','".$email."','".$country."','".$city."','".$password."')";
            $result = mysqli_query($connection,$insert_query);

      
        if($result){
            header("location:register.php?msg= Register Successfull...");
        }else{
            header("location:register.php?msg= Register Failed...");

        }
    }else{
        echo "file problem";
    }
   
   }
   
   if(isset($_POST['submit_lawyer'])){
    extract($_POST);
     $folder      = "uploads";
    $image_name = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $folder_path = $folder."/".$image_name;
    if(move_uploaded_file($temp_name,$folder_path)){
         $insert_query = "INSERT INTO `user`(role,name,image,email,country,city,password,category,office_address,description) VALUES('1','".$name."','".$image_name."','".$email."','".$country."','".$city."','".$password."','".$category."','".$address."','".$description."')";
            $result =mysqli_query($connection,$insert_query);
             if($result){
            header("location:register.php?msg= Register Successfull...");
        }else{
            header("location:register.php?msg= Register Failed...");

        }
    }else{
        echo "file problem";
    }


   }


?>

