<html>
<head>
<title>Form | Transport Department, Himachal Pradesh</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" type="text/javascript" src="js/jquery-1.js" ></script>
<script language="JavaScript" type="text/javascript" src="js/submenu.js"  ></script>
<style>
.login
{
	
	margin-top:20px;
	opacity:1;
}
.login:hover
{
	opacity:1;
}
input:hover
{
	box-shadow:4pt 5pt 2pt #427fa2;
	background-color:#124d6f;
}
</style>
</head>
<body> 
<div id="header_wrapper">
	<div id="header">
    	<div id="logo">
            <a href="index.html"><img src="images/logo.png" width="62" height="80" alt="logo" /></a>
        </div> 
        <div id="site_title">
            <h2>Online RTO Management</h2>
			<h3>An Efficient Way To Reduce Time</h3>
        </div>
		<div id="header_right">
        	<div id="social_box">
                <ul>
					<li><div class="login"><a href="logout.php"><img src="images/logout.png" height="32" width="81"></a></div> </li>
                </ul>
                <div class="cleaner"></div>
			</div>   
        </div>
    </div>
</div>
<div id="menu_wrapper">
<div id="menu">
    <ul class="menu_ul">
        <li class="menu_li" style="width:100px;" ><a class="menu_a" href="index.html" >Home</a></li>
        <li class="menu_li" style="width:110px;" >
				<a class="menu_a" onmouseover="mopen('m1')" onmouseout="mclosetime()" href="aboutus_td.html">About Us </a>
				<ul id="sub_menu">
					<li><div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
						<a href="transport_dep.html">Transport Department</a>
						<a href="Organization_structure.html">Organization Structure</a>
						<a href="https://github.com/insanegeeks">InsaneGeeks</a>
						<!--<a href="#">Checkpost</a>
						<a href="#.html">Functions</a>-->
						</div>
					</li>
				</ul>
		</li>			
<li class="menu_li" style="width:130px;" ><a class="menu_a" href="act_rules.html">Acts & Rules</a>				<ul id="sub_menu">
					<li>
						<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
						<a href="act_rules.html">Acts & Rules</a>
						<!--<a href="notifications.html">Notifications & Circulars</a>-->
						</div>
					</li>
				</ul>
		</li>
        <li class="menu_li" style="width:110px;" ><a class="menu_a" onmouseover="mopen('m3')" onmouseout="mclosetime()" href="learning_license.html">Apply</a>
				<ul id="sub_menu">
					<li>
						<div id="m3" onmouseout="mclosetime()" onmouseover="mcancelclosetime()"  >
						<a href="learning_license.html">Learning Licence</a>
						<a href="driving_license.html">Driving Licence</a>
						<!--<a href="vehicle_registration.html">Vehicle Registration</a>-->
						<a href="process_permit.html">Permit</a>
						</div>
					</li>
				</ul>
		</li>
        <li class="menu_li" style="width:100px;" ><a class="menu_a" onmouseover="mopen('m4')" onmouseout="mclosetime()" href="status_learning.html">Status</a>
				<ul id="sub_menu">
					<li>
						<div id="m4" onmouseout="mclosetime()" onmouseover="mcancelclosetime()" >
						<a href="status_learning.html">Learning Licence </a>
						<a href="status_learning.html">Driving Licence </a>
						<!--<a href="status_vehicle.html">Vehicle Registration</a>-->
						<a href="status_permit.html">Permit</a>
						</div>
					</li>
				</ul>
		</li>
		<li class="menu_li" style="width:80px;" ><a class="menu_a" onmouseover="mopen('m6')" onmouseout="mclosetime()" href="faq_ll.html">FAQ</a>
				<ul id="sub_menu">
					<li>
						<div id="m6" onmouseout="mclosetime()" onmouseover="mcancelclosetime()" >
						<a href="faq_ll.html">Learning Licence</a>
						<a href="faq_dl.html">Driving Licence</a>
						<!--<a href="faq_registration.html">Registration of Vehicle</a>>-->
						<!--<a href="faq_fitness.html">Fitness of Vehicle</a>-->
						<a href="faq_permit.html">Permit</a>
						<a href="faq_puc.html">PUC</a>
						</div>
					</li>
				</ul>
		</li>
		<li class="menu_li" style="width:90px;" ><a class="menu_a" href="contact_us.html">ContactUs</a></li>
    </ul><div class="cleaner"></div>		
</div>
<div id="ticker_wrapper">
		<div id="ticker">
			<marquee scrollamount="3" scrolldelay="85">
				<a href="#">Welcome to Transport Department Website.....</a>
			</marquee>
		</div>	
</div>
<div id="middle">
	
	<div id="content_left">
		<div class="col_w460">
    	<h2>Admin Panel</h2><br>
		<div class="Hline">&nbsp;</div>
		<div class="cleaner_h10"></div>	
<?php
$con=mysql_connect("localhost","root","");
if(!$con)
die("Not Connected Please Try Again..!".mysql_error());
mysql_select_db("rto");
mysql_query("delete  from learning where reg_no=".$_REQUEST['reg_no']);
echo "<h3>Record Deleted Successfully</h3>
";
?>
	</div>	
	</div>
<div class="cleaner"></div>			
</div>
</body>
</html>