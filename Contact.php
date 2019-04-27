<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "framework/head.html"; ?>
  <body>
    <header class="header">
      <?php include "framework/nav.php"; ?>
      <div class="container">
        <?php
                $contact = fopen("Contacts.txt", "r") or die("cannot open file");
                while (!feof($contact))
                {
                    $line = fgets($contact);
                    print '<span style="color: black; font-size: 20px;">'."$line". '</span><br>';
                }
                fclose($contact);
         ?>
       </div>
    </header>
  </body>
</html>
