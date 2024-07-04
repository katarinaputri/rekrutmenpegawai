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

                    <button class="btn btn-outline-primary" type="button">Login</button>

                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <h5 class="card-title">Card title</h5>
                                            <div class="card-subtitle text-muted mb-3">Card subtitle</div>
                                        </div>
                                        <div class="col-3 d-flex justify-content-end align-middle">
                                            <a href="detail_lowongan.php" class="card-link">Selengkapnya</a>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <h5 class="card-title">Card title</h5>
                                            <div class="card-subtitle text-muted mb-3">Card subtitle</div>
                                        </div>
                                        <div class="col-3 d-flex justify-content-end align-middle">
                                            <a href="javascript:void(0)" class="card-link">Selengkapnya</a>
                                        </div>
                                    </div>
                                    <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </p>
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