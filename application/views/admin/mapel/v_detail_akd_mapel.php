<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?php echo $judul; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user"></i> Master </a></li>
            <li><a href="<?php echo base_url(); ?>mapel/akd_mapel"><?php echo $judul; ?></a></li>
            <li class="active"><?php echo $judul2; ?></li>
        </ol>
    </section>
    <section class="content">
        <!-- Main row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body box-profile">
                        <?php if ($this->session->flashdata('success')) { ?>
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-remove"></i>
                                </button>
                                <span style="text-align: left;"><?php echo $this->session->flashdata('success'); ?></span>
                            </div>
                        <?php } ?>

                        <?php if ($this->session->flashdata('error')) { ?>
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-remove"></i>
                                </button>
                                <span style="text-align: left;"><?php echo $this->session->flashdata('danger'); ?></span>
                            </div>
                                             
                        <?php } ?>
                        <table id="datatb" class="table table-bordered table-hover">
                            <tr>
                                <td style="width:200px;font-weight:bold;">Kode Mata Pelajaran</td>
                                <td style="width:10px;">:</td>
                                <td><?php echo $kode_mapel; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold;">ID Kelompok Pelajaran</td>
                                <td>:</td>
                                <td><?php echo $id_kelompok_pelajaran; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold;">Kode Jurusan</td>
                                <td>:</td>
                                <td><?php echo $kode_jurusan; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold;">Nama Mata Pelajaran</td>
                                <td>:</td>
                                <td><?php echo $nama_mapel; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold;">KKM</td>
                                <td>:</td>
                                <td><?php echo $kkm; ?></td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold;">Status</td>
                                <td>:</td>
                                <td><?php if ($aktif_mapel == '1') echo 'AKTIF';
                                    else echo 'TIDAK AKTIF'; ?></td>
                            </tr>
                        </table>
                        
    
    
                        <a href="<?php echo base_url() . 'admin/Akademik/akd_mapel_edit/' . $kode_mapel; ?>" class="btn btn-success btn-block"><b><i class="fa fa-edit"> </i> Ubah Data</b></a>

                        <a href="<?php echo base_url() . 'admin/Akademik/akd_mapel/'; ?>" class="btn btn-default btn-block"><b><i class="fa fa-arrow-left"> </i> Kembali</b></a>
                    </div>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>