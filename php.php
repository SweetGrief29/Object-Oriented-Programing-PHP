<?php
 function "koneksi.php"{
    $missingParameters = array();
    if (!isset($_POST['username'])) {
        array_push($missingParameters, 'username');
    }
    if (!isset($_POST['password'])) {
        array_push($missingParameters, 'password');
    }
    reportMissingParameters($missingParameters);     // logic
    $username = $_POST['username'];
    $password = $_POST['password'];      // response
    Flight::json(array(
            "id"=>"id"
            "nama"=>"nama"
            "alamat"=>"alamat"
            "tanggal lahir"=>"tanggal lahir"
    ));
}
 
function reportMissingParameters($missingParameters) {
    $parameters = implode(", ", $missingParameters);
    Flight::json(array(
    'result' => 'Success',
    'item' => $item
    ));
 echo json_encode($json);
}
 
?>