<div class="pull-right">
    <form class="form-inline" action="" method="get">
        <input type="hidden" name="doc_no" value="<?= $this->input->get('doc_no') ?>">
        <input type="text" name="q" value="<?= $this->input->get('q') ?>" placeholder="Search" class="form-control">
        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i>Cari</button>
        <a href="<?= site_url('message?doc_no='.$this->input->get('doc_no')) ?>" class="btn btn-danger"><i class="fa fa-refresh"></i>Reset</a>
    </form>
</div>
<h2>FEEDBACK HISTORIES UNTUK DOKUMEN <?= $this->input->get('doc_no') ?></h2>
<div class="clearfix"></div>
<hr>

<?php foreach ($messages as $m) : ?>
    <div class="panel panel-default">
        <div class="panel-heading clearfix">
            <h3 class="panel-title"><?= $m->subject ?></h3>
        </div>
        <div class="panel-body">
            Recipients :
            <?php foreach (explode(',', $m->recipients) as $r) : ?>
                <a href="mailto:<?= trim($r) ?>"><?= trim($r) ?></a>
            <?php endforeach ?><br>
            Sent Time : <?= $m->created_at ?>

            <hr>

            <p><?= nl2br($m->body) ?></p>
        </div>
    </div>
<?php endforeach ?>

<?php if (!$messages): ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <h3>
                Tidak ada feedback untuk dokumen/pencarian terkait
            </h3>
        </div>
    </div>
<?php endif; ?>
