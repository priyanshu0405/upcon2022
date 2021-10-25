<?php
    
    $FILE = "accepted.csv";

    // $csv = file_get_contents($FILE);



    $fp1 = fopen('accepted.csv', "r");
    // $arr2 = fgetcsv($list2);

    $arr1 = array();
    while(!feof($fp1) && ($line = fgetcsv($fp1)) !== false) {
        $arr1[] = $line;
    }

    
    