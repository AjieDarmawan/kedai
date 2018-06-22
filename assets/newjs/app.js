function textInfo(el, chart, number, label) {
    var textX = chart.plotLeft + (chart.plotWidth * 0.5);
    var textY = chart.plotTop + (chart.plotHeight * 0.5);

    var span = '<div id="' + el + 'span">';
    if (number != null) span += '<span style="font-size: 20px; color:#ff6232">' + number + '</span><br>';
    if (number != null) span += '<span style="font-size: 13px">' + label + '</span>';
    else span += '<span style="font-size: 20px; font-weight:bold">' + label + '</span>'
    span += '</div>';

    $('#' + el).append(span);
    span = $('#' + el + 'span');
    span.css('left', textX + (span.width() * -0.5));
    span.css('top', textY + (span.height() * -0.5));
}

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    $('.js-select-2').select2();
    $('body>.container').removeClass("hidden");
    $('body').find("#loading").fadeOut(1000);
	$('.title >span .toggleCompany').on('click', function() {
        $(this).parent().parent().find("+div .companyName").toggleClass("hide", 1000);
        $(this).toggleClass('active');
    });
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
});