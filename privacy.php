<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/index.css">
<title>Privecy Statement</title>

<!--  
 <style>  
 /*transperant animation starts here */  
 div#topcontent
{
    width: 1138px;
	height: 448px;
    background:        url(../image/banner1.jpg) no-repeat;
    position:relative;
	border:1px solid #CCC;
  
	
    /* Chrome, Safari, Opera */
    -webkit-animation-name: myfirst;
    -webkit-animation-duration: 10s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-delay: 2s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: alternate;
    -webkit-animation-play-state: running;
    /* Standard syntax */
	
    animation-name: myfirst;
    animation-duration: 10s;
    animation-timing-function: linear;
    animation-delay: 2s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-play-state: running;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes myfirst {
    0%   {background:url(../image/banner1.jpg) no-repeat; left:0px; top:0px;}
    20%  {background:url(../image/banner1.jpg) no-repeat;  left:0px; top:0px;}
    40%  {background:url(../image/room1.jpg) no-repeat;  left:0px; top:0px;}
    60%  {background:url(../image/room1.jpg) no-repeat; left:0px; top:0px;}
    80%  {background:url(../image/banner2.jpg) no-repeat;  left:0px; top:0px;}
    100% {background:url(../image/banner2.jpg) no-repeat;  left:0px; top:0px;}
}

/* Standard syntax */
@keyframes myfirst {
    0%   {background:url(../image/banner1.jpg) no-repeat; left:0px; top:0px;}
    20%  {background:url(../image/banner1.jpg) no-repeat;  left:0px; top:0px;}
    40%  {background:url(../image/room1.jpg) no-repeat;  left:0px; top:0px;}
    60%  {background:url(../image/room1.jpg) no-repeat; left:0px; top:0px;}
    80%  {background:url(../image/banner2.jpg) no-repeat;  left:0px; top:0px;}
    100% {background:url(../image/banner2.jpg) no-repeat;  left:0px; top:0px;}
}

</style>
<!--transperant animation ends here-->

<!--googleMap starts here-->
 <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(23.352342,90.450439453125);

function initialize()
{
var mapProp = {
  center: myCenter,
  "scrollwheel": false,
  zoom:7,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("faqgoogle"),mapProp);

var marker = new google.maps.Marker({
   position: new google.maps.LatLng(21.5833,92.0167) ,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

var marker = new google.maps.Marker({
  position: new google.maps.LatLng(24.8978,91.8714) ,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);

var marker = new google.maps.Marker({
  position: new google.maps.LatLng(22.3667,91.8000) ,
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
var marker = new google.maps.Marker({
	position: new google.maps.LatLng(23.70,90.371),
  title:'Click to zoom',
  animation:google.maps.Animation.BOUNCE
  });

marker.setMap(map);
// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(8);
  map.setCenter(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!--googleMap ends here-->

</head>

<body>
<!-- wrap=whole body containing div--->
<div id="wrap">
<!--header=tophead(lefthead(img)+righthead(topheadmenu))+middlehead(headline+marquee)+bottomhead(mainmenu) --->

<div id="header1"> 
  
  <!-- tophead starts here -->
  <div id="tophead">
    <div id="lefthead">
      <div id="logodiv"> <img id="logo"title="Best hotel reservation service in Bangladesh"src="../image/logo.PNG" alt=""> </div>
      <!--logodiv ends here--> 
    </div>
    <!-- lefthead ends here -->
    <div id="righthead">
      <div id="menudiv">
        <ul id="topheadmenu">
          <li class="topheadlist"><a href="my booking.php">My Booking</a></li>
          <li class="topheadlist"><a href="sign in.php">Sign In</a></li>
          <li class="topheadlist"><a href="sign out.php">Sign Out</a></li>
        </ul>
      </div>
      <!--menudiv ends here--> 
    </div>
    <!-- righthead ends here --> 
  </div>
  <!---tophead ends here --> 
</div>
<!-- header1 ends here -->

<div id="header2">
  <div id="head2">
    <marquee id="marquee">
    <h1 id="marqp"><strong>Booking.com</strong></h1>
    </marquee>
  </div>
</div>
<!--header2 ends here-->

<div id="header3">
  <div id="head3">
    <div class="mainlist">
      <h3 class="mylist"><a href="../index.html">HOME</a></h3>
    </div>
    <div class="mainlist">
      <h3 class="mylist"><a href="dhaka.php">DHAKA</a></h3>
    </div>
    <div class="mainlist">
      <h3 class="mylist"><a href="chittagong.php">CHITTAGONG</a></h3>
    </div>
    <div class="mainlist">
      <h3 class="mylist"><a href="sylhet.php">SYLHET</a></h3>
    </div>
    <div class="mainlist">
      <h3 class="mylist"><a href="cox's bazar.php">COX'S BAZAR</a></h3>
    </div>
    
    <div class="mainlist">
      <h3 class="mylist"><a href="contact.php">CONTACT</a></h3>
    </div>
  </div>
</div>
<!--header3 ends here--> 

<!--content= (topcontent(contentsearch(topsearch)) + bottomcontent(leftcontent+rightcontent))starts here-->
<div id="FAQcontent" style="height:350px;">
  
    <div id="faqhead" style="float:left; width:40%; margin-left:150px; margin-top:120px;">
      <h2 style="color:red;font-weight:lighter;font-family:Arial, Helvetica, sans-serif;" >This Page is under Processing</h2>
    </div>
    <div id="faqimg" style="float:right;width:41%; background:url(../image/contact.jpg) no-repeat;height:350px;">   </div>
  
  </div>
     <div id="faqgoogle" style="width:1138px; height:200px;margin:auto; margin-bottom:50px;border:2px solid #CCC;
     								padding:5px;">
  </div>
  <!--content ends here--> 

  

</div>
<!-- wrap ends here -->

</body>
</html>
