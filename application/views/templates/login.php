<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $this->title ?> | Login</title>
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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="<?= base_url('js/html5shiv.min.js') ?>"></script>
      <script src="<?= base_url('js/respond.min.js') ?>"></script>
<![endif]-->


</head>
<body class="login-page">
	<?= $content ?>
<!--Load JQuery-->
<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<!-- Load CSS3 Animate It Plugin JS -->
<script src="<?= base_url('js/plugins/css3-animate-it-plugin/css3-animate-it.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
