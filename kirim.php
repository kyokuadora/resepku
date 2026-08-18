<?php
include 'resepku/process.php';
function lesgo($namafile){
    $x = fopen($namafile, "r");
    while (($data = fgets($x)) !== false) {
        $data = trim($data);
        if($data !== '') {
            $query = "INSERT INTO bahan VALUES (NULL, '$data')";
            mysqli_query(connect(), $query);
        }
    }
    fclose($x);
}