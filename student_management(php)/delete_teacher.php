
<?php

    if(isset($_GET['t_id'])) {
        $id = $_GET['t_id'];
    }
	$connection = mysqli_connect("localhost","root","",'sms');
    $query = "DELETE from teachers where t_id = '$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run) {
?>
<script> 
    alert('Record has been successfully deleted !!'); window.location.replace("admin_dashboard.php");
</script>

<?php } else{ ?>

<script> 
    alert('Database Error!'); window.location.replace("admin_dashboard.php");
</script>

 <?php } ?>