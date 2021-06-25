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
                                        <h2>Tambah Data Harga</h2>
                                        <p>Menu ini berisikan daftar harga pembayaran air. <span
                                                class="bread-ntd">Isikan data sesuai dengan ketentuan.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-element-area">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd bcs-hd">
                            <h2>Form Harga</h2>
                            <p>Masukan data sesuai dengan field yang tersedia. </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker">
                                            <option selected disabled>-- kategori --</option>
                                            <option>Golongan I A</option>
                                            <option>Golongan I B</option>
                                            <option>Golongan II A</option>
                                            <option>Golongan II B</option>
                                            <option>Golongan III A</option>
                                            <option>Golongan III B</option>
                                            <option>Golongan IV A</option>
                                            <option>Golongan IV B</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-map"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Jenis">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Tarif 0-10">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Tarif 11-20">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" placeholder="Tarif >20">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                </br>
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Bootstrap Seelct - Custom Select</h2>
                            <p>Bootstrap-select is a jQuery plugin that utilizes Bootstrap's dropdown.js to style and
                                bring additional functionality to standard select elements.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn">
                                    <h2>Basic Example</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker">
                                        <option>Drama</option>
                                        <option>Cariska</option>
                                        <option>Cheriska</option>
                                        <option>Malias</option>
                                        <option>Kamines</option>
                                        <option>Austranas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Serach Option</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" data-live-search="true">
                                        <option>Drama</option>
                                        <option>Cariska</option>
                                        <option>Cheriska</option>
                                        <option>Malias</option>
                                        <option>Kamines</option>
                                        <option>Austranas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Option Groups</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker">
                                        <optgroup label="Picnic">
                                            <option>Drama</option>
                                            <option>Cariska</option>
                                            <option>Cheriska</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                            <option>Malias</option>
                                            <option>Kamines</option>
                                            <option>Austranas</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <h2>Disabled Options</h2>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker">
                                        <option disabled="disabled">Drama</option>
                                        <option>Cariska</option>
                                        <option>Kamines</option>
                                        <option disabled="disabled">Malias</option>
                                        <option>Cheriska</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                    <h2>Multi Select</h2>
                                </div>
                                <div class="bootstrap-select">
                                    <select class="selectpicker" multiple>
                                        <option>Drama</option>
                                        <option>Cariska</option>
                                        <option>Cheriska</option>
                                        <option>Malias</option>
                                        <option>Kamines</option>
                                        <option>Austranas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                    <h2>Limit Selection - Set to 2</h2>
                                </div>
                                <div class="bootstrap-select">
                                    <select class="selectpicker" multiple data-max-options="2"
                                        title='Choose some of...'>
                                        <option>Drama</option>
                                        <option>Cariska</option>
                                        <option>Cheriska</option>
                                        <option>Malias</option>
                                        <option>Kamines</option>
                                        <option>Austranas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                    <h2>Display Count</h2>
                                </div>
                                <div class="bootstrap-select">
                                    <select class="selectpicker" multiple data-selected-text-format="count">
                                        <option>Drama</option>
                                        <option>Cariska</option>
                                        <option>Cheriska</option>
                                        <option>Malias</option>
                                        <option>Kamines</option>
                                        <option>Austranas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Form Element area End-->

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