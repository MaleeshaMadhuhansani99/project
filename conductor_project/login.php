<?php include('sys/header.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
<style>

body {
    background-image: url("https://www.busboss.com/hubfs/shutterstock_341516156.jpg");
}

* {
  box-sizing: border-box;
}
img {
    display: block;
    height:50%;
    width:50%;
  }
a{
    font-size: 200%;
}
h1{
    font-size: 520%;
    color: black;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #111;
  padding: 20px;
  width: 50%;
  color: white;
  
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
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
  }
  
  ul.topnav li a:hover:not(.active) {background-color: #111;}
  
  ul.topnav li a.active {background-color: #04AA6D;}
  
  ul.topnav li.right {float: right;}


@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<ul class="topnav">
  <li><a href="register.php"><img src="logo.png" alt=""></a></li>
  <li><a href="">Schedule</a></li>
  <li class="right"><a href="">About</a></li>
</ul>
<center>
<h1>Login </h2>

<div class="container">
<form action="validate.php" method="post">
  <div class="row">
    <div class="col-25">
      <label for="username">Enter username</label>
    </div>
    <div class="col-75">
      <input type="text" id="username ">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="username">Enter Password</label>
    </div>
    <div class="col-75">
      <input type="text" id="username" >
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </div>
  </form>
</div>
</center>

</body>
</html>

<?php include('sys/footer.php'); ?>