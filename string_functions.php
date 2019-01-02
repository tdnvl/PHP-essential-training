<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>String functions</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <?php
  
  $first = "The quick brown fox";
  $second = " jumps over the lazy dog.";

  $third = $first;
  $third .= $second; // Concatenation equivalent of += or -=

  echo $third;
  
  ?>

  Lowercase: <?php echo strtolower($third); ?><br />
  Uppercase: <?php echo strtoupper($third); ?><br />
  Uppercase first: <?php echo ucfirst($third); ?><br />
  Uppercase words: <?php echo ucwords($third); ?><br />
  <br />
  Length: <?php echo strlen($third); ?><br />
  Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
  Find: <?php echo strstr($third, "brown"); ?><br />
  Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br />
  <br />
  Repeat: <?php echo str_repeat($third, 2); ?><br />
  Make substring: <?php echo substr($third, 5, 10); ?><br />
  Find position: <?php echo strpos($third, "brown"); ?><br />
  Find character: <?php echo strchr($third, "z"); ?><br />
  Word wrap: <?php echo wordwrap($third,10,"<br />\n"); ?><br />
  
</body>

</html>