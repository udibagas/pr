<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $this->title ?></title>
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<link href="<?= base_url('css/entypo.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/font-awesome.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/plugins/css3-animate-it-plugin/animations.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/mouldifi-core.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/mouldifi-forms.css') ?>" rel="stylesheet">
<link href="<?= base_url('css/plugins/datepicker/bootstrap-datepicker.css') ?>" rel="stylesheet">
<script src="<?= base_url('hc/code/highcharts.js') ?>"></script>
<script src="<?= base_url('hc/code/modules/exporting.js') ?>"></script>
<!--[if lt IE 9]>
      <script src="<?= base_url('js/html5shiv.min.js') ?>"></script>
      <script src="<?php ('js/respond.min.js') ?>"></script>
<![endif]-->
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="<?= site_url() ?>">PERFORMANCE RECORD</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <ul class="nav navbar-nav">

	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="#">Welcome, <?= $this->session->userdata('username') ?>!</a></li>
		<li><a href="<?= site_url('logout') ?>">Logout</a></li>
	  </ul>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Page container -->
<div class="page-container">

  <!-- Main container -->
  <div class="main-container">

	<!-- Main content -->
	<div class="main-content">
        <br><br>
        <?= $content ?>
		<!-- Footer -->
		<footer class="animatedParent animateOnce z-index-10">
			<div class="footer-main animated fadeInUp slow">
                &copy; <?= date('Y') ?> <strong>LAMSOLUSI</strong>
            </div>
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
<script src="<?= base_url('js/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>

<?php foreach ($this->scripts as $s) : ?>
    <?php $this->load->view($s) ?>
<?php endforeach ?>

</body>
</html>
