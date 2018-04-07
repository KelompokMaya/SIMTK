<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="bg-user-panel">
                <img src="<?php echo base_url('assets/images/bg-blur.jpg') ?>" alt="User Image" />
            </div>
            <div class="image img_circle">
                <img src="<?php echo base_url('assets/images/user.jpg') ?>" alt="User Image" />
            </div>
            <div class="info">
                <p style="color: #fff;"><?php echo $currUser; ?></p>
                <a href="#">Kepala Sekolah</a>
            </div>
            
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li id="sidebar-dashboard" class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>

            <li id="sidebar-siswa"><a href="#"><i class="fa  fa-th-list"></i> Kelola Siswa</a></li>

            <li id="sidebar-lokasi"><a href="#"><i class="fa fa-map"></i> Lokasi Aset</a></li>

            <!-- <li id="sidebar-user"><a href="#"><i class="fa fa-user"></i> User</a></li>
 -->
            <li id="sidebar-history"><a href="#"><i class="fa fa-history "></i> Riwayat Transaksi</a></li>

            


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
