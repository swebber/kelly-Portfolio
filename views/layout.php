<?php
$homeActive = "";
$aboutActive = "";
$resumeActive = "";
$elsewhereActive = "";

switch ($controller) {
  case 'home':
    $homeActive = "active";
    break;
  case "about":
    $aboutActive = "active";
    break;
  case "resume":
    $resumeActive = "active";
    break;
  case "elsewhere":
    $elsewhereActive = "active";
    break;
}

function footer($prev, $top, $next) {
    echo '<div class="row footer-nav">' . "\n";
    echo '<div class="col-sm-12 col-sm-offset-1 col-sm-10">' . "\n";
    echo '<a href="/' . $prev . '">PREVIOUS</a>|<a href="/' . $top . '">BACK TO TOP</a>|<a href="/'. $next .'">NEXT</a>' . "\n";
    echo '</div>' . "\n";
    echo '</div>' . "\n";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="/content/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/content/css/site.css?v=001">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-inverse visible-xs">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Kelly Webber</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?php echo $homeActive ?>"><a href="/">Home</a></li>
            <li class="<?php echo $aboutActive ?>"><a href="/about">About</a></li>
            <li class="<?php echo $resumeActive ?>"><a href="https://www.dropbox.com/s/02klhtxzbhw3y9b/KellyWebber_Resume_020317.pdf?dl=0" target="_blank">Resume</a></li>
            <li class="<?php echo $elsewhereActive ?>"><a href="/elsewhere">Elsewhere</a></li>
          </ul>
      </div>
    </nav>

    <aside class="marquee-left hidden-xs">
      <p>
        <a href="/" class="<?php echo $homeActive ?>">KELLY WEBBER</a>
      </p>
    </aside>

    <aside class="marquee hidden-xs">
      <p>
        <a href="/about" class="<?php echo $aboutActive ?>">ABOUT</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://www.dropbox.com/s/02klhtxzbhw3y9b/KellyWebber_Resume_020317.pdf?dl=0" class="<?php echo $resumeActive ?>" target="_blank">RESUME</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/elsewhere" class="<?php echo $elsewhereActive ?>">ELSEWHERE</a>
      </p>
    </aside>

    <div class="container">
    <?php require_once('routes.php'); ?>
    </div>

  </body>
</html>