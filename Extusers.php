<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "framework/head.html"; ?>
    <body>
      <header class="header">
        <?php include "framework/nav.php"; ?>
        <div class="container">
          <?php
                  echo "My Users";
                  echo nl2br("\n");
                  $sql="SELECT fname, lname FROM users";
                  $result = mysqli_query($con,$sql);
                  while ($row = $result->fetch_assoc()) {
                      echo $row['fname'];
                      echo " ";
                      echo $row['lname'];
                      echo nl2br("\n");
                  }
                  $result->close();
                  echo nl2br("\n");
                  echo "Janaki's Users";
                  echo nl2br("\n");
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
                  echo nl2br("\n");
                  echo "Namrata's Users";
                  echo nl2br("\n");
                  // create curl resource
                  $ch = curl_init();
                  // set url
                  curl_setopt($ch, CURLOPT_URL, "http://namratakasar.com/users.php");

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
