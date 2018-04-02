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
	<div class="panel-heading clearfix">
		<h3 class="panel-title">PERFORMANCE</h3>
	</div>
	<div class="panel-body">
		<div class="tabs-container">
			<ul class="nav nav-tabs">
				<li class="<?= $object == 'order' ? 'active' : '' ?>"><a href="<?= site_url('performance?object=order') ?>">Order</a></li>
				<li class="<?= $object == 'good_receipt' ? 'active' : '' ?>"><a href="<?= site_url('performance?object=good_receipt') ?>">Good Receipt</a></li>
			</ul>
			<br>
			<div class="tab-content">
				<div class="tab-pane active">
					<?php $this->load->view('performance/_search_form', array('object' => $object)) ?>
					<?php $this->load->view('performance/_'.$object) ?>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default" style="margin-bottom:0;">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">LEGEND</h4>
						</div>
						<div class="panel-body">
							<span class="label label-success">&nbsp;</span> Transaction Complete (YES) and Document Received (YES)<br>
							<span class="label label-warning">&nbsp;</span> Document Rejected (YES) or Document Returned (YES)<br>
							<span class="label label-primary">&nbsp;</span> Transaction complete (NO) and Document Received (YES)<br>
							<span class="label label-danger">&nbsp;</span> Transaction Complete (YES) and Document Received (NO)
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('message/_form') ?>
