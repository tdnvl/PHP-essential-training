<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Integers</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

  <body>
    <?php
      $var1 = 3;
      $var2 = 4;
    ?>
    Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
    <br />
    Absolute value:   <?php echo abs(0 - 300);   ?><br />
    Exponential:       <?php echo pow(2,8);       ?><br />
    Square root:       <?php echo sqrt(100);     ?><br />
    Modulo:           <?php echo fmod(20,7);     ?><br />
    Random:           <?php echo rand();         ?><br />
    Random (min,max): <?php echo rand(1,10);     ?><br />
    <br />
    += : <?php $var2 += 4; echo $var2; ?><br />
    -= : <?php $var2 -= 4; echo $var2; ?><br />
    *= : <?php $var2 *= 3; echo $var2; ?><br />
    /= : <?php $var2 /= 4; echo $var2; ?><br />
    <br />
    Increment: <?php $var2++; echo $var2; ?><br />
    Decrement: <?php $var2--; echo $var2; ?><br />
    <br />
    <?php
      // PHP will convert a string to an integer
      // but it is sloppy programming
      echo 1 + "2 houses";
    ?>
  </body>

</html>