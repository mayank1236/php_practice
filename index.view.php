<?php
  echo gettype(I).'<br>';
  echo var_dump(I).'<br>';
?>

<?= I+2 .'<br>';

  echo $t . '<br>';
  

  if ($t < "20") {
    echo "Have a good day!" . '<br>';
    echo ORIGIN[0] . '<br>';
  }

  echo 'Hi';

  dd($t);

  forEach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }

  echo is_array(ORIGIN) . '<br>';
  echo pow(2, 7);

/*
  Math in-built functions

  pow(2, 7);
  rand(); returns a random number
  rand(1, 1000); range from 1 - 1000
  sqrt(100);
  ceil(4.4); returns 5
  floor(4.4); returns 4
  round(4.4) will give 4, if 4.5 will return 5;
*/

/* 
  String functions 
  strlen($string); returns string length
  strtoupper($string);
  strtolower($string);
*/

/*
  Array functions
  max($list);
  min($list);
  sort($list);
  print_r($list);
*/

?>