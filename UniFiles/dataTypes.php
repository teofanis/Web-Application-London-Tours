<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP data types</title>
</head>
<body>
<?php
  echo '<h2> Types of variables</h2>';

  $example_int = 5;
  echo 'Integer: ' . $example_int . '<br>';

  $example_double = 3.14;
  echo 'Double: ' . $example_double . '<br>';

  # Integers and doubles can be used in arithmetic
  # operations.
  $result = $example_int * $example_double;
  print 'The result is: ' . $result . '<br>';

  $example_boolean = TRUE;
  echo 'Boolean: ' . $example_boolean . '<br>';

  $example_string = 'I am a string';
  echo 'String: ' . $example_string . '<br>';

  $example_null = NULL;
  echo 'NULL: ' . $example_null . '<br>';

  $_valid_variable_name = 'Valid';

  # $invalid-variable-name = 'Invalid';
?>
</body>
</html>
