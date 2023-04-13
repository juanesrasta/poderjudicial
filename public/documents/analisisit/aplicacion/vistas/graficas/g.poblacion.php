<div id="contentGP" style="min-width: 310px; height: 400px; margin: 0 auto">
</div>
<script type="text/javascript">
$(document).ready(function(){
	datosPoblacion();
	datosAlfabetismo();
	accesoTecnologico();
});

function datosPoblacion(){
	$('#contentGP').highcharts({
		title: {
			text: 'Distribución Poblacional',
			x: -20 //center
		},
		/*subtitle: {
			text: 'Source: WorldClimate.com',
			x: -20
		},*/
		xAxis: {
			categories: [<?php echo $estado;?>]
		},
		yAxis: {
			title: {
				text: 'Habitantes'
			},
			plotLines: [{
				value: 0,
				width: 1,
				color: '#808080'
			}]
		},
		tooltip: {
			valueSuffix: ''
		},
		legend: {
			layout: 'vertical',
			align: 'right',
			verticalAlign: 'middle',
			borderWidth: 0
		},
		series: [{
			name: 'Población',
			data: [<?php echo $poblacion;?>]
		}]
	});
		
}

function datosAlfabetismo(){
	$('#alfab').highcharts({
		chart: {
            type: 'bar'
        },
        title: {
           text: 'Tasas de Alfabetismo en la Población de 10 años y más, Según Grupo de Edad. Censos 1981 - 2011',
            x: -20 //center
        },
        xAxis: {
            categories: [<?php echo $anyo;?>]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'TASAS'
            },
			plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        plotOptions: {
            series: {
                stacking: 'normal'
            }
        },
       series: [{
            name: '10-24 años',
            data: [<?php echo $porcentaje;?>]
        }, {
            name: '24-54 años',
            data: [<?php echo $porcentaje1;?>]
        }, {
            name: '55-MAS años',
            data: [<?php echo $porcentaje2;?>]
        }]
       /* title: {
            text: 'Tasas de Alfabetismo en la Población de 10 años y más, Según Grupo de Edad. Censos 1981 - 2011',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [<?php echo $anyo;?>]
        },
        yAxis: {
            title: {
                text: 'TASAS'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: '10-24 años',
            data: [<?php echo $porcentaje;?>]
        }, {
            name: '24-54 años',
            data: [<?php echo $porcentaje1;?>]
        }, {
            name: '55-MAS años',
            data: [<?php echo $porcentaje2;?>]
        }]*/
    });
}

function accesoTecnologico(){
	$('#gacceso_tec').highcharts({

        chart: {
            type: 'column'
        },

        title: {
            text: 'Porcentaje de Hogares con disponibilidad de tecnoligías CENSOS 2001-2011'
        },

        xAxis: {
            categories: [<?php echo $categoria;?>]
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Porcentaje de Hogares'
            }
        },

        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                    this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal;
            }
        },

        plotOptions: {
            column: {
                stacking: 'normal'
            }
        },

        series: [{
            name: '2011',
            data: [<?php echo $cifras;?>],
            stack: 'male'
        }, 
		{
            name: '2001',
            data: [<?php echo $cifras1;?>],
            stack: 'female'
        }]
    });
}
</script>