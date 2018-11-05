<?php require 'partials/head.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1" style="margin-top: 1vh">

                <form method="post" action="addidea" enctype="multipart/form-data">

                    <div class="input-group mb-3">
                        <input name="name" type="text" class="form-control" placeholder="project name" aria-label="name"
                               aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                            <input name="picture" type="file" class="btn btn-info">
                    </div>



                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Description</span>
                        </div>
                        <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <hr>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 1</span>
                        </div>
                        <input name="step01" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 1</span>
                        </div>
                        <input name="pieces01" type="text" class="form-control" placeholder="pieces"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 2</span>
                        </div>
                        <input name="step02" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 2</span>
                        </div>
                        <input name="pieces02" type="text" class="form-control" placeholder="pieces"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 3</span>
                        </div>
                        <input name="step03" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 3</span>
                        </div>
                        <input name="pieces03" type="text" class="form-control" placeholder="pieces"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 4</span>
                        </div>
                        <input name="step04" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 4</span>
                        </div>
                        <input name="pieces04" type="text" class="form-control" placeholder="pieces" aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 5</span>
                        </div>
                        <input name="step05" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 5</span>
                        </div>
                        <input name="pieces05" type="text" class="form-control" placeholder="pieces"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <hr>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Step 6</span>
                        </div>
                        <input name="step06" type="text" class="form-control" placeholder="step"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">pieces 6</span>
                        </div>
                        <input name="pieces06" type="text" class="form-control" placeholder="pieces"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <br>
                </form>
                <br>
                <br>
                <br>
                <br>


            </div><!-- End div - class Player-->
        </div> <!-- End div row -->
    </div> <!-- End container -->
<?php require 'partials/foot.php'; ?>