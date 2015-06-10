<head>
<title>
Claire Y. Li
</title>
<?php include 'gallery.php';?>
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="gallery_actions.js"></script>
<script src="link_actions.js"></script>


<link rel="stylesheet" href="style.css">
</head>


<div align="center">

<div id="home">
<h1><font color="white">Hi there! My name is Claire Y. Li</font></h1> 
<br>

<h2>I am a 20 year old software engineer, and hacker.
I've been coding since I was 10 years old, and haven't stopped since.
</h2>

<p>
<div id="rest">
<font color="#FFFFFF">
I would also describe myself as an inventor, and entrepreneur. I have had a love affair with
code, and hardware from an early age. I have a passion for writing database-driven applications,
Android applications, and building drones. I currently attend University of California, San Diego, 
and am studying Computer Science. I typically choose to work with code on the back-end, but I do also enjoy design.
I like doing things the hard way. I love building things from the ground up, and writing everything from scratch.<p>

Other stuff...I really like robots, and hackathons. 
<p>
<a class="skillset_link">My resume is available here.</a></font>
</div>



</div>

<div id="links">

	<div id="spacer">&nbsp;</div>
  <div id="awards" class="platform">awards</div>
  <div id="projects" class="platform">engineering projects</div>
  <div id="skillset" class="platform">skillset</div>
  <div id="graphic" class="platform">graphics</div>
  <div id="web" class="platform">web dev</div>
  <div id="portfolio" class="platform">portfolio</div>
  <div id="contact" class="platform">contact</div>
</div>

<div id="back_box">
</div>

<div id="awards_box" class="box">
 <div class="x">
 X 
 </div>
<h1>Awards</h1>
<table><tr><td><div id="riv" class="award_circle"></div></td>
<td><div id="riv" class="award_circle"></div></td></tr>
<tr>
<td align="center">1st Place - UCR Citrus Hack 2014
<p>Project Thoughtbox<br>
PHP, Javascript, mySQL<p>
Led team of 3 developers</td>
<td align="center">1st Place - City of Riverside, RivCodes 2014<p>
Riverside Harvest<br>
PHP, Javascript, mySQL<p>
Solo Developer, $2500 Grand Prize</td></tr></table>
<p>
</div>

<div id="skillset_box" class="box">
 <div class="x">
 X 
 </div>
<div id="rest">
<h1>Claire Y. Li</h1><br>
<i>Software Engineer, System & Application Development, Back-End Web Developer, Android Developer, Database Administrator</i><p>

I am passionate about database administration, developing database-driven applications, 
and have a long history with back-end web development. <br>I use programming as an expression of creativity, and am always engineering new and innovative solutions to everyday problems through the power of code. <p>
</div>
<div align="left" id="rest">
<b>Languages: </b>C++, C, Java, Python, SQL, PHP, Javascript, HTML5, CSS, AJAX (method)<br>
<b>Databases:  </b>Oracle, mySQL, MongoDB<br>
<b>Technology:  </b>ViM, Notepad++, Cygwin, Arduino IDE, Android Studio, WAMP, XAMPP<br>
<b>Architecture:  </b>MVC<br>
<b>Miscellaneous:  </b>System and server administration, Raspberry Pi, Arduino, UNIX, CMD, FTP, GIT (version control), SEO, UX, Graphic Design, Front-End 

<hr>

</div>
<p>
<div class="button" id="expand_resume">See rest of resume.</div>
</div>

<div id="close_layer"></div>

<div id="contact_box" class="box">
 <div class="x">
 X 
 </div>
<h1>Claire Li</h1><p>
<table><tr>
<td width="300px">
<img src="claire.jpg" height="30%">
</td>
<td>
You can reach me at cyl053@ucsd.edu<p>
<a class="skillset_link"><u>Resume</u></a><br>
<a href="https://www.linkedin.com/pub/claire-li/a4/a22/886">LinkedIn</a><br>
<a href="https://github.com/claireli">GitHub</a><br>
Blog<br>
<a href="https://twitter.com/theclaireli">Twitter</a><p>
<i>"Eat, sleep, hack, repeat." - C.L.</i>
</td></tr></table>
</div>

