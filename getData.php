<?php
   $servername = "fdb31.runhosting.com";
   $username = "4016712_expense"; //username of user
   $password = "expense02"; //password of above user
   $db = "4016712_expense";
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $db);

   // Check connection
   if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
   }
   //echo "Connected successfully !";
   else{
   $sql ="SELECT category,amount FROM transaction WHERE username= '$name' GROUP BY category";
   $result = mysqli_query($conn,$sql);
   $chart_data="";
   while ($row = mysqli_fetch_assoc($result)) { 

   $amount[]  = $row['amount'];
   $category[] = $row['category'];
   }
 
 
   }
 
 
?>