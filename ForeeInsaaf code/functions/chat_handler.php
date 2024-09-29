<?php
session_start();
include("../db/connection.php");

if(isset($_POST['count']) && $_POST['count']=='2'){
    $q="SELECT * FROM `user` where  `user_id`!='".$_SESSION['user']['user_id']."'";
    $re=mysqli_query($connection,$q);
    while($row=mysqli_fetch_assoc($re)){
        ?>
         <a href="?u_id=<?php echo $row['user_id']; ?>">
             <li class="messaging-member <?php if($row['IsOnline']==1){ echo "messaging-member--new messaging-member--online"; } ?>">
            <div class="messaging-member__wrapper">
              <div class="messaging-member__avatar">
                  <?php
                       if(empty($row['image'])){
                            ?>
                                <img src="assets/images/users/avatar-1.jpg" alt="<?php echo $row['name'] ?>" loading="lazy" style="width:50px;height:50px;object-fit:contain;">
                             
                            <?php
                        }else{
                            ?>
                                <img src="uploads/<?php echo $row['image'] ?>" alt="<?php echo $row['name'] ?>" loading="lazy" style="width:50px;height:50px;object-fit:contain;">
                            <?php
                        }
                        
                    ?>
         
                <div class="user-status"></div>
              </div>

              <span class="messaging-member__name" style="margin-top:0px;"><?php echo $row['name'] ?></span>
             
            </div>
          </li>
          </a>
        <?php
    }
       $connection->close();
}

if(isset($_POST['count']) && $_POST['count']=='3'){
    $q="SELECT * FROM `user` where `user_id`='".$_POST['id']."'";
    $re=mysqli_query($connection,$q);
    $user=mysqli_fetch_assoc($re);
    echo json_encode($user);
       $connection->close();
}


