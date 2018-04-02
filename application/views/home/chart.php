<script type="text/javascript">

Highcharts.chart('pie', {

    title: {
        text: 'PERFORMANCE RECORD'
    },

    // xAxis: {
    //     categories: ['Transaction Completed', 'Document Received', 'Document Rejected', 'Document Filed', 'Document Returned']
    // },

    series: [{
        type: 'pie',
        allowPointSelect: true,
        keys: ['name', 'y', 'selected', 'sliced'],
        data: [
            ['Transaction Completed', 29.9, true, true],
            ['Document Received', 71.5, false],
            ['Document Rejected', 106.4, false],
            ['Document Filed', 129.2, false],
            ['Document Returned', 144.0, false],
        ],
        showInLegend: true
    }]
});

</script>
