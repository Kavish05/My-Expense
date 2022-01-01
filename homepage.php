<?php
session_start();
$name= $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="eng">
	<head>
		<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="CSS/homepage.css">
		<link rel="stylesheet" type="text/css" href="CSS/nav.css">
		<link rel="stylesheet" type="text/css" href="CSS/footer2.css">

		<style> 
		body {
			background: #222831;
			}
				
				* {box-sizing: border-box;}
		

			</style>

			<script>
				function openForm() {
				  document.getElementById("myForm").style.display = "block";
				}

				function closeForm() {
				  document.getElementById("myForm").style.display = "none";
				}
			</script>

	</head>
	<body>
	<!------------Navigation Bar---------->
		<header id= "Nav">
			<a href="index.html" class="logo"><img class="logo" src= "image/logowhite.png" alt="logo" style = "width:90px; height:30px"></a>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#transaction">Add Transaction</a></li>
				<li><a href="profile.php"> <?php  echo $_SESSION['username']; ?></a></li>
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
		<div id="main">
			<div class="heading">
	            <h1 id="mainheading">MY-Expense</h1>
				<h4 id="subheading">Take control of your finance and wallet.</br></h4>
				<h4 id="subheading">Welcome back <?php  echo $_SESSION['username']; ?></br></h4>
        	</div>
 
		</div>
		<p>

	<!------------Transaction---------->
		<div id="transaction">
			<p> Click on the button to add either an <span id="income">income</span> or an <span id="expenditure">expediture</span></p>
		
				<button class="transac_button" onclick="openForm()">Add Transaction</button>

				<div class="form-popUp" id="myForm">
					<form action="addtransaction.php" method="POST" class="form-Container">
					    <h1>Add Transaction</h1>
					    
					    <label for=""><b>Select category</b></label> <br>
	                    <input type="radio" name="transaction" value="income" required/> Income<br>
	                    <input type="radio" name="transaction" value="expense" required/> Expense<p>

					    <label for="email"><b>Amount</b></label><br>
					    <input type="text" placeholder="Enter the Amount" name="amount" required><p>

					    <label for="date"><b>Date</b></label><br>
					    <input type="date" placeholder="Enter the date" name="date" required><p>
					    
					    <label for="desc"><b>Description</b></label><br>
					    <input type="text" placeholder="Enter description" name="desc" required><p>

					    <!--label for="uname"><b>Username</b></label><br>
					    <input type="text" placeholder="Please enter your username" name="username" required-->

					    <button type="submit" class="btn" name="save_radio" >Save</button>
					    <button type="reset" class="btn cancel" onclick="closeForm()">Close</button>
				  	</form>
				</div>
		</div>
		<p>
	<!------------Footer---------->	
		<footer id="footer">
			<div class="leftgrid">	
			    
					<p style="text-align:center"><a href="mailto:my.expenses05@gmail.com">my.expenses05@gmail.com</a></p>
					<p style="text-align:center" class="copyright"> © <span id="year">2021</span> <span>MY-Expense</span>. All Rights Reserved</p>
					<p  style="text-align:center">Design by Kavish Goorapah</p>
			</div>	
			<p>	

		</footer>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>	
	</body>
</html>