<div class="content-wrapper">
	<section class="content-header">
      <h1>
        <?php echo $judul; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Master</a></li>
        <li><a href="<?php echo base_url(); ?>admin/Akademik/kelompok_pelajaran"><?php echo $judul; ?></a></li>
        <li class="active"><?php echo $judul2; ?></li>
      </ol>
    </section>
	<section class="content">
      <!-- Main row -->
      <div class="row">
			<div class="col-xs-12">
                <div class="box">
                    <form role="form" action="<?php echo base_url(); ?>admin/Akademik/akd_jadwal_save" method="post">


					      <?php if($this->session->flashdata('error')) { ?>
					      <div class="alert alert-danger" >
					        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="fa fa-remove"></i>
					        </button>
					        <span style="text-align: left;"><?php echo $this->session->flashdata('error'); ?></span>
					      </div>
					      <?php } ?>
                        <div class="box-body">
                        <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Kode Jadwal Pelajaran</label>
                                        <input type="text" class="form-control" name="kode_jadwal_pelajaran" value="<?php echo $kode_jadwal_pelajaran; ?>" required>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Kode Guru</label>
                                        <input type="text" class="form-control" name="kode_guru" value="<?php echo $kode_guru; ?>" required>
                                    </div>
                                    
                                </div>
                               
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Kode Mata Pelajaran</label>
                                        <input type="text" class="form-control" name="kode_mapel" value="<?php echo $kode_mapel; ?>" required>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Kode Kelas</label>
                                        <input type="text" class="form-control" name="kode_kelas" value="<?php echo $kode_kelas; ?>" required>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>ID Tahun Ajaran</label>
                                        <input type="text" class="form-control" name="id_tahun_ajaran" value="<?php echo $id_tahun_ajaran; ?>" required>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Kode Jurusan</label>
                                        <input type="text" class="form-control" name="kode_jurusan" value="<?php echo $kode_jurusan; ?>" required>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Kode Ruangan</label>
                                        <input type="text" class="form-control" name="kode_ruangan" value="<?php echo $kode_ruangan; ?>" required>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Jam Mulai</label>
                                        <input type="text" class="form-control" name="jam_mulai" value="<?php echo $jam_mulai; ?>" required>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Jam Selesai</label>
                                        <input type="text" class="form-control" name="jam_selesai" value="<?php echo $jam_selesai; ?>" required>
                                    </div>
                                    
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Hari</label>
                                        <input type="text" class="form-control" name="hari" value="<?php echo $hari; ?>" required>
                                    </div>
                                    
                                </div>
                               
                            </div>
                       
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"> </i> Simpan</button>
                            <a class="btn btn-success btn-lg" href="<?php echo base_url(); ?>admin/Akademik/akd_jadwal"><i class="fa fa-arrow-left"> </i> Kembali</a>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
      </div>
      <!-- /.row -->
    </section>
</div>