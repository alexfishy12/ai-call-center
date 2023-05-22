<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../_assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../_assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../_assets/libs/css/style.css">
    <link rel="stylesheet" href="../_assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../_assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../_assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../_assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../_assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../_assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>AI Call Center</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php include("../_components/navbar.html"); ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php include("../_components/leftsidebar.html"); ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-history">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Jobs</h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Calls</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Jobs</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="history-widget">

                        <div class="row">
                        <!-- ============================================================== -->
                        <!-- data table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Job Queue</h5>
                                    <p>Shows all queued outgoing phones calls that will be made using the AI Call Center. Upload jobs using CSV with the proper template.</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Scheduled Date</th>
                                                    <th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Anticipated Major</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>5-27-2023 13:22:12</td>
                                                    <td>John Doe</td>
                                                    <td>908-021-1234</td>
                                                    <td>Computer Science (B.S.)</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>5-28-2023 14:38:01</td>
                                                    <td>Austin Stevens</td>
                                                    <td>732-012-4567</td>
                                                    <td>Accounting (B.S.)</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>5-29-2023 11:12:13</td>
                                                    <td>Harry Hewlet</td>
                                                    <td>732-438-0221</td>
                                                    <td>Liberal Arts (B.A.)</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>5-30-2023 15:44:32</td>
                                                    <td>Bryan Boyers</td>
                                                    <td>908-509-3001</td>
                                                    <td>Information Technology (B.S.)</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Scheduled Date</th>
                                                    <th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Anticipated Major</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end data table  -->
                        <!-- ============================================================== -->
                    </div>
                 

                </div> </div> 
            </div>    
                      
          
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include("../_components/footer.html"); ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../_assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../_assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../_assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../_assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../_assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../_assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../_assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../_assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
</body>
 
</html>