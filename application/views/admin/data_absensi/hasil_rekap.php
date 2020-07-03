<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <?php echo $judul; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-user"></i> Master</a></li>
      <li class="active"><?php echo $judul; ?></li>
    </ol>
  </section>
  <section class="content">
    <!-- Main row -->
    <div class="row">
      <div class='col-md-12'>
        <div class='box box-info'>

          <div class='box-body'>

            <div class='col-md-12'>
              <table class='table table-condensed table-hover'>
                <tbody>
                  <?php

                  if (!empty($hasil_rekap)) {
                    $no = 1;
                    foreach ($hasil_rekap->result_array() as $data) { ?>

                      <tr>
                        <th width='120px' scope='row'>Kode Kelas</th>
                        <td><?php echo $data['kode_kelas']; ?></td>
                      </tr>
                      <tr>
                        <th scope='row'>Nama Kelas</th>
                        <td><?php echo $data['nama_kelas']; ?></td>
                      </tr>
                      <tr>
                        <th scope='row'>Mata Pelajaran</th>
                        <td><?php echo $data['nama_mapel']; ?></td>
                      </tr>
                    <?php $no++;
                    } ?>
                  <?php } else {
                    echo '<tr><td colspan="9">Silahkan Pilih Kelas Terlebih Dahulu</td></tr>';
                  } ?>
                </tbody>
              </table>
            </div>
            <div class='col-md-12'>
              <table class='table table-condensed table-bordered table-striped'>
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Pertemuan</th>
                    <th>Hadir</th>
                    <th>Sakit</th>
                    <th>Izin</th>
                    <th>Alpa</th>
                    <th>
                      <center>% Kehadiran</center>
                    </th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>

              <a href="<?php echo base_url(); ?>admin/absensi/rekap_absensi"><button type='button' class='btn btn-danger pull-right'>Kembali</button></a>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>
    <!-- /.row -->
  </section>
</div>