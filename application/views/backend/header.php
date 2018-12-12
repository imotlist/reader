<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Admin</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?= base_url()?>temp_admin/assets/css/bootstrap.css" />
		<link rel="stylesheet" href="<?= base_url()?>temp_admin/assets/css/font-awesome.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?= base_url()?>temp_admin/assets/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?= base_url()?>temp_admin/assets/css/ace.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="<?= base_url()?>temp_admin/assets/js/ace-extra.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-book"></i>
							Tapas Admin Panel
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?=base_url()?>temp_admin/assets/avatars/avatar2.png" alt="admin" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?= base_url('backdoor/logout') ?>">
										<i class="ace-icon fa fa-power-off"></i>
										Keluar
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>
				<ul class="nav nav-list">
					<li class="active">
						<a href="<?= base_url('dashboard')?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="<?=  base_url('masterauthor')?>">
							<i class="menu-icon fa fa-pencil"></i>
							<span class="menu-text"> Author </span>
						</a>

						<b class="arrow"></b>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text"> My Books </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?=  base_url('mnovel')?>">
									<i class="menu-icon fa fa-inbox"></i>
									<span class="menu-text"> Novel</span>
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?=  base_url('mcomic')?>">
									<i class="menu-icon fa fa-inbox"></i>
									<span class="menu-text"> Comic </span>
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="<?=  base_url('masteruser')?>">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text"> User </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="<?=base_url()?>temp_admin/html/calendar.html">
							<i class="menu-icon fa fa-calendar"></i>

							<span class="menu-text">
								Conto Template E

								<!-- #section:basics/sidebar.layout.badge -->
								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>

								<!-- /section:basics/sidebar.layout.badge -->
							</span>
						</a>

						<b class="arrow"></b>
					</li>

				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
				<script type="text/javascript">
			window.jQuery || document.write("<script src='<?= base_url()?>temp_admin/assets/js/jquery.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url()?>temp_admin/assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		<script src="<?= base_url()?>temp_admin/assets/js/bootstrap.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="../assets/js/excanvas.js"></script>
		<![endif]-->
		<script src="<?= base_url()?>temp_admin/assets/js/jquery-ui.custom.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/jquery.ui.touch-punch.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/jquery.easypiechart.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/jquery.sparkline.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/flot/jquery.flot.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/flot/jquery.flot.pie.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/flot/jquery.flot.resize.js"></script>

		<!-- ace scripts -->
		<script src="<?= base_url()?>temp_admin//assets/js/ace/elements.scroller.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/elements.colorpicker.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/elements.fileinput.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/elements.typeahead.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/elements.wysiwyg.js"></script>
		<script src="<?= base_url()?>temp_admin//assets/js/ace/elements.spinner.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/elements.treeview.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/elements.wizard.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/elements.aside.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.ajax-content.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.touch-drag.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.sidebar.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.sidebar-scroll-1.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.submenu-hover.js"></script>
		<script src="<?= base_url()?>temp_admin//assets/js/ace/ace.widget-box.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.settings.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.settings-rtl.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.settings-skin.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.widget-on-reload.js"></script>
		<script src="<?= base_url()?>temp_admin/assets/js/ace/ace.searchbox-autocomplete.js"></script>
			</div>

			<!-- /section:basics/sidebar -->
			
