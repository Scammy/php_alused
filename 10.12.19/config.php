<?php
function connect($host, $user, $pass, $dbname){
 //ühendus
    $link = mysqli_connect($host, $user, $pass, $dbname);
// kui ühendust ei tekkinud, kui link on false
    if($link === false){
        echo 'probleem andmebaasi ühendamisega<br>';
        exit;
    }
//olemasolev ühendus
    return $link;
}

//päringu saatmine
function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result===false){
        echo 'Problem with the query<br>'.$sql.'<br><br>';
        return false;
    }
    return $result;
}