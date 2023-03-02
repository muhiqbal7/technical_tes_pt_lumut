<main id="main" style="padding-top: 100px;">
    <div class="container">
        <h1> Accounts </h1>
        <a href="<?php echo base_url('akun/create_akun')?>" class="btn btn-sm btn-success mb-2 pb-2">Create Account</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $number = 1; ?>
                    <?php foreach ($get_user as $user) { ?>
                        <tr>
                            <td><?= $number; ?></td>
                            <td><?php echo cetak($user['username']) ?></td>
                            <td><?php echo cetak($user['name']) ?></td>
                            <td><?php echo cetak($user['role']) ?></td>
                            <td>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <a href="" class="btn btn-sm btn-info">View</a>
                            </td>
                        </tr>
                        <?php $number++ ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>