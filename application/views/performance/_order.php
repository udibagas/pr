<?php $status_label = array('Rejected' => 'danger', 'Available' => 'success', 'Borrowed' => 'warning') ?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Document</th>
                <th>Category</th>
                <th>Work Package</th>
                <th>Aircraft Registration</th>
                <th>Trx Completed</th>
                <th>Doc Received</th>
                <th>Doc Rejected</th>
                <th>Doc Filed</th>
                <th>Doc Returned</th>
                <th>Indicator</th>
                <th>Status</th>
                <th>Reason</th>
                <th>Feedback</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($performance as $p): ?>
                <tr>
                    <td><?= $p->doc_no ?></td>
                    <td><?= $p->doc_category ?></td>
                    <td><?= $p->doc_work_package ?></td>
                    <td><?= $p->doc_aircraft ?></td>
                    <td><?= $p->transaction_completed ?></td>
                    <td><?= $p->doc_posting_date ?></td>
                    <td><?= $p->doc_status == 'Rejected' ? $p->doc_lastupdate : '' ?></td>
                    <td><?= '' ?></td>
                    <td><?= $p->doc_returndate ?></td>
                    <td>
                        <?php if (!$p->transaction_completed && $p->doc_posting_date) : ?>
                            <span class="label label-primary">&nbsp;</span>
                        <?php endif ?>
                    </td>
                    <td>
                        <span class="label label-<?= $status_label[$p->doc_status]?>">
                            <?= $p->doc_status ?>
                        </span>
                    </td>
                    <td><?= $p->doc_reason ?></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm open-email-form" data-toggle="modal" data-target="#modal-email" data-id="<?= $p->doc_no ?>">
                            <i class="fa fa-send-o"></i> Send
                        </button>
                        <a href="<?= site_url('message/index?doc_no='.$p->doc_no) ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-envelope-o"></i> View
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
