Highcharts.setOptions({
 colors: ['#025E61', '#E5F6F3'],
 exporting: { enabled: false }
});
Highcharts.chart('container', {
		credits: {
    	enabled: false
    },
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: '<span style="font-size:34px;">326</span><br>Ordered',
        align: 'center',
        verticalAlign: 'middle',
        y: 30,
        style:{
        	fontSize: 20
        } 
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
    },
    plotOptions: {    
        pie: {
            dataLabels: {
                enabled: false,
                distance: 0,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: 0,
            endAngle: 360,
            center: ['50%', '51%']
        }
    },
    series: [{
        type: 'pie',
        name: 'Testigos',
        innerSize: '80%',
        data: [
            	['Viviendas unifamiliares',	50],
             	['Pisos',	46]
        ],
        states: {
                hover: {
                    halo: {
                        size: 15
                    }

                }
            }
    }]
});


Highcharts.setOptions({
 colors: ['#025E61', '#E5F6F3'],
 exporting: { enabled: false }
});
Highcharts.chart('onlineChart', {
        credits: {
        enabled: false
    },
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: '<span style="font-size:34px;">326</span><br>Ordered',
        align: 'center',
        verticalAlign: 'middle',
        y: 30,
        style:{
            fontSize: 20
        } 
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y}</b>'
    },
    plotOptions: {    
        pie: {
            dataLabels: {
                enabled: false,
                distance: 0,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: 0,
            endAngle: 360,
            center: ['50%', '51%']
        }
    },
    series: [{
        type: 'pie',
        name: 'Testigos',
        innerSize: '80%',
        data: [
                ['Viviendas unifamiliares', 80],
                ['Pisos',   46]
        ],
        states: {
                hover: {
                    halo: {
                        size: 15
                    }

                }
            }
    }]
});