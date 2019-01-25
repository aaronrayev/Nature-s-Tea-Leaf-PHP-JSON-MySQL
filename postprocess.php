<?php session_start();
$_SESSION['n'] = $n = $_POST['name'];
$_SESSION['e'] = $e = $_POST['email'];
$_SESSION['u'] = $u = $_POST['user'];
$_SESSION['p'] = $p = $_POST['pw'];
$i = $_FILES['photo'];

echo $n . "<br>" .
    $e . "<br>" .
    $u . "<br>" .
    $p . "<br>";

print_r($i);
echo "<br>";
echo $i['size'];

mkdir ('users/'.$u);

$t = $i['tmp_name'];
$_SESSION['f'] = $f = 'users/'.$u.'/'.$i['name'];

move_uploaded_file($t, $f);



$cnt = mysqli_connect('localhost', 'root', 'root', 'rayev2019');
 $check=mysqli_query($cnt,"select * from nature18 where email='$e'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      echo "customer exists";
      header('location: emailexist.php');
   } else {
$qry = "insert into nature18 (name, email, user, pw, img) values ('$n', '$e', '$u', '$p', '$f');";

mysqli_query($cnt,$qry);

if(!$cnt){
    echo $cnt->error;
};

mysqli_close($cnt);

        
header('location: login.php');
}
?>