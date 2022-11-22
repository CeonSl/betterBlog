<?php
/**
 * Charts 4 PHP
 *
 * @author Shani <support@chartphp.com> - http://www.chartphp.com
 * @version 2.0
 * @license: see license.txt included in package
 */
 
include_once("../../lib/inc/chartphp_dist.php");
include_once("../../example_data.php");
include_once("../../config.php");

$p = new chartphp();
$p->height = "200px";
$p->data = array(array(array('Heavy Industry', 12),array('Retail', 9),
						array('Light Industry', 14), array('Out of home', 16),
						array('Commuting', 7), array('Orientation', 9)));
$p->chart_type = "donut";
$p->legend = false;
$out1 = $p->render('c1');  //1

$p = new chartphp();
$p->height = "200px";
$p->data = array(array(array('Heavy Industry', 12),array('Retail', 9),
						array('Light Industry', 14), array('Out of home', 16),
						array('Commuting', 7), array('Orientation', 9)));
$p->chart_type = "pie";
$p->legend = false;
$out_pie = $p->render('c_pie'); //2


$p = new chartphp();
$p->data = $bar_grouped_chart_data;	
$p->chart_type = "bar-grouped";
$p->height = "200px";
$p->legend = false;
$p->xlabel = "Vehicles";
$p->ylabel = "Frequency";
$out_bar = $p->render('c2'); //3


$p = new chartphp();
$p->data =$bubble_chart_data;
$p->chart_type = "bubble";
// $p->legend = false;
$p->height = "250px";
$p->xlabel = "Life Expectancy";
$p->ylabel = "GDP per Capita";
$p->series_label = array("Asia", "Africa", "Europe", "Americas", "Oceania");
$out_bubble = $p->render('c3'); //4


$p = new chartphp();
$p->data =$heatmap_chart_data;
$p->chart_type = "heatmap";
$p->xlabel = "Department";
$p->ylabel = "Performance";
$p->ylabel = "Month";
$p->height = "250px";
// Common Options
$out_heatmap = $p->render('c6');  //5


$p = new chartphp();
$p->title = "";
$p->intervals = array(200,300,400,600);
$p->chart_type = "meter";
$p->height = "150px";
$p->data = array(array(rand(200,600)));
$out_meter = $p->render('c4'); //6


$p = new chartphp();
$p->data = $bar_stacked_data;
$p->chart_type = "bar-stacked";
$p->height = "200px";
$p->legend = false;
$p->series_label = array('Quarter 1','Quarter 2','Quarter 3','Quarter 4');
$p->direction = "horizontal";
$out_bar_stack = $p->render('c5'); //7 

$p = new chartphp();
$p->data = $area_chart_data;
$p->chart_type = "area";
$p->height = "200px";
$p->legend = false;
$p->xlabel = "Months";
$p->ylabel = "Sales";
$p->series_label = array("Team1","Team2","Team3","Team4");
$out_area = $p->render('c7'); //8

$p = new chartphp();
$p->data = $line_chart_data;;
$p->chart_type = "line";
$p->height = "200px";
$p->legend = false;
$p->xlabel = "Months";
$p->ylabel = "Sales";
$p->series_label = array("2014","2015","2016","2017");
$out_line = $p->render('c8');  //9

$p = new chartphp();
$p->data_sql = "select sum(d.quantity) as 'Sales/Month' from `order details` d";
$p->chart_type = "kpi";
$out_kpi = $p->render('c9');

$p = new chartphp();
$p->data_sql = "select count(c.orderID) as 'Number of Orders' from  `Orders` as c";
$p->chart_type = "kpi";
$out_orders = $p->render('c10');

$p = new chartphp();
$p->data_sql = "select count(c.Productid) as 'Number of Products' from  `Products` as c";
$p->chart_type = "kpi";
$out_products = $p->render('c11');

