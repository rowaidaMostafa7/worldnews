<?php
if(isset($_POST['subscribe'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    if(empty($name) || empty($email)){
        $error_message = '<span class="text-danger">All Fields Are Required</span>';
    }
    else{
        $query = "INSERT INTO `subscribers_list`(`name`, `email`) VALUES 
                                                        ('$name','$email')";
        $res = mysqli_query($conn,$query);
        $success_msg = '<span class="text-success">Request Submitted</span>';
    }
}
?>
