<?php include('sys/header.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View</title>
    <style>
      
  button{

    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    display: block;
    margin-top: 5%;
  }

  ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }
  
  ul.topnav li {float: left;}
  
  ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 200%;
  }

  img {
    display: block;
    height:50%;
    width:50%;
  }
  
  ul.topnav li a:hover:not(.active) {background-color: #111;}
  
  ul.topnav li a.active {background-color: #04AA6D;}
  
  ul.topnav li.right {float: right;}
    </style>
  </head>
  <body>
  <ul class="topnav">
  <li><a href="register.php"><img src="logo.png" alt=""></a></li>
  <li><a href="">Schedule</a></li>
  <li class="right"><a href="">About</a></li>
</ul>
    <center>
    <h1> Hello! </h1>
    <button> <a href="viewbreakdown.php">View breakdown</a><br></button>
    <button><a href="breakdown.php">Add breakdown</a></button>
  </center>
    
    
  </body>
</html>
<?php include('sys/footer.php'); ?>