<div id="graphic_box" class="box">
 <div class="x">
 X 
 </div>
<h1>User Experience & Graphic Design</h1>
<p>

<?php

$dir='graphic/';
$origin = generate_gallery($dir);

?>

</div>

<div id="web_box" class="box">
 <div class="x">
 X 
 </div>
<h1>Web Development</h1>
<p>
<?php

$dir='web/';
$origin = generate_gallery($dir);

?>

</div>

<div id="portfolio_box" class="box">
 <div class="x">
 X 
 </div>
<h1>Traditional Portfolio</h1><p>
All of my technical projects can be found under "Engineering Projects"<br>
Anything graphic design related is under "Graphics"<br>
All web development projects are under "Web Dev"<p>

The remainder of this section is for my traditional artwork, and fashion design.
<p>
<?php

$port='portfolio/';
generate_gallery($port);

?>

</div>

<div id="canvas">
&nbsp;
</div>

<div id="projects_box" class="box">
 <div class="x">
 X 
 </div>
<h1>Technical Projects</h1><p>
<div id="grid" align="center"><table id="tech_table">
<td>
<div id="tech1" class="bubble">
</div>

<br>
Homemade Arduino Drone<br>
<i>Arduino, Hardware, C++</i>

</td>
<td>
<div id="tech2" class="bubble">
</div>

<br>
Foundet<br>
<i>Android, Java, SQLite</i>

</td>
<td>
<div id="tech3" class="bubble">
</div>

<br>
City of Riverside - Permit Loader<br>
<i>WIN32, Python, Oracle, SQL</i>
</td>
<td>
<div id="tech4" class="bubble" align="center">
</div>
<br>
Riverside Harvest<br>
<i>PHP, Javascript, mySQL</i>

</td>
</tr>

<tr>
<td>
<div id="tech5" class="bubble">
</div>

<br>
Project Thoughtbox<br>
<i>PHP, Javascript, mySQL</i>
</td>
<td>
<div id="tech6" class="bubble">
</div>

<br>
Crop Ninety<br>
<i>Javascript, MongoDB</i>

</td>
<td>
<div id="tech7" class="bubble">
</div>

<br>
RelicStream<br>
<i>Javascript, mySQL</i>

</td>
<td>
<div id="tech8" class="bubble">
</div>

<br>
2D Platformer Duck Game<br>
<i>Javascript, jQuery</i>

</td>
</tr>
</table>
</div>

<div id="tech1_detail" class="tech_detail">
Homemade Arduino Drone<br>
Arduino, Hardware, C++

<br>
<table>
<tr>
<td width="650px"><img src="drone2.jpg" height="20%" border="1"></td>
<td width="400px">
(Work In Progress)<p>
<ul>
<li>First embedded systems project</li>
<li>Soldering work for coaxial cable, and 9v battery clip
</li>
<li>Wrote turning and movement directions in Arduino IDE in C++
</li>
<li>Self-made wheels, cardboard, balloons for traction
</li>
<li>
Used solderless breadboard, and full rotation servo motors
</li></ul>
<p>

<h4><p class="return_tech" align="center">Return</p></h4>
</td>

</tr>
</table>

</div>

<div id="tech2_detail" class="tech_detail">
Foundet<br>
Android, Java, SQLite
<br>
<table>
<tr>
<td width="300px"><img src="foundet.png" border="1"></td>
<td width="400px">The application tracks and returns a very precise set of GPS coordinates, 
and pairs a picture with it. The android application stores all of the coordinates 
along with their photos in an SQLite database, and allows you to set the coordinates 
along with the photo through and SMS message, leading them straight to you. You 
can also use the application to track non-moving targets, for your own convenience, 
such as where you parked your car, or a particular building/ intersection that you 
need to return to later.<p>

Built at LA Hacks 2015

<h4><p class="return_tech" align="center">Return</p></h4>
</td>

</tr>
</table>

</div>

