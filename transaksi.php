<?php
include 'function.php';

$barang = mysqli_query($connect, "SELECT * FROM barang");
$arrayHarga = "var harga_jual = new Array();";
$arrayNama = "var nama_barang = new Array();";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Taka Toko</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom icon template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class='bx bxl-ok-ru'></i>
                </div>
                <div class="sidebar-brand-text mx-3">Taka Toko</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-solid fa-database"></i>
                    <span>Data Toko</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="barang.php">Barang</a>
                        <a class="collapse-item" href="kategori.php ">Kategori</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-solid fa-store"></i>
                    <span>Transaksi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">Transaksi Jual</a>
                        <a class="collapse-item" href="#">Laporan Penjualan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <h2 class=" ml-2 mb-0 text-black-600"> Hello </h2>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Username</span>

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Transaksi Penjualan</h1>
                    </div>
                    <!-- Tabel Transaksi -->
                    <div class="row">
                        <div class="container-fluid">
                            <div class="card shadow mb-4 mt-3">
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="form-group row mb-0">
                                            <label class="col-sm-4 col-form-label col-form-label-sm"><b>Tgl.
                                                    Transaksi</b></label>
                                            <div class="col-sm-8 mb-2">
                                                <input type="text" class="form-control form-control-sm"
                                                    name="tanggal_input" value="<?php echo date("j F Y H:i"); ?>"
                                                    readonly>
                                            </div>
                                            <label class="col-sm-4 col-form-label col-form-label-sm"><b>Kode
                                                    Barang</b></label>
                                            <div class="col-sm-8 mb-2">
                                                <div class="input-group">
                                                    <input type="text" name="kode_barang"
                                                        class="form-control form-control-sm" list="datalist1"
                                                        onchange="changeValue(this.value)"
                                                        aria-describedby="basic-addon2" required>
                                                    <datalist id="datalist1">
                                                        <?php if (mysqli_num_rows($barang)) { ?>
                                                            <?php while ($row_brg = mysqli_fetch_array($barang)) { ?>
                                                                <option value="<?php echo $row_brg["id_barang"] ?>">
                                                                    <?php echo $row_brg["id_barang"] ?>
                                                                    <?php $arrayHarga .= "harga_jual['" . $row_brg['id_barang'] . "'] = {harga_jual:'" . addslashes($row_brg['harga_jual']) . "'};";
                                                                    $arrayNama .= "nama_barang['" . $row_brg['id_barang'] . "'] = {nama_barang:'" . addslashes($row_brg['nama_barang']) . "'};";
                                                            } ?>
                                                            <?php } ?>
                                                    </datalist>

                                                </div>
                                            </div>
                                            <label class="col-sm-4 col-form-label col-form-label-sm"><b>Nama
                                                    Barang</b></label>
                                            <div class="col-sm-8 mb-2">
                                                <input type="text" class="form-control form-control-sm"
                                                    name="nama_barang" id="nama_barang" readonly>
                                            </div>
                                            <label
                                                class="col-sm-4 col-form-label col-form-label-sm"><b>Harga</b></label>
                                            <div class="col-sm-8 mb-2">
                                                <input type="number" class="form-control form-control-sm"
                                                    id="harga_jual" onchange="total()" name="harga_jual" readonly>
                                            </div>
                                            <label
                                                class="col-sm-4 col-form-label col-form-label-sm"><b>Jumlah</b></label>
                                            <div class="col-sm-8 mb-2">
                                                <input type="number" class="form-control form-control-sm" id="jumlah"
                                                    onchange="total()" name="jumlah" placeholder="0" required>
                                            </div>
                                            <label
                                                class="col-sm-4 col-form-label col-form-label-sm"><b>Sub-Total</b></label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="subtotal" name="subtotal" onchange="total()"
                                                        name="sub_total" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <form method="POST">
                                        <div class="form-group row mb-0">
                                            <input type="hidden" class="form-control" name="no_transaksi"
                                                value="<?php echo $kodeCart; ?>" readonly>
                                            <input type="hidden" class="form-control" value="<?php echo $tot_bayar; ?>"
                                                id="hargatotal" readonly>
                                            <label
                                                class="col-sm-4 col-form-label col-form-label-sm"><b>Bayar</b></label>
                                            <div class="col-sm-8 mb-2">
                                                <input type="number" class="form-control form-control-sm" name="bayar"
                                                    id="bayarnya" onchange="totalnya()">
                                            </div>
                                            <label
                                                class="col-sm-4 col-form-label col-form-label-sm"><b>Kembali</b></label>
                                            <div class="col-sm-8 mb-2">
                                                <input type="number" class="form-control form-control-sm"
                                                    name="kembalian" id="total1" readonly>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button class="btn btn-purple btn-sm" name="save1" value="simpan"
                                                type="submit">
                                                <i class="fa fa-shopping-cart mr-2"></i>Bayar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Topan Haikal Tampan</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


    <script type="text/javascript">
        <?php echo $arrayHarga; ?>
        <?php echo $arrayNama; ?>
        function changeValue(id_barang) {
            document.getElementById("nama_barang").value = nama_barang[id_barang].nama_barang;
            document.getElementById("harga_jual").value = harga_jual[id_barang].harga_jual;
        };

        function total() {
            var harga = parseInt(document.getElementById('harga_barang').value);
            var jumlah_beli = parseInt(document.getElementById('quantity').value);
            var jumlah_harga = harga * jumlah_beli;
            document.getElementById('subtotal').value = jumlah_harga;
        }

        function totalnya() {
            var harga = parseInt(document.getElementById('hargatotal').value);
            var pembayaran = parseInt(document.getElementById('bayarnya').value);
            var kembali = pembayaran - harga;
            document.getElementById('total1').value = kembali;
        }

        function printContent(print) {
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(print).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
</body>

</html>