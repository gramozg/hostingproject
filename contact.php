<!DOCTYPE html>

<html>

<head>



    <title>UBT-HOSTING - SERVICE AND PLANS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style12345.css" type="text/css" />

    <script type='text/javascript' src='javascript/jquery.min.js'></script>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <header>
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <a class="login" href="../AWET1/pages/logout.php"> <span class="glyphicon glyphicon-lock"></span> Log Out</a> & |
                    <a class="live" href=""><span class="glyphicon glyphicon-headphones"></span> Live Support</a>
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
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="">About</a></li>
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


    <div class="contact-body">
        <div class="container">

            <div class="row">

                <div class="col-md-7">

                    <?php  require('inc/connect.php');


                                            if(isset($_POST['submit'])){
                                                $name = $_REQUEST['name'];
                                               
                                                $email = $_REQUEST['email'];
                                                $website = $_REQUEST['website'];
                                                $message =$_REQUEST['message'];
                                                
                                                 
                                                $sql = 'INSERT INTO contact (first_name, email, website,  comment) VALUES (:name, :email, :website, :message)';
                                                $query = $conn->prepare($sql);
                                                $query->bindParam('name', $name);
                                                
                                                $query->bindParam('email', $email);
                                                $query->bindParam('website', $website);
                                                $query->bindParam('message', $message);
                                                
                                                   
                                            
                                                if($query->execute()) {
                                                $message = "Thank You for your Feedback!  ";
                                                    echo "$message";
                                            } else {
                                                $message = "A problem occurred creating your account";
                                                 echo "$message";
                                            }
                                                
                                                
                                                header("Location: index2.php");
                                            }
                                    ?>



                    <form id="contact" method="post" action="contact.php" >
                        <h4>
                            <font color="#288feb"><b>Feel free </b>
                            </font> <b> to contact </b>
                        </h4>
                        <!-- Name -->
                        <div>
                            <label for="contact_name">First Name:</label>
                            <input type="text" id="contact_name" name="name">
                            <span class="error">This field is required</span>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="contact_email">Email:</label>
                            <input type="email" id="contact_email" name="email">
                            <span class="error">A valid email address is required</span>
                        </div>
                        <!--website -->
                        <div>
                            <label for="contact_website">website:</label>
                            <input type="url" id="contact_website" name="website">
                            <span class="error">A valid url is required</span>
                        </div>
                        <!-- Message -->
                        <div>
                            <label for="contact_message">Message:</label>
                            <textarea id="contact_message" name="message"></textarea>
                            <span class="error">This field is required</span>
                        </div>
                        <!-- Submit Button -->
                        <div id="contact_submit">
                            <button style="background-color:blue; color:white;" type="submit" name="submit" value="Submit" id="submit">Submit</button>
                        </div>
                    </form>

                    <script>
                        $(document).ready(function() {
                                        			<!-- Real-time Validation -->
                                        				<!--Name can't be blank-->
                                        				$('#contact_name').on('input', function() {
                                        					var input=$(this);
                                        					var is_name=input.val();
                                        					if(is_name){input.removeClass("invalid").addClass("valid");}
                                        					else{input.removeClass("valid").addClass("invalid");}
                                        				});
                                        				
                                        				<!--Email must be an email -->
                                        				$('#contact_email').on('input', function() {
                                        					var input=$(this);
                                        					var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                                        					var is_email=re.test(input.val());
                                        					if(is_email){input.removeClass("invalid").addClass("valid");}
                                        					else{input.removeClass("valid").addClass("invalid");}
                                        				});
                                        				
                                        				<!--website must be a website -->
                                        				$('#contact_website').on('input', function() {
                                        					var input=$(this);
                                        					if (input.val().substring(0,4)=='www.'){input.val('http://www.'+input.val().substring(4));}
                                        					var re = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
                                        					var is_url=re.test(input.val());
                                        					if(is_url){input.removeClass("invalid").addClass("valid");}
                                        					else{input.removeClass("valid").addClass("invalid");}
                                        				});
                                        				
                                        				<!--Message can't be blank -->
                                        				$('#contact_message').keyup(function(event) {
                                        					var input=$(this);
                                        					var message=$(this).val();
                                        					console.log(message);
                                        					if(message){input.removeClass("invalid").addClass("valid");}
                                        					else{input.removeClass("valid").addClass("invalid");}	
                                        				});
                                        		
                                        			<!-- After Form Submitted Validation-->
                                        			$("#contact_submit button").click(function(event){
                                        				var form_data=$("#contact").serializeArray();
                                        				var error_free=true;
                                        				for (var input in form_data){
                                        					var element=$("#contact_"+form_data[input]['name']);
                                        					var valid=element.hasClass("valid");
                                        					var error_element=$("span", element.parent());
                                        					if (!valid){error_element.removeClass("error").addClass("error_show"); error_free=false;}
                                        					else{error_element.removeClass("error_show").addClass("error");}
                                        				}
                                        				if (!error_free){
                                        					event.preventDefault(); 
                                        				}
                                        				else{
                                        					alert('No errors: Form will be submitted');
                                        				}
                                        			});
                                        			
                                        			
                                        			
                                        		});
                    </script>
                </div>

                <div class="col-md-5">
                    <h4> <b>Our Contact </b>
                        <font color="#288feb"> <b> Details </b> </font>
                    </h4>
                    <font color="#288feb">
                        <h4> <span class="glyphicon glyphicon-earphone"> </span> Call us </h4>
                    </font>
                    <p> 00386 49 123 456</p>
                    <p> 00386 49 123 456</p>
                    <font color="#288feb">
                        <h4> <span class="glyphicon glyphicon-map-marker"> </span> Contact Adress </h4>
                    </font>
                    <p> Prishtine,Kosove </p>
                    <p> Emshir, 10000 </p>
                    <font color="#288feb">
                        <h4> <span class="glyphicon glyphicon-envelope"></span> E-mail adress </h4>
                    </font>
                    <p> contact@ubt-host.com</p>
                    <p> info@ubt-host.com</p>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12">

                    <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.66983335729!2d21.150935315329264!3d42.64715892491492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549e8d5d607f25%3A0xa31dd05b21bd09de!2sUniversiteti+p%C3%ABr+Biznes+dhe+Teknologji!5e0!3m2!1sen!2s!4v1516198134661"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <div class="footeri">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">
                        <div class="about-f">
                            <h1>UbtHost</h1>
                            <p> Radipisicing elit , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-f">
                            <font color="#288feb">
                                <h1>Service</h1>
                            </font> WebHosting
                            <br> Domain Name
                            <br> Reseller Hosting
                            <br> Reseller Domain
                            <br> VPS Server
                            <br> Dedicate Server

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-f">
                            <h1>Contact</h1>
                            <p> Hotel Name
                                <br> Street Name & Number
                                <br> Town
                                <br> Postcode/Zip
                                <br> Tel: xxxxx xxxxxxxxxx
                                <br>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>


    <div class="copy-f">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <p> 2017 © Copyright. UBT-Host{.}Tk. All Rights Reserved </p>
                </div>

                <div class="col-md-4">

                </div>





            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>