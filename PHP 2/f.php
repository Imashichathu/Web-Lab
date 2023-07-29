<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>

</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $uname = $_POST["uname"];
        $password= $_POST["pwsd"];
        $gender = $_POST["gen"];
        $year = $_POST["years"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        
       

        echo '<table border="1">';
        echo '<tr><th>First Name</th><td>'.$fname.'</tr>';
        echo '<tr><th>Last Name</th><td>'.$lname.'</tr>';
        echo '<tr><th>Username</th><td>'.$uname.'</tr>';
        echo '<tr><th>Password</th><td>'.$password.'</tr>';
        echo '<tr><th>Gender</th><td>'.$gender.'</tr>';
        echo '<tr><th>Academic Year</th><td>'.$year.'</tr>';
        echo '<tr><th>Phone</th><td>'.$phone.'</tr>';
        echo '</table>';

    }
    ?>
</body>
</html>
