<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/11/2018
 * Time: 11:49
 */

session_start();
if(!empty($_SESSION)) {
    var_dump($_POST);

    //<editor-fold desc="replace emty string for null">
    if ($_POST["step01"] == ""){
        $_POST["step01"] = null;
    }
    if ($_POST["step02"] == ""){
        $_POST["step02"] = null;
    }
    if ($_POST["step03"] == ""){
        $_POST["step03"] = null;
    }
    if ($_POST["step04"] == ""){
        $_POST["step04"] = null;
    }
    if ($_POST["step05"] == ""){
        $_POST["step05"] = null;
    }
    if ($_POST["step05"] == ""){
        $_POST["step05"] = null;
    }
    if ($_POST["pieces01"] == ""){
        $_POST["pieces01"] = null;
    }
    if ($_POST["pieces02"] == ""){
        $_POST["pieces02"] = null;
    }
    if ($_POST["pieces03"] == ""){
        $_POST["pieces03"] = null;
    }
    if ($_POST["pieces04"] == ""){
        $_POST["pieces04"] = null;
    }
    if ($_POST["pieces05"] == ""){
        $_POST["pieces05"] = null;
    }
    if ($_POST["pieces06"] == ""){
        $_POST["pieces06"] = null;
    }

// </editor-fold>

//  changes the name to a unique id and then puts the file in the directory uploads
    $picture = $_FILES['picture'];
    $filename = $_FILES['picture']['name'];
    $fileTmpname = $_FILES['picture']['tmp_name'];
    $fileError = $_FILES['picture']['error'];
    $filetype = $_FILES['picture']['type'];

    $fileExt = explode('.', $filename);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        $newFileName = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = 'uploads/' . $newFileName;
        move_uploaded_file($fileTmpname, $fileDestination);

        $result = $app['database']->uploadidea($_POST,$fileDestination);
        var_dump($result);
        header("location:ideas");

    } else {
        echo 'bestand wordt niet ondersteun. <br> wij ondersteunen .jpg, .jpeg en .png';
    }
}else{
    header("location:login");
}