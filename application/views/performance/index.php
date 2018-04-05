<?php if ($this->session->flashdata('error')) : ?>
	<div class="alert alert-danger">
		<strong>Gagal</strong> <?= $this->session->flashdata('error') ?>
	</div>
<?php endif ?>

<?php if ($this->session->flashdata('success')) : ?>
	<div class="alert alert-success">
		<strong>Sukses</strong> <?= $this->session->flashdata('success') ?>
	</div>
<?php endif ?>

<div class="panel panel-default animated">
	<div class="panel-body">
		<div class="tabs-container">

			<ul class="nav nav-tabs">

				<?php
				$tabs = array(
					'order' => 'ORDER',
					'goodreceipt' => 'GOOD RECEIPT',
					// 'revision' => 'REVISION',
					// 'notification' => 'NOTIFICATION'
				);
				?>

				<?php foreach ($tabs as $k => $v) : ?>
				<li class="<?= $this->router->fetch_class() == $k ? 'active' : '' ?>">
					<a href="<?= site_url($k) ?>"><?= $v ?></a>
				</li>
				<?php endforeach ?>

			</ul>

			<br>

			<div class="tab-content">
				<div class="tab-pane active">
					<?php $this->load->view('performance/_search_form') ?>
					<div class="panel panel-default panel-body">
						<?php $this->load->view($view) ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-7">
					<div class="panel panel-default panel-body">
						<div id="chart" style="height:400px;"> </div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="panel panel-default" style="margin-bottom:0;">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">INDICATOR LEGEND</h4>
						</div>
						<div class="panel-body">
							<span class="badge badge-success">&nbsp;&nbsp;</span> Transaction Complete <span class="text-success">YES</span> <strong>AND</strong> Document Received <span class="text-success">YES</span><br>
							<span class="badge badge-warning">&nbsp;&nbsp;</span> Document Rejected <span class="text-success">YES</span> <strong>OR</strong> Document Returned <span class="text-success">YES</span><br>
							<span class="badge badge-primary">&nbsp;&nbsp;</span> Transaction complete <span class="text-danger">NO</span> <strong>AND</strong> Document Received <span class="text-success">YES</span><br>
							<span class="badge badge-danger">&nbsp;&nbsp;</span> Transaction Complete <span class="text-success">YES</span> <strong>AND</strong> Document Received <span class="text-danger">NO</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- untuk modal dialog form feedback -->
<?php $this->load->view('message/_form') ?>
<!-- untuk modal dialog feedback histories -->
<?php $this->load->view('message/index') ?>
