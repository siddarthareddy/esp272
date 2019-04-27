<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "framework/head.html"; ?>
  <body>
    <header class="header">
      <?php include "framework/nav.php"; ?>
      <?php
      $name = $_GET["name"];
      include("queue.php");include("counter.php");
      pushQ($name);
      addCount($name);

      $sql="SELECT * FROM products where name='$name'";
      $result = mysqli_query($con,$sql);
      $row = $result->fetch_row();
      //print_r($row);
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 banner-info">
            <h3><?=$row[0]?></h3>
            <p><?=$row[4]?></p>
          </div>
          <div >
          <img id="yourimg" src="<?=$row[3]?>"/>
          </div>
          <!-- <div class="col-sm-6 banner-info">
            <img src="imgs/build.png" class="img-responsive">
          </div> -->

      </div>
    </header>
  </body>
</html>
