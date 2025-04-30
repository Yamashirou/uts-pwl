<!-- sidebar.html -->
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link" href="<?= session()->get('role'); ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <?php if (session()->get('role') === 'admin'): ?>
                <div class="sb-sidenav-menu-heading">Menu <?= session()->get('role'); ?></div>
                <a class="nav-link" href="/produk">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Data Produk
                </a>
                <a class="nav-link" href="/pelanggan">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Data Pelanggan
                </a>
        </div>
    </div>
</nav>
<?php elseif (session()->get('role') === 'user'): ?>
    <div class="sb-sidenav-menu-heading">Menu <?= session()->get('role'); ?></div>
    <a class="nav-link" href="/keranjang">
        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
        Keranjang
    </a>
    <a class="nav-link" href="/transaksi">
        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
        Transaksi
    </a>
<?php endif; ?>