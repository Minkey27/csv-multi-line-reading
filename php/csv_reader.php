<?php
$row = 1;
if (($handle = fopen("multiline.csv", "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
    $row++;
    foreach ($data as $key => $val) {
       echo $val;
       echo ";";
    }
    echo PHP_EOL ."--------NEW_ROW----------" . PHP_EOL;
  }
  fclose($handle);
}

/*
$ php csv_reader.php

column1<br />
column2<br />
column3<br />
------------------
 NEW ROW 1<br />
Multi line
text
field<br />
last value<br />
------------------
 NEW ROW 2<br />
Multi line
text
field<br />
last value<br />
------------------
 NEW ROW 3<br />
Multi line
text
field<br />
last value<br />
------------------
 NEW ROW

*/
?>

