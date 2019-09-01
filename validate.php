<?php

require 'functions.php';

if (isset($_POST['subBtn'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $year = $_POST['year'];
  $gender = $_POST['gender'];


if (isset($_POST['languages'])) {
  $languages = $_POST['languages'];
}

} else {
  header('Location: index.php');
}


if (isset($languages)) {
  echo "<h2>Welcome $username</h2>";
  foreach ($languages as $language ) {
    echo "<h4>We need $language developer</h4>";
  }

  echo "<h5>We send u email at <span style=\"text-decoration: underline\">$email</span></h5>";
}else {
  echo "<h2>Sory we need one language</h2>";
}







 ?>
