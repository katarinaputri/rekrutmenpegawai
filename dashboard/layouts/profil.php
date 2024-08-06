<?php
require "functions.php";

session_start();

$id_NIK = $_SESSION['id_NIK'];
$status_akun = $_SESSION['status'];
$posisi = false;
if ($status_akun == 'pelamar') {
    $profil = mysqli_query($conn, "SELECT * FROM akun a inner join pelamar pl on pl.id_NIK = a.id_NIK WHERE a.id_NIK = '$id_NIK'");
} else {
    $profil = mysqli_query($conn, "SELECT * FROM akun a WHERE a.id_NIK = '$id_NIK'");
}

if (isset($_POST["simpan"])) {
    // cek apakah data berhasil ditambahkan atau tidak
    if (profil($_POST) > 0) {
        $berhasil = true;
    } else {
        $error = true;
    }
    header("Location: " . $_SERVER['PHP_SELF']);
}
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <?php include "../partials/head.php" ?>
    <title>Dashboard Admin</title>
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
                        <!-- ALERT -->
                        <?php if (isset($error)) : ?>
                            <div class="alert alert-danger" role="alert">Gagal memperbarui data pengguna! Hanya file JPG, JPEG, dan PNG yang diizinkan.</div>
                        <?php endif; ?>
                        <?php if (isset($berhasil)) : ?>
                            <div class="alert alert-success" role="alert">Berhasil memperbarui data pengguna!</div>
                        <?php endif; ?>
                        <!-- END ALERT -->

                        <?php
                        while ($hasil = mysqli_fetch_array($profil)) {
                        ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-5 col-lg-4 mb-3">
                                        <div class="card mx-auto">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img class="img-preview img-fluid d-flex mx-auto my-4 rounded" alt="Foto Profil" src="../assets/img/avatars/<?= $hasil["foto"]; ?>" />
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                            <span class="d-none d-sm-block">Upload new photo</span>
                                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                                            <input type="file" id="upload" name="image" class="account-file-input" onchange="previewImage()" hidden accept="image/png, image/jpeg, image/jpg" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <input type="text" hidden value="<?= $id_NIK ?>" name="id_nik">
                                                <div class="mb-3 row">
                                                    <label for="html5-nik-input" class="col-md-2 col-form-label">NIK/NIP</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control-plaintext" type="text" value="<?= $hasil["NIK"]; ?>" id="html5-nik-input" readonly="" name="nik" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="html5-username-input" class="col-md-2 col-form-label">Username</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control-plaintext" type="text" value="<?= $hasil["username"]; ?>" id="html5-username-input" readonly="" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="html5-nama-input" class="col-md-2 col-form-label">Nama Lengkap</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" value="<?= $hasil["nama_lengkap"]; ?>" id="html5-nama-input" name="nama" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="html5-email-input" class="col-md-2 col-form-label">Email</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="email" value="<?= $hasil["email"]; ?>" id="html5-email-input" name="email" />
                                                    </div>
                                                </div>
                                                <?php if ($status_akun == 'pelamar') { ?>
                                                    <div class="mb-3 row">
                                                        <label for="html5-filecv-input" class="col-md-2 col-form-label">Dokumen CV</label>
                                                        <div class="col-md-10">
                                                            <a href="../assets/dokumen/cv/<?= $hasil["dokumen_cv"]; ?>" download><?= $hasil["dokumen_cv"]; ?></a>
                                                            <input class="form-control" type="file" id="html5-filecv-input" name="cv" accept="application/pdf" />
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="html5-fileporto-input" class="col-md-2 col-form-label">Dokumen Portofolio</label>
                                                        <div class="col-md-10">
                                                            <a href="../assets/dokumen/portofolio/<?= $hasil["dokumen_portofolio"]; ?>" download><?= $hasil["dokumen_portofolio"]; ?></a>
                                                            <input class="form-control" type="file" id="html5-fileporto-input" name="portofolio" accept="application/pdf" />
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="html5-tel-input" class="col-md-2 col-form-label">Linkedin</label>
                                                        <div class="col-md-10">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">www.linkedin.com/in/</span>
                                                                <input type="text" class="form-control" placeholder="URL" id="basic-url1" aria-describedby="basic-addon14" value="<?= $hasil["link_linkedin"]; ?>" name="linkedin" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="html5-password-input" class="col-md-2 col-form-label">Instagram</label>
                                                        <div class="col-md-10">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon14">https://www.instagram.com/</span>
                                                                <input type="text" class="form-control" placeholder="URL" id="basic-url1" aria-describedby="basic-addon14" value="<?= $hasil["link_instagram"]; ?>" name="instagram" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="mb-3 row">
                                                    <label for="html5-pass-input" class="col-md-2 col-form-label">Password Baru</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="password" id="html5-pass-input" name="password_baru" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="html5-range" class="col-md-2 col-form-label">Konfirmasi Password*</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="password" id="html5-password-input" required name="password_lama" />
                                                        <div class="form-text">Masukkan konfirmasi password dengan menggunakan password Anda sebelumnya.</div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary me-2" name="simpan">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
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