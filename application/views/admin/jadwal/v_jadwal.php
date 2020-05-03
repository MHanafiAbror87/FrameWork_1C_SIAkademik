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
			<div class="col-xs-12">
          <div class="box">
						<div class="box-header">
              <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>admin/Akademik/akd_jadwal_tambah"><i class="fa fa-plus"> </i> Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatb" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Jadwal Pelajaran</th>
                    <th>Kode Guru</th>
                    <th>Mata Pelajaran</th>
                    <th>Kelas</th>
                    <th>Tahun Ajaran</th>
                    <th>Jurusan</th>
                    <th>Ruangan</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Hari</th>
                    <th>Daftar Hadir</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no = 1;
					foreach($akd_jadwal->result_array() as $data) { ?>
				<tr>
						<td><?php echo $no; ?></td>
            <td><?php echo $data['kode_jadwal_pelajaran']; ?></td>
            <td><?php echo $data['kode_guru']; ?></td>
						<td><?php echo $data['kode_mapel']; ?></td>
						<td><?php echo $data['kode_kelas']; ?></td>
            <td><?php echo $data['id_tahun_ajaran']; ?></td>
						<td><?php echo $data['kode_jurusan']; ?></td>
            <td><?php echo $data['kode_ruangan']; ?></td>
						<td><?php echo $data['jam_mulai']; ?></td>
            <td><?php echo $data['jam_selesai']; ?></td>
						<td><?php echo $data['hari']; ?></td>
            <td style="text-align:center;">
              <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/Akademik/akd_jadwal_detail/'.$data['kode_jadwal_pelajaran']; ?>"><i class="fa fa-edit"> </i> Buka Presensi Siswa </a>
              </td>
              <td style="text-align:center;">
              <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/Akademik/akd_jadwal_detail/'.$data['kode_jadwal_pelajaran']; ?>"><i class="fa fa-edit"> </i> Detail </a>
              <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/Akademik/akd_jadwal_edit/'.$data['kode_jadwal_pelajaran']; ?>"><i class="fa fa-edit"> </i> Ubah</a>
              <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/Akademik/akd_jadwal_hapus/'.$data['kode_jadwal_pelajaran']; ?>"><i class="fa fa-edit"> </i> Hapus</a>
                        
                      </td>
                    </tr>
				<?php $no++; } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
    </section>
</div>