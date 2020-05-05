  <?php
  $Dd = date("D");
  $bln = date("M");
  if ($Dd == "Sun") {
    $hari = "Minggu, ";
  } else if ($Dd == "Mon") {
    $hari = "Senin, ";
  } else if ($Dd == "Tue") {
    $hari = "Selasa, ";
  } else if ($Dd == "Wed") {
    $hari = "Rabu, ";
  } else if ($Dd == "Thu") {
    $hari = "Kamis, ";
  } else if ($Dd == "Fri") {
    $hari = "Jum'at, ";
  } else if ($Dd == "Sat") {
    $hari = "Sabtu, ";
  } else {
    $hari = $Dd;
  }

  if ($bln == 'Jan') {
    $bln = "Januari ";
  } elseif ($bln == 'Feb') {
    $bln = "Februari ";
  } elseif ($bln == 'Mar') {
    $bln = "Maret ";
  } elseif ($bln == 'Apr') {
    $bln = "April";
  } elseif ($bln == 'May') {
    $bln = "Mei ";
  } elseif ($bln == 'Jun') {
    $bln = "Juni ";
  } elseif ($bln == 'Jul') {
    $bln = "Juli ";
  } elseif ($bln == 'Aug') {
    $bln = "Agustus ";
  } elseif ($bln == 'Sep') {
    $bln = "September ";
  } elseif ($bln == 'Oct') {
    $bln = "Oktober ";
  } elseif ($bln == 'Nov') {
    $bln = "November";
  } elseif ($bln == 'Dec') {
    $bln = "Desember ";
  } else {
    $bln = $bln;
  }

  ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-success elevation-4 animated fadeInLeft">
    <!-- Brand Logo -->

    <a href="<?php echo base_url(); ?>" class="brand-link ">
      <span class="brand-text font-weight-light" style="text-shadow: 2px 2px 4px #827e7e;"><b>SMK NEGERI 7 JEMBER</b></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image animated fadeInLeft">
          <img src="<?php echo base_url(); ?>upload/user.jpg" class="img-rounded elevation-2" style="width:60px;height:70px;" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata("nama"); ?></a>
        </div>

      </div>
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

  <script type="text/javascript">
    function showTime() {
      var a_p = "";
      var today = new Date();
      var curr_hour = today.getHours();
      var curr_minute = today.getMinutes();
      var curr_second = today.getSeconds();
      if (curr_hour < 12) {
        a_p = "AM";
      } else {
        a_p = "PM";
      }
      if (curr_hour == 0) {
        curr_hour = 12;
      }
      if (curr_hour > 12) {
        curr_hour = curr_hour - 12;
      }
      curr_hour = checkTime(curr_hour);
      curr_minute = checkTime(curr_minute);
      curr_second = checkTime(curr_second);
      document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
    }

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    }
    setInterval(showTime, 500);
    //
  </script>