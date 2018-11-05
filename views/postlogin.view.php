<?php require 'partials/head.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1" style="margin-top: 1vh">
            <?php
            echo '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Welkom ' . $_SESSION["fname"] . ' !</h1>
                    <p class="lead">Welkom terug bij de boardgame app dashboard</p>
                </div>
            </div>';

            ?>


        </div><!-- End div -->
    </div> <!-- End div row -->
</div> <!-- End container -->


<?php require 'partials/foot.php'; ?>
