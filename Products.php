<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "framework/head.html"; ?>
  <body>
    <header class="header">
      <?php include "framework/nav.php"; ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 banner-info">
            <?php
            $sql="SELECT name FROM products";
            $result = mysqli_query($con,$sql);
            echo "<table border='1'>";

            while ($row = $result->fetch_row()) {
                echo "<tr>";
                foreach($row as $r){
                    echo "<tr><th><a href='viewproduct.php?name=$r'<td>$r</td></th></tr>";
                }
                echo "</tr>";
            }
            echo "</table>";
            $result->close();

              // echo "<pre>";
              // print_r(unserialize($_COOKIE["Q"]));
              // print_r(unserialize($_COOKIE["C"]));
              // echo "</pre>";
               ?>

              <a href="last5.php">Last5</a><br>

              <a href="most5.php">Most5</a>

          </div>
          <div class="col-sm-6 banner-info">
            <img src="imgs/build.png" class="img-responsive">
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
