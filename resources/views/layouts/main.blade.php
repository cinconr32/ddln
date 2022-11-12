<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/favicon.ico">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/696b2ed02d.js" crossorigin="anonymous"></script>
    <title> Data Penjualan </title>
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <img src="/img/android-chrome-512x512.png" class="img logo rounded-circle mb-5">
                <h5 class="text-light">MENU</h5>
                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="/dashboard"><i class="fa-solid fa-chart-line p-2"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="/databarang"><i class="fa-solid fa-table p-2"></i>Data Barang</a>
                    </li>
                    <li>
                        <a href="/tambahbarang"><i class="fa-solid fa-square-plus p-2"></i>Tambah Barang</a>
                    </li>
                    <li>
                        <a href="/tambahstock"><i class="fa-solid fa-square-plus p-2"></i>Tambah Stock</a>
                    </li>
                    <li>
                        <a href="/historystock"><i class="fa-solid fa-clock-rotate-left p-2"></i>History Stock</a>
                    </li>
                    <li>
                        <a href="/formpenjualan"><i class="fa-brands fa-wpforms p-2"></i>Form Penjualan</a>
                    </li>
                    <li>
                        <a href="/datapenjualan"><i class="fa-solid fa-table p-2"></i>Data Penjualan</a>
                    </li>
                </ul>
            </div>
        </nav>
    

        <div id="content" class="p-3 p-md-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('tables')

        </div>
    
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
            $('#example').DataTable();
            });
        </script>
    </body>
    </html>
    