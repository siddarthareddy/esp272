<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include "framework/head.html"; ?>
  <?php
  $userinfo = array(
                  'admin'=>'adminpassword'
                  );
  if(isset($_GET['logout'])) {
      $_SESSION['username'] = '';
      header('Location:  ' . $_SERVER['PHP_SELF']);
  }
  if(isset($_POST['username'])) {
      if($userinfo[$_POST['username']] == $_POST['password']) {
          $_SESSION['username'] = $_POST['username'];
      }else {
          //Invalid Login
      }
  }
  ?>
  <body>
    <header class="header">
      <?php include "framework/nav.php"; ?>
      <div class="container">
        <h3>Login</h3>
        <?php if($_SESSION['username']): ?>
          <p>You are logged in as <?=$_SESSION['username']?></p>
          <ul>
            <li>Carl Jung</li>
            <li>Siddartha Reddy</li>
            <li>Sigmund Freud</li>
            <li>Pradeep Maryada</li>
          </ul>
          <p><a href="?logout=1">Logout</a></p>
        <?php endif; ?>
        <?php if(!$_SESSION['username']): ?>
        <form name="login" action="" method="post">
          Username:  <input type="text" name="username" value="" /><br />
          Password:  <input type="password" name="password" value="" /><br />
          <input type="submit" name="submit" value="Submit" />
        </form>
        <?php endif; ?>
      </div>
    </header>
  </body>
</html>
