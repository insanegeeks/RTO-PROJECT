<?php
@session_start();
@session_destroy();
?>
<script>
alert("You have Logged Out Sucessfully..!!");
location.href="login.html";
</script>
