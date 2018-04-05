<script type="text/javascript">

$(document).on("click", ".open-email-form", function () {
    var doc_no = $(this).data('id');
    $("#modal-email #doc_no").val(doc_no);
});

$('.date-picker').datepicker({
	keyboardNavigation: false,
	forceParse: false,
	todayHighlight: false,
    format: "yyyy-mm-dd",
    autoclose: true
});

var getMessage = function(params) {
    $('#message-list').html('');

    $.ajax({
        type: 'get',
        dataType: 'json',
        url: '<?= site_url('message') ?>',
        data: params,
        success: function(j) {

            if (j.length == 0) {
                var html = '<div class="panel panel-default panel-body"> Tidak ada pesan </div>';
                $('#message-list').html(html);
                return;
            }

            for (m in j) {
                var html = '<div class="panel panel-default"> <div class="panel-heading clearfix"><div class="pull-right">'+j[m].created_at+'</div> <h3 class="panel-title">'+j[m].subject+'</h3> </div> <div class="panel-body"> <strong>From:</strong> '+j[m].sender+'<br> <strong>To:</strong> '+j[m].recipients+'<br><br> <p>'+j[m].body.replace(/\n/g, "<br />")+'</p></div></div>';
                $('#message-list').append(html);
            }

        }
    });

};

// untuk ambil data message
$(document).on("click", ".open-email-histories", function () {
    var doc_no = $(this).data('id');
    $('#doc_no').val(doc_no);
    getMessage({doc_no:doc_no});
});

// untuk refresh message
$('#refresh_message').click(function(e) {
    e.preventDefault();
    $('#message_keyword').val('');
    getMessage({
        doc_no: $('#doc_no').val()
    });
});

// untuk search message
$('#message_keyword').keyup(function() {
    if ($(this).val().length >= 3) {
        getMessage({
            doc_no: $('#doc_no').val(),
            q: $(this).val()
        });
    }

    if ($(this).val().length == 0) {
        getMessage({ doc_no: $('#doc_no').val() });
    }
});

// untuk menampilkan chart
Highcharts.chart('chart', {
    exporting: false,
    chart: {
        type: 'column'
    },
    title: {
        text: 'Summary Performance Record'
    },
    subtitle: {
        text: 'Periode : <?= $period_start ?> - <?= $period_start ?>'
    },
    xAxis: {
        type: 'category',
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                color: 'black'
            }
        }
    },
    series: [{
        name: 'Jumlah',
        colorByPoint: true,
        data: [{
            name: 'Trx Completed',
            y: <?= $trx_completed ?>
        }, {
            name: 'Doc Received',
            y: <?= $doc_received ?>
        }, {
            name: 'Doc Rejected',
            y: <?= $doc_rejected ?>
        }, {
            name: 'Doc Filed',
            y: <?= $doc_filed ?>
        }, {
            name: 'Doc Returned',
            y: <?= $doc_returned ?>
        }]
    }]
});

</script>
