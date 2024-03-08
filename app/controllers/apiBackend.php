<?php

// Load variables
$file=__DIR__."/../../storage/browser.txt";
$myfile = fopen($file, "r");;
if(isset($myfile)){
    $data = fread($myfile,filesize($file));
    fclose($myfile);
}else{
    $data= '<tr> No data </tr>';
}

echo $data;