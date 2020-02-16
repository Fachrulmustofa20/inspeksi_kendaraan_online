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
    <link rel="icon" type="image/png" sizes="16x16" href="vendor/images/favicon.png">
    <title>Cek Uji Kendaraan</title>
    <!-- Custom CSS -->
    <link href="vendor/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="vendor/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="vendor/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="vendor/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Menu</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Laporan</li>
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

                <!-- multi-column ordering -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-md-9 col-6">
                                        <h4 class="card-title">Tabel Hasil Inspeksi</h4>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="multi_col_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                                        <thead class="bg-primary text-white">
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Hari/Tanggal</th>
                                                <th>Nama Pengemudi</th>
                                                <th>Nama PO</th>
                                                <th>Nomor Kendaraan</th>
                                                <th>Nomor STUK</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td>1</td>
                                                <td>1/1/2020</td>
                                                <td>Dasmad</td>
                                                <td>Kasnud</td>
                                                <td>G 1945 sm</td>
                                                <td>12345</td>
                                                <td>
                                                    <a href="detail.php" class="btn btn-success btn-sm"><i class="fas fa-info-circle fa-sm mr-2"></i>Detail</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>1/1/2020</td>
                                                <td>Dasmad</td>
                                                <td>Kasnud</td>
                                                <td>G 1945 sm</td>
                                                <td>12345</td>
                                                <td>
                                                    <a href="detail.php" class="btn btn-success btn-sm"><i class="fas fa-info-circle fa-sm mr-2"></i>Detail</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>1/1/2020</td>
                                                <td>Dasmad</td>
                                                <td>Kasnud</td>
                                                <td>G 1945 sm</td>
                                                <td>12345</td>
                                                <td>
                                                    <a href="detail.php" class="btn btn-success btn-sm"><i class="fas fa-info-circle fa-sm mr-2"></i>Detail</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>1/1/2020</td>
                                                <td>Dasmad</td>
                                                <td>Kasnud</td>
                                                <td>G 1945 sm</td>
                                                <td>12345</td>
                                                <td>
                                                    <a href="detail.php" class="btn btn-success btn-sm"><i class="fas fa-info-circle fa-sm mr-2"></i>Detail</a>
                                                </td>
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
    <script src="vendor/libs/jquery/dist/jquery.min.js"></script>
    <script src="vendor/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendor/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="vendor/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="vendor/extra-libs/sparkline/sparkline.js"></script>

    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="vendor/extra-libs/c3/d3.min.js"></script>
    <script src="vendor/extra-libs/c3/c3.min.js"></script>
    <script src="vendor/libs/chartist/dist/chartist.min.js"></script>
    <script src="vendor/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="vendor/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="vendor/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>
    <!--This page plugins -->
    <script src="vendor/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
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