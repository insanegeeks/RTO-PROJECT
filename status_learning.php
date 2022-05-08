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
	opacity:30;
}
.login:hover
{
	opacity:1;
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
					<li><div class="login"><a href="login.html"><img src="images/login.png" height="32" width="81"></a></div> </li>
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
						<!--<a href="#">Checkpost</a>-->
						<!--<a href="#">Functions</a>-->
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
				</ul>		</li>
    </ul>  
<div class="cleaner"></div>		
</div>
<div id="ticker_wrapper">
		<div id="ticker">
			<marquee scrollamount="3" scrolldelay="85">
				<a href="#">Welcome to Transport Department Website.....</a>
			</marquee>
		</div>	
</div>
<div id="middle">
	<div id="middle_left">
		<div class="boxedB">
			<h2>Online Services</h2>
			<ul  >
				<li><a target="_blank" href="pdf/llr test.pdf">LLR Practice Sheet</a></li>
				<li><a target="_blank" href="learning_license.html"> Online Application</a></li>
				<!--<li><a target="_blank" href="#">Appont. Booking for Driving Test </a></li>-->
				<li><a target="_blank" href="vehicle_registration.html">New Vehicle Registration</a></li>
				<li><a target="_blank" href="#">Check Selected NO Availability</a></li>
				<li><a target="_blank" href="#">HSRP Number Plate</a></li>
				<li><a target="_blank" href="process_permit.html">National Permit</a></li>
			</ul>
		</div>
		<div class="boxedD">
			<h2>Quick Links </h2>
			<ul>
				<li><a href="download.html">Download LLR Question Bank</a></li>
				<!--<li><a href="citizencharter_dl.html">Citizen Charter</a></li>-->
				<li><a href="traffic_sign.html">Traffic Signs</a></li>
				<li><a href="tax.html">Tax Structure</a></li>
				<li><a href="fee_licence.html">Fee Structure</a></li>
				<li><a href="penalty.html">Penalty Structure</a></li>
				<li><a href="district_code.html">District Code</a></li>
				<li><a href="faq_puc.html">PUC</a></li>
			</ul>
		</div> 		
	</div>
	<div id="content_left">
		<div class="col_w460">
    	<h3>Status for Learning Licence : <?php echo $_REQUEST['reg_no']; ?> </h3>
		<div class="Hline">&nbsp;</div>
		<div class="cleaner_h10"></div>
		<?php
		
		$con=mysql_connect("localhost","root","");
		if(!$con)
		die("Not Connected Please Try Again..!".mysql_error());
		mysql_select_db("rto");
		$rec=mysql_query("select * from ll_status where reg_no='".$_REQUEST['reg_no']."' and dob='".$_REQUEST['dob']."'");
		echo "<center>";
		echo "<table border='1' width='85%'>";
		$row=mysql_fetch_array($rec);
		{
		echo  "	<tr><td>Registration No.</td><td>".$row['reg_no']."</td></tr>
				<tr><td>Category</td><td>".$row['category']."</td></tr>
				<tr><td>Name</td><td>".$row['cand_name']."</td></tr>
				<tr><td>D.O.B.</td><td>".$row['dob']."</td></tr>
				
				<tr><td>Email</td><td>".$row['email']."</td></tr>
				<tr><td>Date of Applying</td><td>".$row['date']."</td></tr>
				<tr><td>Status</td><td>".$row['status']."</td></tr>
				<tr><td colspan='2' align='center'><input type='button' value='Print'>	</td></tr>";
		}
		echo "</center>";
		?>
		</div>	
	</div>
<div class="cleaner"></div>			
</div>	
</body>
</html>