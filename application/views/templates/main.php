<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $this->title ?></title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?= base_url('css/entypo.css') ?>" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="<?= base_url('css/font-awesome.min.css') ?>" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- CSS3 Animate It Plugin Stylesheet -->
<link href="<?= base_url('css/plugins/css3-animate-it-plugin/animations.css') ?>" rel="stylesheet">
<!-- /css3 animate it plugin stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="<?= base_url('css/mouldifi-core.css') ?>" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="<?= base_url('css/mouldifi-forms.css') ?>" rel="stylesheet">

<script src="<?= base_url('hc/code/highcharts.js') ?>"></script>
<script src="<?= base_url('hc/code/modules/exporting.js') ?>"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="<?= base_url('js/html5shiv.min.js') ?>"></script>
      <script src="<?php ('js/respond.min.js') ?>"></script>
<![endif]-->
</head>
<body>

<!-- Page container -->
<div class="page-container">

  <!-- Page Sidebar -->
  <div class="page-sidebar">

  		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="<?= site_url() ?>">RECORD PERFORMANCE</a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->

		<!-- Main navigation -->
		<?php $this->load->view('templates/_sidebar') ?>
		<!-- /main navigation -->
  </div>
  <!-- /page sidebar -->

  <!-- Main container -->
  <div class="main-container">

	<!-- Main header -->
    <div class="main-header row">
      <div class="col-sm-6 col-xs-7">

		<!-- User info -->
        <ul class="user-info pull-left">
          <li class="profile-info dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
                  <?= $this->session->userdata('username') ?> <span class="caret"></span>
              </a>

			<!-- User action menu -->
            <ul class="dropdown-menu">

              <li><a href="<?= site_url('profile') ?>"><i class="icon-user"></i>My profile</a></li>
              <li><a href="<?= site_url('message') ?>"><i class="icon-mail"></i>Messages</a></li>
			  <li class="divider"></li>
			  <li><a href="<?= site_url('accountSetting') ?>"><i class="icon-cog"></i>Account settings</a></li>
			  <li><a href="<?= site_url('logout') ?>"><i class="icon-logout"></i>Logout</a></li>
            </ul>
			<!-- /user action menu -->

          </li>
        </ul>
		<!-- /user info -->

      </div>

      <div class="col-sm-6 col-xs-5">
	  	<div class="pull-right">
			<ul class="user-info pull-left">
			  <?php $this->load->view('templates/_notification') ?>
              <?php $this->load->view('templates/_message') ?>
			</ul>
		</div>
      </div>
    </div>
	<!-- /main header -->

	<!-- Main content -->
	<div class="main-content">
		<!-- <h1 class="page-title"><?= $this->page_title ?></h1> -->
		<!-- Breadcrumb -->
		<!-- <ol class="breadcrumb breadcrumb-2">
            <li><a href="<?= site_url() ?>"><i class="fa fa-home"></i>Home</a></li>
            <?php foreach ($this->breadcrumbs as $url => $label) : ?>
			<li><a href="<?= site_url($url) ?>"><?= $label ?></a></li>
            <?php endforeach ?>
		</ol> -->
		<div class="row">
			<div class="col-lg-12">
				<?= $content ?>
			</div>
		</div>
		<br><br><br><br><br>

		<!-- Footer -->
		<footer class="animatedParent animateOnce z-index-10">
			<div class="footer-main animated fadeInUp slow">&copy; <?= date('Y') ?> <strong>LAMSOLUSI</strong>
		</footer>
		<!-- /footer -->

	  </div>
	  <!-- /main content -->

  </div>
  <!-- /main container -->

</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<!-- Load CSS3 Animate It Plugin JS -->
<script src="<?= base_url('js/plugins/css3-animate-it-plugin/css3-animate-it.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('js/plugins/metismenu/jquery.metisMenu.js') ?>"></script>
<script src="<?= base_url('js/functions.js') ?>"></script>

<!-- moris chart -->
<script src="<?= base_url('js/plugins/morris/raphael-min.js') ?>"></script>
<script src="<?= base_url('js/plugins/morris/morris.min.js') ?>"></script>

<?php foreach ($this->scripts as $s) : ?>
    <?php $this->load->view($s) ?>
<?php endforeach ?>

</body>
</html>
