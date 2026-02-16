<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title;?> :: AskEarly dot NET</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/layout.css"/>
<link rel="stylesheet" type="text/css" href="/style.css"/>
</head>
<body>
  
<div class="header">
  <h1>AskEarly dot NET</h1>
  <p>A person is only as good as their sense of humor!</p>
</div>

<div class="topnav">
  <a <?php if ($selected == "home") echo 'class="selected"';?> href="/">Home</a>
  <a <?php if ($selected == "about") echo 'class="selected"';?> href="/about.php">About</a>
  <a <?php if ($selected == "story") echo 'class="selected"';?> href="/story.php">Story</a>
  <a <?php if ($selected == "dad") echo 'class="selected"';?> href="/dad.php">Dear Dad</a>
  <a <?php if ($selected == "religion") echo 'class="selected"';?> href="/religion.php">Religion</a>
</div>
<?php if ($selected == "story") {?>
<div class="subnav">
    <a <?php if ($title == "Alliances") echo 'class="selected"';?> href="/alliances.php">Alliances</a>
    <a <?php if ($title == "Abduction") echo 'class="selected"';?> href="/abduction.php">Abduction</a>
</div>
<?php }?>