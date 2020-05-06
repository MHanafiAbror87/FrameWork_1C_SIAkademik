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
              <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>admin/Absensi/rekap_absensi_tambah"><i class="fa fa-plus"> </i> Tambah Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="datatb" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Jadwal Pelajaran</th>
                    <th>Kelas</th>
                    <th>Guru</th>
                    <th>Hari</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Ruangan</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no = 1;
					foreach($jadwal->result_array() as $data) { ?>
				<tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['kode_jadwal_pelajaran']; ?></td>
            <td><?php echo $data['kode_kelas']; ?></td>
						<td><?php echo $data['kode_guru']; ?></td>
						<td><?php echo $data['kode_semester']; ?></td>
            <td><?php echo $data['kode_ruangan']; ?></td>
						<td><?php echo $data['jam_mulai']; ?></td>
            <td><?php echo $data['jam_selesai']; ?></td>
						<td><?php echo $data['hari']; ?></td>
              <td style="text-align:center;">
              <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/Akademik/kelompok_pelajaran_edit/'.$data['id_kelompok_pelajaran']; ?>"><i class="fa fa-edit"> </i> Ubah</a>
              <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/Akademik/hapus/'.$data['id_kelompok_pelajaran']; ?>"><i class="fa fa-edit"> </i> Hapus</a>
                        
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