<?php
require_once "php/db_connect.php";
require_once "php/functions.php";
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])=="")
{
	header("Location: postcard.php");
}


?>
<!DOCTYPE html>
<link href="css/cssshop.css" rel="stylesheet">
<head>
<style>
ul {
   
    float:center;
    padding: 10px;
  text-align: center;
    list-style-type: none;
}

a {
    text-align: center;
    width: 6em;
    text-decoration: none;
    color: black;
    background-color: yellow;
    padding:10px;
    border-right: 1px solid black;

}

a:hover {
    background-color: skyblue;
}

li {
    display: inline;
    padding-right: 20px;
}
</style>





</head>
<header>
<h1><img src="Images/Logo.png"</h1>




</header>

<body>

<ul>
 <li><a href="index.php">Home</a></li>
<li><a href="test.php">Forum</a></li>
<li><a href="basicInfo.html">Browse</a></li>
<li><a href="Support.html">Support</a></li>  
<li><a href="shop.php">Shop</a></li>
<li><a href="#">Profile</a></li>
<li><a href="logout.php?logout">Log out/in</a></li> 
</ul>
    


      <p > <body onload="initialize();">
<div class="back">
	<div class="container">    
		<div class="row">
			<div id="formParent" class="col-md-6 col-md-offset-3">
				<form id="form" class="form-horizontal" method="POST" action="postcard.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="control-label col-xs-1">Name</label>
                        <div class="col-xs-11">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-user fa-fw"></span></span>
                                <input type="text" class="form-control" id="name" name="name" 
                            maxlength="20" size="20" value="" required placeholder="Johnny" autofocus>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="title" class="control-label col-xs-1">Title</label>
                        <div class="col-xs-11">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-header fa-fw"></span></span>
                                <input type="text" class="form-control" id="title" name="title" 
                            maxlength="20" size="20" value="" required placeholder="Summer Vacation" autofocus>
                            </div>
                        </div>
                    </div>
                      
                    <div class="form-group">
                        <label for="text" class="control-label col-xs-1">Text</label>
                        <div class="col-xs-11">
                            <textarea class="form-control" id="text" name="text" maxlength="140" placeholder="140 characters" required></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="sr-only" for="image">Original Image</label>
                        <img id="image" name="image" src="/" width="100%">
                        <input type="file" id="upload" name="upload" accept="image/*">
                    </div>
                    
                    <!--
                               
                    -->
        
                    <input type="submit" value="Post to forum!" class="btn btn-primary col-md-offset-1">
                    <input type="button" id="resetForm" value="View forums" class="btn btn-default" onclick="myFunction()">
				</form>
			</div>
		</div>
	</div>

	<!-- JavaScript placed at bottom for faster page loadtimes. -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
<script src="functions.js"></script>
	
 </p>
    
    
    
  

  
    
    <h1><img src="Images/Ban.png"</h1>
   
</body>


<footer>
    <div id="banner"></div>
<p id="foot2">Reviews and advice on hotels, resorts, flights, vacation rentals, travel<br>
    packages, and more so you can plan and book your perfect trip!
    </p>  
    <h2><img src="Images/Tiny.png"</h2>
  <p id="foot">© 2015 PEGASUS  rights reserved. Expedia Terms of Use and Privacy Policy.<br>
*PEGASUS  LLC is not a booking agent and does not charge any service fees to users of our site... (more)<br>
PEGASUS LLC is not responsible for content on external web sites. Taxes, fees not included for deals content.</p>  
    
    
    
    
    </footer>





 </body>
        
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>








</html>




