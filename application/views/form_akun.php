<main id="main" style="padding-top: 200px;">
    <div class="container">
        <h1> Create Account </h1>
        <form action="<?php echo base_url('akun/create')?>" method="post">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="form-group required">
                <label class="control-label" for="username">Username</label>
                <input type="text" id="username" class="form-control" name="username" maxlength="45" aria-required="true">

                <div class="help-block"></div>
            </div>
            <div class="form-group required">
                <label class="control-label" for="password">Password</label>
                <input type="password" id="password" class="form-control" name="password" maxlength="250" aria-required="true">

                <div class="help-block"></div>
            </div>
            <div class="form-group account_name required">
                <label class="control-label" for="account_name">Name</label>
                <input type="text" id="account_name" class="form-control" name="account_name" maxlength="45" aria-required="true">

                <div class="help-block"></div>
            </div>
            <div class="form-group account-role required">
                <label class="control-label" for="account_role">Role</label>
                <select id="account_role" class="form-control" name="account_role" aria-required="true">
                    <option value="admin">Admin</option>
                    <option value="author">Author</option>
                </select>

                <div class="help-block"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
            </div>

        </form>
    </div>
</main>