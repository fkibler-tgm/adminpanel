<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<?php
									/* get disk space free (in bytes) */
									$df = disk_free_space("/var/www");
									/* and get disk space total (in bytes)  */
									$dt = disk_total_space("/var/www");
									/* now we calculate the disk space used (in bytes) */
									$du = $dt - $df;
									/* percentage of disk used - this will be used to also set the width % of the progress bar */
									$dp = sprintf('%.2f',($du / $dt) * 100);
									//---------------------------------------------------------
									/* and we formate the size from bytes to MB, GB, etc. */
									
									$df = formatSize($df);
									$du = formatSize($du);
									$dt = formatSize($dt);

									function formatSize( $bytes )
									{
											$types = array( 'B', 'KB', 'MB', 'GB', 'TB' );
											for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
													return( round( $bytes, 2 ) . " " . $types[$i] );
									}
									
								?>
								
						
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
	<!--<script type="text/javascript" src="{{ URL::asset('http://www.flotchart.org/flot/jquery.flot.js')}}"></script>-->
    <!-- Bootstrap Core JavaScript -->
	<link href="js/flot/examples/examples.css" rel="stylesheet" type="text/css">
	<script language="javascript" type="text/javascript" type="text/javascript" src="{{ URL::asset('js/flot/jquery.js')}}"></script>
	<script language="javascript" type="text/javascript" src="{{ URL::asset('js/flot/jquery.flot.js') }}"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<?php
	
		function getRamData(){
			$free = shell_exec('free');
			$free = (string)trim($free);
			$free_arr = explode("\n", $free);
			$mem = explode(" ", $free_arr[1]);
			$mem = array_filter($mem);
			$mem = array_merge($mem);
			$memory_usage = $mem[2]/$mem[1]*100;
			return $memory_usage;
		}
		
		function getCpuData(){
			$stats = explode(' ', substr(exec('uptime'), -14));  
			$av = round((($stats[0] + $stats[1] + $stats[2]) / 3)*100); 
			return ($av);  
		}
		
		function getHddData(){
			 $use = (disk_free_space("/")/disk_total_space("/"))*100;
			 return ($use);
		}
		
		function getSeitenData(){
			return 953;
		}
	?>
	<script type="text/javascript">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="http://static.pureexample.com/js/flot/excanvas.min.js"></script><![endif]-->
<script type="text/javascript" src="http://static.pureexample.com/js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="http://static.pureexample.com/js/flot/jquery.flot.time.js"></script>   
<script type="text/javascript" src="http://static.pureexample.com/js/flot/jquery.flot.axislabels.js"></script>
 
<!-- CSS -->
<style type="text/css">
#RAM {
    width: 500px;
    height: 300px;
    text-align: center;
    margin: 0 auto;
}
#CPU {
    width: 500px;
    height: 300px;
    text-align: center;
    margin: 0 auto;
}
#HDD {
    width: 500px;
    height: 300px;
    text-align: center;
    margin: 0 auto;
}
#Seiten {
    width: 1615px;
    height: 300px;
    text-align: center;
    margin: 0 auto;
}
</style>
 
 
<!-- Javascript -->
<script type="text/javascript">
var data = [];
var data2 = [];
var data3 = [];
var data4 = [];
var dataset;
var dataset2;
var dataset3;
var dataset4;
var totalPoints = 50;
var updateInterval = 1000;
var totalPoints2 = 50;
var updateInterval2 = 1000;
var totalPoints3 = 50;
var updateInterval3 = 1000;
var totalPoints4 = 50;
var updateInterval4 = 1000;
var now = new Date().getTime();
var now2 = new Date().getTime();
var now3 = new Date().getTime();
var now4 = new Date().getTime();
 
 
function GetData() {
    data.shift();
 
    while (data.length < totalPoints) {     
        var y = "<?php echo $dp; ?>";
        var temp = [now += updateInterval, y];
 
        data.push(temp);
    }
}
function GetData2() {
    data2.shift();
 
    while (data2.length < totalPoints2) {     
        var y = "<?php echo getRamData(); ?>";
        var temp = [now2 += updateInterval2, y];
 
        data2.push(temp);
    }
}
function GetData3() {
    data3.shift();
 
    while (data3.length < totalPoints3) {     
        var y = "<?php echo getCpuData(); ?>";
        var temp = [now3 += updateInterval3, y];
 
        data3.push(temp);
    }
}
function GetData4() {
    data4.shift();
 
    while (data4.length < totalPoints4) {     
        var y = "<?php echo getSeitenData(); ?>";
        var temp = [now4 += updateInterval4, y];
 
        data4.push(temp);
    }
}
 
