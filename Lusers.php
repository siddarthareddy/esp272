<?php include "framework/head.html"; ?>
<?php include "framework/nav.php"; ?>
<?php
$sql="SELECT fname, lname FROM users";
$result = mysqli_query($con,$sql);
while ($row = $result->fetch_assoc()) {
    echo $row['fname'];
    echo " ";
    echo $row['lname'];
    echo nl2br("\n");
}
$result->close();
?>
