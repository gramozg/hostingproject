<?php  include('inc/connect.php');


        if(isset($_POST['submit'])){
			$FirstName = $_POST['FirstName'];
            $LastName = $_POST['LastName'];
             $email=$_POST['email'];
          $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $address = $_POST['address'];
            $address2 =$_POST['address2'];
            $city=$_POST['city'];
             $state=$_POST['state'];
             $zip=$_POST['zip'];
            $FirstName2 = $_POST['FirstName2'];
            $LastName2 = $_POST['LastName2'];
             $cardNr=$_POST['cardNr'];
             $expiration=$_POST['expiration'];
             $cvv=$_POST['cvv'];
            
            
			 
            $sql = 'INSERT INTO porosia (FirstName, LastName, email, password, address, address2, city, state, FirstName2, LastName2, cardNr, expiration, cvv ) VALUES (:FirstName, :LastName, :email, :password, :address, :address2, :city, :state, :FirstName2, :LastName2, :cardNr, :expiration, :cvv)';
            $query = $conn->prepare($sql);
			$query->bindParam('FirstName', $FirstName);
            $query->bindParam('LastName', $LastName);
			$query->bindParam('email', $email);
            $query->bindParam('password', $password);
            $query->bindParam('address', $address);
            $query->bindParam('address2', $address2);
            $query->bindParam('city',$city);
            $query->bindParam('state',$state);
            $query->bindParam('FirstName2', $FirstName2);
            $query->bindParam('LastName2', $LastName2);
            $query->bindParam('cardNr', $cardNr);
            $query->bindParam('expiration', $expiration);
            $query->bindParam('cvv', $cvv);
            
            
            
			   
           
            if($query->execute()) {
            $message = "Thank You for your Feedback!  ";
                echo "$message";
        } else {
            $message = "A problem occurred creating your account";
             echo "$message";
        }
			
			
            header("Location: order.php");
        }
?>

<!DOCTYPE html>
<html>

<head>
    <title>UBT-HOSTING - SERVICE AND PLANS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1234.css" type="text/css" />
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <header>
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <a class="login" href="pages/logout.php"> <span class="glyphicon glyphicon-lock"></span> Log Out</a>

                    <a class="live" href="#index.html"><span class="glyphicon glyphicon-headphones"></span> Live Support</a>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo">
                                <img src="images/logo.jpg">
                            </div>
                            <div class="slogan">
                                <h3> UBT
                                    <font color="#288feb"> Hosting </font>
                                </h3>
                                <p> best hosting agency</p>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="nav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="#Services">Hosting</a></li>
                                    <li><a href="#Portfolio">Service</a></li>
                                    <li><a href="#Blog">Support</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="body">
        <div class="container">
            <div class="search-domain">
                <div class="step-1">

                    <h3> Choose your domain</h3>
                    <div class="col-md-12">
                        <div class="domain-info">

                            Search your domain: <input type="" name="" required>
                            <button type="button" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form>
                            <label class="checkbox-inline">
                     <input type="checkbox" value="" required>.com
                     </label>
                            <label class="checkbox-inline">
                     <input type="checkbox" value="">.net
                     </label>
                            <label class="checkbox-inline">
                     <input type="checkbox" value="">.org
                     </label>
                            <label class="checkbox-inline">
                     <input type="checkbox" value="">.info
                     </label>
                            <label class="checkbox-inline">
                     <input type="checkbox" value="">.al
                     </label>
                        </form>
                    </div>
                    <div class="dropdown">
                        <!--  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Choose your hosting plan
                        <span class="caret"></span></button>
                        
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Basic Plan - 3.99$/m</a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pro Plan - 5.99$/m </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Business Plan - 7.99$/m </a></li>
                          
                        </ul> -->

                        Choose your hosting plan:
                        <select name="users" onchange="showUser(this.value)">
                         <option required>--</option>
                        <option value="1"> Basic Plan - 3.99$/m</option>
                        <option value="2"> Pro Plan - 5.99$/m</option>
                        <option value="3"> Business Plan - 7.99$/m</option>
                     </select>

                    </div>
                </div>
            </div>
        </div>
        <form action="order.php" method="post" name="porosia" onsubmit=" return validateForm();">
            <div class="container">
                <div class="step-2">
                    <div class="contact-info">
                        <h3> Contact Information</h3>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">FIrst Name</label>
                                <input type="text" class="form-control" placeholder="First name" name="FirstName" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last name" name="LastName" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity" name="city" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control" name="state" required>
                              <option selected>Choose...</option>
                              <option value="albania">Albania</option>
                               <option value="kosovo">Kosovo</option>
                           </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip" name="zip" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                .

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="step-3">
                    <div class="pay-info">
                        <fieldset>
                            <h3> Payment information </h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">First Name</label>
                                    <input type="text" class="form-control" placeholder="First name" name="FirstName2" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" name="LastName2" required>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Card Number</label>
                                <input type="text" class="form-control" placeholder="Card Number" name="cardNr" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Expiration</label>
                                <input type="text" class="form-control" placeholder="M/Y" name="expiration" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip" id="cv">CVV </label>
                                <input type="text" class="form-control" id="cvv" placeholder="***" name="cvv" required>
                            </div>
                    
                    
                    </fieldset>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="step-4">
                    <div class="buy-info">
                        <h3> Purchase Information</h3>

                        <div id="txtHint"><b>Your paying info will be shown here.</b></div>

                    </div>
                </div>
                <div class="finish-step">
                    <label class="radio-inline"><input type="radio" name="optradio" required>I agree to the Terms and Conditions
                  </label>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Finish</button>
                </div>
            </div>
    
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
<script>
    function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
	}
function validateForm() {
    var x = document.forms["porosia"]["FirstName"].value;
    if (isNumeric(x)) {
        alert("Your First Name should not contain numbers!");
        return false;
    }
    var q = document.forms["porosia"]["LastName"].value;
    if (isNumeric(q)) {
        alert("Your Last Name should not contain numbers");
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
     var e = document.forms["porosia"]["city"].value;
    if (isNumeric(e)) {
        alert("Your City should not contain numbers!");
        return false;
    }
     var r = document.forms["porosia"]["zip"].value;
    if (!isNumeric(r)) {
        alert("Your Zip code should contain numbers!");
        return false;
    }
      var t = document.forms["porosia"]["FirstName2"].value;
    if (isNumeric(t)) {
        alert("Your First Name of your Credit Card should not contain numbers!");
        return false;
    }
    var u = document.forms["porosia"]["LastName2"].value;
    if (isNumeric(u)) {
        alert("Your Last Name of your Credit Card should not contain numbers");
        return false;
    }
    var i = document.forms["porosia"]["cardNr"].value;
    if (!isNumeric(i)) {
        alert("Your Credit Card Number should contain numbers!");
        return false;
    }
    var o = document.forms["porosia"]["cvv"].value;
    if (!isNumeric(o)) {
        alert("Your CVV should contain numbers!");
        return false;
    }
    
     
}
    
    
    function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>