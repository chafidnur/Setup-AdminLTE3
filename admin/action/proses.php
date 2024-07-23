<?php
session_start();
    include('../../config/dbcon.php');

############################## SWITCH OPEN ##############################    
switch(TRUE){
############################## Login Session ############################## 
    case isset($_POST['login_btn']):
        $username = $_POST['user'];
        $pass = $_POST['pass'];

        // Validasi Username
        $result = mysqli_query($con, "SELECT * FROM admin WHERE username = '$username'");
        $row = mysqli_fetch_assoc($result);
        // Check Validasi
        $_SESSION['username'] = $row['username'];
        $ps = $row['password'];

        // var_dump($user, $username, $pass, $ps);
        // var_dump($kd);

        if($username == $_SESSION['username']){
            if($pass == $ps){
                if ($row['id']==1) {
                    session_start();
                    $_SESSION["status"] = "login";
                    $_SESSION['kd'] = $row['id'];
                    header('location:../dashboard.php');
                }elseif($row['id']!=1){
                    //iki kanggo user selain admin
                    session_start();
                    $_SESSION["status"] = "login";
                    $_SESSION['kd'] = $row['id'];
                    header('location:../dashboard.php');
                }
                
            }
            else{
                echo "
                <script>
                alert('USERNAME/PASSWORD SALAH');
                window.location = '../index.php';
                </script>
                ";
            }
        }
        else{
            echo "
            <script>
            alert('USERNAME/PASSWORD SALAH');
            window.location = '../index.php';
            </script>
            ";
        }
    break;
############################## Live Check Email jQuery ##################
    case isset($_POST['check_Emailbtn']):
            $email = $_POST['email'];
            $checkemail = "SELECT email FROM user WHERE email = '$email' ";
            $checkemail_run = mysqli_query($con, $checkemail);

            if(mysqli_num_rows($checkemail_run) > 0)
                {
                    echo "Email ID Already Taken.!";
                }
            else 
            {
                echo " It's Available to Create.";
            }
    break;
############################## ACTION CREATE ############################## 
    case isset($_POST['addUser']):
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $status = $_POST['status'];

            $user_query = "INSERT INTO user (name,email,password,phone,status) 
                                VALUES ('$name','$email','$password','$phone','$status')";
            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run){
            $_SESSION['status'] = "User Added Successfully!";
                header("Location: mcust.php");
            }
            else{
                $_SESSION['status'] = "User Registeration Failed!";
                header("Location = mcust.php");
            }
    break;
############################## UPDATE; ############################## 
    case isset($_POST['updateUser']):
        $user_id = $_POST['user_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $status = $_POST['status'];

        $query = "UPDATE user SET name='$name', email='$email', password='$password', phone='$phone', status='$status' 
                    WHERE id='$user_id' ";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['status'] = "User Updated Successfully!";
            header("Location: mcust.php");
        }
        else {
            $_SESSION['status'] = "User Updating Failed!";
            header("Location = mcust.php");
        }
    break;
############################## DELETE; ############################## 
    case isset($_POST['deletebtn']):
    
        $user_id = $_POST['delete_id'];

        $query = "DELETE FROM customer WHERE id='$user_id' ";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['status'] = "User Deleting Successfully!";
            header("Location: mcust.php");
        }
        else {
            $_SESSION['status'] = "User Deleting Failed!";
            header("Location = mcust.php");     
    }
    break;
############################## DEFAULT; ##############################
    default:
         $_SESSION['status'] = "QUERY ERROR !";
            header("Location = mcust.php");
    break;
############################## SWITCH END; ############################## 
}
############################## SWITCH END; ############################## 
?>