<?php 
    if(isset($_POST["submit"])){
        $lawyer_id = $_POST["lawyer_id"];
        $client_id = $_POST["client_id"];
        $client_name = $_POST["client_name"];
        $client_email = $_POST["client_email"];
        $client_contact_number = $_POST["client_contact_number"];
        $client_address = $_POST["client_address"];
        $client_message = $_POST["client_message"];
        mysqli_query($conn,"insert into contact (lawyer_id,client_id,client_name,client_email,client_contact_number,client_address,client_message,status) values ('$lawyer_id','$client_id','$client_name','$client_email','$client_contact_number','$client_address','$client_message','1')");
?>
<script type="text/javascript">
    alert("Message sent successfully!!!!");
</script>
<?php
    }
?>

<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var client_name = document.getElementById("client_name").value;
        var client_email = document.getElementById("client_email").value;
        var client_contact_number = document.getElementById("client_contact_number").value;
        var client_address = document.getElementById("client_address").value;
        var client_message = document.getElementById("client_message").value;
        
        // Defining error variables with a default value
        var client_nameErr = client_emailErr = client_contact_numberErr = client_addressErr = client_messageErr = true;


        // Start Validate Client Name
        if(client_name == "") {
            printError("client_nameErr", "Please! Enter Your Name");
        } else {
            var regex = /^[a-zA-Z\.,'"\s]+$/;                
            if(regex.test(client_name) === false){
                printError("client_nameErr", "Please! Enter Only Text...");
            } else {
                printError("client_nameErr", "");
                client_nameErr = false;
            }
        }
        // End Validate Client Name

        // Start Validate Client Email Address
        if(client_email == "") {
            printError("client_emailErr", "Please! Enter Your Email Address");
        } else {
            var regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;                
            if(regex.test(client_email) === false){
                printError("client_emailErr", "Please! Enter a valid Email Address");
            } else {
                printError("client_emailErr", "");
                client_emailErr = false;
            }
        }
        // End Validate Client Email Address

        // Start Validate Client Contact Number
        if(client_contact_number == "") {
            printError("client_contact_numberErr", "Please! Enter Your Contact Number");
        } else {
            printError("client_contact_numberErr", "");
            client_contact_numberErr = false;
        }
        // End Validate Client Contact Number

        // Start Validate Client Address
        if(client_address == "") {
            printError("client_addressErr", "Please! Enter Your Address");
        } else {
            printError("client_addressErr", "");
            client_addressErr = false;
        }
        // End Validate Client Address

        // Start Validate Client Message
        if(client_message == "") {
            printError("client_messageErr", "Please! Enter Your Message");
        } else {
            var regex = /^[a-zA-Z\.,?'"\s]+$/;                
            if(regex.test(client_message) === false){
                printError("client_messageErr", "Please! Enter Only Text...");
            } else {
                if(client_message.length < 20){
                    printError("client_messageErr", "Please! Enter Your Message Minimum 20 Characters");
                } else {
                    printError("client_messageErr", "");
                    client_messageErr = false;
                }
            }
        }
        // End Validate Client Message

        if((client_nameErr || client_emailErr || client_contact_numberErr || client_addressErr || client_messageErr) == true){
            return false;
        }else{
            return true;
        }
    }
</script>

<?php
    $role = "Client";
    $sql = "select * from user where username='".$_SESSION["username"]."' and role='".$role."' limit 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
<div class="attorneyContact">
    <h3>Contact <?php echo $lawyerfname; echo $lawyermname; echo $lawyerlname; ?></h3>
    <div class="contact-form">
    <form id="contact-form" class="row" method="POST" action="" onsubmit="return formValidation()">
        <div class="col-md-4 col-sm-6">
        <input type="text" class="form-control client_name" name="client_name" id="client_name" placeholder="Enter Your Name" value="<?php echo $row["first_name"]; ?> <?php echo $row["middle_name"]; ?> <?php echo $row["last_name"]; ?>" readonly>
        <span id="client_nameErr" class="error"></span>
        </div>
        <div class="col-md-4 col-sm-6">
        <input type="text" class="form-control client_email" name="client_email" id="client_email" placeholder="Enter Your Email" value="<?php echo $row["email"]; ?>" readonly>
        <span id="client_emailErr" class="error"></span>
        </div>
        <div class="col-md-4 col-sm-12">
        <input type="text" class="form-control client_contact_number" name="client_contact_number" id="client_contact_number" placeholder="Enter Your Contact Number" value="+<?php echo $row["country_code"]; ?> <?php echo $row["mobile_code"]; ?> <?php echo $row["number"]; ?>" readonly>
        <span id="client_contact_numberErr" class="error"></span>
        </div>
        <div class="col-md-12 col-sm-12">
        <input type="text" class="form-control client_address" name="client_address" id="client_address" placeholder="Enter Your Address" value="<?php echo $row["mailing_address"]; ?>" readonly>
        <span id="client_addressErr" class="error"></span>
        </div>
        <div class="col-md-12 col-sm-12">
        <textarea class="form-control" rows="5" name="client_message" id="client_message" placeholder="Enter Your Message"></textarea>
        <span id="client_messageErr" class="error"></span>
        </div>
        <input type="hidden" name="lawyer_id" value="<?php echo $id; ?>">
        <input type="hidden" name="client_id" value="<?php echo $row["id"]; ?>">
        <div class="col-md-12">
        <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
        </div>
    </form>
    </div>
</div>
<?php } } ?>