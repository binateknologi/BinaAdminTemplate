<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS -->
    <!-- Bootstrap - short-cut(bina-bsmin) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <!-- Boostrap ICONS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- jquery  -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js' integrity='sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==' crossorigin='anonymous'></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="dist/css/theme_indigo.css">

    <link rel="stylesheet" href="dist/css/sidebar.css">
</head>

<body class="bg-light">

    <main>
        <!-- Start SIdebar  -->

        <div class="sidebars px-3 py-2 text-dark bg-light shadow-lg h-100 fixed-top">

            <button onclick="expand_main()" class="ss d-block d-sm-none shadow-none  btn btn-light">
                <i data-feather="x"></i></button>
            <a href="/" class="sidebar-header still d-flex align-items-center mb-2 text-dark text-decoration-none">
                <img src="dist/img/fav.png" class="me-2" width="36px" alt="">
                <span class="fs-4 fw-bolder">Bina Admin</span>
            </a>
            <ul class="still nav nav-pills flex-column mb-auto">

                <li>
                    <a href="#" class="nav-link text-dark aktif">
                        <i data-feather="home"></i>
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link text-dark">
                        <i data-feather="table"></i>
                        Data Barang
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-dark">
                        <i data-feather="grid"></i>
                        Kategori
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-dark">
                        <i data-feather="users"></i>
                        Supplier
                    </a>
                </li>
                <hr>

                <li>
                    <a href="#" class="nav-link text-dark">
                        <i data-feather="pie-chart"></i>
                        Analisis
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-dark">
                        <i data-feather="bar-chart-2"></i>
                        Laporan
                    </a>
                </li>


            </ul>

        </div>
        <!-- ENd SIde Bar  -->


        <div class="main-content bg-light">
            <!-- Navbar  -->
            <nav class="navbar navbar-expand-sm shadow-none navbar-light bg-light">
                <div class="container">
                    <button onclick="expand_main()" class="btn bg-light border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                        <i data-feather="menu"></i>
                    </button>

                    <div class="ms-auto mt-2 mt-lg-0">
                        <div class="dropdown  d-inline-block">
                            <button class="me-1 btn btn-white border-0 shadow-none" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="triggerId">

                            </div>
                        </div>
                        <div class="dropdown  d-inline-block">
                            <button class="me-1 btn btn-white shadow-none border-0" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="triggerId">

                            </div>
                        </div>
                        <div class="dropdown  d-inline-block">
                            <button class="me-1 btn btn-white border-0 shadow-none" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="settings"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="triggerId">

                            </div>
                        </div>

                    </div>
                </div>
            </nav>
            <!-- end Navbar  -->

            <div class="container px-4" style="min-height: 90vh;">
                <h4 class="fw-bold">Dashboard</h4>
                <div class="row mt-4">
                    <div class="col-sm-4">
                        <div class="card p-2 shadow-lg rounded-3 border-0">
                            <div class="card-body">
                                <div class="float-end me-1 mt-3 p-2 text-white bg-success rounded-circle mb-3" style="width: 40px;height: 40px;">
                                    <i data-feather="monitor"></i>
                                </div>
                                <p class="card-text text-muted">Pemasukan</p>
                                <h3 class="card-title fw-bold">Rp.12.4000.000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card p-2 shadow-lg rounded-3 border-0">
                            <div class="card-body">
                                <div class="float-end me-1 mt-3 p-2 text-white bg-primary rounded-circle mb-3" style="width: 40px;height: 40px;">
                                    <i data-feather="truck"></i>
                                </div>
                                <p class="card-text text-muted">Pengiriman</p>
                                <h3 class="card-title fw-bold">150 Stuff</h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card p-2 shadow-lg rounded-3 border-0">
                            <div class="card-body">
                                <div class="float-end me-1 mt-3 p-2 text-white bg-danger rounded-circle mb-3" style="width: 40px;height: 40px;">
                                    <i data-feather="package"></i>
                                </div>
                                <p class="card-text text-muted">Stok Gudang</p>
                                <h3 class="card-title fw-bold">400 Stuff</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Boostraps Bundle  -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js' integrity='sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==' crossorigin='anonymous'></script>

    <script src="dist/js/sidebar.js"></script>

</body>

</html>