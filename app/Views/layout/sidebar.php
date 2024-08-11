<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> 

 <style>
        .background {
            background-color: #480785;
        }
        .inilink {
            color: white;
        }
        .inilink.active {
            background-color: white;
            
        }
        .inilink:hover {
            background-color: white;
        }
    </style>
<div class="container-fluid ">
    <div class="row flex-nowrap ">
        <div class="background position-sticky col-auto col-md-3 col-xl-2 px-sm-2 px-0">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 text-white text-decoration-none">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start text-white w-100" id="menu">
                <?php foreach ($materi as $b) : ?>
                            <li class="w-100">
                                <a href="?id=<?= $b['id']; ?>" class="nav-link px-3 align-middle <?= (isset($_GET['id']) && $_GET['id'] == $b['id']) ? 'active' : ''; ?>">
                                    <span class="ms-1 d-none d-sm-inline"><?= $b['judul_materi']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                </ul>
                <a href="/course" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Lihat Course</span>
                </a>
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Ke Beranda</span>
                </a>
                    
            </div>
        </div>
        <div class="col py-3">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
       