<?php require 'partials/head.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 offset-1" style="margin-top: 1vh">

            <form action="login" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input name="email" type="text" class="form-control" placeholder="email" aria-label="email"
                           aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                    </div>
                    <input name="password" type="password" class="form-control" placeholder="password" aria-label="password"
                           aria-describedby="basic-addon1">
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">login</button>
            </form>
            if you dont have an account: <a href="signup">sign-up</a>

        </div><!-- End div -->
    </div> <!-- End div row -->
</div> <!-- End container -->


<?php require 'partials/foot.php'; ?>
