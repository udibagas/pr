<table border="1" width="100%">
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
        <?php foreach ($data as $p): ?>
            <tr>
                <td><?= $p->doc_no ?></td>
                <td><?= $p->doc_category ?></td>
                <td><?= $p->doc_work_package ?></td>
                <td><?= $p->doc_aircraft ?></td>
                <td><?= $p->transaction_completed ?></td>
                <td><?= $p->document_received ?></td>
                <td><?= $p->document_rejected ?></td>
                <td><?= $p->document_filed ?></td>
                <td><?= $p->document_returned ?></td>
                <td> <?= $p->doc_status ?> </td>
                <td><?= $p->doc_reason ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
