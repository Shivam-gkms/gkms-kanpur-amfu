
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="../css/grandorient.css">
 <link rel="stylesheet" href="../css/index.css">
 
	 <title>Hotel the westin,Dhaka</title>
     
     
  <style>  
 /*transperant animation starts here */  
 div#himage
{
    
	height: 448px;
    background:        url(../image/westin1.jpg) no-repeat;
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
    0%   {background:url(../image/westin1.jpg) no-repeat; left:0px; top:0px;}
    20%  {background:url(../image/westin1.jpg) no-repeat;  left:0px; top:0px;}
    40%  {background:url(../image/westin2.jpg) no-repeat;  left:0px; top:0px;}
    60%  {background:url(../image/westin2.jpg) no-repeat; left:0px; top:0px;}
    80%  {background:url(../image/westin3.jpg) no-repeat;  left:0px; top:0px;}
    100% {background:url(../image/westin3.jpg) no-repeat;  left:0px; top:0px;}
}

/* Standard syntax */
@keyframes myfirst {
     0%   {background:url(../image/westin1.jpg) no-repeat; left:0px; top:0px;}
    20%  {background:url(../image/westin1.jpg) no-repeat;  left:0px; top:0px;}
    40%  {background:url(../image/westin2.jpg) no-repeat;  left:0px; top:0px;}
    60%  {background:url(../image/westin2.jpg) no-repeat; left:0px; top:0px;}
    80%  {background:url(../image/westin3.jpg) no-repeat;  left:0px; top:0px;}
    100% {background:url(../image/westin3.jpg) no-repeat;  left:0px; top:0px;}
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

var map = new google.maps.Map(document.getElementById("mainmap"),mapProp);

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
    <div id="logodiv">
    <img id="logo"title="Best hotel reservation service in Bangladesh"src="../image/logo.PNG" alt="">
    </div> <!--logodiv ends here-->
    </div>  <!-- lefthead ends here -->   
    <div id="righthead">
    <div id="menudiv">
		<ul id="topheadmenu">
			  <li class="topheadlist"><a href="my booking.php">My Booking</a></li>
			  <li class="topheadlist"><a href="sign in.php">Sign In</a></li>
			  <li class="topheadlist"><a href="sign out.php">Sign Out</a></li>
			</ul>
         
        </div> <!--menudiv ends here-->    
       </div>  <!-- righthead ends here -->  
       </div>  <!---tophead ends here -->
      </div>  <!-- header1 ends here -->   
       
       
    <div id="header2">     
      <div id="head2"> 
        <marquee id="marquee">
         <h1 id="marqp"><strong>Booking.com</strong></h1>
       </marquee>
      </div>   
   
       </div>   <!--header2 ends here-->


         
     <div id="header3">
          <div id="head3">
      
               <div class="mainlist">     <h3 class="mylist"><a href="../index.html">HOME</a></h3>      </div>
          
              <div class="mainlist">    <h3 class="mylist"><a href="dhaka.php">DHAKA</a></h3>        </div>
              <div class="mainlist">   <h3 class="mylist"><a href="chittagong.php">CHITTAGONG</a></h3>   </div>
             <div class="mainlist">     <h3 class="mylist"><a href="sylhet.php">SYLHET</a></h3>       </div>
             <div class="mainlist">     <h3 class="mylist"><a href="cox's bazar.php">COX'S BAZAR</a></h3>      </div>
         
             <div class="mainlist">     <h3 class="mylist"><a href="contact.php">CONTACT</a></h3>      </div>
              
                
         </div>
       </div>  <!--header3 ends here-->    
 
    
    
 
 
 

 
 
 <!--content= (topcontent(contentsearch(topsearch)) + bottomcontent(leftcontent+rightcontent))starts here-->
 <div id="gcontent">
     
    <div id="topcontent"> <!--topcontent contains background image-->
       <div id="lefttopcon">
       <div id="lefttopcondiv">
    <div id="contentsearch"> <!--contentsearch=topsearch(leftsearch+rightsearch)+bottomsearch(leftsearch+rightsearch)-->
    <div id="topsearch">
    <div id="leftsearch">
      <img id="imgsearch"src="../image/search.PNG" alt="">
    </div> <!--leftsearch ends here-->
    <div id="rightsearch">
            <h2 id="searchline">Search</h2>

   </div> <!--rightsearch ends here-->
   </div> <!--topsearch ends here-->
   <div id="bottomsearch">
    <form action="contact.php" method="get">
    <ul id="searchlist">
      <li id="location">
        <label for="location">Location :</label>
        <select name="location">
          <option value="allhotels">All Hotels</option>
          <option value="dhaka">Dhaka</option>
          <option value="chittagong">Chittagong</option>
          <option value="sylhet">Sylhet</option>
          
        </select>   
      </li>
      
      <li>
       <label for="checkIn">Check  In  :</label>
       <select name="indate">
          <option value="Day">Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
         
        <select name="inmonth">
          <option value="Month">Month</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
        </select> 
        
       <select name="inyear">
          <option value="Year">Year</option>
          
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
       </select>   

      </li>
      <li>
        <label for="checkOut">Check Out:</label>
        <select name="outdate">
          <option value="Day">Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
          <option value="16">16</option>
        </select>
         
         
        <select name="outmonth">
          <option value="Month">Month</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
       </select> 
        
       <select name="outyear">
          <option value="Year">Year</option>
          
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
       </select> 
      </li> 
          
      
      <li>
        <input type="checkbox"name="checkdate" id="checkdate" />
        <label for="checkdate">I'll select dates later</label>
      </li>
      
      <li>
      <label for="Rooms">Room(s):</label>
        <select name="rooms">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
       </select> 
  </li>
  <li>
       <label for="Adults">Adult(s) :</label>
        <select name="Adults">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
       </select>   
      
         
      
      </li>
      <li>
      <label for="Children">Children :</label>
        <select name="rooms">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
      </select>   
       </li>
       <li id="submitlist">
         <input type="submit" value="FIND HOTELS" id="submitbutton" />
       </li>
      
    </ul>
    </form>
   </div> <!--bottomsearch ends here-->
    </div> <!--contentsearch ends here-->
    </div> <!--lefttopcondiv edns here-->
    </div>  <!--lefttopcon ends here-->
    <div id="righttopcon">
    <div id="righttopcondiv">
    <div id="grightusable">
            <div class="eachpopular">
        <div class="gthreepopular">
        <div class="imgpopular">
        <div class ="imgpopulardiv">
        <img class="popimg" src="../image/hotel westin.gif" alt=""/>
        </div> <!--imgpopulardiv ends here-->
        </div> <!--imgpopular ends here-->
        <div class="contentpopular">
        <h5 class="popularheadline">HOTEL THE WESTIN DHAKA</h5>
        <p class="popularp"> <em class="adrs">Gulshan-2, Dhaka-1212</em> <em class="emp"> 10 Km Distance from airport</em> <br />
         The Westin Hotel Dhaka – the newly opened five-star hotel in Gulshan. Nestled in the new business district, we are steps from renowned shopping malls....</p>
        </div><!--contentpopular ends here-->
        <div class="ratingpop">
        <div class="ratingpoptop">
        <div class="four">
        </div> <!--five ends here-->
        </div> <!--ratingpoptop ends here-->
        <div class="ratingpopbot">
        <h3 class="previous">Rs15000</h3>
        <h3 class="next">Rs13000</h3>
        </div> <!--ratingpopbot ends here-->
        </div> <!--ratingpop ends here-->
        </div> <!--threepopular ends here-->
       
        </div> <!--eachpopular ends here-->
        
         <div id="gdetail">
    <div  class="contentheaddiv">
     <h3 class="contentheadline">DETAILS</h3>
    </div> <!--contentheaddiv ends here-->
   <h3 class="description">The Westin Hotel Dhaka – the newly opened five-star hotel in Gulshan. Nestled in the new business district, we are steps from renowned shopping malls, foreign missions, restaurant, art, private clubs, and multinationals. The hotel is also only eight kilometers from Hazrat Shahjalal International Airport. <br />
     241 spacious guest rooms and suites offer modern amenities. Restore the body and expand the mind with the pure relaxation of our signature Heavenly Bed®. The oversized four-fixture bathroom with Heavenly Shower® ensures you feel refreshed. Every guest room offers a generous workspace and High Speed Internet Access. <br />
     At Westin, our goal is that you leave feeling better than when you arrived. From our Heavenly Bed® and Bath to WestinWORKOUT®, we strive to develop experiences that help you be at your best in mind, body, and spirit.</h3>
    </div> 
         <!--googlemap ends here-->
        
    </div> <!--rightusable ends here-->
    </div>  <!--righttopcondiv ends here-->
    </div>  <!--righttopcon ends here-->
    </div> <!--topcontent ends here-->
    
    
    
    <div id="middlecontent">
    
    <div id="gleftcontent">
    <div id="gleftcontentdiv">
    <div id="topdestinations">
     <div class="contentheaddiv">
     <h3 class="contentheadline">TOP DESTINATIONS</h3> 
     </div><!--contentheaddiv ends here-->
     <div id ="destincontent">
     <div id="destinpad">
     <div id="destincrop">
     <div id="destinclick">
     <h4 id="bangladesh"><a href="#">Bangladesh<br />20 Hotels</a></h4>
     </div>  <!--destinclick ends here-->
     </div> <!--destincrop ends here-->
     </div> <!--destinpad ends here-->
     </div> <!--destincontent ends here-->
    </div> <!--topdestinations ends here-->
    
    <div id="confidence">
    <div id="confidenceheaddiv">
     <h3 class="contentheadline">BOOK WITH CONFIDENCE!</h3> 
     </div><!--contentheaddiv ends here-->
     <div id="confidencediv">
     <div id="allconfidence">
     
        <div class="eachconfidence">
        <div class="twoconfidence">
        <div class="imgconf">
        <img class="confimg" src="../image/check.png" alt=""/>
        </div> <!--imgconfidence ends here-->
        <div class="contentconfidence">
        <h5 class="confidenceheadline">Lowest Price Policy</h5>
        <p class="confidencep">We don't charge you any extra fee for booking a hotel room with us</p>
        </div><!--contentconfidence ends here-->
        </div> <!--twoconfidence ends here-->
        </div> <!--eachconfidence ends here-->
        
        
        <div class="eachconfidence">
        <div class="twoconfidence">
        <div class="imgconf">
        <img class="confimg" src="../image/check.png" alt=""/>
        </div> <!--imgconfidence ends here-->
        <div class="contentconfidence">
        <h5 class="confidenceheadline">No cancellation fees</h5>
        <p class="confidencep">We don't charge you a cancellation or modification fee in case plans change</p>
        </div><!--contentconfidence ends here-->
        </div> <!--twoconfidence ends here-->
        </div> <!--eachconfidence ends here-->
        
        
        <div class="eachconfidence">
        <div class="twoconfidence">
        <div class="imgconf">
        <img class="confimg" src="../image/check.png" alt=""/>
        </div> <!--imgconfidence ends here-->
        <div class="contentconfidence">
        <h5 class="confidenceheadline">Instant confirmation</h5>
        <p class="confidencep">Instant booking confirmation whether booking online or via the telephon</p>
        </div><!--contentconfidence ends here-->
        </div> <!--twoconfidence ends here-->
        </div> <!--eachconfidence ends here-->
        
        
        <div class="eachconfidence">
        <div class="twoconfidence">
        <div class="imgconf">
        <img class="confimg" src="../image/check.png" alt=""/>
        </div> <!--imgconfidence ends here-->
        <div class="contentconfidence">
        <h5 class="confidenceheadline">Hotel deals every day</h5>
        <p class="confidencep">Booking up to a whole year in advance or right up until the moment of your stay</p>
        </div><!--contentconfidence ends here-->
        </div> <!--twoconfidence ends here-->
        </div> <!--eachconfidence ends here-->
        
        
        <div class="eachconfidence">
        <div class="twoconfidence">
        <div class="imgconf">
        <img class="confimg" src="../image/check.png" alt=""/>
        </div> <!--imgconfidence ends here-->
        <div class="contentconfidence">
        <h5 class="confidenceheadline">Flexible booking</h5>
        <p class="confidencep">Our booking system is very flexible and easy</p>
        </div><!--contentconfidence ends here-->
        </div> <!--twoconfidence ends here-->
        </div> <!--eachconfidence ends here-->
        
        
        
     </div> <!--allconfidence ends here-->
     </div> <!--confidencediv ends here-->
    </div> <!--confidence ends here-->
     <div id="facility">
    <div  class="contentheaddiv">
     <h3 class="contentheadline">FACILITIES</h3>
    </div> <!--contentheaddiv ends here-->
    <div id="facilitydiv">
    
    <div class="fac">
    <div class="eachfac">
      <ul class="eachfacul">
                         <li class="eachfaclist"><a>airport transfer</a></li>
                         <li class="eachfaclist"><a>cofee shop</a></li>
                         <li class="eachfaclist"><a>family room</a></li>
                 
                
                </ul> 
    </div>
    <div class="eachfac">
   <ul class="eachfacul">
                         <li class="eachfaclist"><a>room service</a></li>
                         <li class="eachfaclist"><a>bar/pub</a></li>
                         <li class="eachfaclist"><a>business center</a></li>
                 
                
                </ul> 
                
    </div>
    </div>
    
     <div class="fac">
    <div class="eachfac">
     <ul class="eachfacul">
                         <li class="eachfaclist"><a>restaurant</a></li>
                         <li class="eachfaclist"><a>internet</a></li>
                         <li class="eachfaclist"><a>family room</a></li>
                 
                
                </ul>
    </div>
    <div class="eachfac">
     <ul class="eachfacul">
                         <li class="eachfaclist"><a>garden</a></li>
                         <li class="eachfaclist"><a>indoor pool</a></li>
                         <li class="eachfaclist"><a>golf course</a></li>
                 
                
                </ul>
    </div>
    </div>
    
     <div class="fac">
    <div class="eachfac">
     <ul class="eachfacul">
                         <li class="eachfaclist"><a>jacuzzi</a></li>
                         <li class="eachfaclist"><a>outdoor pool</a></li>
                         <li class="eachfaclist"><a>spa</a></li>
                 
                
                </ul>
    </div>
    <div class="eachfac">
     <ul class="eachfacul">
                         <li class="eachfaclist"><a>gym</a></li>
                         <li class="eachfaclist"><a>kids club</a></li>
                         <li class="eachfaclist"><a>pool(kids)</a></li>
                 
                
                </ul>
    </div>
    </div>
    
    </div> 
    </div> <!--facility ends here-->
    
    <div id="summary">
     <div  class="contentheaddiv">
     <h3 class="contentheadline">SUMMARY</h3>
    </div> <!--contentheaddiv ends here-->
    <div id="summarydiv">
    
    <div class="fiis">
    <div class="fis">
    <h3 class="description">Category:</h3>
    </div>
    <div class="sis">
    <h3 class="description">Dhaka</h3>
    </div>
    </div>
    
     <div class="seis">
    <div class="fis">
    <h3 class="description">Building Name:</h3>
    </div>
    <div class="sis">
    <h3 class="description">HOTEL THE WESTIN</h3>
    </div>
    </div>
    
    <div class="fiis">
    <div class="fis">
    <h3 class="description">Pet :</h3>
    </div>
    <div class="sis">
    <h3 class="description">not allowed</h3>
    </div>
    </div>
    
     <div class="seis">
    <div class="fis">
    <h3 class="description">Check-in From :</h3>
    </div>
    <div class="sis">
    <h3 class="description">02:01:00 PM</h3>
    </div>
    </div>
    
    <div class="fiis">
    <div class="fis">
    <h3 class="description">Check-out Until :</h3>
    </div>
    <div class="sis">
    <h3 class="description">12:01:00 PM:</h3>
    </div>
    </div>
    
     <div class="seis">
    <div class="fis">
    <h3 class="description">Distance :</h3>
    </div>
    <div class="sis">
    <h3 class="description">10 Km from airport</h3>
    </div>
    </div>
    
    <div class="fiis">
    <div class="fis">
    <h3 class="description">Internet Information:</h3>
    </div>
    <div class="sis">
    <h3 class="description">Internet availavle</h3>
    </div>
    </div>
    
     <div class="seis">
    <div class="fis">
    <h3 class="description">Parking Information:</h3>
    </div>
    <div class="sis">
    <h3 class="description">Car parking available</h3>
    </div>
    </div>
    
    </div>
    </div>
    <!--summary edns here-->
    
    
     
    
    </div> 
    <!--leftcontentdiv ends here-->
     </div> <!--leftcontent ends here-->
     
     
     
    <div id="grightcontent">
    <div id="grightcontentdiv">
    
     
    
     <div class="googleMap">
    <div  class="contentheaddiv">
     <h3 class="contentheadline">IMAGE OF HOTEL</h3>
    </div> <!--contentheaddiv ends here-->
    <div class="mappadd">
    <div id="himage">
    </div> <!--mainmap ends here-->
    </div> <!--mappadd ends here-->
    </div> <!--googlemap ends here-->
    
    <div class="googleMap">
    <div  class="contentheaddiv">
     <h3 class="contentheadline">MAP</h3>
    </div> <!--contentheaddiv ends here-->
    <div class="mappadd">
    <div id="mainmap">
    </div> <!--mainmap ends here-->
    </div> <!--mappadd ends here-->
    </div> <!--googlemap ends here-->
    
    
    
    
    
     <div class="proinfo">
    <div  class="contentheaddiv">
     <h3 class="contentheadline">PROFILE INFORMATION</h3>
    </div> <!--contentheaddiv ends here-->
    <div class="proadd">
    <h3 class="description">Major Features and Facilities: World Class Rooms ensuring lavish living Comfort Multi cuisine 3 International standard Restaurants including Thai, Continental & Pool Side BBQ. Roof Top Swimming Pool (Under Constriction) State-of-the-art Gym, Jacuzzi, Sauna & Steam bath. Digital Safe Deposit Box in all rooms Conference Room & Banquet Hall with Audio-visual Equipment. (Under Constriction) LED HD TV in all Rooms with Satellite Connection Mini Fridge in all Rooms Whole Hotel under WIFI coverage. Digital RF Electronic Door Locks Most Modern Bathroom Fittings Laundry & Dry Cleaning service City Sightseeing Tour service 24 Hours Business Center & Room Service CCTV Surveillance Spacious Basement Car Parking.    </h3>
    </div> 
    <!--mappadd ends here-->
    </div> <!--proinfo ends here-->
    
    
    
     <div id="bookdiv">
    <div  class="contentheaddiv">
     <h3 class="contentheadline">BOOK NOW!</h3>
    </div> <!--contentheaddiv ends here-->
    
     <div class="mainbook">
     <div class="eachbook"><h3 class="bookline">Available room types</h3>
     </div>
     <div class="eachbook">
       <h3 class="bookline">Max(People)</h3>

     </div>
     <div class="eachbook"><h3 class="bookline">Price</h3>
     </div>
     <div class="eachbook"><h3 class="bookline">Availability status</h3>
     </div>
     </div>  
     
     
     <div class="mainbookitem">
     <div class="eachbookitem1">
       <h3 class="booklinei">Delux Rooms</h3>
     </div>
     <div class="eachbookitem1">
       <h3 class="booklinei">2</h3>
     </div>
     <div class="eachbookitem1">
     <div class="fprice">
       <h3 class="h3pricef">Rs 18000</h3></div>
     <div class="lprice">
       <h3 class="h3pricel">Rs 15500</h3>
     </div>
     </div>
     <div class="eachbookitem1">
       <h3 class="booklineia">Available</h3>
     </div>
     </div>  
     
     
          <div class="mainbookitem">
          
     <div class="eachbookitem2">
       <h3 class="booklinei">Double Delux Room</h3>
     </div>
     
     <div class="eachbookitem2">
       <h3 class="booklinei">2</h3>
     </div>
     <div class="eachbookitem1">
     <div class="fprice">
       <h3 class="h3pricef">Rs 20000</h3></div>
     <div class="lprice">
       <h3 class="h3pricel">Rs 16500</h3>
     </div>
     </div>
     <div class="eachbookitem2">
       <h3 class="booklineia">Available</h3>
     </div>
     </div>  
     
   
   
    <div class="mainbookitem">
     <div class="eachbookitem1">
       <h3 class="booklinei">Standard Room</h3>
     </div>
     <div class="eachbookitem1">
       <h3 class="booklinei">3</h3>
     </div>
     <div class="eachbookitem1">
     <div class="fprice">
       <h3 class="h3pricef">Rs 16500</h3></div>
     <div class="lprice">
       <h3 class="h3pricel">Rs 15000</h3>
     </div>
     </div>
     <div class="eachbookitem1">
       <h3 class="booklineia">Available</h3>
     </div>
     </div> 
     
     
     
     
          <div class="mainbookitem">
     <div class="eachbookitem2">
       <h3 class="booklinei">Single</h3>
     </div>
     <div class="eachbookitem2">
       <h3 class="booklinei">2</h3>
     </div>
     <div class="eachbookitem1">
     <div class="fprice">
       <h3 class="h3pricef">Rs 15000</h3></div>
     <div class="lprice">
       <h3 class="h3pricel">Rs 13000</h3>
     </div>
     </div>
     <div class="eachbookitem2">
       <h3 class="booklineia">Available</h3>
     </div>
     </div>
     
     
     
     
    <div class="mainbookitem">
     <div class="eachbookitem1">
       <h3 class="booklinei">Doubles</h3>
     </div>
     <div class="eachbookitem1">
       <h3 class="booklinei">3</h3>
     </div>
     <div class="eachbookitem1">
     <div class="fprice">
       <h3 class="h3pricef">Rs 16000</h3></div>
     <div class="lprice">
       <h3 class="h3pricel">Rs 14000</h3>
     </div>
     </div>
     <div class="eachbookitem1">
       <h3 class="booklineia">Available</h3>
     </div>
     </div> 
 
 
    <div id="bookbutton"><a href ="book form.php">
  <h3 class="h3book">BOOK</h3>
   </a>
  </div>
  </div>
  
<!--bookdiv ends here-->
    
    
    
    

     <div class="proinfo">
    <div  class="contentheaddiv">
     <h3 class="contentheadline">GENERAL INFORMATION</h3>
    </div> <!--contentheaddiv ends here-->
    <div class="proadd">
    <h3 class="description">General Remarks: All rates are subject to 10% service charge and 15% VAT. All rates are valid until further notice. Our check-out time is at 12:00 noon. Should you need any further information or clarification, please do not hesitate to contact me directly. Once you have confirmed your interest in our Quotation, we shall be pleased to issue a Corporate Contract. Meanwhile, we look forward to welcoming your guests to enjoy the &lsquo;Ambiance of Elegance&rsquo; of HOTEL THE WESTIN. Thanks once again and best regards.</h3>
    </div> 
    <!--mappadd ends here-->
    </div> <!--proinfo ends here-->
    
         <div class="proinfo">
    <div  class="contentheaddiv">
     <h3 class="contentheadline">POLICIES</h3>
    </div> <!--contentheaddiv ends here-->
    <div class="proadd">
    <h3 class="description"> Children aged from 0-6 years will not be charged for the stay in the room. Children under 7-12 years may be accommodated in the same room as parents at no extra cost but breakfast included.<br />Modification must have to be before 72 hours, depends on availability.<br />For cancellation one night room charge will be applicable for Non arrivals/Cancellation unless hotel received cancellation notice in writing 48 hours prior to the hotel check in time by the guest or the organization concerned.</h3>
    </div> 
    <!--mappadd ends here-->
    </div> <!--proinfo ends here-->
  
  
  
  
    
    
    

   </div>
    </div> <!--rightcontent ends here-->
    </div> <!--middlecontent ends here-->
  
 </div> <!--content ends here-->
 
 
 

         
         </div>  <!-- wrap ends here -->   
     
  
     
</body>
</html>
