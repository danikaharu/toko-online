<?php
$session = session();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TOKO ONLINE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <?php if ($session->get('isLoggedIn')) :  ?>
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= site_url('home/index') ?>">Home</a>
                    </li>
                </ul>
            <?php endif  ?>
            <div class="d-flex justify-content-between">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <?php if ($session->get('isLoggedIn')) :  ?>
                        <li class="nav-item">
                            <a class="btn btn-success" href="<?= site_url('auth/logout') ?>">Logout</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item">
                            <a class="btn btn-success" href="<?= site_url('auth/login') ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success" href="<?= site_url('auth/register') ?>">Register</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </div>
</nav>