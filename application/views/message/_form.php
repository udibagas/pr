<div id="modal-email" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" action="<?= site_url('message/send') ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Send Feedback</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="redirect_url" value="<?= current_url() ?>">
                        <input type="hidden" name="Message[doc_no]" id="doc_no">
                        <label for="Message[recipients]" class="control-label col-md-3">Recipients</label>
                        <div class="col-md-9">
                            <input type="text" name="Message[recipients]" value="" placeholder="Masukkan alamat email. Pisahkan dengan koma" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Message[subject]" class="control-label col-md-3">Subject</label>
                        <div class="col-md-9">
                            <input type="text" name="Message[subject]" value="" placeholder="Subject" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="Message[body]">Body</label> -->
                        <div class="col-md-12">
                            <textarea name="Message[body]" rows="10" class="form-control" placeholder="Body" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-send-o"></i> Send</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
