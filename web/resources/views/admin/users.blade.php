<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Panel-Users</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('css/sb-admin.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	
	
	 <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript">
		function remove() {
			//parameter fehlt noch
			alert('<?php loeschen();?>');
		}
		function block() {
			//parameter fehlt noch
			alert('<?php blockieren();?>');
		}
	</script>
	<?php
		function loeschen() {
			App::make("AdminPanelController")->removeUser(<username>);
		}
		function blocken() {
			App::make("AdminPanelController")->setRang("blocked",<username>);
		}
	?>
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
                            <li class="active">
                                <a href="#">Alle User</a>
                            </li>
                            <li>
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
                    <li>
                    <li ><a href="dienste">Dienste verwalten<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-signal"></span></a></li>
                    <li ><a href="backup">Backup<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a></li>
					<li ><a href="/">Panel verlassen<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-arrow-left"></span></a></li> 
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
						<h2>Alle User</h2>
                        <!--<div class="btn-group pull pull-right">
							<button type="button" class="btn btn-default">Anzeige</button>
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu" onclick= <? $_SESSION["wahl"]="value"; ?>>
								<li><a href value="all">Alle</a></li>
								<li><a href value="user">Nur User</a></li>
								<li><a href value="moderatoren">Nur Moderatoren</a></li>
								<li><a href valu="admins">Nur Administrator</a></li>
							</ul>
						</div>
						-->
                   </div>
				</div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>eMail</th>
                                        <th>Rang</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									
									
								?>
                                	<!-- Alle -->
                                	<?php
									/*
                                	if($_SESSION["wahl"]=="all"){
                                	for($i = 1; $i < 15; $i++){
                                    	echo "<tr>";
										echo "<td><input type='checkbox'></td>";
										echo "<td>" . "0000" . $i . "</td>";
                                        echo "<td>" . "user0" . $i . "</td>";
                                        echo "<td>" . "user0" . $i . "@tgm.ac.at" . "</td>";
                                        echo "<td>" . $i%3 . "</td>";
										echo "</tr>";
									}
									}
									*/
                                    ?>
                                    
                                    <!-- Nur Admins-->
                                    <?php
									/*
                                    if($_SESSION["wahl"]=="admins"){
                                	for($i = 1; $i < 15; $i++){
                                    	echo "<tr>";
										echo "<td><input type='checkbox'></td>";
										echo "<td>" . "0000" . $i . "</td>";
                                        echo "<td>" . "admin0" . $i . "</td>";
                                        echo "<td>" . "admin0" . $i . "@tgm.ac.at" . "</td>";
                                        echo "<td>" . "3" . "</td>";
										echo "</tr>";
									}
									}
									*/
                                    ?>
                                    
                                    <!-- Nur Moderatoren -->
                                    <?php
                                    /*if($_SESSION["wahl"]=="moderatoren"){
                                	for($i = 1; $i < 15; $i++){
                                    	echo "<tr>";
										echo "<td><input type='checkbox'></td>";
										echo "<td>" . "0000" . $i . "</td>";
                                        echo "<td>" . "moderator0" . $i . "</td>";
                                        echo "<td>" . "moderator" . $i . "@tgm.ac.at" . "</td>";
                                        echo "<td>" . "2" . "</td>";
										echo "</tr>";
									}
									}
									*/
                                    ?>
                                    
                                    <!-- Nur User -->
                                    <?php
                                    /*if($_SESSION["wahl"]=="user"){
                                	for($i = 1; $i < 15; $i++){
                                    	echo "<tr>";
										echo "<td><input type='checkbox'></td>";
										echo "<td>" . "0000" . $i . "</td>";
                                        echo "<td>" . "user0" . $i . "</td>";
                                        echo "<td>" . "user0" . $i . "@tgm.ac.at" . "</td>";
                                        echo "<td>" . "1" . "</td>";
										echo "</tr>";
									}
									}
									*/
                                    ?>
									
                                </tbody>
                            </table>
                        </div>
                        <!-- Split button -->
						<div class="btn-group">
							<button type="button" class="btn btn-default">User ...</button>
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" onclick="remove()">Löschen</a></li>
								<li><a href="#" onclick="block()">Blockieren</a></li>
							</ul>
						</div>
						&nbsp; &nbsp;
						<!-- Split button -->
						<div class="btn-group">
							<button type="button" class="btn btn-default">Rang</button>
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<span class="caret"></span>
								<span class="sr-only">Toggle Dropdown</span>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Standard</a></li>
								<li><a href="#">Moderator</a></li>
								<li><a href="#">Administrator</a></li>
							</ul>
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
