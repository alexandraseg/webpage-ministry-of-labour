<?php

require '../../config.php';
session_start();


if (isset($_POST['remotework']) ) {

    $from = $_POST['from'];
    $to = $_POST['to'];
    $afm = $_POST['afm'];

    $query = "INSERT INTO tilergasia  (adeia_apo, adeia_eos, afm , afm_etairias) VALUES('$from', '$to', '$afm', '$afm_etairia')";
    $result = mysqli_query($db,$query);

    if ($result) {
        $_SESSION['afm'] = $afm;
        header("Location: ../successmessage.php");

    }
    else{
        $_SESSION['workpermit'] = 'error';
        header("Location: ../workpermit.php");

        die;
    }
}