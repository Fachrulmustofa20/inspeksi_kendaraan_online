<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Cek Uji Kendaraan</title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <!--Date Picker-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="dark" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        include "top_bar.php";
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        include "side_bar.php";
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Report</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Menu</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Report</li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Detail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- Date Picker -->
                <div class="row">
                    <div class="col-lg-5 col-sm-7 col-xs-12 col-12">
                        <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-danger btn-sm float-right"><i class="fas fa-print fa-sm mr-2"></i>Cetak Laporan</a>
                    </div>
                </div>
                <!-- End Date Picker -->

                <!-- multi-column ordering -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-9 col-6">
                                        <h4 class="card-title">Tabel Hasil Unsur Administrasi</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="multi_col_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th>No</th>
                                                <th>Kartu UjiSTUK</th>
                                                <th>KP.Reguler</th>
                                                <th>KP.Cadangan</th>
                                                <th>SIM Pengemudi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>Ada, berlaku</td>
                                                <td>Ada, berlaku</td>
                                                <td>Ada, berlaku</td>
                                                <td>A Umum</td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- Date Picker -->
                <div class="row">
                    <div class="col-lg-5 col-sm-7 col-xs-12 col-12">
                        <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-danger btn-sm float-right"><i class="fas fa-print fa-sm mr-2"></i>Cetak Laporan</a>
                    </div>
                </div>
                <!-- End Date Picker -->

                <!-- multi-column ordering -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-9 col-6">
                                        <h4 class="card-title">Tabel Hasil Unsur Teknis Utama</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="multi_col_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                        <thead class="bg-primary text-white text-center">
                                            <tr>
                                                <th rowspan="3">No</th>
                                                <th colspan="6">Sistem Penerangan</th>
                                                <th colspan="2">Sistem Pengereman</th>
                                                <th>Badan Kendaraan</th>
                                                <th colspan="2">BAN</th>
                                                <th>Perlengkapan</th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Lampu Utama Kendaraan</th>
                                                <th colspan="2">Lampu Penunjuk Arah</th>
                                                <th rowspan="2">Lampu Rem</th>
                                                <th rowspan="2">Lampu Mundur</th>
                                                <th rowspan="2">Kondisi Rem Utama</th>
                                                <th rowspan="2">Kondisi Rem Parkir</th>
                                                <th rowspan="2">Kondisi Kaca Depan</th>
                                                <th rowspan="2">Kondisi Ban Depan</th>
                                                <th rowspan="2">Kondisi Ban Belakang</th>
                                                <th rowspan="2">Sabuk Keselamatan Pengemudi</th>
                                            </tr>
                                            <tr>
                                                <th>Dekat</th>
                                                <th>Jauh</th>
                                                <th>Depan</th>
                                                <th>Belakang</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <th>1.</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Berfungsi</th>
                                                <th>Berfungsi</th>
                                                <th>Baik</th>
                                                <th>Semua Laik</th>
                                                <th>Semua Laik</th>
                                                <th>Ada Dan Fungsi</th>
                                            </tr>
                                            <tr>
                                                <th>2.</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Berfungsi</th>
                                                <th>Berfungsi</th>
                                                <th>Baik</th>
                                                <th>Semua Laik</th>
                                                <th>Semua Laik</th>
                                                <th>Ada Dan Fungsi</th>
                                            </tr>
                                            <tr>
                                                <th>3.</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Berfungsi</th>
                                                <th>Berfungsi</th>
                                                <th>Baik</th>
                                                <th>Semua Laik</th>
                                                <th>Semua Laik</th>
                                                <th>Ada Dan Fungsi</th>
                                            </tr>
                                            <tr>
                                                <th>4.</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Berfungsi</th>
                                                <th>Berfungsi</th>
                                                <th>Baik</th>
                                                <th>Semua Laik</th>
                                                <th>Semua Laik</th>
                                                <th>Ada Dan Fungsi</th>
                                            </tr>
                                            <tr>
                                                <th>5.</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Berfungsi</th>
                                                <th>Berfungsi</th>
                                                <th>Baik</th>
                                                <th>Semua Laik</th>
                                                <th>Semua Laik</th>
                                                <th>Ada Dan Fungsi</th>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- Date Picker -->
                <div class="row">
                    <div class="col-lg-5 col-sm-7 col-xs-12 col-12">
                        <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="col">
                        <a href="" class="btn btn-danger btn-sm float-right"><i class="fas fa-print fa-sm mr-2"></i>Cetak Laporan</a>
                    </div>
                </div>
                <!-- End Date Picker -->

                <!-- multi-column ordering -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-9 col-6">
                                        <h4 class="card-title">Tabel Hasil Unsur Teknis Penunjang</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="multi_col_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                        <thead class="bg-primary text-white text-center">
                                            <tr>
                                                <th rowspan="3">No</th>
                                                <th>Pengukur Kecepatan</th>
                                                <th colspan="2">Sistem Penerangan</th>
                                                <th colspan="3">Badan Kendaraan</th>
                                                <th>Kapasitas Tempat Duduk</th>
                                                <th colspan="5">Perlengkapan Kendaraan</th>
                                                <th colspan="3">Tanggap Darurat</th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">Pengukur Kecepatan</th>
                                                <th colspan="2">Lampu Posisi</th>
                                                <th rowspan="2">Kaca Spion</th>
                                                <th rowspan="2">Penghapus Kaca</th>
                                                <th rowspan="2">Klakson</th>
                                                <th rowspan="2">Jalan Tempat Duduk Penumpang</th>
                                                <th rowspan="2">Ban Cadangan</th>
                                                <th rowspan="2">Segitiga Pengaman </th>
                                                <th rowspan="2">Dongkrak </th>
                                                <th rowspan="2">Pembuka Roda </th>
                                                <th rowspan="2">Lampu Senter </th>
                                                <th rowspan="2">Pintu Darurat </th>
                                                <th rowspan="2">Jendela Darurat </th>
                                                <th rowspan="2">Alat Pemukul Pemecah Kaca </th>
                                            </tr>
                                            <tr>
                                                <th>Depan</th>
                                                <th>Belakang</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">

                                            <tr>
                                                <th>1.</th>
                                                <th>Ada dan Berfungsi</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Ada dan Sesuai</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Sesuai</th>
                                                <th>Ada dan Laik</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>

                                            </tr>
                                            <tr>
                                                <th>2.</th>
                                                <th>Ada dan Berfungsi</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Ada dan Sesuai</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Sesuai</th>
                                                <th>Ada dan Laik</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>

                                            </tr>
                                            <tr>
                                                <th>3.</th>
                                                <th>Ada dan Berfungsi</th>
                                                <th>Semua Menyala</th>
                                                <th>Semua Menyala</th>
                                                <th>Ada dan Sesuai</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Sesuai</th>
                                                <th>Ada dan Laik</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>
                                                <th>Ada</th>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->



            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>

    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>
    <!--This page plugins -->
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>

    <!--Date Picker-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script type="text/javascript">
        $(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

        });
    </script>

</body>

</html>