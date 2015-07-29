<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$travel=$_POST['Travelers'];
$hotel=$_POST['hotels'];
$room=$_POST['Rooms'];
$ddate=$_POST['Ddate'];
$rdate=$_POST['Rdate'];
$email_from = 'samaroo.stefan1@gmail.com';
 
$email_subject = "New Form submission";
 
$email_body = "You have received Confirmnation of Your Travel Plan\n You have chosen to your to $name. What a wonderful choice!Here is what we have as your travel plans go\n Package:$message \n Number of Travelers:$travel \n You will be staying at the:$hotel \n Total Rooms:$room \n  Your departure date will be from:$ddate and you will return on: $rdate\n Once your payment has been authorized you will recieve a full itinerary with your Tickets as well as your next step of booking. \n Thank you for chooseing Pegasus E-Travel\n".
                           
    $to = "samaroo.stefan1@gmail.com, <$visitor_email>";

$headers = "From: $email_from \r\n";
 
$headers .= "Reply-To: $visitor_email \r\n";
 
$headers .= "Cc: someone@domain.com \r\n";
 
$headers .= "Bcc: someoneelse@domain.com \r\n";
 
mail($to,$email_subject,$email_body,$headers);


?>
<!DOCTYPE html>
<link href="cssshop.css" rel="stylesheet">
<head>
<style>
ul {
   
    width:1850px;
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
 <li><a href="#">Home</a></li>
<li><a href="#">Forum</a></li>
<li><a href="#">Browse</a></li>
<li><a href="#">Support</a></li>  
<li><a href="#">Shop</a></li>
<li><a href="#">Profile</a></li>   
</ul>
     <p id="foot"> <select multiple="multiple" name="message">
<option>Cancun Crawl</option>
<option>Bahama Mama</option>
<option>Mumbai Prince</option>
<option>Bejing Hike</option>
</select>    </p> 
<div id="form">

    
</div>
  
    
    <h1><img src="Ban.png"</h1>
   
</body>


<footer>
    <div id="banner"></div>
<p id="ft">Reviews and advice on hotels, resorts, flights, vacation rentals, travel<br>
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




