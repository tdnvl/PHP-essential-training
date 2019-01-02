<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Strings</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php
  echo "Hello, world!<br />";
  echo 'Hello, world!<br />';
  $greeting = "Hello";
  $target = "world";
  $phrase = $greeting . ", " . $target;
  echo $phrase . "!";
  ?>
<br/>
  <?php
  echo "{$phrase} again!<br/>"; // I can insert the variable inside the double quotes and it will output as the variable value. This only works with double quotes.
                                // The curly braces make it super safe. It means: This is a variable!
  ?>
  
</body>

</html>