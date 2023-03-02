<nav class="navbar navbar-expand-lg fixed-top py-2">
    <div class="container-fluid">
        <a href="<?php echo base_url('home/admin') ?>" class="nav-link font-weight-bold">
           My Application
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Tonggle navigation">
            <span class="fa fa-bars" id="span"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="<?php echo base_url('home/admin') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#>">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="<?php echo base_url('akun/index') ?>">Akun</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="<?php echo base_url('auth/logout') ?>">Logout(Admin)</a>
                </li>
            </ul>
        </div>
    </div>
</nav>