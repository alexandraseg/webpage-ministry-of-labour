<?php
require '../../../config.php';
session_start();

if (isset($_POST['edit-account']) ){
    $afm = $_SESSION['afm'];

    if (isset($_POST['id_number-change']) and $_POST['id_number-change'] != ''){
        
        $new_id = $_POST['id_number-change'];
        $sql_check_id_number = mysqli_query($db,"SELECT type FROM users WHERE afm='$afm'");
        $numrows = mysqli_num_rows($sql_check_id_number);

        if ($numrows != 1)
        {
            $_SESSION['change'] = "id_number";
            header("Location: ../edit-account.php");
        }

        $row = $sql_check_id_number->fetch_row();

        if ($row[0] == '2'){
            mysqli_query($db, "UPDATE ergazomenos SET id_number='$new_id' WHERE afm='$afm'");

        }
        else {
            mysqli_query($db, "UPDATE anergoi SET id_number='$new_id' WHERE afm='$afm'");

        }        
    }
    
    if  (isset($_POST['afm-change']) and $_POST['afm-change'] != ''){
        
        $new_afm = $_POST['afm-change'];
        $afm = $_SESSION['afm'];
        $sql_check_username = mysqli_query($db,"SELECT username FROM users WHERE afm='$afm'");
        $numrows = mysqli_num_rows($sql_check_username);

        if ($numrows != 1)
        {
            $_SESSION['change'] = "afm";
            header("Location: ../edit-account.php");
        }

        mysqli_query($db, "UPDATE users SET afm='$new_afm' WHERE afm='$afm'");
        mysqli_query($db, "UPDATE epixeirisi SET afm='$new_afm' WHERE afm='$afm'");
        mysqli_query($db, "UPDATE ergazomenos SET afm='$new_afm' WHERE afm='$afm'");
        mysqli_query($db, "UPDATE anergoi SET afm='$new_afm' WHERE afm='$afm'");


        $_SESSION['afm'] = $new_afm;

    }
    
    if  (isset($_POST['username-change']) and $_POST['username-change'] != ''){
        
        $new_username = $_POST['username-change'];
        $afm = $_SESSION['afm'];
        $sql_check_username = mysqli_query($db,"SELECT username FROM users WHERE afm='$afm'");
        $numrows = mysqli_num_rows($sql_check_username);

        if ($numrows != 1)
        {
            $_SESSION['change'] = "username";
            header("Location: ../edit-account.php");
        }

        mysqli_query($db, "UPDATE users SET username='$new_username' WHERE afm='$afm'");

    }
    
    if (isset($_POST['password-change']) and $_POST['password-change'] != ''){
        $new_password = $_POST['password-change'];
        $afm = $_SESSION['afm'];

        $sql_check_username = mysqli_query($db,"SELECT username FROM users WHERE afm='$afm'");
        $numrows = mysqli_num_rows($sql_check_username);

        if ($numrows != 1)
        {
            $_SESSION['change'] = "password";
            header("Location: ../edit-account.php");
        }

        mysqli_query($db, "UPDATE users SET password='$new_password' WHERE afm='$afm'");

    }
    
    if  (isset($_POST['email-change']) and $_POST['email-change'] != ''){
        $new_email = $_POST['email-change'];
        $afm = $_SESSION['afm'];
        $sql_check_email = mysqli_query($db,"SELECT type FROM users WHERE afm='$afm'");
        $numrows = mysqli_num_rows($sql_check_email);

        if ($numrows != 1)
        {
            $_SESSION['change'] = "email";
            header("Location: ../edit-account.php");
        }

        if ($row[0] == '1')
        {
            mysqli_query($db, "UPDATE epixeirisi SET email='$new_email' WHERE afm='$afm'");

        }
        else if ($row[0] == '2'){
            mysqli_query($db, "UPDATE ergazomenos SET email='$new_email' WHERE afm='$afm'");

        }
        else {
            mysqli_query($db, "UPDATE anergoi SET email='$new_email' WHERE afm='$afm'");

        }   

    }
    
    if  (isset($_POST['user-type-change']) and $_POST['user-type-change'] != ''){
        $new_type = $_POST['user-type-change'];
        $afm = $_SESSION['afm'];
        $sql_check_email = mysqli_query($db,"SELECT type FROM users WHERE afm='$afm'");
        $numrows = mysqli_num_rows($sql_check_email);

        if ($numrows != 1)
        {
            $_SESSION['change'] = "user type";
            header("Location: ../edit-account.php");
        }

        mysqli_query($db, "UPDATE users SET type='$new_type' WHERE afm='$afm'");
        $_SESSION['type'] = $new_type;
    }
    
    if  (isset($_POST['address-change']) and $_POST['address-change'] != ''){
        $address = $_POST['address-change'];
        $afm = $_SESSION['afm'];
        $sql_check_email = mysqli_query($db,"SELECT type FROM users WHERE afm='$afm'");
        $numrows = mysqli_num_rows($sql_check_email);

        if ($numrows != 1)
        {
            $_SESSION['change'] = "user type";
            header("Location: ../edit-account.php");
        }

        if ($row[0] == '2'){
            mysqli_query($db, "UPDATE ergazomenos SET address='$address' WHERE afm='$afm'");

        }
        else {
            mysqli_query($db, "UPDATE anergoi SET address='$address' WHERE afm='$afm'");

        }     
    }
    
    if  (isset($_POST['shopaddress-change']) and $_POST['shopaddress-change'] != ''){
        $address = $_POST['shopaddress-change'];
        $afm = $_SESSION['afm'];
        $sql_check_email = mysqli_query($db,"SELECT type FROM users WHERE afm='$afm'");
        $numrows = mysqli_num_rows($sql_check_email);

        if ($numrows != 1)
        {
            $_SESSION['change'] = "user type";
            header("Location: ../edit-account.php");
        }
        
        mysqli_query($db, "UPDATE epixeirisi SET address='$address' WHERE afm='$afm'");          
    }
    
    if  (isset($_POST['shopname-change']) and $_POST['shopname-change'] != ''){
        $shopname = $_POST['shopname-change'];
        $afm = $_SESSION['afm'];
        $sql_check_email = mysqli_query($db,"SELECT type FROM users WHERE afm='$afm'");
        $numrows = mysqli_num_rows($sql_check_email);

        if ($numrows != 1)
        {
            $_SESSION['change'] = "user type";
            header("Location: ../edit-account.php");
        }
        
        mysqli_query($db, "UPDATE epixeirisi SET eponimia='$shopname' WHERE afm='$afm'");          
    }

    $_SESSION['change'] = "OK";
    header("Location: ../account.php");

}
?>