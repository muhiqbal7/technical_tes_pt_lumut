<main id="main" style="padding-top: 100px;">
    <div class="container">
        <h1>Login</h1>

        <p>Please fill out the following fields to login:</p>

        <?php echo $this->session->flashdata('message') ?>
        <form class="form-horizontal" action=" " method="post">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="form-group required">
                <label class="col-lg-1 control-label" for="username">Username</label>
                <div class="col-lg-3"><input type="text" id="username" class="form-control" name="username" autofocus aria-required="true"></div>
            </div>
            <div class="form-group required">
                <label class="col-lg-1 control-label" for="password">Password</label>
                <div class="col-lg-3"><input type="password" id="password" class="form-control" name="password" aria-required="true"></div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-3"><input type="hidden" name="rememberme" value="0"><input type="checkbox" id="rememberme" name="rememberme" value="1" checked> <label for="rememberme">Remember Me</label></div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <button type="submit" class="btn btn-primary" name="login-button">Login</button>
                </div>
            </div>

        </form>
    </div>
</main>