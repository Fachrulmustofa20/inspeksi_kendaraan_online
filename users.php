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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Admin</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Menu</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Admin</li>
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
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <h4 class="card-title">Daftar Admin</h4>
                                    <div class="ml-auto">
                                        <!-- Signup modal content -->
                                        <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center mt-2 mb-4">
                                                            <h3>Add Users</h1>
                                                        </div>
                                                        <form class="pl-3 pr-3" action="#">
                                                            <div class="form-group">
                                                                <label for="name">Full Name</label>
                                                                <input class="form-control" type="text" id="name" required="" placeholder="Input Full Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="emailaddress">Email address</label>
                                                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Input your Email Address">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                                            </div>

                                                            <div class="form-group">
                                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#signup-modal"><i data-feather="user-plus" class="feather-icon"></i> Add Users</button>

                                        <!-- update modal content -->
                                        <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center mt-2 mb-4">
                                                            <h3>Update Users</h1>
                                                        </div>
                                                        <form class="pl-3 pr-3" action="#">
                                                            <div class="form-group">
                                                                <label for="name">Full Name</label>
                                                                <input class="form-control" type="text" id="name" required="" placeholder="Input Full Name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="emailaddress">Email address</label>
                                                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="Input your Email Address">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="password">Password</label>
                                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                                            </div>

                                                            <div class="form-group">
                                                                <button class="btn btn-primary" type="submit"> Submit</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">Full Name
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">Password</th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border-top-0">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/widget-table-pic3.jpg" alt="user" class="rounded-circle" width="45" height="45" />
                                                        </div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Fachrul
                                                                Mustofa</h5>
                                                            <span class="text-muted font-14">Fachrulmustofa@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-muted font-14 text-center">fachrul123</td>
                                                <td class="border-top-0 text-center">
                                                    <button class="btn btn-warning btn-sm text-white" data-toggle="modal" data-target="#update-modal"><i data-feather="edit" class="feather-icon"></i> Update</button>
                                                    <button class="btn btn-danger btn-sm text-white"><i data-feather="trash-2" class="feather-icon"></i> Delete</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border-top-0">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3">
                                                            <img src="assets/images/users/widget-table-pic2.jpg" alt="user" class="rounded-circle" width="45" height="45" />
                                                        </div>
                                                        <div class="">
                                                            <h5 class="text-dark mb-0 font-16 font-weight-medium">Endris
                                                                Ardiansyah</h5>
                                                            <span class="text-muted font-14">Endrisardians@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="border-top-0 text-muted font-14 text-center">endrisaja</td>

                                                <td class="border-top-0 text-center">
                                                    <button class="btn btn-warning btn-sm text-white" data-toggle="modal" data-target="#update-modal"><i data-feather="edit" class="feather-icon"></i> Update</button>
                                                    <button class="btn btn-danger btn-sm text-white"><i data-feather="trash-2" class="feather-icon"></i> Delete</button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->

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
    <script>
        $('#add_users').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>


    <script>
        $('#update_users').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input').val(recipient)
        })
    </script>


</body>

</html>