if (isset($_POST['count']) && $_POST['count'] == '4') {
    print_r($_FILES);
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    $file_name = '';

    $upload_dir = '../uploads/'; // Ensure this directory exists and is writable

    // Handle file upload
    if ($_FILES['file']['error'] == 0) {
        $file_tmp_name = $_FILES['file']['tmp_name'];
        $file_ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        
        // Create a unique file name
        $unique_file_name = uniqid('file_', true) . '.' . $file_ext;
        $file_path = $upload_dir . $unique_file_name;
    
        if (move_uploaded_file($file_tmp_name, $file_path)) {
            // File uploaded successfully
            $file_name = "uploads/".$unique_file_name;
        } else {
            // Handle file upload error
            $file_name = '0';
        }
    } else {
        $file_name = '0'; // Set file name to '0' if no file is uploaded
    }
    
    // Check if message is empty
    $message = empty($message) ? '0' : $message;

    // Prepare SQL query
    $sql = "INSERT INTO `messages`(`s_id`, `r_id`, `msg`, `attachment`, `time`, `date`) 
            VALUES ('".$_SESSION['user']['user_id']."', '".$_POST['id']."', '".$message."', '".$file_name."', '".date('H:i:s')."', '".date('d-m-Y')."')";

    if ($connection->query($sql) === TRUE) {
        echo "Message and file saved successfully.";
    } else {
        echo "Error: " . $connection->error;
    }

    $connection->close();
}
if (isset($_POST['count']) && $_POST['count'] == '5') {
    
    $Q="SELECT * FROM messages WHERE s_id = ".$_POST['chat_id']." AND r_id = ".$_SESSION['user']['user_id']." OR s_id = ".$_SESSION['user']['user_id']." AND r_id = ".$_POST['chat_id'];
    $re=mysqli_query($connection,$Q);
    while($message=mysqli_fetch_assoc($re)){
    
        if($_SESSION['user']['user_id']==$message['s_id']){
              if($message['attachment']==='0'){
                  ?>
                  
                    <li>
                     
                      <div class="chat__bubble chat__bubble--me">
                        <?php echo $message['msg'] ?>
                      </div>
                    </li>
                  <?php
              }
               if($message['msg']==='0'){
                   $ext=explode('.',$message['attachment']);
                  
                              if(strtoupper($ext[2])=="JPG" || strtoupper($ext[2])=="PNG" || strtoupper($ext[2])=="WEBP" || strtoupper($ext[2])=="GIFF" || strtoupper($ext[2])=="JPEG"){
                                    
                          ?>
                            <li>
                             
                              <div class="chat__bubble chat__bubble--me">
                                  <img src=" <?php echo $message['attachment']; ?>" style="width:100px;height:100px;"/>
                               
                              </div>
                            </li>
                          <?php
                   }
            
              }
                       if($message['msg']==='0'){
                   $ext=explode('.',$message['attachment']);
               
                   if(strtoupper($ext[2])=="JPG" || strtoupper($ext[2])=="PNG" || strtoupper($ext[2])=="WEBP" || strtoupper($ext[2])=="GIFF" || strtoupper($ext[2])=="JPEG"){
                     
                          ?>
                          
                        <li>
                          
                          <div class="chat__bubble chat__bubble--me"> 
                               <a href="<?php echo $message['attachment']; ?>"  target="_blank"><img src="<?php echo $message['attachment']; ?>" style="width:100px;height:100px;"/></a>
                          </div>
                        </li>
                     
                          <?php
                   }else{
                       ?>
                          <li>
                          
                          <div class="chat__bubble chat__bubble--me"> 
                               <a href="<?php echo $message['attachment']; ?>" target="_blank" class="text-primary d-flex align-items-center justify-content-center flex-column"><i class="fas fa-file p-0 bg-sucess text-primary h3"></i> <span class="p-0 m-0">Attachment</span></a>
                          </div>
                        </li>
                       <?php
                   }
            
              }
                   if($message['msg']!='0' && $message['attachment']!='0'){
                   $ext=explode('.',$message['attachment']);
               
                   if(strtoupper($ext[2])=="JPG" || strtoupper($ext[2])=="PNG" || strtoupper($ext[2])=="WEBP" || strtoupper($ext[2])=="GIFF" || strtoupper($ext[2])=="JPEG"){
                     
                          ?>
                          
                        <li>
                          
                          <div class="chat__bubble  chat__bubble--me"> 
                               <a href="<?php echo $message['attachment']; ?>"  target="_blank"><img src="<?php echo $message['attachment']; ?>" style="width:100px;height:100px;"/></a><br><br>
                                 <?php echo $message['msg'] ?>
                          </div>
                        </li>
                     
                          <?php
                   }else{
                       ?>
                          <li>
                          
                          <div class="chat__bubble  chat__bubble--me"> 
                               <a href="<?php echo $message['attachment']; ?>" target="_blank" class="text-white d-flex align-items-center justify-content-center " style="gap:10px;"><i class="fas fa-file p-0 bg-sucess text-white h3"></i> <span class="p-0 m-0">Attachment</span></a>
                                 <br><br><?php echo $message['msg'] ?>
                          </div>
                        </li>
                       <?php
                   }
            
              }
        }else{
              if($message['attachment']==='0'){
                  ?>
                        <li>
                          
                          <div class="chat__bubble chat__bubble--you">
                               <?php echo $message['msg'] ?>
                          </div>
                        </li>
                  <?php
              }
                if($message['msg']==='0'){
                   $ext=explode('.',$message['attachment']);
               
                   if(strtoupper($ext[2])=="JPG" || strtoupper($ext[2])=="PNG" || strtoupper($ext[2])=="WEBP" || strtoupper($ext[2])=="GIFF" || strtoupper($ext[2])=="JPEG"){
                     
                          ?>
                          
                        <li>
                          
                          <div class="chat__bubble chat__bubble--you"> 
                               <a href="<?php echo $message['attachment']; ?>"  target="_blank"><img src="<?php echo $message['attachment']; ?>" style="width:100px;height:100px;"/></a>
                          </div>
                        </li>
                     
                          <?php
                   }else{
                       ?>
                          <li>
                          
                          <div class="chat__bubble chat__bubble--you"> 
                               <a href="<?php echo $message['attachment']; ?>" target="_blank" class="text-white d-flex align-items-center justify-content-center flex-column"><i class="fas fa-file p-0 bg-sucess text-white h3"></i> <span class="p-0 m-0">Attachment</span></a>
                          </div>
                        </li>
                       <?php
                   }
            
              }
              
              
                 if($message['msg']!='0' && $message['attachment']!='0'){
                   $ext=explode('.',$message['attachment']);
               
                   if(strtoupper($ext[2])=="JPG" || strtoupper($ext[2])=="PNG" || strtoupper($ext[2])=="WEBP" || strtoupper($ext[2])=="GIFF" || strtoupper($ext[2])=="JPEG"){
                     
                          ?>
                          
                        <li>
                          
                          <div class="chat__bubble chat__bubble--you"> 
                               <a href="<?php echo $message['attachment']; ?>"  target="_blank"><img src="<?php echo $message['attachment']; ?>" style="width:100px;height:100px;"/></a><br><br>
                                 <?php echo $message['msg'] ?>
                          </div>
                        </li>
                     
                          <?php
                   }else{
                       ?>
                          <li>
                          
                          <div class="chat__bubble chat__bubble--you"> 
                               <a href="<?php echo $message['attachment']; ?>" target="_blank" class="text-white d-flex align-items-center justify-content-center " style="gap:10px;"><i class="fas fa-file p-0 bg-sucess text-white h3"></i> <span class="p-0 m-0">Attachment</span></a>
                                 <br><br><?php echo $message['msg'] ?>
                          </div>
                        </li>
                       <?php
                   }
            
              }
        }
    
      
    }

}

