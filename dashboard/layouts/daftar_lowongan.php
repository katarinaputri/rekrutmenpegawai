<?php
require "functions.php";
session_start();
$status_akun = $_SESSION['status'];
$posisi = false;

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
                <?php include "../partials/navbar.php" ?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#all" aria-selected="true">
                                    All
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Permanent" aria-selected="false">
                                    Permanent
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Contract" aria-selected="false">
                                    Contract
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#Internship" aria-selected="false">
                                    Internship
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="all" role=" tabpanel">
                                <?php
                                $data_lowongan = mysqli_query($conn, "SELECT * FROM info_lowongan WHERE status = 1");
                                while ($hasil = mysqli_fetch_array($data_lowongan)) {
                                    if (strlen($hasil["deskripsi"]) > 250) {
                                        $excerpt = substr($hasil["deskripsi"], 0, 250) . "...";
                                    } else {
                                        $excerpt = $hasil["deskripsi"];
                                    }
                                ?>
                                    <div class="row">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h5 class="card-title"><?= $hasil["posisi"]; ?></h5>
                                                        <div class="card-subtitle text-muted mb-3"><?= $hasil["divisi"]; ?></div>
                                                    </div>
                                                    <div class="col-3 d-flex justify-content-end align-middle">
                                                        <a href="detail_lowongan.php?id=<?= $hasil["id_lowongan"] ?>" class="card-link">Selengkapnya</a>
                                                    </div>
                                                </div>
                                                <p class="card-text">
                                                    <?= $excerpt; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>

                            <div class="tab-pane fade" id="Permanent" role=" tabpanel">
                                <?php
                                $data_lowongan = mysqli_query($conn, "SELECT * FROM info_lowongan WHERE status = 1 AND tipe_lamaran = 'Permanent' ");
                                while ($hasil = mysqli_fetch_array($data_lowongan)) {
                                    if (strlen($hasil["deskripsi"]) > 250) {
                                        $excerpt = substr($hasil["deskripsi"], 0, 250) . "...";
                                    } else {
                                        $excerpt = $hasil["deskripsi"];
                                    }

                                ?>
                                    <div class="row">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h5 class="card-title"><?= $hasil["posisi"]; ?></h5>
                                                        <div class="card-subtitle text-muted mb-3"><?= $hasil["divisi"]; ?></div>
                                                    </div>
                                                    <div class="col-3 d-flex justify-content-end align-middle">
                                                        <a href="detail_lowongan.php?id=<?= $hasil["id_lowongan"] ?>" class="card-link">Selengkapnya</a>
                                                    </div>
                                                </div>
                                                <p class="card-text">
                                                    <?= $excerpt; ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>

                            <div class="tab-pane fade" id="Contract" role=" tabpanel">
                                <?php
                                $data_lowongan = mysqli_query($conn, "SELECT * FROM info_lowongan WHERE status = 1 AND tipe_lamaran = 'Contract'");
                                while ($hasil = mysqli_fetch_array($data_lowongan)) {
                                    if (strlen($hasil["deskripsi"]) > 250) {
                                        $excerpt = substr($hasil["deskripsi"], 0, 250) . "...";
                                    } else {
                                        $excerpt = $hasil["deskripsi"];
                                    }

                                ?>
                                    <div class="row">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h5 class="card-title"><?= $hasil["posisi"]; ?></h5>
                                                        <div class="card-subtitle text-muted mb-3"><?= $hasil["divisi"]; ?></div>
                                                    </div>
                                                    <div class="col-3 d-flex justify-content-end align-middle">
                                                        <a href="detail_lowongan.php?id=<?= $hasil["id_lowongan"] ?>" class="card-link">Selengkapnya</a>
                                                    </div>
                                                </div>
                                                <p class="card-text">
                                                    <?= $excerpt; ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>

                            <div class="tab-pane fade" id="Internship" role=" tabpanel">
                                <?php
                                $data_lowongan = mysqli_query($conn, "SELECT * FROM info_lowongan WHERE status = 1 AND tipe_lamaran = 'Internship'");
                                while ($hasil = mysqli_fetch_array($data_lowongan)) {
                                    if (strlen($hasil["deskripsi"]) > 250) {
                                        $excerpt = substr($hasil["deskripsi"], 0, 250) . "...";
                                    } else {
                                        $excerpt = $hasil["deskripsi"];
                                    }

                                ?>
                                    <div class="row">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h5 class="card-title"><?= $hasil["posisi"]; ?></h5>
                                                        <div class="card-subtitle text-muted mb-3"><?= $hasil["divisi"]; ?></div>
                                                    </div>
                                                    <div class="col-3 d-flex justify-content-end align-middle">
                                                        <a href="detail_lowongan.php?id=<?= $hasil["id_lowongan"] ?>" class="card-link">Selengkapnya</a>
                                                    </div>
                                                </div>
                                                <p class="card-text">
                                                    <?= $excerpt ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
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