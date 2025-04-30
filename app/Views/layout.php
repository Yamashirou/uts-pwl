<?php
$hlm = "Home";
if (uri_string() != "") {
  $hlm = ucwords(uri_string());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo $hlm ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>SBAdmin/css/styles.css" rel="stylesheet" />
    <link href="<?= base_url() ?>SBAdmin/assets/img/favicon.png" rel="icon">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?= $this->include('components/header') ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <?= $this->include('components/sidebar') ?>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            
            <?= $this->renderSection('content') ?>
            <?= $this->include('components/footer') ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>SBAdmin/assets/demo/chart-area-demo.js"></script>
    <script src="<?= base_url() ?>SBAdmin/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>SBAdmin/js/datatables-simple-demo.js"></script>
</body>

</html>