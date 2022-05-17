<?php
	$connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"sms");
	$query = "INSERT INTO teachers (name,mobile,courses)values ('$_POST[name]','$_POST[mobile]','$_POST[courses]')";
	$query_run = mysqli_query($connection,$query);
    // file_put_contents("teacherstore.txt",$query);
?>
<script type="text/javascript">
	alert("Teacher added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
