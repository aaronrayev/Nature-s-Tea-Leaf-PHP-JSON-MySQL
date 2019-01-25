<?php
$date =  date('m-d-y');
$n = $_POST['fullName'];
$c = $_POST['city'];
$s = $_POST['state'];
$t = $_POST['tel'];
$e = $_POST['e-mail'];
$ta = $_POST['txtArea'];
$news = $_POST['newsletter'];
$special = $_POST['special'];

$a = array(
	"date" => $date,
    "name" => $n,
	"city" => $c,
	"state" => $s,
    "tel" => $t,
	"e-mail" => $e,
	"txtArea" => $ta,
    "newsletter" => $news,
    "special" => $special
);

$d = file_get_contents('data.json');
$d = json_decode($d, true);

array_unshift($d, $a);
//array_push($d, $a); //adds entries to the bottom of the table

$d = json_encode($d);
file_put_contents('data.json', $d);

 header('location:../thank-you.php');   

?>
