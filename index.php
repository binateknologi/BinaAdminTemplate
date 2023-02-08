<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

    <!-- Boostrap ICONS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- jquery  -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js' integrity='sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==' crossorigin='anonymous'></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins';
        }

        .sidebars {
            width: 260px;
            transition: 0.2s;
            overflow: auto;
            z-index: 9;
        }

        .sidebars.mati {
            width: 0px;
            padding-left: 0px !important;
            padding-right: 0px !important;
            overflow: auto;
        }

        .sidebars .still {
            width: 225px !important;
        }

        .sidebars::-webkit-scrollbar {
            display: none;
        }

        .main-content {
            position: relative;
            left: 260px;
            width: calc(100% - 260px);
            transition: 0.2s;
        }

        .sidebars.mati~.main-content {
            left: 0px;
            width: calc(100% - 0px);

        }

        a.nav-link {
            margin-top: 10px;
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .bg-light {
            background-color: #fdfdfd !important;
        }

        .nav-pills li {
            margin-top: 8px;
        }

        .aktif {
            color: #ffffff !important;
            background-color: #00148d80 !important;
            font-weight: 600;
        }

        .aktif::before {
            content: '';
            background-color: red;
        }
        .col-sm-4{
            margin-bottom: 10px;
        }

    </style>
</head>

<body class="bg-light">

    <main>
        <!-- Start SIdebar  -->

        <div class="sidebars px-3 py-2 text-dark bg-light shadow-sm fixed-top h-100">
            <a href="/" class="still d-flex align-items-center mb-2 text-dark text-decoration-none">
                <i class="bi bi-bootstrap fs-3 me-3"></i>
                <span class="fs-4 fw-bolder">Bina Admin</span>
            </a>
            <ul class="still nav nav-pills flex-column mb-auto">

                <li>
                    <a href="#" class="nav-link text-dark aktif">
                        <i class="bi bi-speedometer2 me-2"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-table me-2"></i>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-grid me-2"></i>
                        Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-dark">
                        <i class="bi bi-people me-2"></i>
                        Customers
                    </a>
                </li>
            </ul>

        </div>
        <!-- ENd SIde Bar  -->


        <div class="main-content">
            <!-- Navbar  -->
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container">
                    <button onclick="expand_main()" class="btn bg-light border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=" text-dark navbar-toggler-icon"></span>
                    </button>

                </div>
            </nav>
            <!-- end Navbar  -->

            <div class="container px-4">
                <h4 class="fw-bold">Dashboard</h4>
                <div class="row mt-4">
                    <div class="col-sm-4">
                        <div class="card shadow-lg p-2 rounded-3 border-0">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow-lg p-2 rounded-3 border-0">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow-lg p-2 rounded-3 border-0">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Boostraps Bundle  -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js' integrity='sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==' crossorigin='anonymous'></script>
    <script>
        function expand_main() {
            $('.sidebars').toggleClass('mati');
        }
    </script>

</body>

</html>