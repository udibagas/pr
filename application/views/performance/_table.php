<?php $this->load->view('performance/_search_form') ?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <!-- <th>Object</th> -->
                <th>Document</th>
                <th>Category</th>
                <th>Work Package</th>
                <th>Aircraft Registration</th>
                <th>Transaction Completed</th>
                <th>Document Received</th>
                <th>Document Rejected</th>
                <th>Document Filled</th>
                <th>Returned</th>
                <th>Indicator</th>
                <th>Last Status</th>
                <th>Feedback</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>87667</td>
                <td>kljlkjl</td>
                <td>kljlkjl</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>
                    <span class="label label-warning">&nbsp;</span>
                </td>
                <td>
                    <span class="label label-success">Available</span>
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-email" data-id="2">
                        <i class="fa fa-send-o"></i> Send
                    </button>
                    <a href="<?= site_url('message/index?document=') ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-envelope-o"></i> View
                    </a>
                </td>
            </tr>
            <tr>
                <td>87667</td>
                <td>kljlkjl</td>
                <td>kljlkjl</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>
                    <span class="label label-danger">&nbsp;</span>
                </td>
                <td>
                    <span class="label label-danger">Available</span>
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-email" data-id="2">
                        <i class="fa fa-send-o"></i> Send
                    </button>
                    <a href="<?= site_url('message/index?document=') ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-envelope-o"></i> View
                    </a>
                </td>
            </tr>
            <tr>
                <td>87667</td>
                <td>kljlkjl</td>
                <td>kljlkjl</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>
                    <span class="label label-success">&nbsp;</span>
                </td>
                <td>
                    <span class="label label-success">Available</span>
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-email" data-id="2">
                        <i class="fa fa-send-o"></i> Send
                    </button>
                    <a href="<?= site_url('message/index?document=') ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-envelope-o"></i> View
                    </a>
                </td>
            </tr>
            <tr>
                <td>87667</td>
                <td>kljlkjl</td>
                <td>kljlkjl</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>2018-09-09</td>
                <td>
                    <span class="label label-primary">&nbsp;</span>
                </td>
                <td>
                    <span class="label label-primary">Available</span>
                </td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-email" data-id="2">
                        <i class="fa fa-send-o"></i> Send
                    </button>
                    <a href="<?= site_url('message/index?document=') ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-envelope-o"></i> View
                    </a>
                </td>
            </tr>
            <?php foreach ($performance as $p): ?>
                <tr>
                    <!-- <td><?= $p->object ?></td> -->
                    <td><?= $p->document ?></td>
                    <td><?= $p->category ?></td>
                    <td><?= $p->work_package ?></td>
                    <td><?= $p->aircraft_registration ?></td>
                    <td><?= $p->transaction_completed ?></td>
                    <td><?= $p->document_received ?></td>
                    <td><?= $p->document_rejected ?></td>
                    <td><?= $p->document_filled ?></td>
                    <td><?= $p->indicator ?></td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-email" data-id="2">
                            <i class="fa fa-send-o"></i> Send
                        </button>
                        <a href="<?= site_url('message/index?document=') ?>" class="btn btn-primary btn-sm">
                            <i class="fa fa-envelope-o"></i> View
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
