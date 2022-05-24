<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "test_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//left join coding
$sql = "SELECT 
m.member_id, 
m.name AS member, 
c.committee_id, 
c.name AS committee
FROM
members m
LEFT JOIN committees c USING(name)";


?>

<!DOCTYPE html>

<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
    <title>View Page</title>

</head>

<body>

    <div class="container">
        <div>
            <h1>Left joion Query</h1>
        </div>
        <table class="table" style="width:40%">

            <thead>

                <tr>

                    <th>Member ID</th>

                    <th>Members</th>

                    <th>Committee ID</th>

                    <th>Committee</th>

                </tr>

            </thead>

            <tbody>

                <?php
                if ($result = mysqli_query($conn, $sql)) {
                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {

                ?>
                            <tr>

                                <td><?php echo $row['member_id']; ?></td>

                                <td><?php echo $row['member']; ?></td>

                                <td><?php echo $row['committee_id']; ?></td>

                                <td><?php echo $row['committee']; ?></td>

                            </tr>

                <?php       }
                    }
                }
                mysqli_close($conn);
                ?>

            </tbody>

        </table>
    </div>

</body>

</html>