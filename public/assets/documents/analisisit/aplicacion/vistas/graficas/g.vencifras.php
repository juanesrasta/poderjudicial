<div id="contentGV" style="min-width: 310px; height: 400px; margin: 0 auto">

</div>
<script type="text/javascript">
	$(document).ready(function(){
		evolExportaciones();
		evolProductoInternoBruto();
		evolImportaciones();
		movimientosPortuarios();
	});
	
	function evolExportaciones(){
		$('#contentGV').highcharts({
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
					categories: [<?php echo $anyo;?>]
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
					data: [<?php echo $cifrasNP;?>],
				}, {
					name: 'Petroleras',
					data: [<?php echo $cifrasP;?>],
				}]
		});
	}
	
	function evolImportaciones(){
		 $('#venimport').highcharts({
			chart: {
				type: 'bar'
			},
			title: {
				text: 'Evolución de las Importaciones 1997-2015'
			},
			subtitle: {
				text: '(Cifras anuales en millones de Dolares)'
			},
			xAxis: {
				categories: [<?php echo $importfecha;?>],
				title: {
					text: null
				}
			},
			yAxis: {
				min: 0,
				title: {
					text: 'millones de Dolares',
					align: 'high'
				},
				labels: {
					overflow: 'justify'
				}
			},
			tooltip: {
				valueSuffix: ' milliones $'
			},
			plotOptions: {
				bar: {
					dataLabels: {
						enabled: true
					}
				}
			},
			legend: {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'top',
				x: -40,
				y: 80,
				floating: true,
				borderWidth: 1,
				backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
				shadow: true
			},
			credits: {
				enabled: false
			},
			series: [{
				name: 'Importaciones',
				data: [<?php echo $importCifra ;?>]
			}]
		});
	}
	
	function evolProductoInternoBruto(){
		var chart = Highcharts.chart('evol_pib', {
			title: {
				text: 'Evolución del PIB, Sector Transporte y Almacenamiento'
			},

			subtitle: {
				text: 'Cifras anuales en millardos de Bs a precios de 1997'
			},
			 yAxis: {
						title: {
							text: 'Millones Bs'
						}
					},
			xAxis: {
				categories: [<?php echo $pib_fecha;?>]
			},

			series: [{
				type: 'line',
				 name: 'PIB ',
				colorByPoint: true,
				data: [<?php echo $pib_cifra;?>],
				showInLegend: false
			}]

		});
	}
	
	function movimientosPortuarios(){
		$('#mov_port').highcharts({
			chart: {
				type: 'column',
				options3d: {
					enabled: true,
					alpha: 10,
					beta: 25,
					depth: 70
				}
			},
			title: {
				text: 'Movimiento Portuario 1998-2014'
			},
			 yAxis: {
				title: {
					text: 'miles TEUs'
				},
				labels: {
					formatter: function () {
						return this.value;
					}
				}
			},
			xAxis: {
				categories: [<?php echo $fech_mov;?>]
			},
			credits: {
				enabled: false
			},
			series: [{
				name: 'TEUs',
				data: [<?php echo $teus;?>]
			}]
		});
	}
</script>