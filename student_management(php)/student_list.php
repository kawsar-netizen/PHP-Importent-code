<!DOCTYPE html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        #header {
            height: 10%;
            width: 100%;
            top: 2%;
            background-color: black;
            position: fixed;
            color: white;
        }

        #left_side {
            height: 75%;
            width: 15%;
            top: 10%;
            position: fixed;
        }

        #right_side {
            height: 75%;
            width: 80%;
            background-color: whitesmoke;
            position: fixed;
            left: 17%;
            top: 21%;
            color: red;
            border: solid 1px black;
        }

        #top_span {
            top: 15%;
            width: 80%;
            left: 17%;
            position: fixed;
        }

        #td {
            border: 1px solid black;
            padding-left: 2px;
            text-align: left;
            width: 200px;
        }
    </style>
    <?php
    session_start();
    $name = "";
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "sms");
    ?>
</head>

<body>
    <div id="header"><br>
        <center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name']; ?>
            <a href="logout.php">Logout</a>
        </center>
    </div>
    <!-- <span id="top_span"><marquee>Note:- This portal is open till 31 March 2020...Plz edit your information, if wrong.</marquee></span> -->
    <div id="right_side"><br><br>
        <div id="demo">
<h1>Student List</h1>
            <!-- #Code for Delete student details---Start-->
            <table style="border-collapse: collapse;border: 1px solid black;">
            <center>
              
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Roll No</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Class</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Remark</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        $query = "select * from students";
                        $query_run = mysqli_query($connection, $query);
                        while ($row = mysqli_fetch_assoc($query_run)){
                        ?>
                            <tr>
                                <td id="td"><?php echo $row['sl_no'] ?></td>
                                <td id="td"><?php echo $row['roll_no'] ?></td>
                                <td id="td"><?php echo $row['name'] ?></td>
                                <td id="td"><?php echo $row['father_name'] ?></td>
                                <td id="td"><?php echo $row['class'] ?></td>
                                <td id="td"><?php echo $row['mobile'] ?></td>
                                <td id="td"><?php echo $row['email'] ?></td>
                                <td id="td"><?php echo $row['password'] ?></td>
                                <td id="td"><?php echo $row['remark'] ?></td>
                            </tr>
                       
                    </tbody>
              
            </center>
            <?php
        }
              ?>
            </table>
         
        </div>
    </div>
</body>
</html>