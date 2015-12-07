<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>MEA Admin Tool</title>
		        
        <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/metisMenu.css')}}" rel="stylesheet">
        <link href="{{URL::asset('css/sb-admin-2.css')}}" rel="stylesheet">
        <link href="{{URL::asset('../node_modules/datatables.net-dt/css/jquery.dataTables.css')}}" rel="stylesheet">
        
        <meta name="csrf_token" content="{{ csrf_token() }}" />
        <meta name="base_url" content="{{Request::url()}}" />
        
	
	    <!-- Custom Fonts -->
	    <!-- <link href="bootstrap/font-awesome.css" rel="stylesheet" type="text/css"> -->
		
	</head>
	<body>
		<div id="wrapper">

	        <!-- Navigation -->
	        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <span class="navbar-brand">MEA Administrator Tool</span>
	            </div>
	
	            <div class="navbar-default sidebar" role="navigation">
	                <div class="sidebar-nav navbar-collapse">
	                    <ul class="nav" id="side-menu">
	                        <li>
	                            <a href="#"><span class="glyphicon glyphicon-tasks"></span> &nbsp; Main Menu</a>
	                        </li>
	                        <li>
	                            <a href="../../../../MeaNew/public/admin">
                                    <span class="glyphicon glyphicon-list-alt"></span> &nbsp; View Patient Data
                                </a>
	                        </li>
	                        <li>
	                            <a href="#"><span class="glyphicon glyphicon-pencil"></span> &nbsp; Create New Patient Account</a>
	                        </li>
	                        <li>
	                            <a href="#"><span class="glyphicon glyphicon-cog"></span> &nbsp; Account Settings</a>
	                        </li>
	                        <li>
	                            <a href="#"><span class="glyphicon glyphicon-log-out"></span> &nbsp; Log Out</a>
	                        </li>
	                    </ul>
	                </div>
	                <!-- /.sidebar-collapse -->
	            </div>
	            <!-- /.navbar-static-side -->
	        </nav>
	
	        <!-- Page Content -->
	        <div id="page-wrapper">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-lg-12">
	                    <!-- Splash page content -->
                            
                            <br>
                            
	                        @yield('content')
                            
	                    <!-- End of splash page content -->
	                    </div>
	                    <!-- /.col-lg-12 -->
	                </div>
	                <!-- /.row -->
	            </div>
	            <!-- /.container-fluid -->
	        </div>
	        <!-- /#page-wrapper -->
	
	    </div>
	    <!-- /#wrapper -->
	
        
        <script src="{{URL::asset('../node_modules/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('js/sb-admin-2.js')}}"></script>
        <script src="{{URL::asset('js/metisMenu.min.js')}}"></script>
        <script src="{{URL::asset('../node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
        
        
        @yield('scripts')
        
	</body>
</html>