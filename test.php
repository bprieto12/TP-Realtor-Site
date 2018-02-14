<!DOCTYPE html>
<html>
<head>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="stylesheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
 <div class="header">
  <div class="container">
   
    <ul class="menu left">
      <li><a href="#">Learn More</a></li>
      <li><a href="#">Places to Go</a></li>
    </ul>
    
    <img src="http://wpcontent.answcdn.com/wikipedia/commons/thumb/c/c1/Penrose-dreieck.svg/192px-Penrose-dreieck.svg.png">
    
    <ul class="menu right">
      <li><a href="#">Tutorials</a></li>
      <li class="dropdown">
         <a href="#" class="dropdown-toggle">More <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">My Blog</a></li>
          <li><a href="#">Advertisers</a></li>
          <li><a href="#">Comments</a></li>
        </ul>
      </li>
    </ul>
  </div>
 </div>
 
 <div class="left_page">
   <h1>f</h1>
 </div>
 
 <div class="center_page">
   <div class="calculator">
    <div class="screen">
      <p>Hello!</p>
    </div>
   </div>
 </div>
 
 <form>
  Password: <input type="password" name="pwd">
  <?php
    if($_GET["pwd"] == "hello")
    {
      for($i = 0;$i < 3; $i++){
        echo "<p>Yay!!!!!!</p> <br />";
      }
    }
    else
    {
      echo "<p>OH NO!!!!</p>";
    }
  ?>
 </form>
</body>
</html>