<div class="row">
    <div class="col-md-5">
        <a href="<?= site_url('performance?action=export_to_excel&object='.$object) ?>" class="btn btn-primary" target="_blank">
            <i class="fa fa-file-excel-o"></i> Export to Excel
        </a>
        <a href="<?= site_url('performance?action=export_to_pdf&object='.$object) ?>" class="btn btn-primary" target="_blank">
            <i class="fa fa-file-pdf-o"></i> Export to PDF
        </a>
    </div>
    <div class="col-md-7 text-right">
        <form class="form-inline" action="" method="get">
            <input type="hidden" name="object" value="<?= $object ?>">
            <input type="text" name="q" value="<?= $this->input->get('q') ?>" placeholder="Search" class="form-control">
            <select class="form-control" name="status">
                <option value="All">-- All Status --</option>
                <?php $status_array = array('Available', 'Borrowed', 'Return', 'Rejected') ?>
                <?php foreach ($status_array as $s): ?>
                <option value="<?= $s ?>" <?= $this->input->get('status') == $s ? 'selected' : ''?>><?= $s ?></option>
                <?php endforeach ?>
            </select>
            <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            <a href="<?= site_url('performance?object='.$object) ?>" class="btn btn-danger"><i class="fa fa-refresh"></i></a>
        </form>
    </div>
</div>
