<?php
  session_start();
  session_unset();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PreBook - The only place to book your movie tickets!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
  </head>
  <body>
  <nav>
      <div class="logo">
          <h1> Movie<span><h1 id= "sh">Show</h1></span></h1>  
      </div>
       
    </nav>
    <main>
      <div class="bar">
        <h2>Thanks for visiting, logging you out</h2>
        <span class="aside"><i>you're being logged out, and redirected back to the home page.</i></span>
      </div>
      <i class="fas fa-check-square full-icon"></i>
    </main>
  </body>
  <footer>
    <div class="copy">
    Copyrights ©  2021 MovieShow.Info, All Right Reserved
    </div>
     
  </footer>
</html>
<?php
  header( "refresh:3;url=index.html" );
?>
