<?php
  require 'dbconfig/config.php';
?>
<html>
    <head>
        <title>Search Users</title>
    </head>
    <body>
        <h1>Search Users</h1>
        <form action="search.php" method="POST">
            <input name='entry' required placeholder="Enter Search Terms..."><br>
            <select name='col'>
                <option value="fname">First Name</option>
                <option value="lname">Last Name</option>
                <option value="email">Email</option>
                <option value="hphone">Home Phone</option>
                <option value="cphone">Cell Phone</option>
            </select><br>
            <button type="submit">Search</button>
        </form>

        <?php
        if(isset($_POST["entry"])){
            $entry=$_POST["entry"];
            $col=$_POST["col"];

            $sql="SELECT fname, lname, email, address, hphone, cphone FROM users WHERE $col LIKE '%$entry%'";
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
        }
        ?>

    </body>
</html>