<div id="tech3_detail" class="tech_detail">
City of Riverside - Permit Loader<br>
WIN32, Python, Oracle, SQL
<br>
<table>
<tr>
<td width="650px"><img src="permit.png" height="90%" border="1"></td>
<td width="400px">
Riverside City Open Data Permit Loader (September 2014)<p>
<ul>
<li>Build while interning at Xerox, under Riverside City Hall</li>
<li>WIN32 application in Python that queries an Oracle database for all building permit information within a certain time range for the city of Riverside. Using the cx_Oracle driver, the application retrieves the SQL data then converts to JSON format to programmatically append to an open web transparency portal for the city
</li><li>Generates an HMAC, encrypts the data in md5, and commits the data through an HTTP Post Request
</li><li>Program can be either run in the console through a daily CRONtab and Shell file, or manually run via GUI desktop application written using Python's tKinter graphics library
</li></ul>
<p>



<h4><p class="return_tech" align="center">Return</p></h4>
</td>

</tr>
</table>
</div>

<div id="tech4_detail" class="tech_detail">
Riverside Harvest<br>
PHP, Javascript, mySQL
<br>
<table>
<tr>
<td width="650px"><img src="rivharvest.jpg" height="90%" border="1"></td>
<td width="400px">
Riverside Harvest – RivCodes City Hackathon (June 2014)<p>
<ul><li>1st place winner, solo developer, awarded $2500.</li>
<li>mySQL database-driven application, stores and sorts city data regarding produce harvest schedules
</li><li>PHP server-side scripting, responsive to CSV files imported into the database for revision, instantaneously updates information on the front-end UI. Sorted data by produce type, geographic location in the county, and season
</li><li>Displayed harvest schedules in real time, through JavaScript functions tracking hours, minutes, months, and seasons
</li><li>Utilized jQuery library for the web application and mobile browser app’s UX and UI
</li><li>Offered internship as a result of winning application</li></ul>
<p>



<h4><p class="return_tech" align="center">Return</p></h4>
</td>

</tr>
</table>

</div>

<div id="tech5_detail" class="tech_detail">
Project Thoughtbox<br>
PHP, Javascript, mySQL

<p class="return_tech">Return</p>
</div>

<div id="tech6_detail" class="tech_detail">
Crop Ninety<br>
Javascript, MongoDB

<br>
<table>
<tr>
<td width="800px"><img src="crop.jpg" border="1"><br>
<img src="crop2.jpg" border="1">
</td>
<td width="400px">We opt for security through obscurity. How can anyone attack your precious documents if they don't know where they're stored or how to find them? Choose from six different stylish tokens and encrypt your file to an action and token location within the Pixi.js-powered platformer. Upon performing the necessary actions for encryption/decryption, you can view or encrypt your files with your own easy-to-remember password. Don't worry, we never store your password, instead embedding it in your encrypted file, securely hashed using CryptoJS 3.1.2. The encryption information is stored using MongoDB, from which we retrieve the necessary information whenever the app is opened.<p>

Developed at CAL Hacks 2015, team of 4

<h4><p class="return_tech" align="center">Return</p></h4>
</td>

</tr>
</table>


</div>

<div id="tech7_detail" class="tech_detail">
RelicStream<br>
Javascript, mySQL

<p class="return_tech">Return</p>
</div>

<div id="tech8_detail" class="tech_detail">
2D Platformer Duck Game<br>
Javascript, jQuery
<br>
<table>
<tr>
<td width="650px"><img src="duck.png" border="1">
<p>
<a href="duckgame/main.html">Play This Game!</a>
<h4><p class="return_tech" align="center">Return</p></h4>
</td>
<td width="400px">
A 2d fantasy RPG about a duck saving his dad, Mitt Romney<p>
<ul><li>Honestly, I have no idea where we were going with this.</li>
<li>We were sleep deprived, and had too many energy drinks
</li><li>So it resulted in this madness. Many merge conflicts in git....
</li>
<li>Here is me messing with my friend.</li>
</ul>
<p>
<iframe height="300px" width="400px" src="https://www.youtube.com/embed/8onGuwm9PWY" frameborder="0" allowfullscreen></iframe>
<p>
<i>Developed at LA CodeDay 2014, team of 5</i>
</td>

</tr>
</table>
</div>



</div>
  
 </div>
 
