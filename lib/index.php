 <?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	include('session.php');
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIBRARY</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="css/bootstrap.css" type="text/css"  />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<script type="text/javascript" src="http:code.jquery.com/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
     $("#myCarousel").carousel({
         interval : 5000,
         pause: false
     });
});
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_top">
   		<div id="templatemo_search">
    </div>
</div> 
    
    <div id="templatemo_header">
         <img src="./images/logo.png" alt="Library logo" width="375" height="120" style="margin-top: -26px;" />
      <div id="site_title"></div>
      <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="website.html">Website</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login1.php">Login</a></li>
             
           </ul>
           
            <br style="clear: left !important" />
            
            <div class="loger" class=" ddsmoothmenu" style="positon:relative; float:right !important; margin-right:10px; ">
          <ul> <li><a id="logout_a" href="logout.php"  > Logout</a> </li></ul>
          </div>
          
             <div class="loger" class=" seddsmoothmenu" style="float:right !important; margin-right:30px; margin-top:7px; ">
            <label id="welcome" class="jobtitle" > Welcome:  </label>
         <label id="logout_id" class="jobtitle"  ><h4 style="positon:relative; float:right !important;">&nbsp; <?PHP if($_SESSION['username']){ echo $_SESSION['username'];} else { echo "Guest"; } ?> </h4> </label>
         </div>
         
          
          
               
            
      </div> <!-- end of menu -->
  </div> <!-- end of header -->
    
     
              
   
	<div id="templatemo_middle">
         <iframe src="carousel.html" width="960" height="450" scrolling="no"  frameborder="0">
         </iframe>   
   </div><!-- end of middle -->        
            
        	<div class="cleaner"></div>
        </div> <!-- end of main -->
    </div> <!-- end of main wrapper -->
    
  
</div> <!-- end of wrapper -->

<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright © 2014  <a href="http://www.templatemo.com" target="_parent">THE GOAN LIBRARY </a>
    </div>
</div>

</body>
</html>

