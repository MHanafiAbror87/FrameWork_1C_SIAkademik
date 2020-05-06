<?php
$id = $this->session->userdata("id");
$data_siswa = $this->db->query("SELECT foto FROM pgn_siswa WHERE kode_siswa = '$id'")->row();
if(!empty($data_siswa->foto)) {
  $foto = base_url().'upload/siswa/'.$data_siswa->foto;
} else {
  $foto = base_url().'upload/user.jpg';
}
?>


<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar ">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <img src="<?php echo $foto; ?>" class="img-responsive" style="width:50px;height:50px;" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("nama"); ?></p>
          <p><?php echo ucfirst($this->session->userdata("hak_akses")); ?></p>
        </div>
      </div>
<<<<<<< HEAD
     
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU NAVIGASI</li>
        <li>
          <a href="<?php echo base_url();?>home">
            <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
=======
      <center>
        <div class="btn-group btn-group-xs">
          <span class="right btn badge badge-danger btn-flat animated fadeInDown"><?php echo $hari . "&nbsp;";
                                                                                  echo date('d') . "&nbsp;&nbsp;";
                                                                                  echo $bln . "&nbsp;";
                                                                                  echo date('Y'); ?></span>
          <button class='btn  btn-flat bg-navy badge badge-danger animated fadeInUp'><span class="" id="clock"></button></div>
      </center>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url(); ?>admin/home" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                DAHSBOARD
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(1) == 'user') echo 'active'; ?> treeview <?php if ($this->uri->segment(1) == 'user') echo 'menu-open'; ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user text-success"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>diganti ya" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Identitas Sekolah</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>diganti ya" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Tahun Akademik</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/master/ruangan" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Ruangan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/master/jurusan" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Jurusan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/master/kelas" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Kelas</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>diganti ya" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Golongan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(1) == 'user') echo 'active'; ?> treeview <?php if ($this->uri->segment(1) == 'user') echo 'menu-open'; ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user text-success"></i>
              <p>
                Pengguna
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/pengguna/guru" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Guru</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/pengguna_siswa" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Siswa</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/pengguna_admin/admin" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>admin</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(1) == 'user') echo 'active'; ?> treeview <?php if ($this->uri->segment(1) == 'user') echo 'menu-open'; ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user text-success"></i>
              <p>
                Data Akademik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/Akademik/kelompok_pelajaran" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Kelompok Mapel</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/Akademik/akd_mapel" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Mata Pelajaran</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>admin/Akademik/akd_jadwal" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Jadwal Pelajaran</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>diganti ya" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Kopetensi Dasar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(1) == 'user') echo 'active'; ?> treeview <?php if ($this->uri->segment(1) == 'user') echo 'menu-open'; ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user text-success"></i>
              <p>
                Data Absensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>diganti ya" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Data Absensi Siswa</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>diganti ya" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Rekap Absensi Siswa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>master/jabatan" class="nav-link">
              <i class="nav-icon fas fa-id-card-alt text-success"></i>
              <p>
                Journal KBM
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(1) == 'user') echo 'active'; ?> treeview <?php if ($this->uri->segment(1) == 'user') echo 'menu-open'; ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user text-success"></i>
              <p>
                Laporan Nilai Siswa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>diganti ya" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Cetak Raport UTS</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>diganti ya" class="nav-link">
                  <i class="fas fa-angle-right nav-icon text-success"></i>
                  <p>Cetak Raport</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url(); ?>master/jabatan" class="nav-link">
              <i class="nav-icon fas fa-id-card-alt text-success"></i>
              <p>
                Kalender Akademik
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
>>>>>>> f5deab65e1c4fd061b91cd30db05a6674b5b3cf8

        <li class="<?php if($this->uri->segment(1) == 'pengguna') echo 'active'; ?> treeview <?php if($this->uri->segment(1) == 'pengguna') echo 'menu-open'; ?>">
          <a href="#">
            <i class="fa fa-user"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>pengguna/guru"><i class="fa fa-angle-double-right"></i> Siswa</a></li>
            <li><a href="<?php echo base_url(); ?>pengguna/guru"><i class="fa fa-angle-double-right"></i> Guru</a></li>
            <li><a href="<?php echo base_url(); ?>pengguna/guru"><i class="fa fa-angle-double-right"></i> Admin</a></li>
          </ul>
        </li>
        <li class="<?php if($this->uri->segment(1) == 'master') echo 'active'; ?> treeview <?php if($this->uri->segment(1) == 'master') echo 'menu-open'; ?>">
          <a href="#">
            <i class="fa fa-hdd-o"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>master/tahun_ajaran"><i class="fa fa-angle-double-right"></i> Tahun Ajaran</a></li>
            <li><a href="<?php echo base_url(); ?>master/jurusan"><i class="fa fa-angle-double-right"></i> Ruangan</a></li>
            <li><a href="<?php echo base_url(); ?>master/kelas"><i class="fa fa-angle-double-right"></i> Jurusan</a></li>
           <li><a href="<?php echo base_url(); ?>master/mapel"><i class="fa fa-angle-double-right"></i> Kelas</a></li>
            <li><a href="<?php echo base_url(); ?>master/predikat"><i class="fa fa-angle-double-right"></i> Rentang Nilai / Predikat</a></li>
          </ul>
        </li>
        <li class="<?php if($this->uri->segment(1) == 'akademik') echo 'active'; ?> treeview <?php if($this->uri->segment(1) == 'akademik') echo 'menu-open'; ?>">
          <a href="#">
            <i class="fa fa-tag"></i> <span>Akademik</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>master/tahun_ajaran"><i class="fa fa-angle-double-right"></i> Kelompok Mata Pelajaran</a></li>
            <li><a href="<?php echo base_url(); ?>master/jurusan"><i class="fa fa-angle-double-right"></i> Mata Pelajaran</a></li>
            <li><a href="<?php echo base_url(); ?>master/kelas"><i class="fa fa-angle-double-right"></i> Jadwal Pelajaran</a></li>
           <li><a href="<?php echo base_url(); ?>master/mapel"><i class="fa fa-angle-double-right"></i> Kompetensi Dasar</a></li>
            <li><a href="<?php echo base_url(); ?>master/predikat"><i class="fa fa-angle-double-right"></i> Rentang Nilai / Predikat</a></li>
          </ul>
        </li>
        <li class="<?php if($this->uri->segment(1) == 'presensi') echo 'active'; ?> treeview <?php if($this->uri->segment(1) == 'presensi') echo 'menu-open'; ?>">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Presensi Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>master/tahun_ajaran"><i class="fa fa-angle-double-right"></i> Presensi</a></li>
            <li><a href="<?php echo base_url(); ?>master/jurusan"><i class="fa fa-angle-double-right"></i> Rekap Presensi</a></li>
            </ul>
        </li>

        <li>
          <a href="<?php echo base_url(); ?>jadwal_pelajaran/jadwal_pelajaran">
            <i class="fa fa-tags"></i> <span>Journal KBM</span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(1) == 'nilai') echo 'active'; ?> treeview <?php if($this->uri->segment(1) == 'nilai') echo 'menu-open'; ?>">
          <a href="#">
            <i class="fa fa-list-alt"></i> <span>Laporan Nilai Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>nilai/nilai_uts"><i class="fa fa-angle-double-right"></i> Cetak Raport UTS</a></li>
            <li><a href="<?php echo base_url(); ?>nilai/nilai_raport"><i class="fa fa-angle-double-right"></i> Cetak Raport</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>