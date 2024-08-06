<?php
require "functions.php";
session_start();
$status_akun = $_SESSION['status'];
$id_NIK = $_SESSION['id_NIK'];
$posisi = false;

if (isset($_POST["daftar"])) {
    if (daftar($_POST) > 0) {
        $berhasil = true;
    } else {
        $error = true;
    }
}

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
                        <div class="row">
                            <div class="col-md-6 col-xl">
                                <!-- ALERT -->
                                <?php if (isset($error)) : ?>
                                    <div class="alert alert-danger" role="alert">Gagal mendaftarkan lowongan!</div>
                                <?php endif; ?>
                                <?php if (isset($berhasil)) : ?>
                                    <div class="alert alert-success" role="alert">Berhasil melakukan pendaftaran!</div>
                                <?php endif; ?>
                                <!-- END ALERT -->

                                <div class="card mb-3">
                                    <img class="card-img-top" src="../assets/img/backgrounds/bg.jpg" alt="Card image cap" style="height: 90pt;" />
                                    <form action="" method="post">
                                        <div class="card-body">
                                            <a href="<?= $_SERVER['HTTP_REFERER']; ?>"><i class='bx bx-arrow-back mb-3' style="font-size: 35px;color:#566a7f"></i></a>
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

                                                        <?php if ($status_akun == 'pelamar') {
                                                            $cek_daftar = mysqli_query($conn, "SELECT * FROM info_pendaftaran WHERE id_NIK = '$id_NIK' AND id_lowongan ='$id'");
                                                            $cek = mysqli_num_rows($cek_daftar);
                                                            if ($cek == 0) {
                                                                $cek_dokumen = mysqli_query($conn, "SELECT * FROM pelamar WHERE id_NIK = '$id_NIK' AND (length(dokumen_cv) = 0 OR length(dokumen_portofolio) = 0 OR length(link_linkedin) = 0 OR length(link_instagram) = 0)");
                                                                $cek2 = mysqli_num_rows($cek_dokumen);
                                                                if ($cek2 == 1) {
                                                                    $target_modal = "lanjutprofil";
                                                                } else {
                                                                    $target_modal = "pendaftaran";
                                                                }
                                                        ?>
                                                                <div class="d-flex justify-content-end position-absolute top-50 translate-middle-y">
                                                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#<?= $target_modal; ?>">Daftar Sekarang</button>
                                                                </div>

                                                                <!-- Modal 1-->
                                                                <div class="modal fade" id="lanjutprofil" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="modalToggleLabel">Konfirmasi Pendaftaran</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">Anda harus melengkapi profil terlebih dahulu.</div>
                                                                            <div class="modal-footer">
                                                                                <a href="profil.php">
                                                                                    <button class="btn btn-primary" href="profil.php" data-bs-dismiss="modal" type="button">
                                                                                        Lanjutkan
                                                                                    </button>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal fade" id="pendaftaran" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <form action="" method="post">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="modalToggleLabel">Konfirmasi Pendaftaran</h5>
                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input id="id_lowongan" type="hidden" name="id_lowongan" value="<?= $id; ?>">
                                                                                    <input id="id_NIK" type="hidden" name="id_NIK" value="<?= $id_NIK; ?>">
                                                                                    Apakah Anda yakin ingin melakukan pendaftaran pada posisi <b><?= $hasil["posisi"]; ?></b>
                                                                                    di divisi <b><?= $hasil["divisi"]; ?></b>
                                                                                    ?
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                                                        Close
                                                                                    </button>
                                                                                    <button class="btn btn-primary" type="submit" name="daftar">
                                                                                        Daftar
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php
                                                            } else { ?>
                                                                <!-- pelamar yang udah daftar lowongan ini -->
                                                                <div class=" d-flex justify-content-end position-absolute top-50 translate-middle-y">
                                                                    <button type="button" class="btn btn-outline-primary" disabled>Terdaftar</button>
                                                                </div>
                                                        <?php }
                                                        } ?>


                                                    </div>
                                                    <p class="card-text">
                                                        <?= $hasil["deskripsi"]; ?>
                                                    </p>
                                                    <h6 class="mt-5">Deskripsi Pekerjaan</h6>
                                                    <p class="card-text">
                                                        <?php
                                                        $jobdesk = $hasil["jobdesk"];
                                                        $jobdeskarray = explode("-", $jobdesk);
                                                        array_shift($jobdeskarray);

                                                        if (!empty($jobdeskarray)) {
                                                            echo "<ol>";
                                                            foreach ($jobdeskarray as $a) {
                                                                echo "<li>" . htmlspecialchars(trim($a)) . "</li>";
                                                            }
                                                            echo "</ol>";
                                                        } ?>
                                                    </p>
                                                    <h6 class="mt-5">Kualifikasi</h6>
                                                    <p class="card-text">
                                                        <?php
                                                        $syarat = $hasil["syarat"];
                                                        $syaratarray = explode("-", $syarat);
                                                        array_shift($syaratarray);

                                                        if (!empty($syaratarray)) {
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
                                    </form>
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