<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The output of PHP is HTML</title>
</head>
<body>
<?php
  # This simple example shows how the output of
  # PHP code is simply HTML
  // Comments are used to explain complex bits of code.

  echo '<h2> Ways to output HTML </h2>';
  echo '<p> Here we have a list: </p>';
  echo '<ul>';
  echo ('<li>One list item</li>');
  print '<li>The second list item</li>';
  print ('</ul>');

  /*
    'echo' is a PHP command, the web server parses this
     and outputs plain HTML and CSS. In the case of echo
     it simply echoes the text specified.
   */
?>
</body>
</html>
