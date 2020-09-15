
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CL MONITOR </title>
    
    
    
    <style>
            table,tr,th,thead,td
            {
                border: 1px solid green;
            }
            table.gridtable {
                margin:0 auto;
                width:95%;
                overflow:auto;
                font-family: helvetica,arial,sans-serif;
                font-size:12px;
                color:#333333;
                border-width: 2px;
                border-collapse: collapse;
                text-align: center;
               
               
            }
        </style>
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.css">
    <script src="../../datepicker/js/min.js"></script>
    <script src="../../bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- datatable style -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script type="text/javascript" language="JavaScript" src="../validate.js"></script>

    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php
$host = 'localhost';
$username = 'root';
$password='';
$dbconfig = mysqli_connect($host, $username, $password);
mysqli_select_db($dbconfig,"ci_db") or die("cannot select DB");


    ?>
    <header class="main-header">

        <!-- Logo -->
        <a href="main_dashboard.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b></b>MONITORING TOOL</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">

                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">

                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/img_avatar2.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Administrator<?php // while($row = mysqli_fetch_array($fromuser2)){?><?php //echo ucfirst($row['jina']); ?><?php //}?></p>
                    <a href="main_dashboard.php"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">

                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">

                <li>
                    <a href="main_dashboard.php">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
             
                <li>
                    <a href="general_report.php" data-toggle="modal" data-target="#profit">
                        <i class="fa fa-bar-chart"></i> <span>General Report</span>
                    </a>
                </li>
                <li>
                    <a href="SearchbyCenter.php">
                        <i class="fa fa-database"></i> <span>Center's Report</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>              
                
                <li>
                    <a href="SearchbyCluster.php">
                        <i class="fa fa-database"></i> <span>Cluster's Report</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="search.php">
                        <i class="fa fa-database"></i> <span>Advanced Search</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="search_date.php">
                        <i class="fa fa-database"></i> <span>Search By Date</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="upload_file/final.php">
                        <i class="fa fa-database"></i> <span>Upload File</span>
                        <span class="pull-right-container">
                         <small class="label pull-right bg-green">new</small>
                        </span>
                    </a>
                </li>
                
                
                <li class="treeview">
                    <a href="infographic.php">
                        <i class="fa fa-pie-chart"></i>
                        <span> Info Graphic </span>
                           <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>                
                </li>

                
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-database"></i> Report View
            </h1>
            <ol class="breadcrumb">
                <li><a href="main_dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Report View</li>
            </ol>
        </section>
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>&nbsp;&nbsp;
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
                                    <div>
                           <a href="general_report.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#addstock">Total No. of Unique Logins, Application Access & Hours of App Use</a>
                            <a href="monthly.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">Total No. of Unique Logins, Application Access & Hours of App Use per Month/Week</a><br></br>
                            <a href="app_use_frequency.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#addstock">Total Monthly App Use Frequency</a>
                            <a href="total_app_use_per_user.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">Total Number of Application Access Per User</a>
                            <a href="daily_application.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">Daily Application Access Per User</a>
                            <a href="daily_user_log.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">Daily User Log</a><br></br>
                            <a href="search.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">Search by Name</a>
                            <a href="search_date.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">Search by Date</a>
                          <!--  <a href="base.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">Bases</a>
                            <a href="cluster.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">Clusters</a>
                            <a href="center.php" class="btn btn-success  tooltop" role="button" data-toggle="modal" data-target="#update">Centers</a>-->
                            <a href="graph.php" class="btn btn-success  tooltop" role="button">Info-Graphics</a>
                                    </div>
                                    </p>                                  
                                </div>

                                <div class="col-sm-5"></div>

                                <div class="col-sm-2 ">
                                    <p class="pull-left">
                                    
                                    </p>
                                </div>

                            </div>

                        </div>
                        <!--table start-->
                       <div class="box-body">
                            <div class="table-responsive">
                                <table class="gridtable">
            <?php
            $query =mysqli_query($dbconfig,"SELECT EXTRACT(MONTH FROM start_time) as Month, "
                    . "EXTRACT(WEEK FROM start_time) as week, start_time as date, id, user_name as unique_logins, "
                    . "count(application) as number_access,application as application_name, "
                    . "SUM(TIME_TO_SEC(`Total_system_hours`))/60 as Total_system_hours from monitored_info group by "
                    . "EXTRACT(MONTH FROM start_time), EXTRACT(WEEK FROM start_time), user_name, application ")or die("this code is not running");
            ?>

                <thead>
                <tr>
                    <th>MONTH</th>
                    <th>WEEK</th>
                    <th>DATE</th>
                    <th>ID</th>
                    <th>USER NAME</th>
                    <th>APPLICATION NAME</th>
                    <th><center>NUMBER OF APPLICATION ACCESS</center></th>
                    <th><center>TOTAL TIME OF APPLICATION USE (Min)</center></th>

                </tr>
                </thead>
                <tbody>
                <?php
                                        //print 10 item
                                                                         
          while($row2 = mysqli_fetch_array($query))
                                        {
         $month=$row2['Month'];
                 switch ($month) {
                case 1:
                    $month= "January";
                    break;
                case 2:
                    $month= "February";
                    break;
                case 3:
                    $month= "March";
                    break;
                case 4:
                    $month= "April";
                    break;
                case 5:
                    $month= "May";
                    break;
                case 6:
                    $month= "June";
                    break;
                case 7:
                    $month= "July";
                    break;
                case 8:
                    $month= "August";
                    break;
                case 9:
                    $month= "September";
                    break;
                case 10:
                    $month= "October";
                    break;
                case 11:
                    $month= "November";
                    break;
                case 12:
                    $month= "December";
                    break;
                    default :
            echo"no corrent month value";
              }
             ?>

                                    <tr>
                                        <td><?php echo $month?></td>
                                        <td><?php echo $row2['week'];?></td>
                                        <td><?php echo $row2['date'];?></td>
                                        <td><?php echo $row2['id'];?></td>
                                        <td> <?php echo $row2['unique_logins'];?></td>
                                        <td><?php echo $row2['application_name'];?></td>
                                        <td> <?php echo $row2['number_access'];?></td>
                                        <td><?php echo $row2['Total_system_hours'];?></td>
                                        

                                    </tr>

                                    <?php }
                                    ?>
                                    </tbody>
                                </table>
                                <br>
                        </div>
                    </div>
                        
                        <style>
  #container {
  height: 400px;
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

