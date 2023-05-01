<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Master Craft</title>
	<meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Morris Charts CSS -->
    <link href="vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>
	
	<!-- Data table CSS -->
	<link href="vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<link href="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
		
	<!-- Custom CSS -->
	<link href="dist/css/{{$config->tema}}" rel="stylesheet" type="text/css">
</head>

<body>
	
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-green">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="mobile-only-brand pull-left">
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.html">
							<img class="brand-img" src="/img/master_black.png" alt="mc" width="180px"/>
						</a>
					</div>
				</div>	
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
				
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right">
				<ul class="nav navbar-right top-nav pull-right">
					<li class="dropdown alert-drp">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">5</span></a>
						<ul  class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
							<li>
								<div class="notification-box-head-wrap">
									<span class="notification-box-head pull-left inline-block">notifications</span>
									<a class="txt-danger pull-right clear-notifications inline-block" href="javascript:void(0)"> clear all </a>
									<div class="clearfix"></div>
									<hr class="light-grey-hr ma-0"/>
								</div>
							</li>
							<li>
								<div class="streamline message-nicescroll-bar">
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-green">
												<i class="zmdi zmdi-flag"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">
												New subscription created</span>
												<span class="inline-block font-11  pull-right notifications-time">2pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Your customer subscribed for the basic plan. The customer will pay $25 per month.</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-yellow">
												<i class="zmdi zmdi-trending-down"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server #2 not responding</span>
												<span class="inline-block font-11 pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Some technical error occurred needs to be resolved.</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-blue">
												<i class="zmdi zmdi-email"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">2 new messages</span>
												<span class="inline-block font-11  pull-right notifications-time">4pm</span>
												<div class="clearfix"></div>
												<p class="truncate"> The last payment for your G Suite Basic subscription failed.</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="sl-avatar">
												<img class="img-responsive" src="dist/img/avatar.jpg" alt="avatar"/>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy Doe</span>
												<span class="inline-block font-11  pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
											</div>
										</a>	
									</div>
									<hr class="light-grey-hr ma-0"/>
									<div class="sl-item">
										<a href="javascript:void(0)">
											<div class="icon bg-red">
												<i class="zmdi zmdi-storage"></i>
											</div>
											<div class="sl-content">
												<span class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99% server space occupied.</span>
												<span class="inline-block font-11  pull-right notifications-time">1pm</span>
												<div class="clearfix"></div>
												<p class="truncate">consectetur, adipisci velit.</p>
											</div>
										</a>	
									</div>
								</div>
							</li>
							<li>
								<div class="notification-box-bottom-wrap">
									<hr class="light-grey-hr ma-0"/>
									<a class="block text-center read-all" href="javascript:void(0)"> read all </a>
									<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png" alt="user_auth" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
							</li>
							<li>
								<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
							</li>
							<li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
							</li>
							<li class="divider"></li>
							<li class="sub-menu show-on-hover">
								<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
								<ul class="dropdown-menu open-left-side">
									<li>
										<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
									</li>
								</ul>	
							</li>
							<li class="divider"></li>
							<li>
								<a href="{{route('logout')}}"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>	
		</nav>
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="{{route('dashboard')}}"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
				</li>
				@if (Auth::user()->admin_master)
					
				<li>
					<a href="{{route('sell')}}"><div class="pull-left"><i class="zmdi zmdi-mail-send mr-20"></i><span class="right-nav-text">Importar Vendas</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
				</li>
				@endif
				<li>
					<a class="" href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-plus-circle mr-20"></i><span class="right-nav-text">Cadastros</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
							<a href="{{route('users')}}">Usuarios</a>
						</li>
						<li>
							<a href="{{route('clients')}}">Clientes</a>
						</li>
						
					</ul>
				</li>
				
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>component</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">UI Elements</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="panels-wells.html">Panels & Wells</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span class="right-nav-text">Forms</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="form_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="form-element.html">Basic Forms</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">Charts </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="chart_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="flot-chart.html">Flot Chart</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-format-size mr-20"></i><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="table_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="basic-table.html">Basic Table</a>
						</li>
						
						<li>
							<a href="jsgrid-table.html">Jsgrid Table</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Icons</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="icon_dr" class="collapse collapse-level-1">
						<li>
							<a href="fontawesome.html">Fontawesome</a>
						</li>
						
					</ul>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>featured</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="{{route('config')}}"><div class="pull-left"><i class="zmdi zmdi-settings mr-20"></i><span class="right-nav-text">Configuração</span></div><div class="clearfix"></div></a>
				</li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->
		
		
		<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid pt-25">
				<!-- Row -->
				<div class="row">
					@if (session('success'))
					<div class="msg alert alert-success" role="alert">{{session('success')}}</div>
					@elseif(session('error'))
						<div class="msg alert alert-danger" role="alert">{{session('error')}}</div>
					@endif
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													
													<span class="txt-dark block counter"><span class="counter-anim">{{count($vendedores)}}</span></span>
													<span class="weight-500 uppercase-font block font-13">Vendedores</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-user-following data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter">{{count($clientes)}}</span>
													<span class="weight-500 uppercase-font block">Total de Clientes</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="icon-control-rewind data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim">{{$vendasValor}}</span></span>
													<span class="weight-500 uppercase-font block">Total de vendas </span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="zmdi zmdi-money data-right-rep-icon txt-light-grey"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-dark block counter"><span class="counter-anim">0</span></span>
													<span class="weight-500 uppercase-font block">Comissão</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
													<div id="sparkline_4" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Estatísticas de Vendas</h6>
								</div>
								
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
                                <div class="panel-body">
									<div id="area_chart" class="morris-chart" style="height:293px;"></div>
									<ul class="flex-stat mt-40">
										<li>
											<span class="block">Total</span>
											<span class="block txt-dark weight-500 font-18"><span class="counter-anim">{{$vendasValor}}</span></span>
										</li>
										<li>
											<span class="block">Qtd. de Vendas</span>
											<span class="block txt-dark weight-500 font-18"><span class="counter-anim">{{count($sells)}}</span></span>
										</li>
										
									</ul>
								</div>
							</div>
                        </div>
                    </div>
						
					
				</div>
				<!-- /Row -->
				
				<!-- Row -->
				
				<!-- Row -->
			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2017 &copy; Philbert. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
	<!-- Data table JavaScript -->
	<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- simpleWeather JavaScript -->
	<script src="vendors/bower_components/moment/min/moment.min.js"></script>
	<script src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
	<script src="dist/js/simpleweather-data.js"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- ChartJS JavaScript -->
	<script src="vendors/chart.js/Chart.min.js"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="vendors/bower_components/morris.js/morris.min.js"></script>
    <script src="vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
	
	<!-- Switchery JavaScript -->
	<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	<script src="dist/js/dashboard-data.js"></script>
	<script>
				/*Dashboard Init*/
		
		"use strict"; 

		/*****Ready function start*****/
		$(document).ready(function(){
			$('#statement').DataTable({
				"bFilter": false,
				"bLengthChange": false,
				"bPaginate": false,
				"bInfo": false,
			});
			if( $('#chart_2').length > 0 ){
				var ctx2 = document.getElementById("chart_2").getContext("2d");
				var data2 = {
					labels: ["January", "February", "March", "April", "May", "June", "July"],
					datasets: [
						{
							label: "My First dataset",
							backgroundColor: "rgba(240,197,65,.6)",
							borderColor: "rgba(240,197,65,.6)",
							data: [10, 30, 80, 61, 26, 75, 40]
						},
						{
							label: "My Second dataset",
							backgroundColor: "rgba(46,205,153,.6)",
							borderColor: "rgba(46,205,153,.6)",
							data: [28, 48, 40, 19, 86, 27, 90]
						},
						{
							label: "My Third dataset",
							backgroundColor: "rgba(78,157,230,.6)",
							borderColor: "rgba(78,157,230,.6)",
							data: [8, 28, 50, 29, 76, 77, 40]
						}
					]
				};
				
				var hBar = new Chart(ctx2, {
					type:"bar",
					data:data2,
					
					options: {
						tooltips: {
							mode:"label"
						},
						scales: {
							yAxes: [{
								stacked: true,
								gridLines: {
									color: "rgba(135,135,135,0)",
								},
								ticks: {
									fontFamily: "Poppins",
									fontColor:"#878787"
								}
							}],
							xAxes: [{
								stacked: true,
								gridLines: {
									color: "rgba(135,135,135,0)",
								},
								ticks: {
									fontFamily: "Poppins",
									fontColor:"#878787"
								}
							}],
							
						},
						elements:{
							point: {
								hitRadius:40
							}
						},
						animation: {
							duration:	3000
						},
						responsive: true,
						maintainAspectRatio:false,
						legend: {
							display: false,
						},
						
						tooltip: {
							backgroundColor:'rgba(33,33,33,1)',
							cornerRadius:0,
							footerFontFamily:"'Poppins'"
						}
						
					}
				});
			}
			if( $('#chart_6').length > 0 ){
				var ctx6 = document.getElementById("chart_6").getContext("2d");
				var data6 = {
					labels: [
					"organic",
					"Referral",
					"Other"
				],
				datasets: [
					{
						data: [200,550,250],
						backgroundColor: [
							"rgba(240,197,65,.6)",
							"rgba(46,205,153,.6)",
							"rgba(78,157,230,.6)",
						],
						hoverBackgroundColor: [
							"rgba(240,197,65,.6)",
							"rgba(46,205,153,.6)",
							"rgba(78,157,230,.6)",
						]
					}]
				};
				
				var doughnutChart  = new Chart(ctx6,{
					type: 'doughnut',
					data: data6,
					options: {
						animation: {
							duration:	3000
						},
						responsive: true,
						maintainAspectRatio:false,
						legend: {
							display:false
						},
						tooltip: {
							backgroundColor:'rgba(33,33,33,1)',
							cornerRadius:0,
							footerFontFamily:"'Poppins'"
						},
						elements: {
							arc: {
								borderWidth: 0
							}
						}
					}
				});
			}
			if($('#area_chart').length > 0) {
				var data=[{
					period: 'Son',
					iphone: 40,
					ipad: 80,
					itouch: 20
				}, {
					period: 'Mon',
					iphone: 130,
					ipad: 100,
					itouch: 80
				}, {
					period: 'Tue',
					iphone: 80,
					ipad: 30,
					itouch: 70
				}, {
					period: 'Wed',
					iphone: 70,
					ipad: 200,
					itouch: 140
				}, {
					period: 'Thu',
					iphone: 180,
					ipad: 50,
					itouch: 140
				}, {
					period: 'Fri',
					iphone: 105,
					ipad: 170,
					itouch: 80
				},
				{
					period: 'Sat',
					iphone: 250,
					ipad: 150,
					itouch: 200
				}];
				var dataNew = [{
					period: 'Jan',
					vendas: '{{$jan}}',
				}, 
				{
					period: 'Fev',
					vendas: '{{$fev}}',
				},
				{
					period: 'Mar',
					vendas: '{{$mar}}',
				},
				{
					period: 'Abr',
					vendas: '{{$abr}}',
				},
				{
					period: 'Mai',
					vendas: '{{$mai}}',
				},
				{
					period: 'Jun',
					vendas: '{{$jun}}',
				},
				{
					period: 'Jul',
					vendas: '{{$jul}}',
				},
				{
					period: 'Ago',
					vendas: '{{$ago}}',
				},
				{
					period: 'Set',
					vendas: '{{$set}}',
				},
				{
					period: 'Out',
					vendas: '{{$out}}',
				},
				{
					period: 'Nov',
					vendas: '{{$nov}}',
				},
				{
					period: 'Dez',
					vendas: '{{$dez}}',
				}
				];
				
				var lineChart = Morris.Area({
				element: 'area_chart',
				data: data ,
				xkey: 'period',
				ykeys: ['vendas'],
				labels: ['vendas'],
				pointSize: 0,
				lineWidth:0,
				fillOpacity: 0.6,
				pointStrokeColors:['#2ecd99'],
				behaveLikeLine: true,
				grid: false,
				hideHover: 'auto',
				lineColors: ['#2ecd99'],
				resize: true,
				redraw: true,
				smooth: true,
				gridTextColor:'#878787',
				gridTextFamily:"Poppins",
				parseTime: false
			});
			}
			
			/* Switchery Init*/
			var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
			$('#morris_switch').each(function() {
				new Switchery($(this)[0], $(this).data());
			});
			var swichMorris = function() {
				if($("#morris_switch").is(":checked")) {
					lineChart.setData(data);
					lineChart.redraw();
				} else {
					lineChart.setData(dataNew);
					lineChart.redraw();
				}
			}
			swichMorris();	
			$(document).on('change', '#morris_switch', function () {
				swichMorris();
			});
			
		});
		/*****Ready function end*****/

		/*****Load function start*****/
		$(window).load(function(){
			window.setTimeout(function(){
				$.toast({
					heading: 'Bem Vindo ao MasterCraft',
					position: 'top-right',
					loaderBg:'#f0c541',
					icon: 'success',
					hideAfter: 3500, 
					stack: 6
				});
			}, 3000);
		});
		/*****Load function* end*****/

		var sparklineLogin = function() { 
			if( $('#sparkline_1').length > 0 ){
				$("#sparkline_1").sparkline([2,4,4,6,8,5,6,4,8,6,6,2 ], {
					type: 'line',
					width: '100%',
					height: '35',
					lineColor: '#2ecd99',
					fillColor: 'rgba(46,205,153,.6)',
					minSpotColor: '#2ecd99',
					maxSpotColor: '#2ecd99',
					spotColor: '#2ecd99',
					highlightLineColor: 'rgba(0, 0, 0, 0.6)',
					highlightSpotColor: '#2ecd99'
				});
			}	
			if( $('#sparkline_2').length > 0 ){
				$("#sparkline_2").sparkline([0,2,8,6,8], {
					type: 'line',
					width: '100%',
					height: '35',
					lineColor: '#2ecd99',
					fillColor: 'rgba(46,205,153,.6)',
					minSpotColor: '#2ecd99',
					maxSpotColor: '#2ecd99',
					spotColor: '#2ecd99',
					highlightLineColor: 'rgba(0, 0, 0, 0.6)',
					highlightSpotColor: '#2ecd99'
				});
			}	
			if( $('#sparkline_3').length > 0 ){
				$("#sparkline_3").sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40, 45, 56, 7, 10], {
					type: 'line',
					width: '100%',
					height: '35',
					lineColor: '#2ecd99',
					fillColor: 'rgba(46,205,153,.6)',
					minSpotColor: '#2ecd99',
					maxSpotColor: '#2ecd99',
					spotColor: '#2ecd99',
					highlightLineColor: 'rgba(0, 0, 0, 0.6)',
					highlightSpotColor: '#2ecd99'
				});
			}
			if( $('#sparkline_4').length > 0 ){
				$("#sparkline_4").sparkline([0,2,8,6,8,5,6,4,8,6,6,2 ], {
					type: 'bar',
					width: '100%',
					height: '50',
					barWidth: '5',
					barSpacing: '5',
					barColor: '#2ecd99',
					highlightSpotColor: '#2ecd99'
				});
			}	
		}
		var sparkResize;
			$(window).resize(function(e) {
				clearTimeout(sparkResize);
				sparkResize = setTimeout(sparklineLogin, 200);
			});
		sparklineLogin();
	</script>
	<script>
        $(document).ready(function(){
            setTimeout(() => {
                $('.msg').alert('close')
            }, 5000);
        })
    </script>
</body>

</html>