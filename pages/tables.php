<?php
   require '../inc/connect.php';
      
   $query = $conn->query('SELECT * FROM userat');
      $users = $query->fetchAll();
$query = $conn->query('SELECT * FROM contact');
      $contact = $query->fetchAll();

   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Startmin - Bootstrap Admin Theme</title>
      <!-- Bootstrap Core CSS -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <!-- MetisMenu CSS -->
      <link href="../css/metisMenu.min.css" rel="stylesheet">
      <!-- DataTables CSS -->
      <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
      <!-- DataTables Responsive CSS -->
      <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">
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
      <div id="wrapper">
      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="../index2.php"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
              
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                          
                            <li class="divider"></li>
                            <li><a href="../pages/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="dashboard.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            
                            <li>
                                <a href="tables.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                           
                          
                           
                        </ul>
                    </div>
                </div>
            </nav>
      <div id="page-wrapper">
         <div class="row">
            <div class="col-lg-12">
               <h1 class="page-header">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
         </div>
         <!-- /.row -->
         <div class="row">
            <div class="col-lg-12">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     Users that are registered:
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                     <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                           <thead>
                              <tr>
                                 <th>Name </th>
                                 <th>Email</th>
                                 <th>Username</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach($users as $user): ?>
                              <tr>
                                 <td><?php echo $user['name']; ?></td>
                                 <td><?php echo $user['email']; ?></td>
                                 <td><?php echo $user['Username']; ?></td>
                                 <td><a href="../pages/edit_user.php?id=<?php echo $user['id']; ?>">Edit</a></td>
                                 <td><a href="../pages/delete_user.php?id=<?php echo $user['id']; ?>">Delete</a></td>
                              </tr>
                              <?php endforeach; ?>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
         </div>
         <!-- /.row -->
         <!-- /.row -->
         <!-- /.row -->
         <div class="row">
            <div class="col-lg-6">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     Users that contacted:
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                     <div class="table-responsive">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                
                                 <th>First Name</th>
                                 
                                 <th>Website</th>
                                
                                 <th>Comment</th>
                              </tr>
                           </thead>
                           <tbody>
                               
                            <?php
                                 foreach($contact as $user): ?>
                              <tr>
                                 <td><?php echo $user['first_name']; ?></td>
                                
                                 <td><?php echo $user['website']; ?></td>
                                
                                 <td><?php echo $user['comment']; ?></td>
                                
                                 <td><a href="../pages/delete_user1.php?id=<?php echo $user['id']; ?>">Delete</a></td>
                                   <?php endforeach; ?>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.table-responsive -->
                  </div>
                  <!-- /.panel-body -->
               </div>
               <!-- /.panel -->
            </div>
            <!-- /.col-lg-6 -->
            <!-- /.row -->
         </div>
         <!-- /#page-wrapper -->
      </div>
  </div>
      <!-- /#wrapper -->
      <!-- jQuery -->
      <script src="../js/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="../js/bootstrap.min.js"></script>
      <!-- Metis Menu Plugin JavaScript -->
      <script src="../js/metisMenu.min.js"></script>
      <!-- DataTables JavaScript -->
      <script src="../js/dataTables/jquery.dataTables.min.js"></script>
      <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="../js/startmin.js"></script>
      <!-- Page-Level Demo Scripts - Tables - Use for reference -->
      <script>
         $(document).ready(function() {
             $('#dataTables-example').DataTable({
                     responsive: true
             });
         });
      </script>
      
   </body>
</html>