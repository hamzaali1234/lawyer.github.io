<?php
session_start();
require("../includes/connection.inc.php");
$title = "Lawyers Website | Clients | Login";
$role = "Client";
require("includes/header.inc.php");
if(isset($_POST["login"])){
	$query= mysqli_query($conn,"select * from user where username='".$_POST["username"]."' and password='".$_POST["password"]."' and role='".$role."' limit 1");
	if(mysqli_num_rows($query)>0){
		$_SESSION['username']=$_POST["username"];
		$query=mysqli_query($conn,"select * from user where username='".$_SESSION["username"]."' limit 1");
        while($row=mysqli_fetch_array($query)){
          	$status=$row["status"];
        	if($status=="0") {
?>
<script type="text/javascript">
	alert("Sorry! You can't login to this Client Account because Your Account has been Blocked by Admin!!!");
</script>
<?php
			}else{
				header("Location: ../index.php");
			}
		}
	}else{
?>
<script type="text/javascript">
	alert("Please! Login to Client Account OR Enter Correct Username & Password");
</script>
<?php
	}
}
?>
<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        
        // Defining error variables with a default value
        var usernameErr = passwordErr = true;


        // Start Validate Username
        if(username == "") {
			printError("usernameErr", "Please! Enter Your Username");
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(username) === false){
                printError("usernameErr", "Please! Enter Only Text...");
            } else {
                printError("usernameErr", "");
                usernameErr = false;
            }
        }
		// End Validate Username
		
        // Start Validate Password
        if(password == "") {
            printError("passwordErr", "Please! Enter Your Password");
        } else {
            var regex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/;                
            if(regex.test(password) === false){
                printError("passwordErr", "Please! Enter Your Password which contain at least one Lowercase letter, one Uppercase letter, one Digit, and Minimum 8 Chracters");
            } else {
                printError("passwordErr", "");
                passwordErr = false;
            }
        }
        // End Validate Password

        if((usernameErr || passwordErr) == true){
            return false;
        }else{
            return true;
        }
    }
</script>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/logo-color.jpeg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST" onsubmit="return formValidation()">
					<span class="login100-form-title">
						Clients Login
					</span>

					<div class="wrap-input100 validate-input" style="margin-top:20px !important;margin-bottom:0px !important;" data-validate="Username is required">
						<input class="input100" type="text" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true" style="color: #b89b5e;"></i>
						</span>
					</div>
					<span id="usernameErr" class="error"></span>

					<div class="wrap-input100 validate-input" style="margin-top:20px !important;margin-bottom:0px !important;" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true" style="color: #b89b5e;"></i>
						</span>
					</div>
					<span id="passwordErr" class="error"></span>
					
					<div class="container-login100-form-btn" style="margin-top:10px !important;">
                        <input type="submit" value="Login" name="login" class="login100-form-btn" style="background-color:#b89b5e ;">
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
						<a class="txt2" href="../index.php">
							Home Page
						</a>
					</div>

					<div class="text-center mt-5">
						<a class="txt2" href="register.php">
							Create your Account
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