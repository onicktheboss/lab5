<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>



<?php
 if (isset($_POST['submit']))
  { $_SESSION["name"] = $_POST["name"];
  $_SESSION["email"] = $_POST["email"];
 $_SESSION["blood"] = $_POST["blood"];
 $_SESSION["degree"] = $_POST["degree"];
  $_SESSION["gender"] = $_POST["gender"];
 $_SESSION["date"] = $_POST["date"];


 
 echo "Name is = ".  $_SESSION["name"] .'</br>';
 echo "Email is = ".  $_SESSION["email"] .'</br>';
 echo "Blood Group is = ".  $_SESSION["blood"] .'</br>';
 echo "degree Group is = ".  $_SESSION["degree"] .'</br>';
 echo "Gender Group is = ".  $_SESSION["gender"] .'</br>';
 echo " birthday is = ".  $_SESSION["date"] .'</br>';

 
 }
 ?>

 <?php
$file = fopen("User Info.txt", "w") or die("Unable to open file!");

$data = $user->get_name()."\n";

fwrite($file, $data);

$data = $user->get_email()."\n";

fwrite($file, $data);

$data = $user->get_date()."\n";

fwrite($file, $data);

$data = $user->get_gender()."\n";

fwrite($file, $data);

$data = $user->get_degree()."\n";

fwrite($file, $data);

$data = $user->get_blood()."\n";

fwrite($file, $data);

fclose($file);

echo "file has created";
?>




</body>
</html>
