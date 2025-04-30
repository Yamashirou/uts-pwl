<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard <?= session()->get('role'); ?> (<?= session()->get('username'); ?>)</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Keranjang</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="/keranjang">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Transaksi</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="/transaksi">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area me-1"></i>
                            Area Chart Example
                        </div>
                        <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?= $this->endSection() ?>