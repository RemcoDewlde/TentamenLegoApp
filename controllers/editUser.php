<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/11/2018
 * Time: 15:10
 */



session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
    require 'views/editUser.view.php';

} elseif ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $app['database']->updateUser($_POST);
    $result = $app['database']->getUser($_POST["id"]);

    // replaces the old session data with the new
    $_SESSION["fname"] = $result[0]["fname"];
    $_SESSION["lname"] = $result[0]["lname"];
    $_SESSION["email"] = $result[0]["email"];
    $_SESSION["mobile"] = $result[0]["mobile"];
    $_SESSION["roleid"] = $result[0]["roleid"];

    header("location:editUser");

}