$p = new chartphp();
$p->data_sql = "select count(c.customerID) as 'Number of Customers' from `Customers` as c ";
$p->chart_type = "kpi";
$out_customers = $p->render('c12');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Charts 4 PHP | Business Dashboard Demo</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	
	<link rel="icon" type="image/png" href="http://www.chartphp.com/wp-content/uploads/favicon.png">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<script src="../../lib/js/jquery.min.js"></script>
	<script src="../../lib/js/chartphp.js"></script>
	<script src="../../lib/js/chartphp-l.js"></script>
	<link rel="stylesheet" href="../../lib/js/chartphp.css">

	<style>
		/* white color data labels */
		.jqplot-data-label{color:white;}
		
		.jqplot-table-legend td {
			font-size: 115%;
			padding-bottom: 0;
			padding-left: 2px;
			padding-right: 2px;
		}

		/* white color data labels */
		.jqplot-point-label{color:white;}
	</style>

  </head>
  <body class="skin-green">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="http://www.chartphp.com/" class="logo"><img src="http://www.chartphp.com/wp-content/uploads/logo_small_white.png" height="35" width="auto"></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>		  
          <!-- Navbar Right Menu -->
        </nav>
      </header>

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li><a href="http://www.chartphp.com/docs/"><i class="fa fa-book"></i> Documentation</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Funnel Chart</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Line Chart</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Bar Chart</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Pie Chart</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Donut Chart</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Area Chart</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Bubble Chart</a></li>
              </ul>
            </li>
			<li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
	  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $out_kpi["value"]; ?></h3>
              <p><?php echo $out_kpi["text"]; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                <h3> <?php echo $out_products["value"]; ?></h3>
                  <p><div class="kpi-value"><?php echo $out_products["text"]; ?></div></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $out_customers["value"]; ?></h3>  
              <p><?php echo $out_customers["text"]; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $out_orders["value"]; ?></h3>
              <p><?php echo $out_orders["text"]; ?></p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

          
         <div class="row">

            <div class="col-md-12">
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Recently Added Products</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
				
                  <div class="row">
                    <div class="col-md-12">
                      <div class="pad">
						<?php echo $out_bubble?>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
				  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-4">
              <!-- MAP & BOX PANE -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Visitors Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="pad">
                        <!-- Map will be created here -->
                        		<?php echo $out1; ?>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
			
            <!-- Left col -->
            <div class="col-md-4">
              <!-- MAP & BOX PANE -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Visitors Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
						<div class="pad">
						<?php echo $out_meter ?>
						</div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                 		  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
			
            <!-- Left col -->
            <div class="col-md-4">
              <!-- MAP & BOX PANE -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Visitors Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
						<div class="pad">
						<?php echo $out_pie ?>
						</div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                 		  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
		  
          <div class="row"><!-- .row -->
		  
            <div class="col-md-12">
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Recently Added Products</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
				
                  <div class="row">
                    <div class="col-md-12">
                      <div class="pad">
						<?php echo $out_heatmap?>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
				  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
		  </div><!-- /.row -->
 
          <div class='row'>
		  
            <div class='col-md-6'>
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding ">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
						<div class="pad">
						<?php echo $out_bar ?>
						</div>
                    </div><!-- /.col -->				
                  </div>	
                </div><!-- /.box-body -->
              </div><!--/.box -->
            </div><!-- /.col -->
			
            <div class='col-md-6'>
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Resources Usage</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="pad">
                        <?php echo $out_bar_stack ?>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class='row'>
		  
            <div class='col-md-6'>
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding ">
                  <div class="row">
                    <div class="col-md-12 col-sm-12">
						<div class="pad">
						<?php echo $out_line ?>
						</div>
                    </div><!-- /.col -->				
                  </div>	
                </div><!-- /.box-body -->
              </div><!--/.box -->
            </div><!-- /.col -->
			
            <div class='col-md-6'>
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Resources Usage</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="pad">
                        <?php echo $out_area ?>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
 
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2017 <a href="http://www.chartphp.com">Charts 4 PHP</a>,</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
  </body>
</html>