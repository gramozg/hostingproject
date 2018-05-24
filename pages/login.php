<?php
session_start();

if( isset($_SESSION['user_id']) ){
    header("Location: /");
}

require '../inc/connect.php';


if(isset($_POST['submit'])):
    $Username = $_POST['Username'];
    $password = $_POST['password'];
    $message = '';

    $query = $conn->prepare('SELECT id,name,Username,password FROM userat WHERE Username = :Username');
    $query->bindParam(':Username', $Username);
    $query->execute();

    $user = $query->fetch();

    if(count($user) > 0 && password_verify($password, $user['password']) ){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['name'] = $user['name'];

        header("Location: ../index2.php");

    } 


$query1 = $conn->prepare('SELECT id,Username,password FROM admini WHERE Username = :Username');
    $query1->bindParam(':Username', $Username);
    $query1->execute();

    $user1 = $query1->fetch();

    if(count($user1) > 0 && $password == $user1['password'] ){

        $_SESSION['user_id'] = $user1['id'];
        $_SESSION['Username'] = $user1['Username'];

        header("Location: ../pages/dashboard.php");

    } else {
        $message = 'Sorry, those credentials do not match';
    }

endif;
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
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="login.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="Username" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                         <span style="margin-left:180px;"><a href="../pages/forgot.php">forgot your Password?</a></span>
                                    </div>
                                    <div class="checkbox" style="margin-left:100px;">
                                        <label>
                                            <input   name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                   <div class="form-row">

                <button  style="color:white;background:blue;margin-left:122px;"  class="btn" id="butoni"  type="submit" name="submit">Log in!</button>
                                       
    
            </div>                  <br>
                                    <span style="margin-left:70px;"><a href="../form-validation.php">New member? Register here !</a></span>
                                
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

    </body>
</html>
