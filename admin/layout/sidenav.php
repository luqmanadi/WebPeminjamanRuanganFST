<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BO Room</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="../dashboard/index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Utama
    </div>
    
    <!-- Nav Item - User Collapse Menu -->
    <li class="nav-item" >
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
            <i class="fas fa-users fa-cog"></i>
            <span>User</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingUser" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Daftar User :</h6>
                <a class="collapse-item" href="../dosen/index.php">Dosen</a>
                <a class="collapse-item" href="../ormawa/index.php">Ormawa</a>
                <a class="collapse-item" href="../mahasiswa/index.php">Mahasiswa</a>
            </div>
        </div>
    </li>
            

    <!-- Nav Item - Ruangan Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" aria-expanded="true" aria-controls="collapseRuangan" data-target="#collapseRuangan"  >
            <i class="fas fa-fw fa-door-open"></i>
            <span>Ruangan</span>
        </a>
        <div  id="collapseRuangan" class="collapse" data-parent="#accordionSidebar" aria-labelledby="headingRuangan" >
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="../ruangan/index.php">List</a>
                <a class="collapse-item" href="../ruangan/create.php">Tambah Ruang</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Ruangan Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeminjaman" aria-expanded="true" aria-controls="collapsePeminjaman">
            <i class="fas fa-fw fa-file"></i>
            <span>Riwayat Peminjaman</span>
        </a>
        <div id="collapsePeminjaman" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="../peminjaman/index.php">List</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    
</ul>
<!-- End of Sidebar -->