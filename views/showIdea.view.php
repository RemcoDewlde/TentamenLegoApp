<?php require 'partials/head.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1" style="margin-top: 1vh">


            <?php
                echo '
                    <style>
                        .jumbotron-fluid{
                            background-image: url("'. $result[0]["img"] .'");
                            background-size: 100vw 80vh;
                            background-repeat: no-repeat;
                        }
                    </style>


                    <div class="jumbotron jumbotron-fluid")">
                        <div class="container">
                            <h1 class="display-4" style="text-shadow: 1px 1px 1px #000;">'. $result[0]["name"] .'</h1>
                            <p class="lead"> '. $result[0]["description"] .'</p>
                        </div>
                    </div>
                    
              <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Show how to:
                            </button>
                        </h5>
                    </div>
                    
                      <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        
                        
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" >Step 1</span>
                        </div>
                        <input name="step01" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1" value="'. $result[0]["step01"] .'">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 1</span>
                        </div>
                        <input name="pieces01" type="text" class="form-control" placeholder="pieces"
                               aria-label="Username" aria-describedby="basic-addon1" '. $result[0]["pieces01"] .'>
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 2</span>
                        </div>
                        <input name="step02" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1" value="'. $result[0]["step02"] .'">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 2</span>
                        </div>
                        <input name="pieces02" type="text" class="form-control" placeholder="pieces"
                               aria-label="Username" aria-describedby="basic-addon1" '. $result[0]["pieces02"] .'>
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 3</span>
                        </div>
                        <input name="step03" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1" value="'. $result[0]["step03"] .'">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 3</span>
                        </div>
                        <input name="pieces03" type="text" class="form-control" placeholder="pieces"
                               aria-label="Username" aria-describedby="basic-addon1" '. $result[0]["pieces03"] .'>
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 4</span>
                        </div>
                        <input name="step04" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1" value="'. $result[0]["step04"] .'">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 4</span>
                        </div>
                        <input name="pieces04" type="text" class="form-control" placeholder="pieces" aria-label="Username"
                               aria-describedby="basic-addon1" '. $result[0]["pieces04"] .'>
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 5</span>
                        </div>
                        <input name="step05" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1" value="'. $result[0]["step05"] .'">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 5</span>
                        </div>
                        <input name="pieces05" type="text" class="form-control" placeholder="pieces"
                               aria-label="Username" aria-describedby="basic-addon1" '. $result[0]["pieces05"] .'>
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 6</span>
                        </div>
                        <input name="step06" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1" value="'. $result[0]["step06"] .'">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 6</span>
                        </div>
                        <input name="pieces06" type="text" class="form-control" placeholder="pieces"
                               aria-label="Username" aria-describedby="basic-addon1" '. $result[0]["pieces06"] .' >
                    </div>
                                            </div>
                    </div>
                    </div>
                    </div>
                ';

            ?>

            <hr>
            <h4>Make a Comment</h4>
            <form action="addcomment" method="post">
                <?php
                if (empty($_SESSION)){

                }else{
                    echo '
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Comment</span>
                    </div>
                    <textarea name="comment" class="form-control" aria-label="With textarea"></textarea>
                </div>
                
                <input type="hidden" name="ideaId" value="' . $result[0]['id'] . '">
                <input type="hidden" name="postedby" value=' . $_SESSION["fname"] . '>
                <br>
                <button type="submit" class="btn btn-primary">submit</button>';

                }
                ?>

            </form>
            <br>
            <hr>
            <?php
            //todo delete comments
                foreach ($comments as $comment){
                    echo '<div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">posted by: '. $comment["postedby"] .' </span>
                              </div>
                              <textarea class="form-control" aria-label="With textarea" disabled>'. $comment["comment"] .'</textarea>
                            </div>';
                }

            ?>


        </div><!-- End div - class Player-->
    </div> <!-- End div row -->
</div> <!-- End container -->
    <br>
    <br>
    <br>
    <br>


<?php require 'partials/foot.php'; ?>