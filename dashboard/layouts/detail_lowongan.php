<?php
require "functions.php";

?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <?php include "../partials/head.php" ?>
    <title>Daftar Lowongan</title>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar layout-without-menu">
        <div class="layout-container">
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="navbar-nav me-auto d-flex justify-content-center">
                            <a class="nav-item nav-link active" href="javascript:void(0)">Home</a>
                        </div>
                    </div>
                    <a href="login.php">
                        <button class="btn btn-outline-primary" type="button">Login</button>
                    </a>

                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-6 col-xl">
                                <div class="card mb-3">
                                    <img class="card-img-top" src="../assets/img/backgrounds/bg.jpg" alt="Card image cap" style="height: 90pt;" />
                                    <div class="card-body">
                                        <a href="daftar_lowongan.php"><i class='bx bx-arrow-back mb-3' style="font-size: 35px;color:#566a7f"></i></a>
                                        <?php
                                        if (isset($_GET['id'])) {
                                            $id = $_GET['id'];
                                            $data_lowongan = mysqli_query($conn, "SELECT * FROM info_lowongan WHERE id_lowongan = '$id'");
                                            while ($hasil = mysqli_fetch_array($data_lowongan)) {
                                                $label = $hasil["tipe_lamaran"];
                                        ?>
                                                <div class="row position-relative">
                                                    <div class="col-9">
                                                        <h5 class="card-title"><?= $hasil["posisi"]; ?></h5>
                                                        <div class="card-subtitle mb-2"><?= $hasil["divisi"]; ?></div>
                                                        <div class="card-subtitle text-muted mb-2"><?= $hasil["lokasi_penempatan"]; ?></div>
                                                        <?php if ($label == "Permanent") { ?>
                                                            <span class="badge bg-label-primary mb-3">Full Time</span>
                                                        <?php } else if ($label == "Contract") { ?>
                                                            <span class="badge bg-label-warning mb-3">Contract</span>
                                                        <?php } else if ($label == "Internship") { ?>
                                                            <span class="badge bg-label-dark mb-3">Internship</span>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="d-flex justify-content-end position-absolute top-50 translate-middle-y">
                                                        <button type="button" class="btn btn-outline-primary">Daftar Sekarang</button>
                                                    </div>
                                                </div>
                                                <p class="card-text">
                                                    <?= $hasil["deskripsi"]; ?>
                                                </p>
                                                <h6 class="mt-5">Deskripsi Pekerjaan</h6>
                                                <?php
                                                $jobdesk = $hasil["jobdesk"];
                                                $jobdeskarray = explode("-", $jobdesk);
                                                array_shift($jobdeskarray);
                                                ?>
                                                <p class="card-text">
                                                    <?php if (!empty($jobdeskarray)) {
                                                        echo "<ol>";
                                                        foreach ($jobdeskarray as $a) {
                                                            echo "<li>" . htmlspecialchars(trim($a)) . "</li>";
                                                        }
                                                        echo "</ol>";
                                                    } ?>
                                                </p>
                                                <h6 class="mt-5">Kualifikasi</h6>
                                                <?php
                                                $syarat = $hasil["syarat"];
                                                $syaratarray = explode("-", $syarat);
                                                array_shift($syaratarray);
                                                ?>
                                                <p class="card-text">
                                                    <?php if (!empty($syaratarray)) {
                                                        echo "<ol>";
                                                        foreach ($syaratarray as $b) {
                                                            echo "<li>" . htmlspecialchars(trim($b)) . "</li>";
                                                        }
                                                        echo "</ol>";
                                                    } ?>
                                                </p>
                                        <?php }
                                        } ?>
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