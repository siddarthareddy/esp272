<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "framework/head.html"; ?>
    <body>
      <header class="header">
        <?php include "framework/nav.php"; ?>
        <div class="container">
          <h3>User's Corner</h3>

          <?php
                  // create curl resource
                  $ch = curl_init();

                  // set url
                  curl_setopt($ch, CURLOPT_URL, "http://janakidwadasi.xyz/goGirls/getUsers.php");

                  //return the transfer as a string
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                  // $output contains the output string
                  $output = curl_exec($ch);
                  echo $output;
                  // close curl resource to free up system resources
                  curl_close($ch);
          ?>

        </div>
      </header>
    </body>
</html>
