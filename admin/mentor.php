<?php 
include('db/db1.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UnboundHer</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal01" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog delete">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Are you sure you wan't to delete this event?</h4>
                                        </div>
                                        <div class="modal-body deletebody">
                                            <button type="button" class="btn btn-outline btn-default deleteyes">YES</button>
                                            <button type="button" class="btn btn-outline btn-default deleteno">NO</button>
                                        </div>
                                        <!--
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                        -->
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
        <div id="wrapper">

        <!-- Navigation -->
        <?php include('sidebar.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <h1 class="page-header">Mentor List</h1>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <!-- Button trigger modal -->
                            <button class="btn btn-primary btn-lg addblog" data-toggle="modal" data-target="#myModal">
                                Add New
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog blogmodal">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add New Mentor</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <form method="post" action="" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <br>
                                                                <input class="form-control" name="name" placeholder="Enter the name of Mentor">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Choose category</label>
                                                                <select id="Domain" name="category" class="form-control">
                        <?php  while($row = mysqli_fetch_assoc($result1)) :?>
                        <option value="<?php echo $row['Domain_id']; ?>"<?php echo $row['Domain_name']; ?>> select Domain</option>
                        <?php endwhile; ?>

                <?php
               $query1="SELECT * FROM domain";
             $result1=mysql_query($query1);
                 while ($row=mysql_fetch_array($result1)) { ?>
                      <option value=<?php echo $row['Domain_id']?>><?php echo $row['Domain_name']?>                        
                       </option>
                                <?php } ?>

                                </select>

                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Profile Pic</label>
                                                                <br>
                                                                <input type="file" name="image" class="imgupld">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Email Address</label>
                                                                <br>
                                                                <input class="form-control" name="email" placeholder="Enter the email address.">
                                                            </div>
                                                            <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <br>
                                                                <input class="form-control" type="password" name="password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <br>
                                                                <input class="form-control" type="password" name="password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Phone No.</label>
                                                                <br>
                                                                <input class="form-control" name="phoneno" placeholder="Enter the Phone No.">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label>Location</label>
															<select id="location" name="location" class="form-control">
															<?php $res = mysql_query("SELECT * FROM location"); ?>
 															<?php while($sql = mysql_fetch_assoc($res)): ?>
															  <option value="<?php echo $sql['Location_id']; ?>">
															   <?php echo $sql['Location_name']; ?>
															  </option>
															<?php endwhile; ?>  
															</select>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Address</label>
                                                            <br>
                                                            <textarea class="form-control" rows="3" name="address" placeholder="Enter Address of Mentor"></textarea>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Description</label>
                                                            <br>
                                                            <textarea class="form-control" rows="3" name="address" placeholder="Enter Description"></textarea>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Qualifications</label>
                                                            <br>
                                                            <textarea class="form-control" name="qualifctn" rows="3" placeholder="Enter Qualifications"></textarea>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                                            <input type="submit" name="savechange" value="Save" class="btn btn-primary">
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                    </div>

            <!-- /.container-fluid -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of Mentors
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>ProfilePic</th>
                                            <th>Status</th>
                                            <!--<th>Add/Remove</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
    mysql_connect("localhost", "root","") or die(mysql_error()); 
        mysql_select_db("unboundher") or die("Cannot connect to database"); 
    $query = mysql_query("select * from ment");
    while($row = mysql_fetch_array($query))
    {
        print"<tr>";
        print '<td align="center">'. $row['name'] . "</td>";
        print '<td align="center">'. $row['category'] . "</td>";
        print '<td align="center">'. $row['image'] . "</td>";
        print '<td align="center">'. $row['status'] . "</td>";
        print"<tr>";

      
    }
          

    ?>
           
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

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
