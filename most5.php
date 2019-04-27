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
              if(!isset($_COOKIE["C"])){
                echo "<h1>Checkout our Products before coming here</h1>";
              }else{
                  $arr=unserialize($_COOKIE["C"]);

                  arsort($arr);

                  $arr1 = array_keys($arr);

                  $arr1 = array_slice($arr1, 0, 5, true);

                  foreach($arr1 as $r){
                    echo "<a href='viewproduct.php?name=$r'>$r</a> Viewed ".$arr[$r]." times.<br>";
                  }
              }
            ?>
          </div>
          <div class="col-sm-6 banner-info">
            <img src="imgs/build.png" class="img-responsive">
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
