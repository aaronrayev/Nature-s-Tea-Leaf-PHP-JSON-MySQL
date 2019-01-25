<?php session_start();
$_SESSION['n'] = $n = $_POST['name'];
$_SESSION['e'] = $e = $_POST['email'];
$i = $_FILES['photo'];

echo $n . "<br>" .
    $e . "<br>" .
   
print_r($i);
echo "<br>";
echo $i['size'];

mkdir ('users/'.$u);

$t = $i['tmp_name'];
$_SESSION['f'] = $f = 'users/'.$u.'/'.$i['name'];

move_uploaded_file($t, $f);



$cnt = mysqli_connect('localhost', 'root', 'root', 'rayev2019');
$qry = "insert into d19 (name, email, img) values ('$n', '$e', '$f');";

mysqli_query($cnt,$qry);

if(!$cnt){
    echo $cnt->error;
};

mysqli_close($cnt);

header('location: index.php');

?>