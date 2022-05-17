<?php
    	
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "sms");
    if (isset($_POST['edit'])) {
        $t_id = $_POST['t_id'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $courses = $_POST['courses'];
        //Check empty value
        if (empty($name) || empty($name) || empty($mobile) || empty($courses)) {
            ?>
                <script>
                    alert('Empty field detected!!');
                    window.location.replace("admin_dashboard.php");
                </script>
            <?php
        } else {
            $query = "UPDATE teachers SET name = '$name', mobile = '$mobile', courses = '$courses' where t_id = '$t_id'";
            $query_run = mysqli_query($connection, $query);
            if ($query_run) {
                ?>
                    <script>
                        alert('Data updated successfully!!');
                        window.location.replace("admin_dashboard.php");
                    </script>
                <?php
            } else {
                ?>
                    <script>
                        alert('Something went wrong!!');
                        window.location.replace("admin_dashboard.php");
                    </script>
                <?php
            }
        } 
    } else {
        ?> 
        <script> 
            alert('Try again!!'); window.location.replace("admin_dashboard.php");
        </script>
    <?php
    }
?>