var options = {
    series: {
        lines: {
            show: true,
            lineWidth: 1.2,
            fill: true
        }
    },
    xaxis: {
        mode: "time",
        tickSize: [2, "second"],
        tickFormatter: function (v, axis) {
            var date = new Date(v);
 
            if (date.getSeconds() % 20 == 0) {
                var hours = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
                var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
                var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
 
                return hours + ":" + minutes + ":" + seconds;
            } else {
                return "";
            }
        },
        axisLabel: "Time",
        axisLabelUseCanvas: true,
        axisLabelFontSizePixels: 12,
        axisLabelFontFamily: 'Verdana, Arial',
        axisLabelPadding: 10
    },
    yaxis: {
        min: 0,
        max: 100,        
        tickSize: 5,
        tickFormatter: function (v, axis) {
            if (v % 10 == 0) {
                return v + "%";
            } else {
                return "";
            }
        },
        axisLabel: "",
        axisLabelUseCanvas: true,
        axisLabelFontSizePixels: 12,
        axisLabelFontFamily: 'Verdana, Arial',
        axisLabelPadding: 6
    },
    legend: {        
        labelBoxBorderColor: "#fff"
    }
};

var options2 = {
    series: {
        lines: {
            show: true,
            lineWidth: 1.2,
            fill: true
        }
    },
    xaxis: {
        mode: "time",
        tickSize: [2, "second"],
        tickFormatter: function (v, axis) {
            var date = new Date(v);
 
            if (date.getSeconds() % 20 == 0) {
                var hours = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
                var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
                var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
 
                return hours + ":" + minutes + ":" + seconds;
            } else {
                return "";
            }
        },
        axisLabel: "Time",
        axisLabelUseCanvas: true,
        axisLabelFontSizePixels: 12,
        axisLabelFontFamily: 'Verdana, Arial',
        axisLabelPadding: 10
    },
    yaxis: {
        min: 0,
        max: 1000,        
        tickSize: 50,
        tickFormatter: function (v, axis) {
            if (v % 100 == 0) {
                return v + "";
            } else {
                return "";
            }
        },
        axisLabel: "",
        axisLabelUseCanvas: true,
        axisLabelFontSizePixels: 12,
        axisLabelFontFamily: 'Verdana, Arial',
        axisLabelPadding: 6
    },
    legend: {        
        labelBoxBorderColor: "#fff"
    }
};
  function drawHdd() {
	  GetData();
 
    dataset = [
        { label: "Hdd", data: data }
    ];
	$.plot($("#HDD"), dataset, options);
  }
  function drawRam() {
	  GetData2();
 
    dataset2 = [
        { label: "Ram", data: data2 }
    ];
	$.plot($("#RAM"), dataset2, options);
  }
  function drawCpu() {
	  GetData3();
 
    dataset3 = [
        { label: "Cpu", data: data3 }
    ];
	$.plot($("#CPU"), dataset3, options);
  }
  function drawSeiten() {
	  GetData4();
 
    dataset4 = [
        { label: "Seiten", data: data4 }
    ];
	$.plot($("#Seiten"), dataset4, options2);
  }
$(document).ready(function () {
    drawHdd();
	drawRam();
	drawCpu();
	drawSeiten();
    
	function updateHdd() {
        GetData();
 
        $.plot($("#HDD"), dataset, options);
	    
        setTimeout(updateHdd, updateInterval);
    }
	
	function updateRam() {
        GetData2();
 
        $.plot($("#RAM"), dataset2, options);
	    
        setTimeout(updateRam, updateInterval2);
    }
	function updateCpu() {
        GetData3();
 
        $.plot($("#CPU"), dataset3, options);
	    
        setTimeout(updateCpu, updateInterval3);
    }
	function updateSeiten() {
        GetData4();
 
        $.plot($("#Seiten"), dataset4, options2);
	    
        setTimeout(updateSeiten, updateInterval4);
    }
    updateHdd();
	updateRam();
	updateCpu();
	updateSeiten();
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
							<li>
                                <a href="standarduser">Standarduser</a>
                            </li>
							<li>
                                <a href="moderatoren">Moderatoren</a>
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
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Seitenaufrufe&nbsp;&nbsp;&nbsp;<?php echo getSeitenData(); ?></h3>
                            </div>
                            <div class="panel-body">
							<!--
								I will get them from another person
							-->
							<!--<div id="seiten" class="#seiten" style="height: 300px;width:1600px;"></div>-->
								<div id="Seiten"></div>
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
								<div id="CPU"></div>
							<!--<div id="cpu" class="#cpu" style="height: 300px;width:500px;"></div>-->
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
							   <div id="RAM"></div>
								<!--<div id="ram" class="#ram" style="height: 300px;width:500px;"></div>-->
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
									<div id="HDD"></div>
									<!--<div id="hdd" class="#hdd" style="height: 300px;width:500px;"></div>-->
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
