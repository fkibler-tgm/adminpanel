<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Panel-Dienste</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/sb-admin.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	
	<!--<link href="{{ URL::asset('flot/examples.css') }}" rel="stylesheet" type="text/css">-->
	<!--<script language="javascript" type="text/javascript" src="{{ URL::asset('canvas/canvasjs.min.js') }}"></script>-->
	<!--<script language="javascript" type="text/javascript" src="{{ URL::asset('canvas/jquery.canvasjs.min.js') }}"></script>-->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link href="{{ URL::asset('js/canvas/canvasjs.min.js') }}"
    <!-- Bootstrap Core JavaScript -->
	<script src="{{ URL::asset('js/jquery.js')}}"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript">
		/*window.onload = function () {
			var chart = new CanvasJS.Chart("chartContainer", {
				theme: "theme2",//theme1
				title:{
					text: "Basic Column Chart - CanvasJS"              
				},
				animationEnabled: false,   // change to true
				data: [              
				{
					// Change type to "bar", "splineArea", "area", "spline", "pie",etc.
					type: "column",
					dataPoints: [
						{ label: "apple",  y: 100  },
						{ label: "orange", y: 15  },
						{ label: "banana", y: 25  },
						{ label: "mango",  y: 30  },
						{ label: "grape",  y: 28  }
					]
				}
				]
			});
			chart.render();
		}
*/
     $.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
$.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){
  Morris.Area({
        element: 'HDD',
        data: [
          {year: '2010', value: 5},
          {year: '2011', value: 10},
          {year: '2012', value: 5},
          {year: '2013', value: 2},
          {year: '2014', value: 10}
        ],
		lineColors: ['#00FF00'],
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Value']
      });
	  
	  Morris.Area({
        element: 'RAM',
        data: [
          {year: '2010', value: 20},
          {year: '2011', value: 10},
          {year: '2012', value: 5},
          {year: '2013', value: 2},
          {year: '2014', value: 20}
        ],
		lineColors: ['#0101DF'],
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Value']
      });
	  
	  Morris.Area({
        element: 'CPU',
        data: [
          {year: '2010', value: 20},
          {year: '2011', value: 10},
          {year: '2012', value: 5},
          {year: '2013', value: 2},
          {year: '2014', value: 20}
        ],
		lineColors: ['#FFFF00'],
        xkey: 'year',
        ykeys: ['value','value2'],
        labels: ['','']
      });
	  
	  Morris.Area({
        element: 'Seiten',
        data: [
          {year: '2010', value: 20},
          {year: '2011', value: 10},
          {year: '2012', value: 5},
          {year: '2013', value: 2},
          {year: '2014', value: 20}
        ],
		lineColors: ['#FF8000'],
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Value']
      });
      
  
});
});		
	</script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Administrator Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                 <ul class="nav navbar-nav side-nav">                  
                     <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo">Userverwaltung<i class="fa fa-fw fa-caret-down "></i></a>
                        <ul id="demo" class="collapse collapsed">
                            <li>
                                <a href="users">Alle User</a>
                            </li>
                            <li class="active">
                                <a href="admins">Administratoren</a>
                            </li>
                        </ul>
                        
                    </li>
                    <li ><a href="#">Dienste verwalten<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-signal"></span></a></li>
                    <li ><a href="backup">Backup<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a></li> 
					<li ><a href="/">Panel verlassen<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-arrow-left"></span></a></li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <h2>Dienste verwalten</h2>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Seitenaufrufe</h3>
                            </div>
                            <div class="panel-body">
							<!--
								I will get them from another person
							-->
							<div id="Seiten" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    	<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> CPU Auslastung</h3>
                            </div>
                            <div class="panel-body">
                                <!--
								$loads = sys_getloadavg();
								$core_nums = trim(shell_exec("grep -P '^processor' /proc/cpuinfo|wc -l"));
								$load = round($loads[0]/($core_nums + 1)*100, 2);
								echo $load;
								-->
						<div id="CPU" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    	<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Arbeitsspeicher Auslastung</h3>
                            </div>
                            <div class="panel-body">
                               <!--
								function get_memory() { 
									foreach(file('/proc/meminfo') as $ri) 
										$m[strtok($ri, ':')] = strtok(''); 
									return 100 - round(($m['MemFree'] + $m['Buffers'] + $m['Cached']) / $m['MemTotal'] * 100); 
								} 
								echo get_memory();  
							   -->
								<div id="RAM" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                    	<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Festplatten Auslastung</h3>
                            </div>
                            <div class="panel-body">
								<?php
									/* get disk space free (in bytes) */
									//$df = disk_free_space("/var/www");
									/* and get disk space total (in bytes)  */
									//$dt = disk_total_space("/var/www");
									/* now we calculate the disk space used (in bytes) */
									//$du = $dt - $df;
									/* percentage of disk used - this will be used to also set the width % of the progress bar */
									//$dp = sprintf('%.2f',($du / $dt) * 100);
									//---------------------------------------------------------
									/* and we formate the size from bytes to MB, GB, etc. */
									/*
									$df = formatSize($df);
									$du = formatSize($du);
									$dt = formatSize($dt);

									function formatSize( $bytes )
									{
											$types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
											for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
													return( round( $bytes, 2 ) . " " . $types[$i] );
									}
									*/
								?>
									<!--<div id="chartContainer" style="height: 300px; width: 100%;"></div>-->
									<div id="HDD" style="height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>

</html>
