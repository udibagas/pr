<?php $status_label = array('Rejected' => 'danger', 'Available' => 'success', 'Borrowed' => 'warning') ?>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Document</th>
                <th>Category</th>
                <th>Work Package</th>
                <th>Aircraft</th>
                <th>Trx Completed</th>
                <th>Doc Received</th>
                <th>Doc Rejected</th>
                <th>Doc Filed</th>
                <th>Doc Returned</th>
                <th class="text-center">Indicator</th>
                <th>Status</th>
                <th class="text-center">Feedback</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $p): ?>
                <tr>
                    <td><?= $p->doc_no ?></td>
                    <td><?= $p->doc_category ?></td>
                    <td><?= $p->doc_work_package ?></td>
                    <td><?= $p->doc_aircraft ?></td>
                    <td><?= $p->transaction_completed ?></td>
                    <td><?= $p->document_received ?></td>
                    <td><?= $p->document_rejected ?></td>
                    <td></td>
                    <td><?= $p->document_returned ?></td>
                    <td class="text-center">
                        <?php if ($p->transaction_completed &&  $p->document_received): ?>
                        <span class="badge badge-success">&nbsp;&nbsp;</span>
                        <?php elseif ($p->document_rejected || $p->document_returned): ?>
                        <span class="badge badge-warning">&nbsp;&nbsp;</span>
                        <?php elseif (!$p->transaction_completed && $p->document_received): ?>
                        <span class="badge badge-primary">&nbsp;&nbsp;</span>
                        <?php elseif ($p->transaction_completed && !$p->document_received): ?>
                        <span class="badge badge-danger">&nbsp;&nbsp;</span>
                        <?php endif ?>
                    </td>
                    <td>
                        <span class="label label-<?= $status_label[$p->doc_status]?>"><?= $p->doc_status ?></span>
                    </td>
                    <td class="text-center">
                        <a href="" class="open-email-form" data-toggle="modal" data-target="#modal-email" data-id="<?= $p->doc_no ?>">
                            <i class="fa fa-send-o"></i>
                        </a> &nbsp;
                        <a href="" class="open-email-histories" data-toggle="modal" data-target="#modal-email-histories" data-id="<?= $p->doc_no ?>">
                            <i class="fa fa-envelope-o"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <?= $this->pagination->create_links(); ?>
</div>
