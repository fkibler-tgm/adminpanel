<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Panel-Backup</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/sb-admin.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	<!-- Admin CSS -->
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
	
	<!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

	<script src="{{ URL::asset('js/custom.js') }}"></script>

    
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
                    <li ><a href="dienste">Dienste verwalten<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-signal"></span></a></li>
                    <li ><a href="#">Backup<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a></li>
					<li ><a href="/">Panel verlassen<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-arrow-left"></span></a></li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                    <h2>Backup </h2>
                        <div class="col-md-6">
							<h3>Informationen sichern:</h3>
								<div class="well" style="max-height: 340px; overflow: auto;">
									<ul class="list-group checked-list-box">
										<li class="list-group-item">Bücher</li>
										<li class="list-group-item">Buch-Covers</li>
										<li class="list-group-item">Profile</li>
										<li class="list-group-item">Profilbilder</li>
										<li class="list-group-item">Systemstatus</li>
										<li class="list-group-item">Meldungen</li>
									</ul>
									<button type="button" class="btn btn-default pull pull-right">Erstellen</button>
								</div>
                        </div>
								
						<div class="col-md-6">
							<h3>Informationen überschreiben:</h3>
								<div class="well" style="max-height: 340px;overflow: auto;">
									<ul class="list-group checked-list-box">
										<li class="list-group-item">Bücher</li>
										<li class="list-group-item">Buch-Covers</li>
										<li class="list-group-item">Profile</li>
										<li class="list-group-item">Profilbilder</li>
										<li class="list-group-item">Systemstatus</li>
										<li class="list-group-item">Meldungen</li>
									</ul>
									   <div class="input-group">
										   <input type="text" class="form-control" placeholder="Nummer des Backups">
										   <span class="input-group-btn">
										  	 <button class="btn btn-default" type="button">Überschreiben</button>
										   </span>
										</div>
						</div>
                    </div>
                </div>
                <!-- /.row -->
				
				<div class="row">
					<div class="col-md-11" style="left:4%;">
						<h3>Neueste Backups:</h3>
						<div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Nr.</th>
                                        <th>Datum</th>
                                        <th>Inhalte</th>
                                        <th>Benutzt</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php
                                	for($i = 1; $i < 5; $i++){
                                    	echo "<tr>";
										echo "<td>" . $i . "</td>";
										echo "<td>" . "1" . $i . ". " . "0" . $i . ". 201". $i . "</td>";
                                        echo "<td>" . "Bücher, Covers, Profile, Profilbilder, Systemstatus, Meldungen." . "</td>";
                                        echo "<td>" . "Nein" . "</td>";
                                        echo "<td><input type='checkbox'></td>";
										echo "</tr>";
									}
                                    ?>
                                </tbody>
                            </table>
                        </div>
					</div>
				</div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
