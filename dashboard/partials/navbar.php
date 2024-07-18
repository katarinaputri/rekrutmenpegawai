<!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
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
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>

                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);">
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