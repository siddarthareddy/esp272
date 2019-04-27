<?php include "framework/head.html"; ?>
<?php include "framework/nav.php"; ?>
<?php
$sql="SELECT fname, lname, email, address, hphone, cphone FROM users";
$result = mysqli_query($con,$sql);
echo "<table border='1'>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Address</th><th>Home Phone</th><th>Cell Phone</th></tr>";
while ($row = $result->fetch_row()) {
    echo "<tr>";
    foreach($row as $r){
        echo "<td>$r</td>";
    }
    echo "</tr>";
}
echo "</table>";
$result->close();
?>
