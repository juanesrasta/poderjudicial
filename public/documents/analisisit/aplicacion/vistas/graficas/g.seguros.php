<div id="contentGV" style="min-width: 310px; height: 400px; margin: 0 auto">

</div>
<script type="text/javascript">
	$(document).ready(function(){
		primasCobradas();
		primasCobradas1();
		primasCobradas2();
		primasCobradas3();
		primasCobradas4();
		primasCobradas5();
		segurosInflaion();
	});
	
	function primasCobradas(){
		$('#primas').highcharts({
			chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
			},
			title: {
				text: 'Composición de la Cartera 2014. Primas Netas Cobradas'
			},
			subtitle: {
				text: '(Seguro Directo y Reaseguro Aceptado)'
			},
			plotOptions: {
				pie: {
					innerSize: 100,
					depth: 45
				}
			},
			series: [{
				name: 'Puntos Porcentuales',
				data: [
					['Otros Ramos 12.79%', 12.79],
					['Vida 1.64%', 1.64],
					['Automovil Casco 37.77%', 37.77],
					['Incendio y Lineas Aliadas 2.56%', 2.56],
					['HCM 43.82%', 43.82],
					['Diversos y Ramos Técnicos 4.39%', 4.39],
					['Transporte 0.98%', 0.98]
				]
			}]
		});
	}
	
	function primasCobradas1(){
		$('#primas1').highcharts({
			 chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 45,
					beta: 0
				}
			},
			title: {
				text: 'Distribución Porcentual Primas Netas Cobradas'
			},
				subtitle: {
					text: '(Seguro Directo y Reaseguro Aceptado)'
				},
			tooltip: {
				pointFormat: '{series.name}'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					depth: 35,
					dataLabels: {
						enabled: true,
						format: '{point.name}'
					}
				}
			},
			series: [{
				type: 'pie',
				name: 'de Primas Cobradas',
				data: [
					[' Previsroa C.N.A. 4%', 4],
					['Estar Seguros, S.A 4%', 4],
					{
						name: ' Piramide 4%',
						y: 4,
						sliced: true,
						selected: true
					},
					['Altamira 3%', 3],
					['Banesco 3%', 3],
					['Otras Empresas 32%', 32],
					[' Caracas Liberty Mutual 15%', 15],
					[' Mercantil C.A. 12%', 12],
					[' Horizontes 9%', 9],
					[' Occidental 7%', 7],
					[' MAPFRE 7%', 7]
				]
			}]
		});
	}
	
	function primasCobradas2(){
		$('#primas2').highcharts({
			 chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 45,
					beta: 0
				}
			},
			title: {
				text: 'Primas Netas Cobradas Seguros de Personas'
			},
			subtitle: {
				text: '(Seguro Directo y Reaseguro Aceptado)'
			},
			tooltip: {
				pointFormat: '{series.name}'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					depth: 35,
					dataLabels: {
						enabled: true,
						format: '{point.name}'
					}
				}
			},
			series: [{
				type: 'pie',
				name: 'de Primas Cobradas',
				data: [
					[' Federal C.A. 6%', 6],
					[' La Seguridad 6%', 6],
					{
						name: 'Qualitas 4%',
						y: 4,
						sliced: true,
						selected: true
					},
					[' Constitución 3%', 3],
					[' Altamira 3%', 3],
					['Otras Empresas 25%', 25],
					[' Horizontes 17%', 17],
					[' Mercantil 12%', 12],
					[' Caracas Liberty Mutual 11%', 11],
					[' Occidental 7%', 7],
					[' Previsora 8%', 8]
				]
			}]
		});
	}
	
	function primasCobradas3(){
		$('#primas3').highcharts({
			 chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 45,
					beta: 0
				}
			},
			title: {
				text: 'Primas Netas Cobradas Seguros Patrimoniales. Año 2014'
			},
			subtitle: {
				text: '(Seguro Directo y Reaseguro Aceptado)'
			},
			tooltip: {
				pointFormat: '{series.name}'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					depth: 35,
					dataLabels: {
						enabled: true,
						format: '{point.name}'
					}
				}
			},
			series: [{
				type: 'pie',
				name: 'de Primas Cobradas',
				data: [
					['Estar Seguros 6%', 6],
					['Zurich Seg 4%', 4],
					{
						name: ' Banesco 4%',
						y: 4,
						sliced: true,
						selected: true
					},
					[' Piramide 3%', 3],
					['Multinacional de Seg 3%', 3],
					['Otras Empresas. 29%', 29],
					[' Caracas Liberty Mutual 20%', 20],
					[' Mercantil 14%', 14],
					[' Mapfre 9%', 9],
					[' La Vitalicia 3%', 3],
					[' Occidental 7%', 7]
				]
			}]
		});
	}
	
	function primasCobradas4(){
		$('#primas4').highcharts({
			 chart: {
				type: 'pie',
				options3d: {
					enabled: true,
					alpha: 45,
					beta: 0
				}
			},
			title: {
				text: 'Seguros Obligaciones y/o de Responsabilidad'
			},
			subtitle: {
				text: '(Seguro Directo y Reaseguro Aceptado)'
			},
			tooltip: {
				pointFormat: '{series.name}'
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					depth: 35,
					dataLabels: {
						enabled: true,
						format: '{point.name}'
					}
				}
			},
			series: [{
				type: 'pie',
				name: 'de Primas Cobradas',
				data: [
					['Estar Seguros 5%', 5],
					[' Occidental 7%', 7],
					{
						name: 'Qualitas 4%',
						y: 4,
						sliced: true,
						selected: true
					},
					['Caroni 4%', 4],
					['Zurich 3%', 3],
					['Constitución 3%', 3],
					['Otras Empresas 40%', 40],
					['Caracas Liberty Mutual 11%', 11],
					['Piramide 9%', 9],
					['Altamira 8%', 8],
					['Mapfre 6%', 6],
					['Mercantil 6%', 6]
				]
			}]
		});
	}
	
	function primasCobradas5(){
		 $('#primas5').highcharts({
			chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
			},
			title: {
				text: 'Siniestros Pagados. Seguro Directo. Año 2014'
			},
			subtitle: {
				text: '(Sin incluir Seguro Solidario)'
			},
			plotOptions: {
				pie: {
					innerSize: 100,
					depth: 45
				}
			},
			series: [{
				name: 'Puntos Porcentuales',
				data: [
					['Transporte 0.37%', 0.37],
					['Otros Ramos 8.24%', 8.24],
					['Vida 0.72%', 0.72],
					['H.C.M. 57.62%',57.62],
					['Incendio Lineas Aliadas 0.89%', 0.89],
					['Automovil Casco 34.70%', 34.70],
					['Diversos y Ramos Técnicos 0.74%', 0.74]
				]
			}]
		});
	}
	
	function segurosInflaion(){
		$('#seginf').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Índice de Inflación e Incremento Interanual en las Primas Cobradas'
        },
		subtitle: {
			text: 'Años 2009-2014'
		},
		yAxis: {
				title: {
					text: 'Porcentaje %'
				},
				labels: {
					formatter: function () {
						return this.value+" %";
					}
				}
			},
        xAxis: {
            categories: ['2009', '2010', '2011', '2012', '2013', '2014']
        },
        credits: {
            enabled: false
        },
		 plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }
            }
        },
        series: [{
            name: 'Primas Seguros Generales',
            data: [18.21, 36.99, 19.82, 51.05, 50.94, 79.85]
        }, {
            name: 'Índice de Inflación',
            data: [26.90, 27.40, 27.60, 20.10, 45.50, 53.40]
        }, {
            name: 'Primas de Personas',
            data: [27.60, 33.38, 30.13, 64.83, 34.20, 49.93]
        }]
    });
	}
</script>