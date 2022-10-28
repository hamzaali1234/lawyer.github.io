<?php
session_start();
include("includes/connection.php");
$title = "Lawyers Website - Admin Register";
$role = "Admin";
require("includes/header.inc.php");
if(isset($_POST["register"])){
	$username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	mysqli_query($conn,"insert into user (username,email,password,role) values ('$username', '$email', '$password','$role')");
	header("Location: login.php");
	die;
}
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
                    <img src="images/logo-color.jpeg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title">
						Admin Register
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email Address" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Confirm Password is required">
						<input class="input100" type="password" name="confirm-password" placeholder="Confirm Password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
                        <input type="submit" value="Register" name="register" class="login100-form-btn">
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="forgot.php">
							 Password?
						</a>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Go To
						</span>
						<a class="txt2" href="../../index.php">
							Home Page
						</a>
					</div>

					<div class="text-center mt-5">
						<a class="txt2" href="login.php">
							Login to Admin Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
require("includes/footer.inc.php");
?>