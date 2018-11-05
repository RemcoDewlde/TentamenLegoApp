<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home">Lego-App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if ($current == 'home') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                </li>
            <?php else : ?>
                <li class="nav-item ">
                    <a class="nav-link" href="home">Home </a>
                </li>
            <?php endif; ?>
            <?php if ($current == 'games') : ?>
                <li class="nav-item active">
                    <a class="nav-link" href="ideas">ideas <span class="sr-only">(current)</span></a>
                </li>
            <?php else : ?>
                <li class="nav-item ">
                    <a class="nav-link" href="ideas">ideas </a>
                </li>
            <?php endif; ?>
            <?php

            // if the session is not empty show login option in the nav otherwise dont.
                if (empty($_SESSION)){
                    if ($current == 'login'){
                        echo '<li class="nav-item active">
                                <a class="nav-link" href="login">Login <span class="sr-only">(current)</span></a>
                              </li>';
                    }
                    else{
                        echo '
                            <li class="nav-item ">
                                <a class="nav-link" href="login">Login </a>
                            </li>';
                    }
                }
                // if there is a session show the signout option.
            if (empty($_SESSION)) {
            } else {
                echo '
                <li class="nav-item">
                    <a class="nav-link" href="signout">signout </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="editUser">account informatie </a>
                </li>
                
                
                ';
            }

            ?>

        </ul>

    </div>
</nav>

