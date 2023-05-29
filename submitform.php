<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo '<h1>Welcome ' . $_POST["first"] . $_POST["last"] . '</h1>' . PHP_EOL;
    echo '<h1>Your Email Address is ' . $_POST["user"] . '</h1>' . PHP_EOL;
    echo '<h1>Your Password has ' . strlen($_POST["pass1"]) . ' Characters</h1>' . PHP_EOL;

    if($_POST["pass1"] == $_POST["pass2"])
    {
      echo 'Your password is equal!' . PHP_EOL;
    }
    else
    {
      echo 'Not Equal!' . PHP_EOL;
    }

    echo 'It is a POST DATA.';

  }
  else
  {
     echo 'It is not a POST DATA.';
  }
?>