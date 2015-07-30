

<?php
 // $name = $_POST['name'];
 // $visitor_email = $_POST['email'];
  //$message = $_POST['message'];

?>

<!DOCTYPE html>
<link href="cssshop.css" rel="stylesheet">
<head>
<style>
ul {
   
    float: center;
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
<h1><img src="Logo.png"</h1>




</header>

<body>

<ul>
 <li><a href="index.php">Home</a></li>
<li><a href="#">Forum</a></li>
<li><a href="basicInfo.html">Browse</a></li>
<li><a href="Support.html">Support</a></li>  
<li><a href="#">Shop</a></li>
<li><a href="#">Profile</a></li>   
</ul>
 
<div id="form">
    <div id="List">
    Email:(User@someone.com)<br><br>
     Package:<br><br>
    Number of Travelers:(Numerical value)<br><br>
    Hotels:<br><br>
    Number of Rooms:(Numerical value)<br><br>
    Flight Class:<br><br>
     Destination:<br> <br>
    Departure Date:(073015)<br><br>
    Return Date:(073015)<br>
    </div>
<form method="post" name"myemailform" action="form-to-email.php">
    
    
<input type="text" name="email">
<br>
<br>
      
 <select single="single" name="message" id="package">
<option>Diamond</option>
<option>Bronze</option>
<option>Silver</option>
<option>Gold</option>
     
</select>       
 <br><br>     
 
<input type="text" name="Travelers" id="travel">
<br><br> 
        
 <select single="single" name="hotels">
<option>Hilton</option>
<option>Marriot</option>
<option>Sheraton</option>
<option>West Gate</option>
</select>       
 <br> <br>

<input type="text" name="Rooms" id="room">
<br><br> 

<input checked="checked" name="class" id="class1" type="radio" value="First" />First Class
<input name="class" id="class" type="radio" value="economy" />Economy
<br><br>
        
       
 <select single="single" name="name">
<option>Paris,France</option>
<option>Rome,Italy</option>
<option>Kauai,New York</option>
<option>Naples,Florida</option>
</select>       
 <br><br>
 
<input type="text" name="Ddate" id="d">
<br><br>  
 
<input type="text" name="Rdate" id="R">
<br><br>
<p><input type="button" id="P" value="Calculate Price" &nbsp/></p>
<p id="sub"><input type="submit" value="Send Form"></p>
        
    </form>
    
   <p id="resultC"></p>
    
    <script src="Price.js"></script>  
    
</div>
  
    
    <h1><img src="Ban.png"</h1>
   
</body>


<footer>
    <div id="banner"></div>
<p id="foot2">Reviews and advice on hotels, resorts, flights, vacation rentals, travel<br>
    packages, and more so you can plan and book your perfect trip!
    </p>  
    <h2><img src="Tiny.png"</h2>
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

