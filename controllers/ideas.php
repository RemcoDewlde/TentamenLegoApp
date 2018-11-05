<?php
/**
 * Created by PhpStorm.
 * User: remco
 * Date: 05/11/2018
 * Time: 09:00
 */

session_start();
$results = $app['database']->getAll('legoideas');

require 'views/ideas.view.php';