

<?php include('_header.php'); ?>




<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h1 class="text-center">Login for at spille</h1>
            </div>
            <div class="modal-body">

                <form method="post" action="index.php" name="loginform">

                    <input id="user_name" class="form-control" type="text" name="user_name" placeholder="Brugernavn" required />
                    <input id="user_password" class="form-control" type="password" name="user_password" autocomplete="off" placeholder="Kodeord" required />

                    <input type="submit"  name="login" class="page-scroll btn btn-sm btn-block btn-xl" value="<?php echo WORDING_LOGIN; ?>" />
                    <div class="row">
                        <div class="col-lg-4" align="left">
                            <a href="register.php"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
                        </div>
                        <div class="col-lg-4" align="center">
                            <a href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
                        </div>
                        <div class="col-lg-4" align="right">
                            <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
                            <label for="user_rememberme"><?php echo WORDING_REMEMBER_ME; ?></label>
                        </div>
                    </div>
                </form>
                <br>             

                <a href="info.php" type="button" class="btn btn-lg btn-block btn-success">info om krigen</a>
                <br>
                <div align="right">
                    <?php
                    if (isset($login)) {
                        if ($login->errors) {
                            foreach ($login->errors as $error) {
                                echo $error;
                            }
                        }
                        if ($login->messages) {
                            foreach ($login->messages as $message) {
                                echo $message;
                            }
                        }
                    }
                    ?>

                    <?php
                    if (isset($registration)) {
                        if ($registration->errors) {
                            foreach ($registration->errors as $error) {
                                echo $error;
                            }
                        }
                        if ($registration->messages) {
                            foreach ($registration->messages as $message) {
                                echo $message;
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>







<?php include('_footer.php'); ?>
