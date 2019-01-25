<?php

$n = $_POST['name'];
$g = $_POST['gender'];

//echo $n . '<br>' . $g;

$d = file_get_contents('ppl.json');
$d = json_decode($d, true);

$i = count($d);
++$i;

$a = [
    "id" => $i,
    "name" => $n,
    "gender" => $g
];

array_push($d, $a);

$d = json_encode($d);
file_put_contents('ppl.json', $d);

//print_r($d);

$t = $_FILES['photo']['tmp_name'];
$p = 'img/'.$i.'.jpg';

move_uploaded_file($t, $p);
?>