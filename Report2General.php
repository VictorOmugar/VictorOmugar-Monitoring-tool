
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

include 'connection.php';
if(isset($_POST['submit']))
{
  // getting id from the search by cluster 
      $center_id=$_POST['center_id'];
    //geting CENTER ID from cluster table
    
    $result= mysqli_query($dbconfig,"SELECT center_name from centers WHERE center_id='$center_id'");

    if(mysqli_num_rows($result)>0)
    {
     $row= mysqli_fetch_array($result);
     $center_name=$row[0];
    }
    else{
       $center_name="error";  
    }
        
  
}

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
                                <h3>Total number of unique logins, Application access and Hours of app used in (<?php echo$center_name?>)</h3>
                                <table class="gridtable">
                                    <?php
                                    $query =mysqli_query($dbconfig,"SELECT 
                                    DISTINCT EXTRACT(MONTH FROM start_time) as Month,
                                    count( DISTINCT user_name) as unique_logins,
                                    COUNT(application) as number_access,
                                    centers_center_id, 
                                    SUM(TIME_TO_SEC(`Total_system_hours`))/3600 as Total_system_hours 
                                    
                                    FROM monitored_info 
                                    WHERE centers_center_id = '$center_id'
                                    group by   centers_center_id")or die("this code is not running");
                                    ?>
                                
                                        <thead>
                                        <tr>
                                            <th><center>CENTER ID</center></th>
                                            <th>MONTH</th>
                                            <th>NUMBER OF UNIQUE LOGINS</th>
                                            <th>TOTAL NUMBER OF APPLICATION ACCESS </th>                  
                                            <th>TOTAL HOURS OF APPLICATION USE</th>
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
                                        <td><?php echo $row2['centers_center_id'];?></td>
                                        <td><?php echo $month?></td>
                                        <td> <?php echo $row2['unique_logins'];?></td>
                                            <td><?php echo $row2['number_access'];?></td>
                                            
                                        <td><?php echo $row2['Total_system_hours'];?></td>
                                        

                                    </tr>

                                    <?php }
                                      
                                    ?>
                                    
                                    </tbody>
                                </table>
                                <br>
                        </div>
                <!--table End-->

       <!--table start-->
       <div class="box-body">
                            <div class="table-responsive">
                                <h3>Total number of unique logins, Application access and Hours of app used per Month in (<?php echo$center_name?>)</h3>
                                <table class="gridtable">
                                    <?php
                                    $query2 =mysqli_query($dbconfig,"SELECT
                                    centers_center_id,
                                    EXTRACT(MONTH FROM start_time) as Month, 
                                    count(DISTINCT user_name) as unique_logins, COUNT( application) as number_access, 
                                    application as application_name, SUM(TIME_TO_SEC(`Total_system_hours`))/60/60 as Total_system_hours 
                                    from monitored_info 
                                    WHERE centers_center_id = '$center_id'
                                    group by EXTRACT(MONTH FROM start_time), application")or die("this code is not running");
                                    ?>
                                
                                        <thead>
                                        <tr>
                                        <th><center>CENTER ID</center></th>
                                        <th>MONTH</th>
                                            <th><center>APPLICATIONS OPENED</center></th>
                                            <th> <center>TOTAL NUMBER OF UNIQUE LOGINS</center></th>
                                            <th> <center>TOTAL NUMBER OF APPLICATION ACCESS</center></th>
                                            <th><center>TOTAL TIME OF APPLICATION USE (Hours)</center></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        //print 10 item
                                                          
                                        while($row3 = mysqli_fetch_array($query2))
                                                                        {
                                        $month=$row3['Month'];
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
                                        <td><?php echo $row3['centers_center_id'];?></td> 
                                        <td><?php echo $month?></td>
                                        <td><?php echo $row3['application_name'];?></td>
                                        <td> <?php echo $row3['unique_logins'];?></td>
                                        <td><?php echo $row3['number_access'];?></td>
                                        <td><?php echo $row3['Total_system_hours'];?></td>
                                        
                                    </tr>

                                    <?php }
                                    
                                    ?>
                                    </tbody>
                                </table>
                                <br>
                        </div>
                <!--table 2 End-->
                
                <div class="box-body">
                            <div class="table-responsive">
                                <h3>Total number of unique logins, Application access and Hours of app used per Week in (<?php echo$center_name?>)</h3>
                                <table class="gridtable">
                                
                                    <?php
                                    $query3 =mysqli_query($dbconfig,"SELECT 
                                    centers_center_id,
                                    EXTRACT(MONTH FROM start_time) as Month, 
                                    EXTRACT(WEEK FROM start_time) as week,
                                    COUNT(user_name) as unique_logins,
                                    COUNT( application) as number_access, application as application_name,
                                    SUM(TIME_TO_SEC(`Total_system_hours`))/60/60 as Total_system_hours 
                                    from monitored_info 
                                    WHERE centers_center_id = '$center_id'
                                    group by EXTRACT(MONTH FROM start_time), EXTRACT(WEEK FROM start_time),application")or die("this code is not running");
                                    ?>
                               
                                        <thead>
                                        <tr>
                                            <th><center>CENTER ID</center></th>
                                            <th>MONTH</th>
                                            <th>WEEK</th>
                                            <th><center>APPLICATIONS OPENED</center></th>
                                            <th> <center>TOTAL NUMBER OF UNIQUE LOGINS</center></th>
                                            <th> <center>TOTAL NUMBER OF APPLICATION ACCESS</center></th>
                                            <th><center>TOTAL TIME OF APPLICATION USE (Hours)</center></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        //print 10 item
          while($row4 = mysqli_fetch_array($query3))
                                        {
         $month=$row4['Month'];
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
                                        <td><?php echo $row4['centers_center_id'];?></td>
                                        <td><?php echo $month?></td>
                                        <td><?php echo $row4['week'];?></td> 
                                        <td><?php echo $row4['application_name'];?></td>
                                        <td> <?php echo $row4['unique_logins'];?></td>
                                        <td><?php echo $row4['number_access'];?></td>
                                        <td><?php echo $row4['Total_system_hours'];?></td>
                                        

                                    </tr>

                                    <?php }
                                    ?>
                                    </tbody>
                                </table>
                                <br>
                        </div>
                    </div>

                </div>
                        <!--table start-->
                        <div class="box-body">
                            <div class="table-responsive">
                                <h3>Total Number of App Access Per User Weekly in (<?php echo$center_name?>)</h3>
                                <table class="gridtable">
                                    <?php
                                    $query4 =mysqli_query($dbconfig,"SELECT centers_center_id, 
                            EXTRACT(MONTH FROM start_time) as Month, 
                            EXTRACT(WEEK FROM start_time) as week, 
                            start_time as date,id, 
                            (select distinct user_name) as unique_logins,
                            count(application) as number_access,application as application_name,
                            SUM(TIME_TO_SEC(`Total_system_hours`))/60/60 as Total_system_hours 

                            from monitored_info 
                            WHERE centers_center_id = '$center_id'

                            group by EXTRACT(MONTH FROM start_time), EXTRACT(WEEK FROM start_time), user_name, application ")or die("this code is not running");
                                    ?>
                                
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th><center>CENTER ID</center></th>
                                            <th>MONTH</th>
                                            <th>WEEK</th>
                                            <th>DATE</th>
                                            <th>USER NAME</th>
                                            <th>APPLICATION</th>
                                            <th>TOTAL NUMBER OF APPLICATION ACCESS</th>
                                            <th>TOTAL TIME OF APPLICATION USE (Hours)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        //print 10 item
                                                                         
          

            $users = [];

          while($row5 = mysqli_fetch_array($query4))
                                        {
         $month=$row5['Month'];
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
                                        <td><?php echo $row5['id'];?></td>
                                        <td><?php echo $row5['centers_center_id'];?></td>
                                        <td><?php echo $month?></td>
                                        <td><?php echo $row5['week'];?></td>
                                        <td><?php echo $row5['date'];?></td>
                                        <td> <?php echo $row5['unique_logins'];?></td>
                                        <td> <?php echo $row5['application_name'];?></td>
                                        <td><?php echo $row5['number_access'];?></td>
                                        <td><?php echo $row5['Total_system_hours'];?></td>
                                      
                                        

                                    </tr>

                                    <?php }
                                    
                                    ?>
                                    </tbody>
                                </table>
                                <br>
                        </div>
                    </div>
                
                <div class="box-body">
                            <div class="table-responsive">
                                <h3>Total number of Application Access per user  in (cluster name) in (<?php echo$center_name?>)</h3>
                                <table class="gridtable">
                                    <?php
                                    $query5 =mysqli_query($dbconfig,"SELECT centers_center_id, 
                                    EXTRACT(MONTH FROM start_time) as Month,
                                    EXTRACT(WEEK FROM start_time) as week, 
                                    start_time as date,
                                    id, 
                                    user_name as unique_logins, application as application_name, 
                                    start_time as start_time, 
                                    end_time as end_time, 
                                    bases_base_id as bases_base_id, 
                                    centers_center_id as centers_center_id, centers_center_id as centers_center_id 
                                    from monitored_info
                                    WHERE centers_center_id = '$center_id' ")or die("this code is not running");
                                    ?>
                                
                                        <thead>
                                        <tr>
                                            <th>MONTH</th>
                                            <th>WEEK</th>
                                            <th>DATE</th>
                                            <th>ID</th>
                                            <th>USER NAME</th>
                                            <th><center>APPLICATION</center></th>
                                            <th>START TIME</th>
                                            <th><center>END TIME</center></th>
                                            <th><center>BASE ID</center></th>
                                            <th><center>CENTER ID</center></th>
                                            <th><center>CENTER ID</center></th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        //print 10 item
                                                                         
          
          while($row6 = mysqli_fetch_array($query5))
                                        {
         $month=$row6['Month'];
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
                                        <td><?php echo $row6['week'];?></td>
                                        <td><?php echo $row6['date'];?></td>
                                        <td><?php echo $row6['id'];?></td>
                                        <td> <?php echo $row6['unique_logins'];?></td>
                                        <td> <?php echo $row6['application_name'];?></td>
                                        <td><?php echo $row6['start_time'];?></td>
                                        <td><?php echo $row6['end_time'];?></td>
                                        <td><?php echo $row6['bases_base_id'];?></td>
                                        <td><?php echo $row6['centers_center_id'];?></td>
                                        <td><?php echo $row6['centers_center_id'];?></td>
                                        

                                    </tr>

                                    <?php }
                          
                                    ?>
                                    </tbody>
                                </table>
                                <br>
                        </div>
                    </div>
                
                    </div>
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
