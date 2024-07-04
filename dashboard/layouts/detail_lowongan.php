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
                                        <div class="row position-relative">
                                            <div class="col-9">
                                                <h5 class="card-title">Card title</h5>
                                                <div class="card-subtitle mb-2">Divisi</div>
                                                <div class="card-subtitle text-muted mb-2">Lokasi</div>
                                                <span class="badge bg-label-primary mb-3">Full Time</span>
                                                <span class="badge bg-label-warning mb-3">Part Time</span>
                                                <span class="badge bg-label-info mb-3">Contract</span>
                                                <span class="badge bg-label-dark mb-3">Internship</span>
                                            </div>
                                            <div class="d-flex justify-content-end position-absolute top-50 translate-middle-y">
                                                <button type="button" class="btn btn-outline-primary">Daftar Sekarang</button>
                                            </div>
                                        </div>
                                        <p class="card-text">
                                            This is a wider card with supporting text below as a natural lead-in to additional content. This
                                            content is a little bit longer.
                                        </p>
                                        <h6 class="mt-5">Deskripsi Pekerjaan</h6>
                                        <p class="card-text">
                                            Memastikan berjalannya strategi warehouse sesuai dengan yang ditetapkan
                                            Menganalisis efektivitas aktivitas warehouse dan kinerja karyawannya
                                            Menjaga dan membuat laporan kedisiplinan, kehadiran, dan kinerja karyawan warehouse
                                            Menerima sekaligus memeriksa barang yang datang di warehouse
                                            Menyerahkan barang sesuai dengan permintaan pelanggan
                                            Mengatur dan memeriksa secara berkala tempat penyimpanan dan inventaris
                                            Menjamin prosedur yang berjalan di area warehouse telah sesuai dengan standar yang berlaku di perusahaan
                                            Menentukan proses dan metode yang dapat meningkatkan kinerja warehouse
                                            Membuat susunan kebutuhan karyawan sekaligus pengalokasian beban kerja.
                                        </p>
                                        <h6 class="mt-5">Kualifikasi</h6>
                                        <p class="card-text">
                                            Pendidikan minimum D3 segala jurusan
                                            Usia antara 30 s/d 40 tahun
                                            Memiliki pengalaman profesional di bidang pergudangan minimal 3 tahun
                                            Memiliki pengalaman minimal sebagai Supervisor Warehouse setidaknya 2 tahun
                                            Menguasai manajemen data
                                            Menguasai fitur advance Ms Excel
                                            Menguasai manajemen inventory dan delivery
                                            Menguasai manajemen pergudangan baik online maupun offline
                                            Memiliki kemampuan untuk mencari solusi atas permasalahan gudang
                                            Good Interpersonal dan memiliki kemampuan komunikasi yang baik
                                            Mampu bekerja dibawah tekanan
                                            Memiliki jiwa kepemimpinan yang tinggi
                                        </p>
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