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

    <!--Date Picker-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Detail</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <ol class="breadcrumb mb-2">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="laporan.php">Laporan</a></li>
                                        <li class="breadcrumb-item active">Detail</li>
                                    </ol>
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
                <!-- Content -->

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        DATA PEMERIKSAAN / G 1945 SM / Dasmad
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        1. Hari/Tanggal
                                    </div>
                                    <div class="col-md-8">
                                        : Senin/3 Feb 2019
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        6. Nama PD
                                    </div>
                                    <div class="col-md-8">
                                        : Gatau Dah Sumpah
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        2. Lokasi
                                    </div>
                                    <div class="col-md-8">
                                        : Terminal
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        7. Nomor Kndrn
                                    </div>
                                    <div class="col-md-8">
                                        : G 1945 SM Regular
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        3. Nama Lok
                                    </div>
                                    <div class="col-md-8">
                                        : Terminal Tegal
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        8. Nomor STUK
                                    </div>
                                    <div class="col-md-8">
                                        : 12345
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        4. Nama Pngmd
                                    </div>
                                    <div class="col-md-8">
                                        : Dasmad
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        9. Jns Trayek
                                    </div>
                                    <div class="col-md-8">
                                        : Akap
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        5. Umur
                                    </div>
                                    <div class="col-md-8">
                                        : 50
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-4">
                                        10. Trayek
                                    </div>
                                    <div class="col-md-8">
                                        : Ini juga gatau
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header bg-primary text-white">
                        I. UNSUR ADMINISTRASI
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5">
                                        1. Kartu Uji/STUK
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-success">Ada Berlaku</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5">
                                        2. KP Reguler
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-danger">Tdk Berlaku</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5">
                                        3. KP Cadangan (utk Kendaraan cadangan)
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-danger">Tdk ada</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-5">
                                        4. SIM Pngmdi
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-success">A Umum</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        II. UNSUR TEKNIS UTAMA
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-weight-bold">A. SISTEM PENERANGAN</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        1. Lampu Utama
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-md-4">
                                        a. Dekat
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-success">Semua Menyala</span>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-md-4">
                                        b. Jauh
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-success">Semua Menyala</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md">
                                2. Lampu Petunjuk Arah (Sein)
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-4">
                                a. Depan
                            </div>
                            <div class="col-md-7">
                                : <span class="badge badge-success">Semua Menyala</span>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-md-4">
                                b. Belakang
                            </div>
                            <div class="col-md-7">
                                : <span class="badge badge-success">Semua Menyala</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                3. Lampu Rem
                            </div>
                            <div class="col-md-7">
                                : <span class="badge badge-success">Semua Menyala</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                4. Lampu Mundur
                            </div>
                            <div class="col-md-7">
                                : <span class="badge badge-success">Semua Menyala</span>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-weight-bold">B. SISTEM PENGEREMAN</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        5. Kondisi Rem Utama
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-success">Berfungsi</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        6. Kondisi Rem Parkir
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-success">Berfungsi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-weight-bold">C. BADAN KENDARAAN</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        7. Kondisi Kaca Depan
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-success">Baik</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-weight-bold">D. BAN</div>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-md-4">
                                        a. Kondisi Ban Depan
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-success">Baik</span>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-md-4">
                                        b. Kondisi Ban Belakang
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-danger">Kiri Tidak Laik</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-weight-bold">E. PERLENGKAPAN</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        9. Sabuk Keselamatan Pengemudi
                                    </div>
                                    <div class="col-md-7">
                                        : <span class="badge badge-success">Ada dan Fungsi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        III. UNSUR TEKNIS PENUNJANG
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="font-weight-bold">A. PENGUKURAN KECEPATAN</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                10. Pengukuran Kecepatan
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada dan Berfungsi</span>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="font-weight-bold">B. SISTEM PENGEREMAN</div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        11. Lampu Posisi
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-md-4">
                                                        a. Depan
                                                    </div>
                                                    <div class="col-md-7">
                                                        : <span class="badge badge-success">Semua Menyala</span>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-md-4">
                                                        b. Belakang
                                                    </div>
                                                    <div class="col-md-7">
                                                        : <span class="badge badge-warning">Kiri Tidak Menyala</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="font-weight-bold">C. BADAN KENDARAAN</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                12. Spion
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada dan Sesuai</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                13. Penghapus Kaca (Wiper)
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-warning">Tidak Berfungsi</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                14. Klakson
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada</span>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="font-weight-bold">D. KAPASITAS TEMPAT DUDUK</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                15. Jlh Tmpt Duduk Penumpang
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Sesuai</span>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="font-weight-bold">E. PERLENGKAPAN KENDARAAN</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                16. Ban Cadangan
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada Dan Laik</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                17. Segitiga Pengaman
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                18. Dongkrak
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                19. Pembuka Roda
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                20. Lampu Senter
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada</span>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="font-weight-bold">F. TANGGAP DARURAT</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                21. Pintu Darurat
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                22. Jendela Darurat
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                23. Alat Pemukul/Pemecah Kaca
                                            </div>
                                            <div class="col-md-7">
                                                : <span class="badge badge-success">Ada</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        KESIMPULAN
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="font-weight-bold">Berdasarkan Hasil Diatas Maka Kendaraan Tersebut Dinyatakan:</div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-success">
                                            PERINGATAN/PERBAIKI</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="font-weight-bold">Catatan :</div>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="font-weight-bold">Perbaiki Lagi</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <!--  tabel ttd-->
                        <div class="row">
                            <div class="col-md-2">
                                Keterangan :
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                - <span class="badge badge-success">Hijau</span> : Diijinkan/Laik
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                - <span class="badge badge-warning">Kuning</span> : Peringatan/Perbaiki
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                - <span class="badge badge-success">Hijau</span> : Dilarang/Tidak Laik
                            </div>
                        </div>

                    </div>
                </div>

                <!-- End Content --->
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