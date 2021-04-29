<?php
$unameAd="admin";
$pwordAd="1234";
$unameSeeker="seeker";
$pwordSeeker="1234";
$unamePEmp="pemp";
$pwordPEmp="1234";
$unameCEmp="cemp";
$pwordCEmp="1234";
$userNameErr = $passErr = "";
$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $userNameErr = "UserName is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $userNameErr = "Only alpha numeric characters, period, dash or underscore allowed";
      $username ="";
    }
    else if (strlen($username)<2) {
      $userNameErr = "At least two charecters needed";
      $username ="";
    }
  }
  
  if (empty($_POST["Password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["Password"]);
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


session_start();

if (isset($_POST['username'])) {
	if ($username==$unameAd && $password==$pwordAd) {
		$_SESSION['username'] = $unameAd;
    $_SESSION['password'] = $pwordAd;
		header("location:../admin.php");
	}
  else if ($username==$unameSeeker && $password==$pwordSeeker) {
    $_SESSION['username'] = $unameAd;
    $_SESSION['password'] = $pwordAd;
    header("location:../seeker.php");
  }
  else if ($username==$unamePEmp && $password==$pwordPEmp) {
    $_SESSION['username'] = $unameAd;
    $_SESSION['password'] = $pwordAd;
    header("location:../personalEmployer.php");
  }
  else if ($username==$unameCEmp && $password==$pwordCEmp) {
    $_SESSION['username'] = $unameAd;
    $_SESSION['password'] = $pwordAd;
    header("location:../corporateEmployer.php");
  }
	else{
		$msg="username or password invalid";
		echo "<script>alert('username or pass incorrect!')</script>";
	}

}

 ?>