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
php php/csv_reader.php
column1;column2;column3;
--------NEW_ROW----------
1;Multi line
text
field;last value;
--------NEW_ROW----------
2;Multi line
text
field;last value;
--------NEW_ROW----------
3;Multi line
text
field;last value;
--------NEW_ROW----------


*/
?>

