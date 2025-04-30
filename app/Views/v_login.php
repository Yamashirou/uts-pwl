<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>
<?php
$username = [
    'name' => 'username',
    'id' => 'username',
    'class' => 'form-control'
];

$password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'form-control'
];
?>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (session()->getFlashData('failed')) {
                        ?>
                            <div class="col-12 alert alert-danger" role="alert">
                                <hr>
                                <p class="mb-0">
                                    <?= session()->getFlashData('failed') ?>
                                </p>
                            </div>
                        <?php
                        }
                        ?>
                        <?= form_open('login', 'class = "row g-3 needs-validation"') ?>
                        <div class="col-12">
                            <label for="yourUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <?= form_input($username) ?>
                                <div class="invalid-feedback">Please enter your username.</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="yourPassword" class="form-label">Password</label>
                            <?= form_password($password) ?>
                            <div class="invalid-feedback">Please enter your password!</div>
                        </div>
                        <div class="col-12">
                            <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary w-100']) ?>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>