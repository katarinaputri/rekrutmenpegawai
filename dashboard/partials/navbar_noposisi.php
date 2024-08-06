<!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <?php if ($posisi == true) { ?>
            <!-- FORM SELECT KANTOR -->
            <form action="" method="post">
                <div class="input-group">
                    <select class="form-select form-select-sm" name="select_posisi" required>
                        <option value="all">Semua Posisi</option>
                        <?php
                        $sql = mysqli_query($conn, "SELECT * FROM info_lowongan WHERE status = 1");
                        while ($data = mysqli_fetch_array($sql)) {
                            $ket = "";
                            if (isset($_POST['select_posisi'])) {
                                $select_posisi = trim($_POST['select_posisi']);
                                if ($select_posisi == $data['id_lowongan']) {
                                    $ket = "selected";
                                }
                            }
                        ?>
                            <option <?= $ket; ?> value="<?= $data['id_lowongan'] ?>">
                                <?= $data['posisi']; ?>&nbsp;-&nbsp; <?= $data['divisi']; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <button class="btn btn-sm btn-primary" type="submit" name="search">Search</button>
                </div>
            </form>
            <!-- FORM SELECT KANTOR END -->
        <?php } ?>

        <?php if ($status_akun == 'pelamar') { ?>
            <div class="navbar-nav me-auto d-flex justify-content-center">
                <a class="nav-item nav-link active" href="daftar_lowongan.php">Home</a>
            </div>
        <?php } ?>

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="profil.php">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">Profil</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <?php if ($status_akun == 'pelamar') { ?>
                        <li>
                            <a class="dropdown-item" href="lamaran_saya.php">
                                <i class="bx bx-book-open me-2"></i>
                                <span class="align-middle">Lamaran Saya</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                    <?php } ?>
                    <li>
                        <a class="dropdown-item" href="logout.php">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>

<!-- / Navbar -->