<?php

$data0=array(1,2,4,4,5,6,67);

$data1=array(
    "fruits"=>"apple",
    "veg"=>"Biryani",
    "non-veg"=>"Chicken"
);

$jsonData=json_encode($data1);
$jsonDecodedData=json_decode($jsonData);

$data2=array(
    "fruits"=>array("apple","mango","banana"),
    "veg"=>"Biryani",
    "non-veg"=>"Chicken"
);
?>

<pre>
<?php
// print_r($data0);
print_r($data1);
print_r($jsonData);
print_r($jsonDecodedData);
// print_r($data2);
