<?php
require "functions.php";
session_start();
$posisi = false;
$status_akun = $_SESSION['status'];
$id_NIK = $_SESSION['id_NIK'];
$data_all = mysqli_query($conn, "SELECT *, dft.status as info FROM info_lowongan lw inner join info_pendaftaran dft on lw.id_lowongan = dft.id_lowongan WHERE lw.status = 1 AND dft.id_NIK ='$id_NIK'");
$data_terdaftar = mysqli_query($conn, "SELECT *, dft.status as info FROM info_lowongan lw inner join info_pendaftaran dft on lw.id_lowongan = dft.id_lowongan WHERE lw.status = 1 AND dft.id_NIK ='$id_NIK' AND dft.status = 'TERDAFTAR' ");
$data_lolosberkas = mysqli_query($conn, "SELECT *,dft.status as info FROM info_lowongan lw inner join info_pendaftaran dft on lw.id_lowongan = dft.id_lowongan WHERE lw.status = 1 AND dft.id_NIK ='$id_NIK' AND dft.status = 'LOLOS BERKAS' ");
$data_interview = mysqli_query($conn, "SELECT *, dft.status as info FROM info_lowongan lw inner join info_pendaftaran dft on lw.id_lowongan = dft.id_lowongan WHERE lw.status = 1 AND dft.id_NIK ='$id_NIK' AND dft.status = 'INTERVIEW' ");
$data_diterima = mysqli_query($conn, "SELECT *, dft.status as info FROM info_lowongan lw inner join info_pendaftaran dft on lw.id_lowongan = dft.id_lowongan WHERE lw.status = 1 AND dft.id_NIK ='$id_NIK' AND dft.status = 'DITERIMA' ");
$data_ditolak = mysqli_query($conn, "SELECT *, dft.status as info FROM info_lowongan lw inner join info_pendaftaran dft on lw.id_lowongan = dft.id_lowongan WHERE lw.status = 1 AND dft.id_NIK ='$id_NIK' AND dft.status = 'DITOLAK' ");

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
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <div class="card">
                                    <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#all" aria-selected="true">
                                        <div class="card-body">
                                            <h5 class="card-title">Semua Lamaran</h5>
                                            <p class="card-text">
                                                <?php
                                                $hasil = mysqli_num_rows($data_all);
                                                echo $hasil;
                                                ?>
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item" style="margin-left: 10px;">
                                <div class="card">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#terdaftar" aria-selected="true">
                                        <div class="card-body">
                                            <h5 class="card-title">Screening Berkas</h5>
                                            <p class="card-text">
                                                <?php
                                                $hasil = mysqli_num_rows($data_terdaftar);
                                                echo $hasil;
                                                ?>
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item" style="margin-left: 10px;">
                                <div class="card">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#lolosberkas" aria-selected="true">
                                        <div class="card-body">
                                            <h5 class="card-title">Lolos Seleksi Berkas</h5>
                                            <p class="card-text">
                                                <?php
                                                $hasil = mysqli_num_rows($data_lolosberkas);
                                                echo $hasil;
                                                ?>
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </li>

                            <li class="nav-item" style="margin-left: 10px;">
                                <div class="card">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#interview" aria-selected="true">
                                        <div class="card-body">
                                            <h5 class="card-title">Jadwal Interview</h5>
                                            <p class="card-text">
                                                <?php
                                                $hasil = mysqli_num_rows($data_interview);
                                                echo $hasil;
                                                ?>
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item" style="margin-left: 10px;">
                                <div class="card">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#diterima" aria-selected="true">
                                        <div class="card-body">
                                            <h5 class="card-title">Diterima</h5>
                                            <p class="card-text">
                                                <?php
                                                $hasil = mysqli_num_rows($data_diterima);
                                                echo $hasil;
                                                ?>
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </li>
                            <li class="nav-item" style="margin-left: 10px;">
                                <div class="card">
                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#ditolak" aria-selected="true">
                                        <div class="card-body">
                                            <h5 class="card-title">Ditolak</h5>
                                            <p class="card-text">
                                                <?php
                                                $hasil = mysqli_num_rows($data_ditolak);
                                                echo $hasil;
                                                ?>
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="all" role=" tabpanel">
                                <?php
                                while ($hasil_all = mysqli_fetch_array($data_all)) {
                                ?>
                                    <div class="accordion mt-3" id="accordionAll">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="heading">
                                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion<?= $hasil_all["id_pendaftaran"] ?>" aria-expanded="false">
                                                    <?= $hasil_all["posisi"]; ?> - <?= $hasil_all["divisi"]; ?>
                                                </button>

                                            </h2>
                                            <div id="accordion<?= $hasil_all["id_pendaftaran"] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <?php if ($hasil_all["info"] == "DITERIMA") { ?>
                                                        <span class="badge bg-label-success mb-3">DITERIMA</span>
                                                    <?php } else if ($hasil_all["info"] == "DITOLAK") { ?>
                                                        <span class="badge bg-label-danger mb-3">DITOLAK</span>
                                                    <?php } else if ($hasil_all["info"] == "INTERVIEW") { ?>
                                                        <span class="badge bg-label-info mb-3">INTERVIEW</span>
                                                    <?php } else if ($hasil_all["info"] == "TERDAFTAR") { ?>
                                                        <span class="badge bg-label-secondary mb-3">Diproses</span>
                                                    <?php } else if ($hasil_all["info"] == "LOLOS BERKAS") { ?>
                                                        <span class="badge bg-label-secondary mb-3">LOLOS BERKAS</span>

                                                    <?php } ?>
                                                    <br>
                                                    <?= $hasil_all["deskripsi"]; ?>
                                                    <a href="detail_lowongan.php?id=<?= $hasil_all["id_lowongan"] ?>" class="card-link">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="tab-pane fade" id="terdaftar" role=" tabpanel">
                                <?php
                                while ($hasil_terdaftar = mysqli_fetch_array($data_terdaftar)) {
                                ?>
                                    <div class="accordion mt-3" id="accordionAll">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion<?= $hasil_terdaftar["id_pendaftaran"] ?>" aria-expanded="false">
                                                    <?= $hasil_terdaftar["posisi"]; ?> - <?= $hasil_terdaftar["divisi"]; ?>
                                                </button>

                                            </h2>
                                            <div id="accordion<?= $hasil_terdaftar["id_pendaftaran"] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <?php if ($hasil_terdaftar["info"] == "DITERIMA") { ?>
                                                        <span class="badge bg-label-success mb-3">DITERIMA</span>
                                                    <?php } else if ($hasil_terdaftar["info"] == "DITOLAK") { ?>
                                                        <span class="badge bg-label-danger mb-3">DITOLAK</span>
                                                    <?php } else if ($hasil_terdaftar["info"] == "INTERVIEW") { ?>
                                                        <span class="badge bg-label-info mb-3">INTERVIEW</span>
                                                    <?php } else if ($hasil_terdaftar["info"] == "TERDAFTAR") { ?>
                                                        <span class="badge bg-label-secondary mb-3">Diproses</span>
                                                    <?php } else if ($hasil_terdaftar["info"] == "LOLOS BERKAS") { ?>
                                                        <span class="badge bg-label-secondary mb-3">LOLOS BERKAS</span>

                                                    <?php } ?>
                                                    <br>
                                                    <?= $hasil_terdaftar["deskripsi"]; ?>
                                                    <a href="detail_lowongan.php?id=<?= $hasil_terdaftar["id_lowongan"] ?>" class="card-link">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>


                            </div>
                            <div class="tab-pane fade" id="lolosberkas" role=" tabpanel">
                                <?php
                                while ($hasil_lolosberkas = mysqli_fetch_array($data_lolosberkas)) {
                                ?>
                                    <div class="accordion mt-3" id="accordionAll">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion<?= $hasil_lolosberkas["id_pendaftaran"] ?>" aria-expanded="false">
                                                    <?= $hasil_lolosberkas["posisi"]; ?> - <?= $hasil_lolosberkas["divisi"]; ?>
                                                </button>

                                            </h2>
                                            <div id="accordion<?= $hasil_lolosberkas["id_pendaftaran"] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <?php if ($hasil_lolosberkas["info"] == "DITERIMA") { ?>
                                                        <span class="badge bg-label-success mb-3">DITERIMA</span>
                                                    <?php } else if ($hasil_lolosberkas["info"] == "DITOLAK") { ?>
                                                        <span class="badge bg-label-danger mb-3">DITOLAK</span>
                                                    <?php } else if ($hasil_lolosberkas["info"] == "INTERVIEW") { ?>
                                                        <span class="badge bg-label-info mb-3">INTERVIEW</span>
                                                    <?php } else if ($hasil_lolosberkas["info"] == "TERDAFTAR") { ?>
                                                        <span class="badge bg-label-secondary mb-3">Diproses</span>
                                                    <?php } else if ($hasil_lolosberkas["info"] == "LOLOS BERKAS") { ?>
                                                        <span class="badge bg-label-secondary mb-3">LOLOS BERKAS</span>

                                                    <?php } ?>
                                                    <br>
                                                    <?= $hasil_lolosberkas["deskripsi"]; ?>
                                                    <a href="detail_lowongan.php?id=<?= $hasil_lolosberkas["id_lowongan"] ?>" class="card-link">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>


                            </div>
                            <div class="tab-pane fade" id="interview" role=" tabpanel">
                                <?php
                                while ($hasil_interview = mysqli_fetch_array($data_interview)) {
                                ?>
                                    <div class="accordion mt-3" id="accordionAll">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion<?= $hasil_interview["id_pendaftaran"] ?>" aria-expanded="false">
                                                    <?= $hasil_interview["posisi"]; ?> - <?= $hasil_interview["divisi"]; ?>
                                                </button>

                                            </h2>
                                            <div id="accordion<?= $hasil_interview["id_pendaftaran"] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <?php if ($hasil_interview["info"] == "DITERIMA") { ?>
                                                        <span class="badge bg-label-success mb-3">DITERIMA</span>
                                                    <?php } else if ($hasil_interview["info"] == "DITOLAK") { ?>
                                                        <span class="badge bg-label-danger mb-3">DITOLAK</span>
                                                    <?php } else if ($hasil_interview["info"] == "INTERVIEW") { ?>
                                                        <span class="badge bg-label-info mb-3">INTERVIEW</span>
                                                    <?php } else if ($hasil_interview["info"] == "TERDAFTAR") { ?>
                                                        <span class="badge bg-label-secondary mb-3">Diproses</span>
                                                    <?php } else if ($hasil_interview["info"] == "LOLOS BERKAS") { ?>
                                                        <span class="badge bg-label-secondary mb-3">LOLOS BERKAS</span>

                                                    <?php } ?>
                                                    <br>
                                                    <?= $hasil_interview["deskripsi"]; ?>
                                                    <a href="detail_lowongan.php?id=<?= $hasil_interview["id_lowongan"] ?>" class="card-link">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>


                            </div>
                            <div class="tab-pane fade " id="diterima" role=" tabpanel">
                                <?php
                                while ($hasil_diterima = mysqli_fetch_array($data_diterima)) {
                                ?>
                                    <div class="accordion mt-3" id="accordionAll">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion<?= $hasil_diterima["id_pendaftaran"] ?>" aria-expanded="false">
                                                    <?= $hasil_diterima["posisi"]; ?> - <?= $hasil_diterima["divisi"]; ?>
                                                </button>

                                            </h2>
                                            <div id="accordion<?= $hasil_diterima["id_pendaftaran"] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <?php if ($hasil_diterima["info"] == "DITERIMA") { ?>
                                                        <span class="badge bg-label-success mb-3">DITERIMA</span>
                                                    <?php } else if ($hasil_diterima["info"] == "DITOLAK") { ?>
                                                        <span class="badge bg-label-danger mb-3">DITOLAK</span>
                                                    <?php } else if ($hasil_diterima["info"] == "INTERVIEW") { ?>
                                                        <span class="badge bg-label-info mb-3">INTERVIEW</span>
                                                    <?php } else if ($hasil_diterima["info"] == "TERDAFTAR") { ?>
                                                        <span class="badge bg-label-secondary mb-3">Diproses</span>
                                                    <?php } else if ($hasil_diterima["info"] == "LOLOS BERKAS") { ?>
                                                        <span class="badge bg-label-secondary mb-3">LOLOS BERKAS</span>

                                                    <?php } ?>
                                                    <br>
                                                    <?= $hasil_diterima["deskripsi"]; ?>
                                                    <a href="detail_lowongan.php?id=<?= $hasil_diterima["id_lowongan"] ?>" class="card-link">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>


                            </div>
                            <div class="tab-pane fade" id="ditolak" role=" tabpanel">
                                <?php
                                while ($hasil_ditolak = mysqli_fetch_array($data_ditolak)) {
                                ?>
                                    <div class="accordion mt-3" id="accordionAll">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion<?= $hasil_ditolak["id_pendaftaran"] ?>" aria-expanded="false">
                                                    <?= $hasil_ditolak["posisi"]; ?> - <?= $hasil_ditolak["divisi"]; ?>
                                                </button>

                                            </h2>
                                            <div id="accordion<?= $hasil_ditolak["id_pendaftaran"] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <?php if ($hasil_ditolak["info"] == "DITERIMA") { ?>
                                                        <span class="badge bg-label-success mb-3">DITERIMA</span>
                                                    <?php } else if ($hasil_ditolak["info"] == "DITOLAK") { ?>
                                                        <span class="badge bg-label-danger mb-3">DITOLAK</span>
                                                    <?php } else if ($hasil_ditolak["info"] == "INTERVIEW") { ?>
                                                        <span class="badge bg-label-info mb-3">INTERVIEW</span>
                                                    <?php } else if ($hasil_ditolak["info"] == "TERDAFTAR") { ?>
                                                        <span class="badge bg-label-secondary mb-3">Diproses</span>
                                                    <?php } else if ($hasil_ditolak["info"] == "LOLOS BERKAS") { ?>
                                                        <span class="badge bg-label-secondary mb-3">LOLOS BERKAS</span>

                                                    <?php } ?>
                                                    <br>
                                                    <?= $hasil_ditolak["deskripsi"]; ?>
                                                    <a href="detail_lowongan.php?id=<?= $hasil_ditolak["id_lowongan"] ?>" class="card-link">Selengkapnya</a>
                                                </div>
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