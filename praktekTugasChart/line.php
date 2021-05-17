<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"select * from tb_covid");
while($row = mysqli_fetch_array($query)){
	$negara[] = $row['negara'];
	$total = $row['total'];
	$new[] = $row['new'];
	$death[] = $row['death'];
	$newd[] = $row['newd'];
	$recover[] = $row['recover'];
	$active[] = $row['active'];
}
?>

<html>
<head>
	<title>Line Chart 10 Negara</title>
	<script type="text/javascript" src="Chart.js"></script> 
</head>
<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas> 
	</div>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line', 
			data: {
				labels: <?php echo json_encode($negara); ?>,
				datasets: [ 
				{
					label: 'Total Kasus',
					
					fill: false, 
					data: <?php echo json_encode($total); ?>,
					backgroundColor: 'rgba(171, 54, 35, 1)', 
					borderColor: 'rgba(255,99,132,1)', 
					borderWidth: 1
				},
				{
					label: 'Kasus Baru',
					
					fill: false, 
					data: <?php echo json_encode($new); ?>,
					backgroundColor: 'rgba(235, 99, 132, 1)', 
					borderColor: 'rgba(255,91,132,1)', 
					borderWidth: 1
				},
				{
					label: 'Total kematian',
					fill: false,
					data: <?php echo json_encode($death); ?>,
					backgroundColor: 'rgba(65, 135, 245, 1)',
					borderColor: 'rgba(66, 155, 245,1)',
					borderWidth: 1
				},
				{
					label: 'Kematian Baru',
					fill: false,
					data: <?php echo json_encode($newd); ?>,
					backgroundColor: 'rgba(249, 152, 35, 1)',
					borderColor: 'rgba(247, 132, 35,1)',
					borderWidth: 1
				},
				{
					label: 'Total Sembuh',
					fill: false,
					data: <?php echo json_encode($recover); ?>,
					backgroundColor: 'rgba(133, 295, 29, 1)',
					borderColor: 'rgba(133, 245, 89,1)',
					borderWidth: 1
				},
				{
					label: 'Total Active',
					fill: false,
					data: <?php echo json_encode($active); ?>,
					backgroundColor: 'rgba(133, 295, 29, 1)',
					borderColor: 'rgba(133, 245, 89,1)',
					borderWidth: 1
				},
				
				]
			},
			options: {
			
				elements: {
			        line: {
			            tension: 0
			        }
			    },
				legend: {
					display: true
				},
				barValueSpacing: 20,
				scales: {
					yAxes: [{
						ticks: {
						
							min: 0,
						}
					}],
					xAxes: [{
						gridLines: {
							
							color: "rgba(0, 0, 0, 0)",
						}
					}]
				}
			}
		});
	</script>
</body>
</html>