<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
<style type="text/css">
@import url("css/imported/reset.css");
@import url("css/imported/960.css");
@import url("css/imported/text.css");
</style>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/contactus.css" rel="stylesheet" type="text/css">


</head>

<body>
<header id="main-header" class="container_12 clearfix">
  <div id="navigation" >
    <nav id="main-nav" >
      <ul>
        <li><a href="index.html">Home</a></li>
      	<li><a href="aboutus.html">About Us</a></li>
      	<li><a href="ouraim.html">Our Aim</a></li>
      	<li><a href="latestnews.html">Latest News</a></li>
      	<li class="current-menu-item"><a href="contactus.php">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</header>
<div id="pageTitle" class="container_12 clearfix">
  <h1>CONTACT US</h1>
  <p>CONTACT THE GAMED GROUP</p>
</div>
<div id="map-canvas" class="container_12 clearfix">
<iframe width="960" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=University+of+Malta,+Msida,+Malta&amp;aq=0&amp;oq=university+of+malta&amp;sll=37.0625,-95.677068&amp;sspn=43.528905,79.013672&amp;ie=UTF8&amp;hq=University+of+Malta,+Msida,+Malta&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=4870811494686510977&amp;ll=35.901908,14.484705&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=University+of+Malta,+Msida,+Malta&amp;aq=0&amp;oq=university+of+malta&amp;sll=37.0625,-95.677068&amp;sspn=43.528905,79.013672&amp;ie=UTF8&amp;hq=University+of+Malta,+Msida,+Malta&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=4870811494686510977&amp;ll=35.901908,14.484705" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>

<section id="contactarea" class="container_12 clearfix">
  <section id="contactformsection" class="grid_8 alpha">
  	<div id="titleforms">
    	<h1>Send us a Message</h1>
    </div>
    <form id="contactform" method="post" action="mailer.php">
      <label>Full Name:</label>
      <input type="text" id="full_name" name="full_name" placeholder="Full Name" required>
    
      <label>Email address:</label>
      <input type="email" id="email_addr" name="email_addr" placeholder="E-Mail Address" required>
    
      <label>Subject:</label>
      <input type="subject" id="subject" name="subject" placeholder="Subject" required>
      
      <label>Website:</label>
      <input type="url" id="website" name="website" placeholder="Website">
      
      <label>Message:</label>
      <!--<input type="text" id="message" name="message" placeholder="Enter your Message here." required>-->
      <textarea id="message" name="message" placeholder="Enter your Message Here." required></textarea>
    
      <input type="submit" value="Submit" /> 
    </form>
  </section>
  <!--contactformsection-->
  
  <section id="contactinfo" class="grid_4 omega">
  	<div id="titleforms">
    	<h1>Contact Info</h1>
    </div>
    <div class="contactdetails">
        <p><a href="http://www.digitalgamesmalta.com/" title="">www.digitalgamesmalta.com</a></p>
		<p>Phone: +356 2222 2222</p>
		<p><a href="mailto:info@digitalgamesmalta.com" title="">Email: info@digitalgamesmalta.com</a></p>
    </div>
  </section>
  <!--contactinfo-->
</section>
<!--contactarea-->

<section id="main-footer" class="container_12 clearfix">
  <div id="copyright-info" class="grid_4 suffix_5">
    <p><i>©2012 <b>GameD</b>. All rights reserved.</i></p>
  </div>
  <div id="designer" class="grid_3">
    <p><i>desingedbymark.com</i></p>
  </div>
</section>
</body>
</html>
