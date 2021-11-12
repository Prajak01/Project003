<?php require_once('connect_db.php') ?>

<?php
    session_start();
    function register(){
        if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $email    = mysqli_real_escape_string($conn,$_POST['email']);
            $country  = mysqli_real_escape_string($conn,$_POST['country']);
            $phone    = mysqli_real_escape_string($conn,$_POST['phone']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);
            $cfpassword = mysqli_real_escape_string($conn,$_POST['cfpassword']);
    
            $checkemail = "SELECT * FROM register WHERE email='$email'";
            $checkemail_run = $conn->query($checkemail);
            if($checkemail_run->num_rows){
                $_SESSION['status'] ="Email Already Taken. Please Try Another one.";
                $_SESSION['status_code'] = "error";
                header('Location:index.php');
            }else{
                if($password === $cfpassword){
                    $hash_password = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `register`(`username`, `email`, `country`, `phone`, `password`) 
                    VALUES ('".$username = $_POST['username']."',
                            '".$email    = $_POST['email']."',
                            '".$country  = $_POST['country']."',
                            '".$phone    = $_POST['phone'] ."',
                            '".$hash_password."' )";
                    $result = $conn->query($sql);
                    if($result){
                        $_SESSION['status'] = 'Register Success';
                        $_SESSION['status_code'] = "success";
                        header('Location:index.php');
                    }else{
                        $_SESSION['status'] = 'Not Register Success';
                        $_SESSION['status_code'] = "error";
                        header('Location:index.php');
                    }
                }else{
                    $_SESSION['status'] = 'Password and Confirm Password Does Not Math';
                    $_SESSION['status_code'] = "warning";
                    header('Location:index.php');
                }
             
            }
        }
    }
    

?>
