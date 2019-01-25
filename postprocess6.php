<?php session_start();
$_SESSION['n'] = $n = $_POST['name'];
$_SESSION['p'] = $p = $_POST['code'];
$_SESSION['u'] = $u = $_POST['price'];
$i = $_FILES['image'];

echo $n . "<br>" .
    $p . "<br>" .
    $u . "<br>";

print_r($i);
echo "<br>";
echo $i['size'];

mkdir ('users/'.$u);

$t = $i['tmp_name'];
$_SESSION['f'] = $f = 'users/'.$u.'/'.$i['name'];

move_uploaded_file($t, $f);



$cnt = mysqli_connect('localhost', 'root', 'root', 'rayev2019');
$qry = "insert into herbal_tea (name, code, price, image) values ('$n', '$p', '$u', '$f');";
$qry2 = "insert into products (name, code, price, image) values ('$n', '$p', '$u', '$f');";
//$qry2 = "insert into black-tea (name, id, user, code, img) values ('$n', '$e', '$u', '$p', '$f');";
mysqli_query($cnt,$qry);
mysqli_query($cnt,$qry2);
//mysqli_query($cnt,$qry2);

if(!$cnt){
    echo $cnt->error;
};

mysqli_close($cnt);

header('location: herbal-tea.php');

?>