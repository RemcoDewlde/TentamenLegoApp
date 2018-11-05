<?php
/**
 * GET routes
 */

if ($_SERVER['HTTP_HOST'] == "localhost:8000") {

    // all the server routes for when we work on a localserver

    $router->get('', 'controllers/index.php');
    $router->get('home', 'controllers/index.php');
    $router->get('login', 'controllers/login.php');
    $router->get('ideas', 'controllers/ideas.php');
    $router->get('signup', 'controllers/signup.php');
    $router->get('error', 'controllers/error.php');
    $router->get('postlogin', 'controllers/postlogin.php');
    $router->get('signout', 'controllers/signout.php');
    $router->get('makeIdea', 'controllers/makeIdea.php');
    $router->get('showIdea','controllers/showIdea.php');
    $router->get('editUser','controllers/editUser.php');



    /**
     * POST routes
     */
    $router->post('signupUser', 'controllers/signupUser.php');
    $router->post('login', 'controllers/login.php');
    $router->post('addidea','controllers/addidea.php');
    $router->post('addcomment','controllers/addcomment.php');
    $router->post('editUser','controllers/editUser.php');
    $router->post('editPassword','controllers/editPassword.php');

}else{

    // all the routes for when the project is uploaded to the server

    $router->get('~s1128681/P1_OOAPP_Tentamen', 'controllers/index.php');
    $router->get('~s1128681/P1_OOAPP_Tentamen/home', 'controllers/index.php');
    $router->get('~s1128681/P1_OOAPP_Tentamen/login', 'controllers/login.php');
    $router->get('~s1128681/P1_OOAPP_Tentamen/ideas', 'controllers/ideas.php');
    $router->get('~s1128681/P1_OOAPP_Tentamen/signup', 'controllers/signup.php');
    $router->get('~s1128681/P1_OOAPP_Tentamen/error', 'controllers/error.php');
    $router->get('~s1128681/P1_OOAPP_Tentamen/postlogin', 'controllers/postlogin.php');
    $router->get('~s1128681/P1_OOAPP_Tentamen/signout', 'controllers/signout.php');
    $router->get('~s1128681/P1_OOAPP_Tentamen/makeIdea', 'controllers/makeIdea.php');
    $router->get('~s1128681/P1_OOAPP_Tentamen/showIdea','controllers/showIdea.php');
    $router->get('~s1128681/P1_OOAPP_Tentamen/editUser','controllers/editUser.php');



    /**
     * POST routes
     */
    $router->post('~s1128681/P1_OOAPP_Tentamen/signupUser', 'controllers/signupUser.php');
    $router->post('~s1128681/P1_OOAPP_Tentamen/login', 'controllers/login.php');
    $router->post('~s1128681/P1_OOAPP_Tentamen/addidea','controllers/addidea.php');
    $router->post('~s1128681/P1_OOAPP_Tentamen/addcomment','controllers/addcomment.php');
    $router->post('~s1128681/P1_OOAPP_Tentamen/editUser','controllers/editUser.php');
    $router->post('~s1128681/P1_OOAPP_Tentamen/editPassword','controllers/editPassword.php');
}


