<div id="modal-search" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="" method="get">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Advance Search</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-md-3">Trx Complete</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" class="form-control date-picker" name="trx_complete_from" value="" placeholder="From">
                                <div class="input-group-addon">to</div>
                                <input type="text" name="trx_complete_to" value="" placeholder="To" class="form-control date-picker">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Doc Received</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" name="doc_received_from" value="" placeholder="From" class="form-control date-picker">
                                <div class="input-group-addon">to</div>
                                <input type="text" name="doc_received_to" value="" placeholder="To" class="form-control date-picker">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Doc Rejected</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" name="doc_rejected_from" value="" placeholder="From" class="form-control date-picker">
                                <div class="input-group-addon">to</div>
                                <input type="text" name="doc_rejected_to" value="" placeholder="To" class="form-control date-picker">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Records Filed</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" name="records_filed_from" value="" placeholder="From" class="form-control date-picker">
                                <div class="input-group-addon">to</div>
                                <input type="text" name="records_filed_to" value="" placeholder="To" class="form-control date-picker">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Doc Returned</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" name="doc_returned_from" value="" placeholder="From" class="form-control date-picker">
                                <div class="input-group-addon">to</div>
                                <input type="text" name="doc_returned_to" value="" placeholder="To" class="form-control date-picker">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="control-label col-md-3">Category</label>
                        <div class="col-md-9">
                            <input type="text" name="category" value="<?= $this->input->get('category') ?>" placeholder="Category" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="work_package" class="control-label col-md-3">Work Package</label>
                        <div class="col-md-9">
                            <input type="text" name="work_package" value="<?= $this->input->get('work_package') ?>" placeholder="Work Package" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="aircraft" class="control-label col-md-3">Aircraft</label>
                        <div class="col-md-9">
                            <input type="text" name="aircraft" value="<?= $this->input->get('aircraft') ?>" placeholder="Aircraft" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="indicator" class="control-label col-md-3">Indicator</label>
                        <div class="col-md-9">
                            <div class="checkbox checkbox-replace checkbox-success">
                                <input type="checkbox" name="indicator[]">
                                <label><span class="badge badge-success">&nbsp;&nbsp;</span> Transaction Complete <span class="text-success">YES</span> and Document Received <span class="text-success">YES</span></label>
                            </div>
                            <div class="checkbox checkbox-replace checkbox-warning">
                                <input type="checkbox" name="indicator[]">
                                <label><span class="badge badge-warning">&nbsp;&nbsp;</span> Document Rejected <span class="text-success">YES</span> or Document Returned <span class="text-success">YES</span></label>
                            </div>
                            <div class="checkbox checkbox-replace checkbox-primary">
                                <input type="checkbox" name="indicator[]">
                                <label><span class="badge badge-primary">&nbsp;&nbsp;</span> Transaction complete <span class="text-danger">NO</span> and Document Received <span class="text-success">YES</span></label>
                            </div>
                            <div class="checkbox checkbox-replace checkbox-danger">
                                <input type="checkbox" name="indicator[]">
                                <label><span class="badge badge-danger">&nbsp;&nbsp;</span> Transaction Complete <span class="text-success">YES</span> and Document Received <span class="text-danger">NO</span></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
