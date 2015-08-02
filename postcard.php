<?php
require_once "php/db_connect.php";
require_once "php/functions.php";

if(isset($_POST['name']) && isset($_POST['title']) && isset($_POST['text']))
{    
    $name = sanitizeString($db, $_POST['name']);
    $title = sanitizeString($db, $_POST['title']);
    $text = sanitizeString($db, $_POST['text']);
    
    $time = $_SERVER['REQUEST_TIME'];
	$file_name = $time . '.jpg';

    if ($_FILES)
    {
        $tmp_name = $_FILES['upload']['name'];
        $dstFolder = 'users';
        move_uploaded_file($_FILES['upload']['tmp_name'], $dstFolder . DIRECTORY_SEPARATOR . $file_name);
        //echo "Uploaded image '$file_name'<br /><img src='$dstFolder/$file_name'/>";
    }

    SavePostToDB($db, $name, $title, $text, $time, $file_name);
}
?>
<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link href="css/cssshop.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
    
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<title>Pegasus Forum</title>

     <div class="container3">
        <?php echo getPostcards($db); ?>
    </div>
    
    
    
  

  
    
    <h1><img src="Images/Ban.png"</h1>
   
</body>

<?php $db->close(); ?>
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




