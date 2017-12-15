<!doctype html>
<?php 

session_start();

include "function.php";
include 'head.php'; 

$host ="localhost";
$user="root";
$password="";
$db="PicHub";

$mysqli=mysqli_connect($host, $user, $password, $db);

if (!connection_ok($mysqli)) {
  echo "Datenbank nicht erreicht!";
  exit(1);
}

echo $_POST['name'];

if (isset($_POST['name']) and isset($_POST['passwort'])) {
  
  // Parameter gegen SQL-Injection absichern!
  $user = $mysqli->real_escape_string($_POST['name']);
  $pass = $mysqli->real_escape_string($_POST['passwort']);

  if(is_auth($mysqli, $user, $pass) ) {
      $_SESSION['userid'] = $user;
  }
  else {
      $_SESSION['userid'] = NULL;
  }
}

if (! $_SESSION['userid']) {
  // header("Location: login.php");
  exit();
}
?>

<html lang="en">
<?php include 'head.php'; ?>
<body class="grey lighten-2">
  <header>
    <nav>
      <div class="nav-wrapper grey darken-2">
        <a href="#">
            <a href="index.html" class="brand-font"><i class="material-icons brand-logo">camera</i>PicHub</a>
        </a>
        
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>
            <a href="landing.html">Login</a>
          </li>
          <li>
            <a href="werbebilder.html">Werbebilder</a>
          </li>
          <li>
            <a href="upload.php">upload</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <section class="CardSection">
    <div class="row">
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="img/Download15.jpeg">
            <div class="hover card-hover">
              <span class="card-title">Card Title</span>
              <a class="card-icon-title" href="www.goggle.com">
                <i class="material-icons icon-left">cloud_download</i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col s4">
          <div class="card">
            <div class="card-image">
              <img src="img/Download11.jpg">
              <div class="hover card-hover">
                <span class="card-title">Card Title</span>
                <a class="card-icon-title" href="www.goggle.com">
                  <i class="material-icons icon-left">cloud_download</i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col s4">
            <div class="card">
              <div class="card-image">
                <img src="img/Download12.jpg">
                <div class="hover card-hover">
                  <span class="card-title">Card Title</span>
                  <a class="card-icon-title" href="www.goggle.com">
                    <i class="material-icons icon-left">cloud_download</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col s4">
              <div class="card">
                <div class="card-image">
                  <img src="img/Download13.jpg.jpg">
                  <div class="hover card-hover">
                    <span class="card-title">Card Title</span>
                    <a class="card-icon-title" href="www.goggle.com">
                      <i class="material-icons icon-left">cloud_download</i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s4">
                <div class="card">
                  <div class="card-image">
                    <img src="img/Download14.jpg">
                    <div class="hover card-hover">
                      <span class="card-title">Card Title</span>
                      <a class="card-icon-title" href="www.goggle.com">
                        <i class="material-icons icon-left">cloud_download</i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
    </div>
  </section>





</body>

</html>