#sliders td input[type=range] {
  display: inline;
}
#sliders td {
  padding-right: 1em;
  white-space: nowrap;
}
</style>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<?php
include 'connection.php';
include_once 'graphMaker.php';

function unsetValues($values,$array){
    foreach ($values as $value) {
        unset($array[$value]);
    }
    return $array;
}

$sql="SELECT EXTRACT(MONTH FROM start_time) as Month, "
                    . "EXTRACT(WEEK FROM start_time) as week, start_time as date, user_name, user_name as unique_logins, "
                    . "count(application) as number_access,application as application_name, "
                    . "SUM(TIME_TO_SEC(`Total_system_hours`))/60/60 as Total_system_hours from monitored_info group by "
                    . "EXTRACT(MONTH FROM start_time), EXTRACT(WEEK FROM start_time), user_name, application";
$query=  mysqli_query($dbconfig,$sql);
while($row = mysqli_fetch_assoc($query)) {
    $row = json_encode($row, JSON_NUMERIC_CHECK);
    $row = json_decode($row, true);
    $row['Total_system_hours'] = round($row['Total_system_hours'],1);
    $file_contents[] = $row;
}

$graph1_data =($file_contents);
$chart_name = "Graphical Representation";
$chart_id = 'graph1Chart';
$x_axis_column = "user_name";


createChartArea($chart_id);
$chart_data = prepareChartData($graph1_data,$x_axis_column);
drawColumnChart($chart_data['series_data'], $chart_data['x_axis_data'], $chart_name, $chart_id, $subtitle = '');



?>;

                        
                </div>
            </div>
        </section>
 
        </div>
    </div>


    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2017 <a href="http://softtech.aliveer.net">KinsleyInc</a>.</strong> All rights
        reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<script src="filter.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
   $('#mydata').dataTable();
</script>
</body>
</html>
