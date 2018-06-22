<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>


<div class="fh-breadcrumb">
    <div class="full-height">
        <div class="full-height-scroll white-bg border-left">
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        
        <div class="col-md-6">
            <div id="member" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
            <table class="table table-bordered">
                        <tr>
                            <th>Platinum</th>
                            <th>Gold</th>
                            <th>Silver</th>
                            <th>Non Member</th>
                        
                        </tr>
                        <tbody>
                        <tr>
                            <td>10 Orang</td>
                            <td>20 Orang</td>
                            <td>30 Orang</td>
                            <td>30 Orang</td>
                        
                        </tr>
                        </tbody>
                </table>
        </div>

         <div class="col-md-6">
         <div id="member_bulan" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                <table class="table table-bordered">
                        <tr>
                            <th>Platinum</th>
                            <th>Gold</th>
                            <th>Silver</th>
                            <th>Non Member</th>
                        
                        </tr>
                        <tbody>
                        <tr>
                            <td>10 Orang</td>
                            <td>20 Orang</td>
                            <td>30 Orang</td>
                            <td>30 Orang</td>
                        
                        </tr>
                        </tbody>
                </table>
        </div>

        </div>
    </div>

       

</div>         

<script>

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Penjualan Kedai Seribu Bukit 2018'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    
    yAxis: {

min: 0,

title: {

    text: '',

    align: 'high'

},

labels: {

    overflow: 'justify'

},



},



tooltip: {

headerFormat: '<span style="font-size:10px">{point.key}</span><table>',

pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +

'<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',

footerFormat: '</table>',

shared: true,

useHTML: true

},

plotOptions: {
series: {
    borderWidth: 0,
    dataLabels: {
        enabled: true,
        format: '{point.y:.2f} '
    }
}
},

credits: {

enabled: false

},
    series: [{
        name: 'Makanan',
        color: {
                    linearGradient: [0, 400, 0, 0],
                    stops: [
                        [0, '#7abc87'],
                        [1, '#169aed'],
                    ]
                },
        data: [49, 71, 106, 129, 144, 0, 0, 0, 0, 0, 0, 0]

    }, {
        name: 'Minuman',
        color: {
                    linearGradient: [0, 400, 0, 0],
                    stops: [
                        [0, '#bc7a95'],
                        [1, '#d83c7c'],
                    ]
                },
        data: [83, 78, 98, 93, 106, 0, 0, 0, 0, 0, 0, 0]

    }]
});
</script>

<script>

Highcharts.chart('member', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Total Pengunjung'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    credits: {
                enabled: false, // Enable/Disable the credits
                text: 'This is a credit'
            },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Silver',
            color: '#C0C0C0',
            y: 61,
            sliced: true,
            selected: true
        }, {
            name: 'Gold',
            color: 'gold',
            y: 11
        }, {
            name: 'Platinum',
            color: '#E5E4E2',
            y: 10
        }, {
            name: 'Non Member',
            color: 'blue',
            y: 4
        }]
    }]
});
</script>

<script>

Highcharts.chart('member_bulan', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Total Pengunjung Bulan Mei'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    credits: {
                enabled: false, // Enable/Disable the credits
                text: 'This is a credit'
            },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Silver',
            color: '#C0C0C0',
            y: 20,
            sliced: true,
            selected: true
        }, {
            name: 'Gold',
            color: 'gold',
            y: 10
        }, {
            name: 'Platinum',
            color: '#E5E4E2',
            y: 10
        }, {
            name: 'Non Member',
            color: 'blue',
            y: 14
        }]
    }]
});
</script>