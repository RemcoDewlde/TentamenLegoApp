<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/11/2018
 * Time: 14:23
 */


session_start();

if (empty($_SESSION)){
    header("location:login");
}else{
    if ($_POST["comment"] != null){
        var_dump($_POST);
        $app['database']->makeComment($_POST);
        $headerstring = 'location:showIdea?id=' . $_POST["ideaId"];
        header($headerstring);

    }else{
        $headerstring = "location:showIdea?id=" . $_POST["ideaId"];
        header($headerstring);

    }


}

