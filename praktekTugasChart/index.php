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
	<title>Bar Chart Menggunakan Chartjs</title>
	<script type="text/javascript" src="Chart.js"></script>  
</head>
<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas> 
	</div>
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, { 
			type: 'bar',
			data: {
				labels: <?php echo json_encode($negara); ?>, 
				datasets: [{
					label: 'total kasus',
					data: <?php echo json_encode($total); ?>, 
					backgroundColor: 'rgba(252, 99, 132, 0.2)', 
					borderColor: 'rgba(211,99,132,1)', 
					borderWidth: 1 
				
				},

					{
					label: 'kasus baru',
					data: <?php echo json_encode($new); ?>, 
					backgroundColor: 'rgba(255, 99, 132, 0.7)', 
					borderColor: 'rgba(255,19,152,7)', 
					borderWidth: 1 
				
				},

					{
					label: 'Total Kematian',
					data: <?php echo json_encode($death); ?>, 
					backgroundColor: 'rgba(275, 69, 192, 1)', 
					borderColor: 'rgba(295,19,132,1)', 
					borderWidth: 1 
				
				},

					{
					label: 'kematian baru',
					data: <?php echo json_encode($newd); ?>, 
					backgroundColor: 'rgba(255, 49, 14, 11)', 
					borderColor: 'rgba(255,99,132,1)', 
					borderWidth: 1 
				
				},

					{
					label: 'Total sembuh',
					data: <?php echo json_encode($recover); ?>, 
					backgroundColor: 'rgba(115, 91, 112, 2)', 
					borderColor: 'rgba(255,99,132,1)', 
					borderWidth: 1 
				
				},

				{
					label: 'Total active',
					data: <?php echo json_encode($active); ?>, 
					backgroundColor: 'rgba(115, 91, 112, 2)', 
					borderColor: 'rgba(255,99,132,1)', 
					borderWidth: 1 

				},
				
				]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>