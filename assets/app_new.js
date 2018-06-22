$(document).ready(function() {
    $('body').removeClass("hidden");

    function textInfo(el, chart, number, label) {
        var textX = chart.plotLeft + (chart.plotWidth * 0.5);
        var textY = chart.plotTop + (chart.plotHeight * 0.5);

        var span = '<div id="' + el + 'span">';
        span += '<span style="font-size: 20px; color:#ff6232">' + number + '</span><br>';
        span += '<span style="font-size: 13px">' + label + '</span>';
        span += '</div>';

        $('#' + el).append(span);
        span = $('#' + el + 'span');
        span.css('left', textX + (span.width() * -0.5));
        span.css('top', textY + (span.height() * -0.5));
    }
    Highcharts.setOptions({
        colors: ['#76d86b', '#4bb7e4', '#f6c811', '#ff6232'],
        navigation: {
            buttonOptions: {
                symbolSize: 12,
                symbolStrokeWidth: 1,
                enabled: true //change to false to hide
            }
        },
        xAxis: {
            labels: {
                style: {
                    color: '#000',
                    letterSpacing: '2px',
                    textTransform: 'uppercase',
                    fontSize: '10px',
                }
            },
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    allowOverlap: true,
                    padding: 0,
                }
            }
        },
        yAxis: {
            labels: {
                style: {
                    color: '#000',
                    fontWeight: '1000',
                    fontSize: '8px'
                },
            },
            title: {
                style: {
                    color: '#000',
                    fontSize: '12px'
                }
            },
            gridLineColor: '#dadce2'
        }
    });

    Highcharts.chart('grafik_panjang', {
        spacingLeft: 0,
        title: {
            useHTML: true,
            text: '<h3 class="title">Panjang Konstruksi Jalan Tol</h3>',
            align: 'left',
            x: 0,
        },
        subtitle: {
            text: 'REGIONAL'
        },
        xAxis: {
            categories: ['Trans Jawa', 'Non Trans Jawa', 'Jabotabek', 'Trans Sumatera'],
            crosshair: true,
            className: 'highcharts-color-black',
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f} KM',
                }
            }
        },

        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value} KM'
            },
            title: {
                text: ' KM'
            }
        }, ],

        tooltip: {
            headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.2f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        credits: {
            enabled: false, // Enable/Disable the credits
            text: 'This is a credit'
        },


        series: [{
                name: 'Panjang Total',
                type: 'column',
                data: [706, 277, 233, 520],
                tooltip: {
                    valueSuffix: ' KM'
                },
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[1],
                    fillColor: 'white'
                },
                color: {
                    linearGradient: [0, 400, 0, 0],
                    stops: [
                        [0, '#7abc87'],
                        [1, '#169aed'],
                    ]
                },
            },
            {
                name: 'Panjang Konstruksi',
                type: 'column',
                data: [438, 277, 207, 473],
                tooltip: {
                    valueSuffix: ' KM'
                },
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[1],
                    fillColor: 'white'
                },
                color: {
                    linearGradient: [0, 400, 0, 0],
                    stops: [
                        [0, '#ff9d33'],
                        [1, '#ff5d5d'],
                    ]
                },
            },
            {
                name: 'Panjang Operasi',
                type: 'column',
                data: [700, 200, 26, 47, ],
                tooltip: {
                    valueSuffix: 'KM'
                },
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[1],
                    fillColor: 'white'
                },
                color: {
                    linearGradient: [0, 400, 0, 0],
                    stops: [
                        [0, '#abee5c'],
                        [1, '#2fcea3'],
                    ]
                },
            }
        ]
    });

    Highcharts.chart('grafik_biaya', {
        chart: {
            type: 'bar'
        },
        title: {
            useHTML: true,
            text: '<h3 class="title">Kebutuhan Biaya</h3>',
            align: 'left',
            x: 0
        },
        subtitle: {
            text: 'REGIONAL'
        },
        xAxis: {
            categories: ['Trans Jawa', 'Non Trans Jawa', 'Jabotabek', 'Trans Sumatera'],
            crosshair: true
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.2f} T',
                }
            }
        },

        yAxis: { // Primary yAxis
            labels: {
                format: '{value} T',
                style: {
                    color: '#000'
                }
            },
            title: {
                text: ' TRILIUN',
                style: {
                    color: '#000'
                }
            },
            gridLineColor: '#d8dade'
        },

        tooltip: {
            headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.2f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        credits: {
            enabled: false, // Enable/Disable the credits
            text: 'This is a credit'
        },


        series: [{
                name: 'Biaya Investasi',
                type: 'column',
                color: {
                    linearGradient: [0, 400, 0, 0],
                    stops: [
                        [0.1, '#169aed'],
                        [0.9, '#8cd0fb'],
                    ]
                },
                data: [53.71, 42.57, 88.15, 56.33, ],
                tooltip: {
                    valueSuffix: 'T'
                },
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[1],
                    fillColor: 'white'
                }
            },
            {
                name: 'Biaya Kontruksi',
                type: 'column',
                color: {
                    linearGradient: [0, 400, 0, 0],
                    stops: [
                        [0.1, '#ff5d5d'],
                        [0.325, '#ff9d33']
                    ]
                },
                data: [31.47, 30.66, 88.25, 41.28, ],
                tooltip: {
                    valueSuffix: 'T'
                },
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[1],
                    fillColor: 'white'
                }
            },
            {
                name: 'Biaya Tanah',
                type: 'column',
                color: {
                    linearGradient: [0, 400, 0, 0],
                    stops: [
                        [0.1, '#2fcea3'],
                        [0.325, '#9bdd4e']
                    ]
                },
                data: [16.69, 7.89, 88.35, 1.50, ],
                tooltip: {
                    valueSuffix: 'T'
                },
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[1],
                    fillColor: 'white'
                }
            }
        ]
    });

    Highcharts.chart('kontraktor', {
            credits: {
                enabled: false
            },
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                margin: [0, 0, 0, 0],
                type: 'pie',
                height: 236,
            },
            title: {
                useHTML: true,
                text: '<h3 class="title no-margin">Kontraktor</h3>',
                align: 'center',
                x: 0
            },
            tooltip: {
                pointFormat: '<span class="text-red">{point.y} {series.name} </span>',
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        distance: 4,
                        connectorWidth: 0,
                        format: '{point.name} <br /><span class="text-red">{point.y} {series.name} </span>',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    },
                }
            },
            series: [{
                name: 'Kontraktor',
                innerSize: '90%',
                size: '60%',
                data: [{
                    name: 'Trans Jawa',
                    y: 10
                }, {
                    name: 'Non Trans Jawa',
                    y: 5
                }, {
                    name: 'Jabodetabek',
                    y: 10
                }, {
                    name: 'Trans Sumatera',
                    y: 10
                }]
            }]
        },

        function(chart) { // on complete
            textInfo('kontraktor-text', chart, 32, 'Perusahaan')
        });

    Highcharts.chart('subkontraktor', {
        credits: {
            enabled: false
        },
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            margin: [0, 0, 0, 0],
            height: 236
        },
        title: {
            useHTML: true,
            text: '<h3 class="title no-margin">Sub kontraktor</h3>',
            align: 'center',
            x: 0
        },
        tooltip: {
            pointFormat: '<span class="text-red">{point.y} {series.name} </span>',
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '{point.name} <br /><span class="text-red">{point.y} {series.name} </span>',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorWidth: 0,
                    distance: 4,
                },
            },
        },
        series: [{
            name: 'Subkontraktor',
            size: '60%',
            innerSize: '90%',
            data: [{
                name: 'Trans Jawa',
                y: 10
            }, {
                name: 'Non Trans Jawa',
                y: 5
            }, {
                name: 'Jabodetabek',
                y: 10
            }, {
                name: 'Trans Sumatera',
                y: 10
            }]
        }]
    }, function(chart) { // on complete
        textInfo('subkontraktor-text', chart, 32, 'Perusahaan')
    });

    Highcharts.chart('transjawagrafik', {
        chart: {
            type: 'bar',
            height: 700,
            marginTop: 50
        },
        title: false,
        subtitle: false,
        xAxis: {
            categories: [
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/1">Pejagan - Pemalang</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/3">Pemalang- Batang</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/5">Batang - Semarang</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/4">Semarang - Solo</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/6">Solo - Ngawi</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/7">Ngawi - Kertosono</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/8">Kertosono - Mojokerto</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/9">Surabaya - Mojokerto</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/43">Porong - Gempol</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/10">Gempol - Pasuruan</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/11">Pasuruan - Probolinggo </a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/62">Gempol - Pandaan</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/61">Cikampek-Palimanan</a>',
            ],
            title: {
                text: null
            },
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
            gridLineColor: '#d8dade',
            plotLines: [{
                color: '#d1e9e1',
                width: 4,
                value: 90.82,
                label: {
                    rotation: 0,
                    y: -20,
                    x: -15,
                    style: {
                        color: '#7abc88',
                        fontWeight: 700
                    },
                    useHTML: true,
                    text: '<span class="red">(Realisasi)</span><br />90.82%',
                }

            }, {
                color: '#ffe4c0',
                width: 4,
                //value: 42.1,
                value: 68.21,
                label: {
                    rotation: 0,
                    x: -15,
                    y: -30,
                    style: {
                        color: '#ffb027',
                        fontWeight: 700
                    },
                    useHTML: true,
                    text: '<span class="red">(Progress)</span><br />68.21 %',
                },
            }]
        },
        tooltip: {
            headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.2f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}%',
                },
                cursor: 'pointer',
                point: {
                    events: {
                        click: function(e) {
                            // console.log(this.category)
                            $('#modalForm').modal('show');
                        }
                    }
                },
            },

            bar: {
                dataLabels: {
                    enabled: true,
                    color: '#000',
                }
            }
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Progres Tanah ',
            color: {
                linearGradient: [0, 400, 0, 0],
                stops: [
                    [0, '#169aed'],
                    [0.8, '#8cd0fb']
                ]
            },
            pointWidth: 7,
            data: [99.95, 98.32, 98.17, 97.69, 94.7, 99.18, 100, 100, 100, 88.316, 97.19, 100, 100],
        }, {
            name: 'Rencana Konstruksi ',
            color: {
                linearGradient: [0, 400, 0, 0],
                stops: [
                    [0, '#ff5d5d'],
                    [0.8, '#ff9d33']
                ]
            },
            pointWidth: 7,
            data: [79, 48.22, 57.35, 77.78, 68.05, 60.49, 99.99, 100, 33, 54.12, 21.96, 100, 100],
        }, {
            name: 'Realisasi Kontruksi ',
            color: {
                linearGradient: [0, 400, 0, 0],
                stops: [
                    [0, '#2fcea3'],
                    [0.8, '#b0df3e']
                ]
            },
            //groupPadding: 1,
            pointWidth: 7,
            data: [83.22, 48.4, 55.9, 74.51, 64.5, 57.67, 99.94, 99.77, 33.82, 52.67, 16.35, 100, 100],
        }]
    });
    Highcharts.chart('trans-sumatera', {
        chart: {
            type: 'bar',
            height: 700,
            marginTop: 20
        },
        title: false,
        subtitle: false,
        xAxis: {
            categories: [
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/1">Pejagan - Pemalang</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/3">Pemalang- Batang</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/5">Batang - Semarang</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/4">Semarang - Solo</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/6">Solo - Ngawi</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/7">Ngawi - Kertosono</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/8">Kertosono - Mojokerto</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/9">Surabaya - Mojokerto</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/43">Porong - Gempol</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/10">Gempol - Pasuruan</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/11">Pasuruan - Probolinggo </a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/62">Gempol - Pandaan</a>',
                '<a href="http://i_cons.bpjt.pu.go.id/User_app/detail/61">Cikampek-Palimanan</a>',
            ],
            title: {
                text: null
            },
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
            gridLineColor: '#d8dade',
            plotLines: [{
                color: '#d1e9e1',
                width: 4,
                value: 90.82,
                label: {
                    rotation: 0,
                    y: -10,
                    x: -15,
                    style: {
                        color: '#7abc88',
                        fontWeight: 700
                    },
                    useHTML: true,
                    text: '<span class="red">(Realisasi)</span><br />90.82%',
                }

            }, {
                color: '#ffe4c0',
                width: 4,
                //value: 42.1,
                value: 68.21,
                label: {
                    rotation: 0,
                    x: -15,
                    y: -10,
                    style: {
                        color: '#ffb027',
                        fontWeight: 700
                    },
                    useHTML: true,
                    text: '<span class="red">(Progress)</span><br />68.21 %',
                },
            }]
        },
        tooltip: {
            headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.2f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.0f}%',
                },
                cursor: 'pointer',
                point: {
                    events: {
                        click: function(e) {
                            // console.log(this.category)
                            $('#modalForm').modal('show');
                        }
                    }
                },
            },

            bar: {
                dataLabels: {
                    enabled: true,
                    color: '#000',
                }
            }
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Progres Tanah ',
            color: {
                linearGradient: [0, 400, 0, 0],
                stops: [
                    [0, '#169aed'],
                    [0.8, '#8cd0fb']
                ]
            },
            pointWidth: 7,
            data: [99.95, 98.32, 98.17, 97.69, 94.7, 99.18, 100, 100, 100, 88.316, 97.19, 100, 100],
        }, {
            name: 'Rencana Konstruksi ',
            color: {
                linearGradient: [0, 400, 0, 0],
                stops: [
                    [0, '#ff5d5d'],
                    [0.8, '#ff9d33']
                ]
            },
            pointWidth: 7,
            data: [79, 48.22, 57.35, 77.78, 68.05, 60.49, 99.99, 100, 33, 54.12, 21.96, 100, 100],
        }, {
            name: 'Realisasi Kontruksi ',
            color: {
                linearGradient: [0, 400, 0, 0],
                stops: [
                    [0, '#2fcea3'],
                    [0.8, '#b0df3e']
                ]
            },
            //groupPadding: 1,
            pointWidth: 7,
            data: [83.22, 48.4, 55.9, 74.51, 64.5, 57.67, 99.94, 99.77, 33.82, 52.67, 16.35, 100, 100],
        }]
    });


    Highcharts.chart('kuadran-tanah', {
        chart: {
            type: 'bubble',
            plotBorderWidth: 1,
            zoomType: 'xy',
            marginTop: 30,
        },
        legend: {
            enabled: false
        },
        title: false,
        xAxis: {
            gridLineWidth: 1,
            title: {
                text: 'Progres Tanah(%)'
            },
            labels: {
                format: '{value} %'
            },
            plotLines: [{
                color: '#00bfff',
                dashStyle: 'dot',
                width: 4,
                value: 59.4,
                label: {
                    align: 'left',
                    rotation: 0,
                    y: 50,
                    x: 20,
                    style: {
                        fontStyle: 'italic',
                        fontWeight: 700,
                        color: '#353131'
                    },
                    text: 'Rata-rata  Progres tanah : <b>59.4</b> %'
                },
                zIndex: 3
            }]
        },
        yAxis: {
            startOnTick: false,
            endOnTick: false,
            title: {
                text: 'Progres Konstruksi(%)'
            },
            labels: {
                format: '{value} %'
            },
            maxPadding: 0.2,
            plotLines: [{
                color: '#00bfff',
                dashStyle: 'dot',
                width: 4,
                value: 42.1,
                label: {
                    align: 'left',
                    style: {
                        fontStyle: 'italic',
                        color: '#ffba00'
                    },
                    text: 'Rata-rata Progres Konstruksi : <b>42.1</b> %',
                    x: 100,
                    y: -20,
                },
                zIndex: 3
            }]
        },
        tooltip: {
            useHTML: true,
            headerFormat: '<table>',
            pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
                '<tr><th>Progres Tanah:</th><td>{point.x} %</td></tr>' +
                '<tr><th>Progres Konstruksi:</th><td>{point.y} %</td></tr>' +
                '<tr><th>Deviasi Konstruksi:</th><td>{point.a} %</td></tr>',
            footerFormat: '</table>',
            followPointer: true
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        credits: {
            enabled: false, // Enable/Disable the credits
        },
        series: [{
                data: [
                    { x: 99.95, y: 83.22, a: 4.22, z: '0', name: 'PP', country: 'Pejagan - Pemalang' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                color: "#ffc602",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#ffc602',
                    padding: 2,
                },
            },

            {
                data: [
                    { x: 75.32, y: 30.4, a: 0.18, z: '0', name: 'PB', country: 'Pemalang- Batang' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#ffc601',
                    padding: 2,
                },
                color: "#ffc601",
            }, //orange 


            {
                data: [
                    { x: 98.17, y: 25.9, a: -1.45, z: '0', name: 'BS', country: 'Batang - Semarang' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#ffc600',
                    padding: 2,
                },
                color: "#ffc600",
            },

            {
                data: [
                    { x: 97.69, y: 74.51, a: -3.27, z: '0', name: 'Semsol', country: 'Semarang - Solo' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#ffa500',
                    padding: 2,
                },
                color: "#ffa500",
            },

            {
                data: [
                    { x: 25, y: 37, a: -3.44, z: '0', name: 'Solo - Ngawi', country: 'Solo - Ngawi' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#dc143c',
                    padding: 2,
                },
                color: "#dc143c",
            }, //orange 


            {
                data: [
                    { x: 30.18, y: 67.67, a: -2.83, z: '0', name: 'Ngawi - Kertosono', country: 'Ngawi - Kertosono' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#00e73c',
                    padding: 2,
                },
                color: "#00e73c",
            },
            {
                data: [
                    { x: 100, y: 100, a: 0, z: '0', name: 'Cipali', country: 'Cikampek-Palimanan' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                color: "#ffa500",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#ffa500',
                    padding: 2,
                },
            },
            {
                data: [
                    { x: 28.39, y: 11.98, a: -2.56, z: '0', name: 'Bocimi', country: 'Ciawi - Sukabumi' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#dc143c",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#dc143c',
                    padding: 2,
                },
            },

            {
                data: [
                    { x: 99.74, y: 95.28, a: -4.72, z: '0', name: 'Sorja', country: 'Soreang - Pasir Koja' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                color: "#ffa500",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#ffa500',
                    padding: 2,
                },
            },

            {
                color: "#ffa500",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#ffc600',
                    padding: 2,
                },
                data: [
                    { x: 62.68, y: 3.1, a: -0.69, z: '0', name: 'Sercin', country: 'Serpong-Cinere' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#ffc600",
            },

            {
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#ff0c0c',
                    padding: 2,
                },
                data: [
                    { x: 0, y: 26.09, a: 1.45, z: '0', name: 'Merak', country: 'Tanggerang-Merak' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#ff0c0c",
            },

            {
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#00e73c',
                    padding: 2,
                },
                data: [
                    { x: 0, y: 72.3, a: 5.13, z: '0', name: 'MKTT', country: 'Medan - Kualanamu - Tebing Tinggi' },
                ],
                color: "#00e73c"
            },
            {
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    backgroundColor: '#fff',
                    color: '#ffa500',
                    padding: 2,
                },
                data: [
                    { x: 81.21, y: 90.97, a: -0.32, z: '0', name: 'Medan - Binjai', country: 'Medan - Binjai' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#ffa500",
            },
        ]
    });

    Highcharts.chart('kuadran_tjw', {
        chart: {
            type: 'bubble',
            plotBorderWidth: 1,
            zoomType: 'xy'
        },
        legend: {
            enabled: false
        },
        title: {
            useHTML: true,
            text: '<h3 class="title">Kuadran Trans Jawa</h3>',
            align: 'left',
            x: 0,
        },
        subtitle: {
            text: 'ALL SEKSI '
        },
        xAxis: {
            gridLineWidth: 1,
            title: {
                text: 'Progres Tanah(%)'
            },
            labels: {
                format: '{value} %'
            },
            plotLines: [{
                color: '#2992ed',
                dashStyle: 'ShortDash',
                width: 4,
                value: 90.8,
                label: {
                    align: 'right',
                    rotation: 0,
                    y: 15,
                    style: {
                        fontStyle: 'italic',
                        color: '#2992ed',
                        fontWeight: '700'
                    },
                    //text: 'Rata-rata  Progres tanah : 58.3 %'
                    text: 'Rata-rata  Progres tanah : 90.8 %',
                },
                zIndex: 3
            }]

        },

        yAxis: {
            startOnTick: false,
            endOnTick: false,
            title: {
                text: 'Progres Konstruksi (%)'
            },
            labels: {
                format: '{value} %'
            },
            maxPadding: 0.2,
            plotLines: [{
                color: '#f32025',
                dashStyle: 'ShortDash',
                width: 4,
                value: 68.2,
                label: {
                    align: 'left',
                    style: {
                        fontStyle: 'italic',
                        color: '#f32025',
                        fontWeight: '700'
                    },
                    //text: 'Rata-rata Progres Konstruksi : 39.8 %',
                    text: 'Rata-rata Progres Konstruksi : 68.2 %',
                    x: 100,
                    y: -30
                },
                zIndex: 3
            }]
        },
        tooltip: {
            useHTML: true,
            headerFormat: '<table>',
            pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
                '<tr><th>Progres Tanah:</th><td>{point.x} %</td></tr>' +
                '<tr><th>Progres Konstruksi:</th><td>{point.y} %</td></tr>' +
                '<tr><th>Deviasi Konstruksi:</th><td>{point.a} %</td></tr>',
            footerFormat: '</table>',
            followPointer: true
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        credits: {
            enabled: false, // Enable/Disable the credits
            text: 'This is a credit'
        },

        series: [{
                data: [
                    { x: 99.95, y: 83.22, a: 4.22, z: '0', name: 'PP', country: 'Pejagan - Pemalang' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                color: "#ffc602",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
            },

            {
                data: [
                    { x: 75.32, y: 30.4, a: 0.18, z: '0', name: 'PB', country: 'Pemalang- Batang' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                color: "#ffc601",
            }, //orange 


            {
                data: [
                    { x: 98.17, y: 25.9, a: -1.45, z: '0', name: 'BS', country: 'Batang - Semarang' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                color: "#ffc600",
            },

            {
                data: [
                    { x: 97.69, y: 74.51, a: -3.27, z: '0', name: 'Semsol', country: 'Semarang - Solo' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                color: "#ffa500",
            },

            {
                data: [
                    { x: 25, y: 37, a: -3.44, z: '0', name: 'Solo - Ngawi', country: 'Solo - Ngawi' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                color: "#dc143c",
            }, //orange 


            {
                data: [
                    { x: 30.18, y: 67.67, a: -2.83, z: '0', name: 'Ngawi - Kertosono', country: 'Ngawi - Kertosono' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                color: "#00e73c",
            },
            {
                data: [
                    { x: 100, y: 100, a: 0, z: '0', name: 'Cipali', country: 'Cikampek-Palimanan' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                color: "#ffa500",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
            },
            {
                data: [
                    { x: 28.39, y: 11.98, a: -2.56, z: '0', name: 'Bocimi', country: 'Ciawi - Sukabumi' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#dc143c",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
            },

            {
                data: [
                    { x: 99.74, y: 95.28, a: -4.72, z: '0', name: 'Sorja', country: 'Soreang - Pasir Koja' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                color: "#ffa500",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
            },

            {
                color: "#ffa500",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                data: [
                    { x: 62.68, y: 3.1, a: -0.69, z: '0', name: 'Sercin', country: 'Serpong-Cinere' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#ffc600",
            },

            {
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                data: [
                    { x: 0, y: 26.09, a: 1.45, z: '0', name: 'Merak', country: 'Tanggerang-Merak' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#ff0c0c",
            },

            {
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                data: [
                    { x: 0, y: 72.3, a: 5.13, z: '0', name: 'MKTT', country: 'Medan - Kualanamu - Tebing Tinggi' },
                ],
                color: "#00e73c"
            },
            {
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                data: [
                    { x: 81.21, y: 90.97, a: -0.32, z: '0', name: 'Medan - Binjai', country: 'Medan - Binjai' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#ffa500",
            },
        ]
    });

    Highcharts.chart('kuadran_ntjw', {
        chart: {
            type: 'bubble',
            plotBorderWidth: 1,
            zoomType: 'xy'
        },
        legend: {
            enabled: false
        },
        title: {
            useHTML: true,
            text: '<h3 class="title">Kuadran Non Trans Jawa</h3>',
            align: 'left',
            x: 0,
        },
        subtitle: {
            text: 'ALL SEKSI '
        },
        xAxis: {
            gridLineWidth: 1,
            title: {
                text: 'Progres Tanah(%)'
            },
            labels: {
                format: '{value} %'
            },
            plotLines: [{
                color: '#2992ed',
                dashStyle: 'ShortDash',
                width: 4,
                value: 90.8,
                label: {
                    align: 'right',
                    rotation: 0,
                    y: 15,
                    style: {
                        fontStyle: 'italic',
                        color: '#2992ed',
                        fontWeight: '700'
                    },
                    //text: 'Rata-rata  Progres tanah : 58.3 %'
                    text: 'Rata-rata  Progres tanah : 90.8 %',
                },
                zIndex: 3
            }]

        },

        yAxis: {
            startOnTick: false,
            endOnTick: false,
            title: {
                text: 'Progres Konstruksi (%)'
            },
            labels: {
                format: '{value} %'
            },
            maxPadding: 0.2,
            plotLines: [{
                color: '#f32025',
                dashStyle: 'ShortDash',
                width: 4,
                value: 68.2,
                label: {
                    align: 'left',
                    style: {
                        fontStyle: 'italic',
                        color: '#f32025',
                        fontWeight: '700'
                    },
                    //text: 'Rata-rata Progres Konstruksi : 39.8 %',
                    text: 'Rata-rata Progres Konstruksi : 68.2 %',
                    x: 100,
                    y: -30
                },
                zIndex: 3
            }]
        },
        tooltip: {
            useHTML: true,
            headerFormat: '<table>',
            pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
                '<tr><th>Progres Tanah:</th><td>{point.x} %</td></tr>' +
                '<tr><th>Progres Konstruksi:</th><td>{point.y} %</td></tr>' +
                '<tr><th>Deviasi Konstruksi:</th><td>{point.a} %</td></tr>',
            footerFormat: '</table>',
            followPointer: true
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        credits: {
            enabled: false, // Enable/Disable the credits
            text: 'This is a credit'
        },

        series: [{
                data: [
                    { x: 99.95, y: 83.22, a: 4.22, z: '0', name: 'PP', country: 'Pejagan - Pemalang' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                color: "#ffc602",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
            },

            {
                data: [
                    { x: 75.32, y: 30.4, a: 0.18, z: '0', name: 'PB', country: 'Pemalang- Batang' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                color: "#ffc601",
            }, //orange 


            {
                data: [
                    { x: 98.17, y: 25.9, a: -1.45, z: '0', name: 'BS', country: 'Batang - Semarang' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                color: "#ffc600",
            },

            {
                data: [
                    { x: 97.69, y: 74.51, a: -3.27, z: '0', name: 'Semsol', country: 'Semarang - Solo' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                color: "#ffa500",
            },

            {
                data: [
                    { x: 25, y: 37, a: -3.44, z: '0', name: 'Solo - Ngawi', country: 'Solo - Ngawi' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                color: "#dc143c",
            }, //orange 


            {
                data: [
                    { x: 30.18, y: 67.67, a: -2.83, z: '0', name: 'Ngawi - Kertosono', country: 'Ngawi - Kertosono' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                color: "#00e73c",
            },
            {
                data: [
                    { x: 100, y: 100, a: 0, z: '0', name: 'Cipali', country: 'Cikampek-Palimanan' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                color: "#ffa500",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
            },
            {
                data: [
                    { x: 28.39, y: 11.98, a: -2.56, z: '0', name: 'Bocimi', country: 'Ciawi - Sukabumi' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#dc143c",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
            },

            {
                data: [
                    { x: 99.74, y: 95.28, a: -4.72, z: '0', name: 'Sorja', country: 'Soreang - Pasir Koja' },
                    //],color: "rgb(124, 181, 236)" },
                ],
                color: "#ffa500",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
            },

            {
                color: "#ffa500",
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                data: [
                    { x: 62.68, y: 3.1, a: -0.69, z: '0', name: 'Sercin', country: 'Serpong-Cinere' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#ffc600",
            },

            {
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                data: [
                    { x: 0, y: 26.09, a: 1.45, z: '0', name: 'Merak', country: 'Tanggerang-Merak' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#ff0c0c",
            },

            {
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                data: [
                    { x: 0, y: 72.3, a: 5.13, z: '0', name: 'MKTT', country: 'Medan - Kualanamu - Tebing Tinggi' },
                ],
                color: "#00e73c"
            },
            {
                dataLabels: {
                    enabled: true,
                    useHTML: true,
                    color: '#000',
                    padding: 2,
                },
                data: [
                    { x: 81.21, y: 90.97, a: -0.32, z: '0', name: 'Medan - Binjai', country: 'Medan - Binjai' },
                    //],color: "rgb(221, 223, 13)" },
                ],
                color: "#ffa500",
            },
        ]
    });

})