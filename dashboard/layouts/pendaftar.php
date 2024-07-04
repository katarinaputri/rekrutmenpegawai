<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <?php include "../partials/head.php" ?>
    <title>Daftar Pendaftar</title>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include "../partials/aside.php" ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <?php include "../partials/navbar.php" ?>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card text-center">
                            <div class="card-header py-3">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#pendaftar" aria-controls="pendaftar" aria-selected="true">Pendaftar</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#lolos-seleksi-berkas" aria-controls="lolos-seleksi-berkas" aria-selected="false" tabindex="-1">Lolos Seleksi Berkas</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#ditolak" aria-controls="ditolak" aria-selected="false" tabindex="-1">Ditolak</button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content pt-0">
                                <!-- TABEL PENDAFTAR -->
                                <div class="tab-pane fade active show" id="pendaftar" role="tabpanel">
                                    <div class="table-responsive text-start">
                                        <table class="table table-borderless text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Email</th>
                                                    <th>Posisi</th>
                                                    <th>DIvisi</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Katarina Putri Praditasari</td>
                                                    <td>katarinaputri17@gmail.com</td>
                                                    <td>Database Administrator</td>
                                                    <td>ATI</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-detail me-1'></i> Detail</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class='bx bxs-file-pdf me-1'></i> Link CV</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-file me-1"></i> Link Portofolio</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-check me-1"></i> Lolos</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-x me-1"></i> Tolak</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/img/icons/brands/safari.png" alt="Safari" height="24" class="me-2">
                                                            <span>Safari</span>
                                                        </div>
                                                    </td>
                                                    <td>7.29k</td>
                                                    <td>
                                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                                            <div class="progress w-100" style="height:10px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 72.43%" aria-valuenow="72.43" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <small class="fw-medium">72.43%</small>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/img/icons/brands/firefox.png" alt="Firefox" height="24" class="me-2">
                                                            <span>Firefox</span>
                                                        </div>
                                                    </td>
                                                    <td>6.11k</td>
                                                    <td>
                                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                                            <div class="progress w-100" style="height:10px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 67.37%" aria-valuenow="67.37" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <small class="fw-medium">67.37%</small>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- TABEL LOLOS SELEKSI BERKAS -->
                                <div class="tab-pane fade" id="lolos-seleksi-berkas" role="tabpanel">
                                    <div class="table-responsive text-start">
                                        <table class="table table-borderless">
                                            <thead>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Email</th>
                                                <th>Posisi</th>
                                                <th>DIvisi</th>
                                                <th>Actions</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Katarina Putri Praditasari</td>
                                                    <td>katarinaputri17@gmail.com</td>
                                                    <td>Database Administrator</td>
                                                    <td>ATI</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-detail me-1'></i> Detail</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class='bx bxs-file-pdf me-1'></i> Link CV</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-file me-1"></i> Link Portofolio</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-check me-1"></i> Atur Interview</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/img/icons/brands/mac.png" alt="Mac" height="24" class="me-2">
                                                            <span>Mac</span>
                                                        </div>
                                                    </td>
                                                    <td>89.68k</td>
                                                    <td>
                                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                                            <div class="progress w-100" style="height:10px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 66.67%" aria-valuenow="66.67" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <small class="fw-medium">66.67%</small>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="../../assets/img/icons/brands/ubuntu.png" alt="Ubuntu" height="24" class="me-2">
                                                            <span>Ubuntu</span>
                                                        </div>
                                                    </td>
                                                    <td>37.68k</td>
                                                    <td>
                                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                                            <div class="progress w-100" style="height:10px;">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 62.82%" aria-valuenow="62.82" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <small class="fw-medium">62.82%</small>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- TABEL DITOLAK -->
                                <div class="tab-pane fade" id="ditolak" role="tabpanel">
                                    <div class="table-responsive text-start">
                                        <table class="table table-borderless">
                                            <thead>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Email</th>
                                                <th>Posisi</th>
                                                <th>DIvisi</th>
                                                <th>Actions</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Katarina Putri Praditasari</td>
                                                    <td>katarinaputri17@gmail.com</td>
                                                    <td>Database Administrator</td>
                                                    <td>ATI</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class='bx bx-detail me-1'></i> Detail</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class='bx bxs-file-pdf me-1'></i> Link CV</a>
                                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-file me-1"></i> Link Portofolio</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fis fi fi-br rounded-circle fs-3 me-2"></i>
                                                            <span>Brazil</span>
                                                        </div>
                                                    </td>
                                                    <td>62.68k</td>
                                                    <td>
                                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                                            <div class="progress w-100" style="height:10px;">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 78.23%" aria-valuenow="78.23" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <small class="fw-medium">78.23%</small>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <i class="fis fi fi-in rounded-circle fs-3 me-2"></i>
                                                            <span>India</span>
                                                        </div>
                                                    </td>
                                                    <td>52.58k</td>
                                                    <td>
                                                        <div class="d-flex justify-content-between align-items-center gap-3">
                                                            <div class="progress w-100" style="height:10px;">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 69.82%" aria-valuenow="69.82" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <small class="fw-medium">69.82%</small>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php include "../partials/footer.php" ?>

                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <?php include "../partials/script.php" ?>
</body>

</html>