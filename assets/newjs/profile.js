$(document).ready(function() {
    Highcharts.chart('grafik_saham', {
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        },
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            margin: [-75, 0, 0, 0],
            type: 'pie',
            height: 330,
        },
        title: false,
        subtitle: false,
        tooltip: {
            headerFormat: '<h6 style="margin-bottom:0px;color:{point.color}">{point.key}</h6>',
            pointFormat: '<span style="color:{point.color};padding:0">{point.percentage:.1f}%</span>',
            shared: true,
            useHTML: true
        },
        legend: {
            align: 'left',
            itemMarginBottom: 7,
            verticalAlign: 'bottom',
            layout: 'vertical',
            x: 0,
            y: 10,
            itemStyle: {
                useHTML: true,
                fontWeight: '300',
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    useHTML: true,
                    enabled: true,
                    distance: 4,
                    connectorWidth: 0,
                    shared: true,
                    format: '<span style="color:{point.color};padding:0;font-size:14px;font-weight:300">{point.percentage:.1f}%</span>',
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Percentage',
            innerSize: '90%',
            size: '64%',
            
                    data: [

                            <?php

                                $jum = count($pemegangsaham);

                                $i=1;

                                foreach($pemegangsaham as $row){

                                    

                                    if($jum==1) {

                                        echo "{ name : '" . $row['PemegangSaham'].'|'.$row['Jumlah'] . " %', y : " . $row['Jumlah'] . "}";

                                    }

                                    elseif($jum==$i){

                                        echo "{ name : '" . $row['PemegangSaham'].'|'.$row['Jumlah'] . " %', y : " . $row['Jumlah'] . ",

                                              selected: true}";

                                    }

                                    else{

                                        echo "{ name : '" . $row['PemegangSaham'].'|'.$row['Jumlah'] . " %', y : " . $row['Jumlah'] . "},";

                                    }

                                    $i++;

                            

                                }

                            ?>



                    ]
        }]
    }, function(chart) { // on complete
        textInfo('grafik_saham-text', chart, null, 'Pemegang <br />Saham')
    });

    Highcharts.chart('grafik_anggaran', {
        chart: {
            type: 'column',
            backgroundColor: null,
            height: 300,
        },
        exporting: {
            enabled: false
        },
        title: false,
        subtitle: false,
        xAxis: {
            categories: [
                '<strong>Seksi 1</strong> <br />Pejagaan - Brebes Barat',
                '<strong>Seksi 2</strong> <br />Brebes Barat - Brebes Timur',
                '<strong>Seksi 3</strong> <br />Brebes Timur - Tegal Timur',
                '<strong>Seksi 4</strong> <br />Brebes Timur - Tegal Timur',
                '<strong>Seksi 5</strong> <br />Tegal Timur - Pemalang'
            ],
            labels: {
                style: {
                    color: '#000',
                    letterSpacing: '1px',
                    textTransform: 'normal',
                    fontSize: '13px',
                }
            },
            useHTML: true,
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.y} M',
                    color: '#54afe9',
                    y: -10,
                    fontSize: 13,
                    fontWeight: 300,
                }
            }
        },

        yAxis: { // Primary yAxis
            labels: {
                format: '{value} M',
                style: {
                    color: '#000',
                    fontSize: 13,
                    fontWeight: 300,
                }
            },
            title: false,
            gridLineColor: '#d8dade'
        },

        tooltip: {
            headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y} M</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        credits: {
            enabled: false, // Enable/Disable the credits
            text: 'This is a credit'
        },
        series: [{
            pointWidth: 30,
            name: 'Peyerapan Anggaran',
            color: {
                linearGradient: [0, 400, 0, 0],
                stops: [
                    [0, '#77bbba'],
                    [0.8, '#54afe9']
                ]
            },
            showInLegend: false,
            data: [449, 987, 842, 1079]
        }],
    });
});