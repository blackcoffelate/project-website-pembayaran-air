<!doctype html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PAM APP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../img/icons.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/owl.transitions.css">
    <link rel="stylesheet" href="../css/meanmenu/meanmenu.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/summernote/summernote.css">
    <link rel="stylesheet" href="../css/themesaller-forms.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../css/notika-custom-icon.css">
    <link rel="stylesheet" href="../css/bootstrap-select/bootstrap-select.css">
    <link rel="stylesheet" href="../css/datapicker/datepicker3.css">
    <link rel="stylesheet" href="../css/color-picker/farbtastic.css">
    <link rel="stylesheet" href="../css/chosen/chosen.css">
    <link rel="stylesheet" href="../css/notification/notification.css">
    <link rel="stylesheet" href="../css/dropzone/dropzone.css">
    <link rel="stylesheet" href="../css/wave/waves.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="../css/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">

</head>

<body>
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="../img/icons.png" style="width:45px; height:45px;" alt="" /><strong
                                style="color:#fff; font-size:18px; margin-left:15px;">PAM APP.</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <?php require_once "view/navbar.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <?php require_once "view/navbar-bottom.php" ?>
            </div>
        </div>
    </div>

    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-form"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Pembayaran</h2>
                                        <p>Menu ini merupakan layanan pembayaran. <span class="bread-ntd">Silahkan melakukan pembayaran dengan menekan tombol di menu action.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report"
                                        class="btn"><i class="notika-icon notika-sent"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="sale-statistic-inner notika-shadow">
                    <div class="data-table-area">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="data-table-list">
                                <div class="basic-tb-hd">
                                    <h2>Data Pembayaran</h2>
                                    <p>Silahkan cari data pengguna yang ingin membayarkan pembayaran air.</p>
                                </div>
                                <div class="table-responsive">
                                    <table id="data-table-basic" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No Sambungan</th>
                                                <th>No Rekening</th>
                                                <th>Nama Lengkap</th>
                                                <th>Alamat</th>
                                                <th>Golongan</th>
                                                <th>Jenis</th>
                                                <th>Status Bulan ini</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>0473</td>
                                                <td>0000271</td>
                                                <td>Suradi</td>
                                                <td>Perum PJKA Jl. Kol. Burlian Martapura</td>
                                                <td>A I</td>
                                                <td>Rumah Yatim Piatu</td>
                                                <td><span class="btn btn-success" disabled>Sudah bayar</span></td>
                                                <td><a href="list_pembayaran"><i class="notika-icon notika-dollar"></i></a> &nbsp; <a href="#"><i class="notika-icon notika-draft"></i></a> &nbsp; <a href="#"><i class="notika-icon notika-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>0473</td>
                                                <td>0000271</td>
                                                <td>Suradi</td>
                                                <td>Perum PJKA Jl. Kol. Burlian Martapura</td>
                                                <td>A I</td>
                                                <td>Rumah Yatim Piatu</td>
                                                <td><span class="btn btn-danger" disabled>Belum bayar</span></td>
                                                <td><a href="list_pembayaran"><i class="notika-icon notika-dollar"></i></a> &nbsp; <a href="#"><i class="notika-icon notika-draft"></i></a> &nbsp; <a href="#"><i class="notika-icon notika-trash"></i></a></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>No Sambungan</th>
                                                <th>No Rekening</th>
                                                <th>Nama Lengkap</th>
                                                <th>Alamat</th>
                                                <th>Golongan</th>
                                                <th>Jenis</th>
                                                <th>Status Bulan ini</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright &copy; <script>
                            document.write(new Date().getFullYear())
                            </script>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/jquery-price-slider.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/meanmenu/jquery.meanmenu.js"></script>
    <script src="../js/counterup/jquery.counterup.min.js"></script>
    <script src="../js/counterup/waypoints.min.js"></script>
    <script src="../js/counterup/counterup-active.js"></script>
    <script src="../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js/sparkline/sparkline-active.js"></script>
    <script src="../js/flot/jquery.flot.js"></script>
    <script src="../js/flot/jquery.flot.resize.js"></script>
    <script src="../js/flot/flot-active.js"></script>
    <script src="../js/knob/jquery.knob.js"></script>
    <script src="../js/knob/jquery.appear.js"></script>
    <script src="../js/knob/knob-active.js"></script>
    <script src="../js/jasny-bootstrap.min.js"></script>
    <script src="../js/icheck/icheck.min.js"></script>
    <script src="../js/icheck/icheck-active.js"></script>
    <script src="../js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="../js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="../js/rangle-slider/rangle-active.js"></script>
    <script src="../js/datapicker/bootstrap-datepicker.js"></script>
    <script src="../js/datapicker/datepicker-active.js"></script>
    <script src="../js/bootstrap-select/bootstrap-select.js"></script>
    <script src="../js/color-picker/farbtastic.min.js"></script>
    <script src="../js/color-picker/color-picker.js"></script>
    <script src="../js/notification/bootstrap-growl.min.js"></script>
    <script src="../js/notification/notification-active.js"></script>
    <script src="../js/summernote/summernote-updated.min.js"></script>
    <script src="../js/summernote/summernote-active.js"></script>
    <script src="../js/dropzone/dropzone.js"></script>
    <script src="../js/wave/waves.min.js"></script>
    <script src="../js/wave/wave-active.js"></script>
    <script src="../js/chosen/chosen.jquery.js"></script>
    <script src="../js/todo/jquery.todo.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/data-table/jquery.dataTables.min.js"></script>
    <script src="../js/data-table/data-table-act.js"></script>

    <script src="../js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../js/jvectormap/jvectormap-active.js"></script>
    <script src="../js/flot/curvedLines.js"></script>
    <script src="../js/data-table/jquery.dataTables.min.js"></script>
    <script src="../js/data-table/data-table-act.js"></script>

</body>

</html>