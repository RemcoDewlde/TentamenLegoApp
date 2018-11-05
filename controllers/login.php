<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/11/2018
 * Time: 08:48
 */


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require 'views/login.view.php';
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = $app['database']->login($_POST);

    if (empty($result)) {
        header("location:error");
    } else {
        // if the result array is not null create a session
        session_start();
        $_SESSION["id"] = $result[0]["id"];
        $_SESSION["fname"] = $result[0]["fname"];
        $_SESSION["lname"] = $result[0]["lname"];
        $_SESSION["email"] = $result[0]["email"];
        $_SESSION["mobile"] = $result[0]["mobile"];
        $_SESSION["roleid"] = $result[0]["roleid"];

        // redirects to the postlogin / dashboard screen
        header("location:postlogin");
    }

}
