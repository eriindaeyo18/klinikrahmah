<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <title><?= $title; ?></title>
        <link rel="icon" href="<?= base_url('favicon.ico'); ?>" type="image/x-icon" />
        <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name=viewport>
        <link rel=stylesheet href=<?= base_url('assets/css/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>>
        <link rel=stylesheet href=<?= base_url('assets/css/bower_components/font-awesome/css/font-awesome.min.css') ?>>
        <link rel=stylesheet href=<?= base_url('assets/css/bower_components/Ionicons/css/ionicons.min.css') ?>>
        <link rel=stylesheet href=<?= base_url('assets/css/datatables.min.css') ?>>
        <link rel=stylesheet href="<?= base_url('assets/css/bootstrap-datetimepicker.min.css'); ?>">
        <link rel=stylesheet href="<?= base_url('assets/css/AdminLTE.min.css') ?>">
        <link rel=stylesheet href="<?= base_url('assets/css/skins/_all-skins.min.css'); ?>">
        <link rel=stylesheet href="<?= base_url('assets/css/font.css'); ?>">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class=wrapper>
            <header class=main-header>
                <a href="<?= base_url(''); ?>" class=logo>
                    <span class=logo-lg><b>KLINIK RAHMAH</b></span>
                    <span class=logo-mini>
                        <img src="<?= base_url('favicon.ico'); ?>" class="img img-thumbnail img-responsive">
                    </span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href=# class=sidebar-toggle data-toggle=push-menu role=button>
                        <span class=sr-only>Toggle navigation</span>
                    </a>
                    <div class=navbar-custom-menu>
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href=# class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url('assets/img/user2-160x160.jpg') ?>" class="user-image">
                                    <span class="hidden-xs text-uppercase">
                                        <?= $this->session->userdata('username'); ?>
                                    </span>
                                </a>
                                <ul class=dropdown-menu>
                                    <li class=user-footer>
                                        <div class=pull-right>
                                            <a href="<?= base_url('Auth/Logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class=main-sidebar>
                <section class=sidebar>
                    <div class=user-panel>
                        <div class="pull-left image">
                            <img src=<?= base_url('assets/img/user2-160x160.jpg') ?> class=user-image alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p class="text-uppercase"><?= $this->session->userdata('username'); ?></p>
                            <small class="text-uppercase text-info">
                                <?php
                                if ($this->session->userdata('lvl') == 1) {
                                    echo 'Dokter';
                                } elseif ($this->session->userdata('lvl') == 2) {
                                    echo 'Administrator';
                                } elseif ($this->session->userdata('lvl') == 3) {
                                    echo 'Perawat';
                                } else {
                                    echo '';
                                }
                                ?>
                            </small>
                        </div>
                    </div>
                    <!--=========================================================================================-->
                    <?php
                    $dokter = '';
                    $admin = '';
                    $perawat = '';
                    if ($this->session->userdata('lvl') == 1) {
                        $dokter = 'show';
                        $admin = 'hidden';
                        $perawat = 'hidden';
                    } elseif ($this->session->userdata('lvl') == 2) {
                        $dokter = 'hidden';
                        $admin = 'show';
                        $perawat = 'hidden';
                    } elseif ($this->session->userdata('lvl') == 3) {
                        $dokter = 'hidden';
                        $admin = 'hidden';
                        $perawat = 'show';
                    } else {
                        $dokter = 'hidden';
                        $admin = 'hidden';
                        $perawat = 'hidden';
                    }
                    ?>
                    <!--=========================================================================================-->
                    <div class="<?= $dokter ?>">
                        <ul class="sidebar-menu">
                            <li>
                                <a href="<?= base_url("Dokter/Dashboard/index"); ?>">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sidebar-menu">
                            <li>
                                <a href="<?= base_url("Dokter/Pasien/index"); ?>">
                                    <i class="fa fa-user"></i> <span>Pasien</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="sidebar-menu">
                            <li>
                                <a href="<?= base_url("Dokter/Lap_transaksi/index"); ?>">
                                    <i class="fa fa-file"></i> <span>Laporan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--=========================================================================================-->
                    <div class="<?= $admin ?>">
                        <ul class="sidebar-menu">
                            <li>
                                <a href="<?= base_url("Administrator/Dashboard/index"); ?>">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("Administrator/Pasien/index"); ?>">
                                    <i class="glyphicon glyphicon-user"></i> <span>Pasien</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("Administrator/Transaksi/index"); ?>">
                                    <i class="glyphicon glyphicon-file"></i> <span>Transaksi</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("Administrator/R_Medis/index"); ?>">
                                    <i class="glyphicon glyphicon-list-alt"></i> <span>Rekam Medis</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url("Administrator/Obat/index"); ?>">
                                    <i class="glyphicon glyphicon-plus"></i> <span>Obat</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--=========================================================================================-->
                    <div class="<?= $perawat ?>">
                        <ul class="sidebar-menu">
                            <li>
                                <a href="<?= base_url("Perawat/Dashboard/index"); ?>">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--=========================================================================================-->
                </section>
            </aside>
            <!--=====================================================================================================-->
            <div class=content-wrapper>
                <section class=content>
                    <?= $content ?>
                </section>
            </div>
            <!--=====================================================================================================-->
            <footer class=main-footer>
                <strong>Copyright &copy; 2019 <a href="#">Klinik Rahmah</a>.</strong>
            </footer>
        </div>
        <script src=<?= base_url('assets/css/bower_components/jquery/dist/jquery.min.js') ?>></script>
        <script src=<?= base_url('assets/css/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>></script>
        <script src="<?= base_url('assets/js/moment.min.js');?>" type="text/javascript"></script>
        <script src=<?= base_url('assets/js/adminlte.min.js') ?>></script>
        <script src=<?= base_url('assets/css/bower_components/fastclick/lib/fastclick.js') ?>></script>
        <script src=<?= base_url('assets/css/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>></script>
        <script src=<?= base_url('assets/css/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>></script>
        <script src=<?= base_url('assets/js/datatables.min.js') ?>></script>
        <script src=<?= base_url('assets/css/bower_components/chart.js/Chart.js') ?>></script>
        <script src=<?= base_url('assets/js/bootstrap-datetimepicker.min.js'); ?>></script>
    </body>
</html>