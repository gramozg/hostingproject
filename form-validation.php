
<?php
    session_start();

    if( isset($_SESSION['user_id']) ){
        header("Location: /");
    }

    require 'inc/connect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $Username = $_POST['Username'];
		$email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $message = '';

        $sql = 'INSERT INTO userat (name, Username, email, password) VALUES (:name, :Username, :email, :password)';
        $query = $conn->prepare($sql);
        $query->bindParam('name', $name);

		$query->bindParam('Username', $Username);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);
        
        if($query->execute()) {
            $message = "Successfully created your account";
        } else {
            $message = "A problem occurred creating your account";
        }
    }
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Validation Form</title>

	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-validation.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

</head>
      
<body>
	<header>
		<h1 id="telling">Tell us a bit about yourself!</h1>
       
    </header>

    

    <div class="main-content">

        <!-- You only need this form and the form-validation.css -->

        <form class="form-validation" method="post" action="form-validation.php"  name="porosia" onsubmit="return validateForm();">

            <div class="form-title-row">
                <h1>Sign Up!</h1>
            </div>

            <div class="form-row form-input-name-row" id="name_div">
                
                <label>
                    <span>Full Name</span>
                    <input type="text" name="name" required >
                     
                </label>
                

               

                
            </div>
             <div class="form-row2" id="username_div">
                 
                <label>
                 <span id="span1">Username</span>
                <input style="margin-left:-25px;" id="pass" type="text" name="Username" required ><br>
                     <div id="username_error"></div>
                </label>
                 
            </div>

            <div class="form-row form-input-email-row" id="email_div" required>
                
                <label>
                    <span>Email</span>
                    <input style="margin-left:12px;" type="email" name="email" placeholder="email@example.com" required >
                     <div id="email_error"></div>
                </label>

               
            </div>
            

            <div class="form-row2" id="password_div">
             
                <label>
                 <span id="span1">Password</span>
                <input style="margin-left:-20px;" id="pass" type="password" name="password"  required><br>
                     <div id="password_error"></div>
                </label>
               
            </div>
            

            <div class="form-row">

                <button  id="butoni"  type="submit" name="submit">Submit!</button>

            </div>
             <span><br>or <br><a href="pages/login.php">login here</a></span>
            
        </form>
        
    </div>
        <script>
                function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
	}
function validateForm() {
    var x = document.forms["porosia"]["name"].value;
    if (isNumeric(x)) {
        alert("Your Full Name should not contain numbers!");
        return false;
    }
    var q = document.forms["porosia"]["Username"].value;
    if (q.length<= 3) {
        alert("Your Username should be longer than 3 characters!");
        return false;
    }
	var y = document.forms["porosia"]["email"].value;
    var atpos = y.indexOf("@");
    var dotpos = y.lastIndexOf(".");
   if (atpos<1 || dotpos<atpos+2|| dotpos+2>=y.length ) {
        alert(" E-mail address it's not valid!");
        return false;
    }
     var w = document.forms["porosia"]["password"].value;
     if(w.length<8) {
       
        alert("Your password should contain at least 8 characters!");
        return false;
    }
     
     
}
   
                                 
            </script>





</body>

</html>
