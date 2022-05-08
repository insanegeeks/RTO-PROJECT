<?php
	@session_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("rto");
	$row=mysql_query("select * from login where username='".$_REQUEST['username']."' and password='".$_REQUEST['password']."'");
	if(mysql_num_rows($row)==0)
	{
	?>
	<script>
	alert("Invalid Username or Password");
	location.href="login.html";
	</script>
	<?php
	
	}
	else
	{
	/*
	$_SESSION['log']=1;
	$_SESSION['user']=$_REQUEST['user'];
	*/
	?>
	<script>
	location.href="admin_panel.php";
	</script>
	<?php
	}
?>