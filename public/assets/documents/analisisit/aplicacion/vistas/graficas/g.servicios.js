		
function graficasServicios0(){
	$('#graficar').highcharts({
				   chart: {
						type: 'area',
						inverted: true
					},
					title: {
						text: 'Evolución de las Exportaciones de Venezuela 1997-2015'
					},
					subtitle: {
						style: {
							position: 'absolute',
							right: '0px',
							bottom: '10px'
						}
					},
					legend: {
						layout: 'vertical',
						align: 'right',
						verticalAlign: 'top',
						x: -150,
						y: 100,
						floating: true,
						borderWidth: 1,
						backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
					},
					xAxis: {
						categories: ['1997','1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','Sep-2015']
					},
					yAxis: {
						title: {
							text: 'Millones de Dolares $'
						},
						labels: {
							formatter: function () {
								return this.value;
							}
						},
						min: 0
					},
					plotOptions: {
						area: {
							fillOpacity: 0.5
						}
					},
					series: [{
						name: 'No Petroleras',
						data: [18330,12178,16735,27874,21745,21532,22029,32871,48145,57973,62640,89034,54208,62317,88133,93569,85603,71731,27833],
					}, {
						name: 'Petroleras',
						data: [5541,5529,4228,5655,4922,5249,5201,6797,7573,7605,6370,5987,3402,3428,4679,3771,3359,2983,1694],
					}]
				});
}
function graficasServicios1(){
	$('#graficar').highcharts({
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: 'Composición de la Cartera 2014. Primas Netas Cobradas'
		},
		subtitle: {
			text: '(Seguro Directo y Reaseguro Aceptado)'
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				dataLabels: {
					enabled: true,
					style: {
						color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
					}
				}
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

function graficasServicios2(){
	$('#graficar').highcharts({
		title: {
			text: 'Tasas de Alfabetismo en la Población de 10 años y más, Según Grupo de Edad. Censos 1981 - 2011',
			x: -20 //center
		},
		subtitle: {
			text: '',
			x: -20
		},
		xAxis: {
			categories: ["1981","1990","2001","2011","1981","1990","2001","2011","1981","1990","2001","2011"]
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
			data: [92.66,95.37,97.18,97.55]
		}, {
			name: '24-54 años',
			data: [85.51,91.55,94.78,96.16]
		}, {
			name: '55-MAS años',
			data: [58.26,69.46,77.54,86.41]
		}]
	});
}

function graficasServicios3(){
	$('#graficar').highcharts({
       chart: {
           type: 'line'
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
	series: [{
		name: 'Primas Seguros Generales',
		data: [18.21, 36.99, 19.82, 51.05, 50.94, 79.85]
	}, {
		name: 'Índice de Inflación',
		data: [26.90, 27.40, 27.60, 20.10, 45.50, 53.40]
	}, 
	{
		name: 'Primas de Personas',
		data: [27.60, 33.38, 30.13, 64.83, 34.20, 49.93]
	}]
	});
}