if (isset($_POST['count']) && $_POST['count'] == '6') {
    // $Q="SELECT * FROM job_value where lead_id='".$_GET['id']."' and u_id='".$_SESSION['user']['user_id']."' limit 1";
    // $rr=mysqli_query($connection,$Q);
    // $job_value=mysqli_fetch_assoc($rr);

    
    
    // $SQ="SELECT * FROM `balance` where `lead_id`='".$_GET['id']."' and `u_id`='".$_SESSION['user']['user_id']."'";
    // $ren=mysqli_query($connection,$SQ);
    // $total_payment_received=0.00;
    // while($results=mysqli_fetch_assoc($ren)){
    //   $total_payment_received = $total_payment_received + $results['price'];
    // }
    // if($total_payment_received<$job_value){
        
    // }
   $title = $_POST['j_value'];
    $date = $_POST['date']; // Updated name attribute to be unique
    $time = $_POST['time']; // Updated name attribute to be unique
        $lead_id = $_POST['lead_id']; // Updated name attribute to be unique
    $description = $_POST['description']; // Updated name attribute to be unique

    // Prepare and bind
    $stmt = $connection->prepare("INSERT INTO event_table (title, date, time, description,lead_id,user_id) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("ssssii", $title, $date, $time, $description, $lead_id, $_SESSION['user']['user_id']);

        // Execute the statement
        if ($stmt->execute()) {
            echo "New record created successfully";
                        
            $subject = 'Upcoming Events Reminder';
            
            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }
            
            // Get today's date and tomorrow's date
            $today = date('Y-m-d');
            $tomorrow = date('Y-m-d', strtotime('tomorrow'));
            date_default_timezone_set('Asia/Karachi');
            
            // Get the current time in 'H:i:s' format
            $current_time = date('H:i:s');
            
            // Query to fetch events for today and tomorrow, but only include today's events if their time is >= current time
            $sql = "SELECT id, title, date, time, description, user_id 
                    FROM event_table 
                    WHERE (date = ? AND time >= ?) 
                       OR (date = ? AND time >= ?) 
                       OR date = ?
                    ORDER BY date, time DESC";
            
            $stmt = $connection->prepare($sql);
            $stmt->bind_param('sssss', $today, $current_time, $tomorrow, $current_time, $tomorrow);
            $stmt->execute();
            $result = $stmt->get_result();
            
            // Check if there are upcoming events
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $SQL = "SELECT * FROM user WHERE id='" . $row['user_id'] . "'";
                    $rew = mysqli_query($connection, $SQL);
                    $user_data = mysqli_fetch_assoc($rew);
                    $adminEmail = $user_data['email'];
            
                    $emailBody = "<h1>Upcoming Events Reminder</h1>";
                    $emailBody .= "<table border='1' cellspacing='0' cellpadding='5'>";
                    $emailBody .= "<thead><tr><th>ID</th><th>Title</th><th>Date</th><th>Time</th><th>Description</th></tr></thead><tbody>";
            
                    $emailBody .= "<tr>";
                    $emailBody .= "<td>" . htmlspecialchars($row['id']) . "</td>";
                    $emailBody .= "<td>" . htmlspecialchars($row['title']) . "</td>";
                    $emailBody .= "<td>" . htmlspecialchars($row['date']) . "</td>";
                    $emailBody .= "<td>" . htmlspecialchars($row['time']) . "</td>";
                    $emailBody .= "<td>" . htmlspecialchars($row['description']) . "</td>";
                    $emailBody .= "</tr>";
            
                    $emailBody .= "</tbody></table>";
            
                    // Send the email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= "From: info@n535eg.com" . "\r\n";
            
                    if (mail($adminEmail, $subject, $emailBody, $headers)) {
                        // echo $adminEmail;
                        // echo "Upcoming events reminder email sent successfully.";
                    } else {
                        // $error = error_get_last();
                        // echo $adminEmail;
                        // echo "Failed to send upcoming events reminder email. Error: " . $error['message'];
                    }
                }
            } else {
                // No upcoming events, so no email is sent
                echo "No upcoming events found. No email sent.";
            }
        } else {
            // Check for duplicate entry error
            if ($connection->errno == 1062) {
                echo "Error: Duplicate entry for date and time.";
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $connection->error;
    }

    // Close the connection
    $connection->close();
}
// Check if the form is submitted

?>