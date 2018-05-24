<?php
 if(isset($_POST['submit'])){
$mail_to = 'dp36560@ubt-uni.net'; // email ku do te dergohen te dhenat


    $name = $_POST['Username']; 
    $email = $_POST['email'];
   

    // Titulli i email
    $subject = 'Mesazh nga ' . $name;

    // Pjesa e brendshme 
    $body_message = 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $email . "\r\n";
   
    // Email headers
    $headers = 'From: ' . $email . "\r\n";
    $headers .= 'Reply-To: ' . $email . "\r\n";

    $mail_sent = mail($mail_to, $subject, $body_message, $headers);

    if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for the message. We will contact you shortly.');
        window.location = '../index.php';
        </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify the site administrator');
        window.location = '../index.php';
    </script>
    <?php
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Log in</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Forgot Your Password?</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="forgot.php" method="post" name="forma" onsubmit="return(validate());">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="Username" type="text" required>
                                    </div><div class="form-group">
                                        <input class="form-control" placeholder="email" name="email" type="text" required>
                                    </div>
                                   
                                    
                                    <!-- Change this to a button or input when using this as a form -->
                                   <div class="form-row">

                <button  style="color:white;background:blue;margin-left:122px;"  class="btn" id="butoni"  type="submit" name="submit">Send!</button>
                                       
    
            </div>                 
                                
                                       </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
<script type="text/javascript">
function validate()
{

if( document.forma.Username.value == "" )
{
alert( "Ju lutem shkruani emrin e juaj!" );
document.forma.Username.focus() ;
return false;
}
if( document.forma.email.value == "" )
{
alert( "Ju lutem shkruani emailin!" );
document.forma.email.focus() ;
return false;
}


return( true );
}
</script>
    </body>
</html>
