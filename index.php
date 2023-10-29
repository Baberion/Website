<!DOCTYPE html>
<html lang="de">
 <head>
  <title>Website</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" >
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
 </head>
 <body>
 <div id="Header">
  <img src="images/Icon.png" alt="Logo">
  <h1 id="Header_h1" ><a href="Frames/Home.html"  target="MainIframe">Neon Code</a></h1>
  <a id="login" class="bi-person" href="Frames/login.php" target="MainIframe"> </a>
 </div>
 <div class="parent">
  <div class="side">
      <div id="SideBar">
          <div class="SideBarItems">
              <a href="Frames/Home.html" target="MainIframe" class="items">
                  <div>Home</div>
              </a>
              <a href="Frames/login.php" target="MainIframe" class="items">
                  <div>Login</div>
              </a><a href="Frames/Data.php" target="MainIframe" class="items">
                  <div>Server</div>
              </a><a href="Frames/EMail.php" target="MainIframe" class="items">
                  <div>E-Mail</div>
              </a>
              <a href="Frames/EMail.php" target="MainIframe" class="items">
                  <div>Card Game</div>
              </a>
              <a href="" target="MainIframe" class="items">
                  <div>Console</div>
              </a>
          </div>

      </div>
      <div class="controls">
          <button id="update" onclick="update()"> Update </button>
      </div>
  </div>
  <div id="Main">
   <iframe id="MainIframe" name="MainIframe" src="Frames/Home.html">
   </iframe>
  </div>
 </div>
 </body>

<script>
    function update() {
        <?php

        ?>
    }
</script>
 <?php
 global $user, $userid;

 ?>

</html>