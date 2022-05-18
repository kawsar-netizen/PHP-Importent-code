<?php

include "config.php";

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE `id`='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        // echo "Record deleted successfully.";
?>
        <script>
            alert('Record has been successfully deleted !!');
            window.location.replace("userlist.php");
        </script>
    <?php
    } else {
        // echo "Error:" . $sql . "<br>" . $conn->error;
    ?>
        <script>
            alert('Database Error!');
            window.location.replace("userlist.php");
        </script>
<?php
    }
}

?>