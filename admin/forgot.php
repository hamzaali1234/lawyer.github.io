<?php
session_start();
include("includes/connection.php");
include("includes/functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was POSTED
    $email = $_POST['email'];
    // if(!empty($email))
    // {

    // }else
    // {
    //     echo "Please Enter Valid Email Address";
    // }
    $query = "select * from admin_users where email='".$email."' and id=1";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['email'] === $email)
            {
                $_SESSION['user_id'] = $user_data['id'];
                header("Location: password-forgot.php");
                die;
            }
        }
    }
    
    echo "Password forgot";

}
$title = "Lawyers Website - Admin Forgot";// for dynamic title on selected page
require("includes/form-includes/header.inc.php");
?>
<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <input type="submit" class="btn btn-primary btn-flat m-b-15" name="submit" value="Forgot Password">
                        <div class="register-link mt-3 text-center">
                        <p>Already have account ? <a href="login.php"> Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
require("includes/form-includes/footer.inc.php");
?>