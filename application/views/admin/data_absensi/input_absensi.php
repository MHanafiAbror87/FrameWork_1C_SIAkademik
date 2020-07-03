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

                                    if (!empty($input)) {
                                        $no = 1;
                                        foreach ($input->result_array() as $data) { ?>

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
                                        <th width='120px'>Kehadiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($input->result_array() as $data) { ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['nisn']; ?></td>
                                            <td><?php echo $data['nama_siswa']; ?></td>
                                            <td><?php echo $data['jenis_kelamin']; ?></td>
                                            <input type='hidden' value='$r[nisn]' name='nisn[$no]'>
                                            <td><select style='width:100px;' name='a[$no]' class='form-control'>
                                                    <option value='<?php echo $data['nama_kehadiran'] ?>' selected><?php echo $data['nama_kehadiran'] ?></option>
                                                    <!-- <option value='$k[kode_kehadiran]'><?php echo $in['nama_kehadiran'] ?></option> -->
                                                </select>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>

                                </tbody>
                            </table>
                            <div class='box-footer'>
                                <a href="<?php echo base_url('admin/absensi/absensi'); ?>"><button type='button' class='btn btn-danger pull-right'>Kembali</button></a>
                                <a href="<?php echo base_url('admin/absensi/absensi'); ?>"><button type='button' class='btn btn-success pull-right'>Simpan</button></a>
                                <!-- <button type='submit' name='simpann' class='btn btn-info pull-right'>Simpan Absensi</button> -->
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</div>