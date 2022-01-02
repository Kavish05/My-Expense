<?php
session_start();
$name= $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="eng">
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="../CSS/homepage.css">
		<link rel="stylesheet" type="text/css" href="../CSS/nav.css">
		<script src="//code.jquery.com/jquery-1.9.1.js"></script>
  		<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
		  
		<style> 
		body {
			background: #222831;
			}

		</style>
	</head>
	<body>
	<!------------Navigation Bar---------->
		<header id= "Nav">
			<a href="index.html" class="logo"><img class="logo" src= "image/logowhite.png" alt="logo" style = "width:90px; height:30px"></a>
			<ul>
				<li><a href="../homepage.php#">Home</a></li>
				<li><a href="../homepage.php#transaction">Add Transaction</a></li>
				<!--li><a href="#contact">Contact Us</a></li-->
				<li><a href="#"> <?php  echo $_SESSION['username']; ?></a></li>
				<li><a href="signin.html">Log Out</a></li>
			</ul>
		</header>

		<section class="banner"></section>
		<script type="text/javascript">
			window.addEventListener("scroll", function(){
				var header = document.querySelector("header");
				header.classList.toggle("sticky",window.scrollY > 0);
				})
		</script>

	<!------------Main---------->	

		<div id="uname">
            <div class="row">
                
                    <h4 class="section-title">Hello, <?php  echo $_SESSION['username']; ?> your transaction(s) are listed below</h4>
       
            </div>
            
			<?php
				
				include("getData.php");
				include("dbconnect.php");
				$result = mysqli_query($conn,"SELECT * FROM transaction WHERE username= '$name' ORDER BY date ASC");
			
				if (mysqli_num_rows($result) > 0) {
				// output data of each row
					echo "<table border=1 align='center'>";
					echo "<tr>
		             	<th>Username</th>
		             	<th>Date</th>
		             	<th>Amount</th>
		             	<th>Description</th>
		             	<th>Category</th>";
					while($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo 
						   "<td>".$row['username']."</td>
							<td>".$row['date']."</td>
							<td>".$row['amount']."</td>
							<td>".$row['description']."</td>
							<td>".$row['category']."</td>";
					}
					echo "</table>";
				} else {
					echo "<h3 align='center'>No Results</h3>";
				}
				mysqli_close($conn);
			
				?>

		<div style="width:50%;height:20%;text-align:center">
            <h4 class="section-title" color= rgba(0,0,0,0.5)> Chart </h4>
        </div> 
		<div class = "chart-container chartjs_pie">
		<canvas  id="chartjs_pie"></canvas> 
		</div>
		</div>
    <script type="text/javascript"> 
      var ctx = document.getElementById("chartjs_pie").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels:<?php echo json_encode($category); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($amount); ?>,
                        }]
                    },
                    options: {
                        legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 20,
                        }
                    },
 
 
                }
                });
    </script>
	</body>
</html>