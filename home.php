<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "secondtest";
$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("Unable to connect");
}
if ($_POST) {
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    $sql = "SELECT * FROM users_tutorial WHERE username = '$uname' AND password = '$pass'";
    /*

    do parameterized query here or whatever defense mechanism you want

    */
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
?>
        <!DOCTYPE html>
        <lang html>

            <head>
                <title>HOME</title>
                <link rel="stylesheet" type="text/css" href="style.css">
            </head>

            <body>
                <h1>Hello, Your account information is listed below </h1>
                <?php print "
  <table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-  collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\"    id=\"AutoNumber2\" bgcolor=\"#C0C0C0\">
   <tr>
  <td width=100>UserName</td> 
  <td width=100>Password</td>
  </tr>";
                while ($row = mysqli_fetch_array($result)) {
                    print "<tr>";
                    print "<td>" . $row['username'] . "</td>";
                    print "<td>" . $row['password'] . "</td>";
                    print "</tr>";
                }
                print "</table>";
                ?>
                <a href="logout.php">Logout</a>
            </body>

            </html>
    <?php
    } else {
        header("Location: index.php?error=Incorrect User name or Password");
        exit();
    }
}
    ?>