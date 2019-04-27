<?php
  session_start();
  require 'dbconfig/config.php';
?>
<nav class="navbar navbar-style">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collase" data-target="">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
      <a href=""><img class="logo" src="imgs/logo.jpg"></a>
     </div>
     <div class="collapse navbar-collapse" id="micon">
       <ul class="nav navbar-nav navbar-right">
         <li><a class="tab" href="Home.php">Home</a></li>
         <li><a class="tab" href="About.php">About</a></li>
         <li><a class="tab" href="Products.php">Products</a></li>
         <li><a class="tab" href="Contact.php">Contact</a></li>
         <li><a class="tab" href="login.php">Login</a></li>
         <li><a class="tab" href="Users.php">User's Corner</a></li>
       </ul>
      </div>
  </div>
</nav>
