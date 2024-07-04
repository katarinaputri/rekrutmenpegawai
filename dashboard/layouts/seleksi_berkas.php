<?php
require "functions.php";

?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <?php include "../partials/head.php" ?>
    <title>Daftar Seleksi Berkas</title>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="#" class="app-brand-link">

                        <!-- LOGO -->
                        <!-- 
                        <span class="app-brand-logo demo">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                                    <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                                    <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                                    <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use fill="#696cff" xlink:href="#path-1"></use>
                                                <g id="Path-3" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                                </g>
                                                <g id="Path-4" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                                </g>
                                            </g>
                                            <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                <use fill="#696cff" xlink:href="#path-5"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span> 
                        -->

                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home"></i>
                            <div data-i18n="dashboard">Dashboard</div>
                        </a>
                    </li>

                    <!-- Seleksi Baru -->
                    <li class="menu-item active">
                        <a href="seleksi_berkas.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-ol"></i>
                            <div data-i18n="lolosseleksi">Seleksi Berkas</div>
                        </a>
                    </li>

                    <!-- Interview -->
                    <li class="menu-item">
                        <a href="interview.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-voice"></i>
                            <div data-i18n="interview">Interview</div>
                        </a>
                    </li>

                    <!-- Offering -->
                    <li class="menu-item">
                        <a href="offering.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user-check"></i>
                            <div data-i18n="offering">Offering</div>
                        </a>
                    </li>

                    <!-- Lowongan Baru -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-news"></i>
                            <div data-i18n="lowongan-baru">Lowongan Baru</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="input_data.php" class="menu-link">
                                    <div data-i18n="inputdata">Input Data</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="lowongan.php" class="menu-link">
                                    <div data-i18n="infolowongan">Info Lowongan</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </aside>
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
                                        <table class="table table-borderless text-nowrap" id="dtable">
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
                                                <?php
                                                $i = 1;
                                                $terdaftar = mysqli_query($conn, "SELECT * FROM info_pendaftaran WHERE status = 'TERDAFTAR' ");
                                                while ($hasil = mysqli_fetch_array($terdaftar)) {
                                                    $nik = $hasil["NIK"];
                                                    $pelamar = mysqli_query($conn, "SELECT * FROM pelamar WHERE NIK = $nik ");
                                                    while ($info_pelamar = mysqli_fetch_array($pelamar)) {
                                                ?>
                                                        <tr>
                                                            <td><?= $i; ?></td>
                                                            <td><?= $info_pelamar["nama_lengkap"]; ?></td>
                                                            <td><?= $info_pelamar["email"]; ?></td>
                                                            <td><?= $hasil["posisi"]; ?></td>
                                                            <td><?= $hasil["divisi"]; ?></td>
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
                                                <?php $i++;
                                                    }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- TABEL LOLOS SELEKSI BERKAS -->
                                <div class="tab-pane fade" id="lolos-seleksi-berkas" role="tabpanel">
                                    <div class="table-responsive text-start">
                                        <table class="table table-borderless" id="dtable2">
                                            <thead>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Email</th>
                                                <th>Posisi</th>
                                                <th>DIvisi</th>
                                                <th>Actions</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                $lolos_berkas = mysqli_query($conn, "SELECT * FROM info_pendaftaran WHERE status = 'LOLOS BERKAS' ");
                                                while ($hasil = mysqli_fetch_array($lolos_berkas)) {
                                                    $nik = $hasil["NIK"];
                                                    $pelamar = mysqli_query($conn, "SELECT * FROM pelamar WHERE NIK = $nik ");
                                                    while ($info_pelamar = mysqli_fetch_array($pelamar)) {
                                                ?>
                                                        <tr>
                                                            <td><?= $i; ?></td>
                                                            <td><?= $info_pelamar["nama_lengkap"]; ?></td>
                                                            <td><?= $info_pelamar["email"]; ?></td>
                                                            <td><?= $hasil["posisi"]; ?></td>
                                                            <td><?= $hasil["divisi"]; ?></td>
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
                                                <?php $i++;
                                                    }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- TABEL DITOLAK -->
                                <div class="tab-pane fade" id="ditolak" role="tabpanel">
                                    <div class="table-responsive text-start">
                                        <table class="table table-borderless" id="dtable3">
                                            <thead>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Email</th>
                                                <th>Posisi</th>
                                                <th>DIvisi</th>
                                                <th>Actions</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                $ditolak = mysqli_query($conn, "SELECT * FROM info_pendaftaran WHERE status = 'DITOLAK' ");
                                                while ($hasil = mysqli_fetch_array($ditolak)) {
                                                    $nik = $hasil["NIK"];
                                                    $pelamar = mysqli_query($conn, "SELECT * FROM pelamar WHERE NIK = $nik ");
                                                    while ($info_pelamar = mysqli_fetch_array($pelamar)) {
                                                ?>
                                                        <tr>
                                                            <td><?= $i; ?></td>
                                                            <td><?= $info_pelamar["nama_lengkap"]; ?></td>
                                                            <td><?= $info_pelamar["email"]; ?></td>
                                                            <td><?= $hasil["posisi"]; ?></td>
                                                            <td><?= $hasil["divisi"]; ?></td>
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
                                                <?php $i++;
                                                    }
                                                } ?>
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