<?php

// compares the password and the repeat password if they are the same create the user
if ($_POST["password"] == $_POST["Rpassword"]) {

    $roleid = 1;
    $result = $app['database']->signup($_POST, $roleid);
    if ($result != "00000") {
        header("location:error");
    } else {
        header("location:login");
    }

} else {
    header("location:error");
}

