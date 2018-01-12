<?php 

include "function.php";
include "dbconnection.php";

$title = $mysqli->real_escape_string($_POST["titel"]);
$description = $mysqli->real_escape_string($_POST["description"]);
$rolechoose = $mysqli->real_escape_string($_POST["rolechoose"]);
// $file = $mysqli->real_escape_string($_FILES["file"]["name"]);

// $uploaddir = 'img/';
// $uploadfile = $uploaddir . basename($file);


// if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
//     echo "Datei ist valide und wurde erfolgreich hochgeladen.\n";
// } else {
//     echo "Möglicherweise eine Dateiupload-Attacke!\n";

// print_r($_FILES);
// }
?>