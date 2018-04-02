<h2>Performance Record</h2>
<table class="table table-bordered table-striped">
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
            <th>Status</th>
            <th>Reason</th>
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
                <td><?= $p->doc_status ?></td>
                <td><?= $p->doc_reason ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
