<div id="modal-email" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="" action="<?= site_url('message/send') ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Send Email</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="Message[doc_no]" id="doc_no">
                        <label for="Message[recipients]">Recipients</label>
                        <input type="text" name="Message[recipients]" value="" placeholder="Recipients" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Message[subject]">Subject</label>
                        <input type="text" name="Message[subject]" value="" placeholder="Subject" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Message[body]">Body</label>
                        <textarea name="Message[body]" rows="8" class="form-control" placeholder="Body" required></textarea>
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
