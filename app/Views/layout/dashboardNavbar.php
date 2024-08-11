<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menapak Indonesia</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cc5db5fcb8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../src/css/dashboardNavbar.css" />
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/select/2.0.0/css/select.bootstrap5.css">
    <style>
    .dropend .active, .list-group-item-action.active {
    color: green;
    background-color:white;
    box-shadow:none;
}
    @media (max-width: 576px) {
        .list-group-item {
            padding-left: 20px !important;
            padding-right: 20px !important;
            width:100%;
        }
        .menu-support {
            margin-top: 20px !important;
        }
        .position-fixed{
            background-color:white;
            border:1px solid black;
            height:100vh;
            z-index:5;
        }

    }
</style>
<header>
  <!-- Sidebar -->
  <nav
       id="navbarToggleExternalContent"
       class=" collapse d-lg-block sidebar collapse bg-white "
       >
    <div class=" position-fixed z-3 " id="">
      <div class="list-group list-group-flush mx-1 mt-4">
        <h6 class="menu-support mx-3 ripple fa-fw me-2 py-2">Menu</h6>
        <a
           href="sufardiWeb/dashboard"
           class="list-group-item list-group-item-action py-2 ripple d-flex align-items-center {{ request()->is('dashboard') ? 'active' : '' }}">
           <i class="fa-brands fa-buromobelexperte fa-fw me-3 fw-bold"></i>
           <span>Dashboard</span>
        </a>
    <span class="pemisah"></span>
        <h6 class="menu-support mx-3 ripple fa-fw me-2 py-2">Support</h6>

        <a
           href="/"
           class="list-group-item list-group-item-action py-2 ripple d-flex align-items-center"
           >
           <i class="fa-solid fa-arrow-right-from-bracket fa-fw me-3"></i>
           <span>Logout</span>
        </a>

      </div>
    </div>
  </nav>
  <!-- Sidebar -->
  <!-- Navbar -->
  <nav
       id="main-navbar"
       class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
    >
    <!-- Container wrapper -->
    <div class="container-fluid ">
      <!-- Toggle button -->
        <button class="navbar-toggler mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span
            class="navbar-toggler-icon"
            height="20"></span>
        </button>
      <!-- Brand -->
        <a class="navbar-brand" href="/dashboard">
            <img
                src="/img/logo_menapak.png"
                height="40"
                alt=""
                loading="lazy"
             />
        </a>
      <!-- Search form -->
        <div class="menapak d-none d-md-flex input-group w-auto fw-bolder fs-2">
          <img
            src="src/images/logo.svg"
            width="40"
            alt=""
            class="me-2"
          />
        
        <a href="/dashboard"
               style="min-width: 100px; color:#480785; text-decoration:none; "
               >Mindful Work</a>
        </div>
      <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
       
        <!-- Avatar -->
            <li class="nav-item dropdown">
                <a
                    class="nav-link  hidden-arrow d-flex align-items-center"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                >
             
                    <img
                        src="{{asset('img/admin/avatar/' . session('avatar'))}}"
                        class="rounded-circle"
                        height="40"
                        alt=""
                        loading="lazy"
                    />
           
                    <img
                        src="{{asset('img/avatar_image.png')}}"
                        class="rounded-circle"
                        height="40"
                        alt=""
                        loading="lazy"
                    />
   
                </a>
            </li>
        </ul>
    </div>
    <!-- Container wrapper -->
</nav>
  <!-- Navbar -->
</header>
<script src="{{asset('js/dasboard/adminDasboard.js')}}"></script>
<script ></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- button -->
<script src="https://cdn.datatables.net/select/2.0.0/js/dataTables.select.js"></script>
<script src="https://cdn.datatables.net/select/2.0.0/js/select.bootstrap5.js"></script>


<script src="https://kit.fontawesome.com/91500c2459.js" crossorigin="anonymous"></script>
</body>
</html>