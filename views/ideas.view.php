<?php require 'partials/head.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1" style="margin-top: 1vh">
                <a href="makeIdea" class="btn btn-primary" style="margin-top: 1vh">make an idea</a>
                <div class="row" style="margin-top: 1vh">




                    <?php
                    foreach ($results as $result) {
                        echo '<div class="col-sm-4 py-2">
                                <div class="card" style="width:20vw;">
                                    <img class="card-img-top" src=' . $result["img"] . ' alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $result["name"] . '</h5>
                                        <p class="card-text">' . $result["description"] . '</p>
                                        <form action="showIdea" method="get">
                                            <button type="submit" name="id" value="'. $result["id"] .'" class="btn btn-primary">Go to idea</button>
                                        </form>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>

                </div>
            </div><!-- End div - class Player-->
        </div> <!-- End div row -->
    </div> <!-- End container -->
<?php require 'partials/foot.php'; ?>