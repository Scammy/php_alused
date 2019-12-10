<?php
/** file name: h01.php; ... */

// lisame andmebaasitöötlus funktsioonid

require_once 'db_fnk1.php';
// lisame kasutusele anmebaasi serveri konfiguratsiooni
require_once 'config.php';

//  ühendus ikt serveris oleva andmebasiga
$ikt = connect(HOST, USER, PASS, DBNAME);
echo '<pre>';
print_r($ikt);

// tabeli ümbernimetamine
$sql = 'RENAME TABLE `lehestet_db_php´.`TABLE1´´ TO `lehestet_db_php´.`koolid2015´ ';

$sql'SELECT * FROM koolid2015';
$result = query($sql, $ikt);
echo '<pre>';