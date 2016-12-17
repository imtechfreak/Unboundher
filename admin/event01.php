<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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
    <div id="wrapper">

        <!-- Navigation -->
        <?php include('sidebar.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1 class="page-header">Events</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
                            <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Article</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Event timings</label>
                                                                <select class="form-control">
                                                                    <option>12:00 AM</option>
                                                                    <option>1:00 AM</option>
                                                                    <option>2:00 AM</option>
                                                                    <option>3:00 AM</option>
                                                                    <option>4:00 AM</option>
                                                                    <option>5:00 AM</option>
                                                                    <option>6:00 AM</option>
                                                                    <option>7:00 AM</option>
                                                                    <option>8:00 AM</option>
                                                                    <option>9:00 AM</option>
                                                                    <option>10:00 AM</option>
                                                                    <option>11:00 AM</option>
                                                                    <option>12:00 PM</option>
                                                                    <option>1:00 PM</option>
                                                                    <option>2:00 PM</option>
                                                                    <option>3:00 PM</option>
                                                                    <option>4:00 PM</option>
                                                                    <option>5:00 PM</option>
                                                                    <option>6:00 PM</option>
                                                                    <option>7:00 PM</option>
                                                                    <option>8:00 PM</option>
                                                                    <option>9:00 PM</option>
                                                                    <option>10:00 PM</option>
                                                                    <option>11:00 PM</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Event Date</label>
                                                                <br>
                                                                <input type="date" name="eventdate" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>No. of people attended</label>
                                                                <br>
                                                                <input class="form-control" name="pplatending" placeholder="Enter the No of people attending.">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Event Image</label>
                                                                <br>
                                                                <input type="file" class="imgupld">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="container title">
                                                            <div class="row">
                                                                <div col-md-12>
                                                                    <div class="form-group">
                                                                       <input class="form-control" name="blogtitle" placeholder="Enter event name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea class="form-control" rows="18" placeholder="Enter event description"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                        <!--
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                            </div>
                            <!-- /.modal-content -->

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

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
