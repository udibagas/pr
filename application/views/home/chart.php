<script type="text/javascript">

$(function () {
    "use strict";

    //DONUT CHART
    var donutChart = new Morris.Donut({
        element: 'morris-donut-chart',
        data: [{label: "Download Sales", value: 12},
            {label: "In-Store Sales", value: 30},
            {label: "Mail-Order Sales", value: 20}],
        resize: true,
        colors: ['#6ac7d2', '#088190', '#00b8ce'],
    });

});

</script>
