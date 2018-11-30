<!DOCTYPE html>
<html>  
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SignUp Confirmation</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="http://webdev.scs.ryerson.ca/~s272ahme/main.css" />
</head>
   
<body>
<div class="pages">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                      <div class="container">
                        <a class="navbar-brand" href="index.html">Argentum</a>
                        <button
                          class="navbar-toggler"
                          type="button"
                          data-toggle="collapse"
                          data-target="#contentpages"
                          aria-controls="navbarSupportedContent"
                          aria-expanded="false"
                          aria-label="Toggle navigation"
                        >
                          <span class="navbar-toggler-icon"></span>
                        </button>
              
                        <div class="collapse navbar-collapse" id="contentpages">
                          <ul class="navbar-nav">
                            <li><a class="nav-link active" href="#">Profile</a></li>
                            <li><a class="nav-link active" href="aboutUs.html">About Us</a></li>
                            <li><a class="nav-link active" href="#">Contact</a></li>
                          </ul>
              
                          <ul class="navbar-nav ml-auto">
                            <li><a class="nav-link active" href="signup.html">Sign Up</a></li>
                            <li><a class="nav-link active" href="login.html">Login</a></li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                  </div>


<?php
$userName = $_POST['username'];
$password = $_POST['password'];

$host= "localhost";
$user= "s272ahme";
$pass = "tyctAfRy";
$name = "s272ahme";
// table name UserInfo
// sql var usrName and pass in the table

$conn =  mysqli_connect($host, $user,$pass,$name);
// checking connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$checkSignUp = "SELECT usrName, pass FROM UserInfo WHERE usrName='$userName'";
$result = mysqli_query($conn, $checkSignUp);
$info = mysqli_fetch_assoc($result);

if($userName!=$info['usrName'] and $password!=$usrIn['pass']){
    $sql = "INSERT INTO UserInfo(usrName, pass) 
    VALUES('$userName','$password');";
    if(!mysqli_multi_query($conn, $sql)){
        echo nl2br("Error for ins: " . "<br>" . mysqli_error($conn)."\n");
    }
    else {echo "<script> location.href='afterLogMain.html'; </script>";}

}
else {
  echo "<div id=\"formcontainer\">";
  echo "<div class=\"row\">";
  echo "<div class=\"col-lg-12\">";
  echo "<div id=\"loginContent\">";
  echo "<div id=\"header\">";
  echo "<h3 id=\"fail\">Please enter another username.</h3>";
  echo "<h3 id=\"fail\">The username is already in use.</h3>";
  echo "<br>";
  echo "<a href=\"signup.html\"><button class=\"btn btn-dark btn-lg\">Try again</button></a>";
}

mysqli_close($conn);
?>
</body>
</html>
