<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/11/2018
 * Time: 13:38
 */

session_start();

// gets the lego idea and the associate comments
$id = $_GET["id"];
$result = $app['database']->getIdea($id);
$comments = $app['database']->getAllCommentsByPost($id);

require 'views/showIdea.view.php';