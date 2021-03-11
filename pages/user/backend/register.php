<?php

require '../../../config.php';
session_start();

if (isset($_POST['register']) and isset($_POST['user-type']) ){

    $type = $_POST['user-type'];
    $afm = $_POST['afm'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_verify = $_POST['password-verify'];


    $sql_check_afm = mysqli_query($db,"SELECT afm FROM users WHERE afm='$afm'");
    $sql_check_username = mysqli_query($db,"SELECT username FROM users WHERE username='$username'");

    $numrows = mysqli_num_rows($sql_check_afm);
    if ($numrows > 0)
    {   
        $_SESSION['register'] = "afm";
        header("Location: ../register.php");
        die;
    }
    $numrows = mysqli_num_rows($sql_check_username);
    if ($numrows > 0)
    {
        $_SESSION['register'] = "username";
        header("Location: ../register.php");
        die;
    }
    if ( strcmp($password, $password_verify) !== 0  )
    {   

        $_SESSION['register'] = "password";
        header("Location: ../register.php");
        die;
    }

    //insert the user in the db

    $query = "INSERT INTO users (afm, username, password , type) VALUES('$afm', '$username', '$password', '$type')";
    $result = mysqli_query($db,$query);
    if ($result) {
        $_SESSION['username'] = $username;
        $_SESSION['afm'] = $afm;
        $_SESSION['type'] = $type;
        $_SESSION['login'] = "OK";
        $_SESSION['logged-in-now'] = "Y";
    }
    else{
        
        $_SESSION['register'] = "error";
        header("Location: ../register.php");
        die;
    }

    if ( $type == '1' ){ //ergodotis
        $shopname = $_POST['shopname'];
        $shopAddress = $_POST['shop-address'];
        $email = $_POST['email'];

        $query = "INSERT INTO epixeirisi (afm, address, email , eponimia) VALUES('$afm', '$shopAddress', '$email', '$shopname')";
        $result = mysqli_query($db,$query);



    } 
    else if ($type == '2' ){ //ergazomenos
        $id_number = $_POST['id_number'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $address = $_POST['ergazomenos-address'];

        $query = "INSERT INTO ergazomenos (id_number, afm , name , surname , email , address) VALUES('$id_number', '$afm', '$name', '$surname', '$email', '$address')";
        $result = mysqli_query($db,$query);

    }
    else {
        $id_number = $_POST['id_number'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $address = $_POST['ergazomenos-address'];

        $query = "INSERT INTO anergoi (id_number, afm , name , surname , email , address) VALUES('$id_number', '$afm', '$name', '$surname', '$email', '$address')";
        $result = mysqli_query($db,$query);

    }

    if ($result) {
        $_SESSION['username'] = $username;
        $_SESSION['afm'] = $afm;
        $_SESSION['type'] = $type;
        $_SESSION['login'] = "OK";
        $_SESSION['logged-in-now'] = "Y";
        header("Location: ../account.php");
    }
    else{
        
        $_SESSION['register'] = "error";
        header("Location: ../register.php");
        die;
    }


    mysqli_close($db);
}
 
?>