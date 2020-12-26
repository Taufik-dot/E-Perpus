        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/index'); ?>">
                <div class="sidebar-brand-icon rotate-n-10">
                    <i class="fas fa-book-reader"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-Perpus</div>
            </a>

            <!-- Divider -->
        <hr class="sidebar-divider">


            <!-- QUERY MENU -->
        <div class="sidebar-heading">
        MEMBER
        </div>
           <li class="nav-item">

             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsee" aria-expanded="true" aria-controls="collapsee">
          <i class="fas fa-book"></i>
          <span>Buku</span>
        </a>
        <div id="collapsee" class="collapse buku" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-success py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url().'user/buku' ?>"><i class="fas fa-book-open"></i>   Data Buku</a>
            <a class="collapse-item" href="<?php echo base_url().'user/tambah_peminjaman' ?>"><i class="fas fa-shopping-cart"></i>   Peminjaman Buku</a>  
 

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/tambah_anggota'); ?>">
                    <i class="fas fa-user-plus"></i>
                    <span>Daftar Anggota</span></a>
            </li>
             

        <hr class="sidebar-divider d-none d-md-block">
        
        <div class="sidebar-heading">
        ACTIVITY
        </div>

        <li class="nav-item">
                      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
          <i class="fas fa-cogs"></i>
          <span>Pengaturan</span>
        </a>
        <div id="collapse" class="collapse setting" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-success py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url().'user/edit' ?>"><i class="fas fa-user-cog"></i>   Edit Profil
            </a>
            <a class="collapse-item" href="<?php echo base_url().'user/changepassword' ?>"><i class="fas fa-key"></i>   Ganti Password
            </a>
        </li>

              
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
             


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar --> 