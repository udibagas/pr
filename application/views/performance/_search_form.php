<div class="row">
    <div class="col-md-5">
        <a href="<?= current_url()."?action=export_to_excel" ?>" class="btn btn-primary" target="_blank">
            <i class="fa fa-file-excel-o"></i> Export to Excel
        </a>
        <a href="<?= current_url()."?action=export_to_pdf" ?>" class="btn btn-primary" target="_blank">
            <i class="fa fa-file-pdf-o"></i> Export to PDF
        </a>
    </div>
    <div class="col-md-7 text-right">
        <form class="form-inline" action="" method="get">
            <input type="text" name="q" value="<?= $this->input->get('q') ?>" placeholder="Quick Search" class="form-control date-picker">
            <button type="submit" name="submit" class="btn btn-primary"><i class="icon-search"></i></button>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-search">Advance Search</a>
                <a href="<?= current_url() ?>" class="btn btn-danger"><i class="icon-ccw"></i></a>
        </form>
    </div>
</div>

<?php $this->load->view('performance/_advance_search_form') ?>
