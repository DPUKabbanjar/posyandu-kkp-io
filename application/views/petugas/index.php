<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Data Petugas</h3>
        </div>
    </div>
    <div class="flash-datae" data-flashdata="<?php echo $this->session->flashdata('msg'); ?>"></div>
    <?php if ($this->session->flashdata('msg')) : ?>
        <!-- Optional: Display flash message if needed
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('msg'); ?>
        </div> -->
    <?php endif; ?>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDataPetugasModal">Tambah Data Petugas</button>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama lengkap</th>
                                            <th>Tempat/Tanggal Lahir</th>
                                            <th>Jabatan</th>
                                            <th>Lama Kerja</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($petugas as $e) : ?>
                                            <tr>
                                                <td><?= $i; ?></td>
                                                <td><?= $e['nama_petugas']; ?></td>
                                                <td><?= $e['tempat_lahir'] . ', ' . $e['tgl_lahir']; ?></td>
                                                <td><?= $e['jabatan']; ?></td>
                                                <td><?= $e['lama_kerja'] . ' Tahun'; ?></td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#editDataPetugasModal<?= $e['id_petugas']; ?>" href="<?= base_url(); ?>petugas/updateDataPetugas/<?= $e['id_petugas']; ?>" class="btn btn-warning btn-circle btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a data-toggle="tooltip" href="<?= base_url('petugas/deleteDataPetugas/') . $e['id_petugas']; ?>" class="btn btn-danger btn-circle btn-sm tbl-hapus" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Petugas Modal -->
    <div class="modal fade bs-example-modal-lg" id="addDataPetugasModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Form Data Petugas</h4>
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                </div>
                <form id="demo-form2" action="<?= base_url('petugas/createDataPetugas'); ?>" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 form-group">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-petugas">Nama Petugas</label>
                                    <div class="col-md-9">
                                        <input type="text" id="nama-petugas" name="nama-petugas" required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="tmt-lahir">Tempat Lahir</label>
                                    <div class="col-md-9">
                                        <input type="text" id="tmt-lahir" name="tmt-lahir" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Tgl Lahir</label>
                                    <div class="col-md-9">
                                        <input id="tgl-lahir" name="tgl-lahir" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="no-hp">No HP</label>
                                    <div class="col-md-9">
                                        <input type="text" id="no-hp" name="no-hp" class="form-control" data-inputmask="'mask' : '9999-9999-9999'">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="jabatan">Jabatan</label>
                                    <div class="col-md-9">
                                        <select name="jabatan" id="jabatan" class="form-control" required>
                                            <option value="">-- Pilih Jabatan --</option>
                                            <option value="Ketua">Ketua</option>
                                            <option value="Bendahara">Bendahara</option>
                                            <option value="Sekretaris">Sekretaris</option>
                                            <option value="Anggota">Anggota</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="pendidikan-terakhir">Pendidikan Terakhir</label>
                                    <div class="col-md-9">
                                        <input type="text" id="pendidikan-terakhir" name="pendidikan-terakhir" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="lama-kerja">Lama Kerja</label>
                                    <div class="col-md-8">
                                        <input type="number" id="lama-kerja" name="lama-kerja" class="form-control">
                                    </div>
                                    <label class="col-form-label label-align" for="tahun">Tahun</label>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="tugas-pokok">Tugas Pokok</label>
                                    <div class="col-md-9">
                                        <input type="text" id="tugas-pokok" name="tugas-pokok" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_id">Username</label>
                                    <div class="col-md-9">
                                        <select name="user_id" id="user_id" class="form-control" required>
                                            <option value="">-- Pilih Username --</option>
                                            <?php foreach ($users as $m) : ?>
                                                <option value="<?= $m['id_users']; ?>"><?= $m['username']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Petugas Modals -->
    <?php foreach ($petugas as $row) : ?>
        <div class="modal fade bs-example-modal-lg" id="editDataPetugasModal<?= $row['id_petugas']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit Form Data Petugas</h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                    </div>
                    <form id="demo-form2" action="<?= base_url('petugas/updateDataPetugas/') . $row['id_petugas']; ?>" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 form-group">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-petugas">Nama Petugas</label>
                                        <div class="col-md-9">
                                            <input type="text" id="nama-petugas" name="nama-petugas" required="required" class="form-control" value="<?= $row['nama_petugas'] ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tmt-lahir">Tempat Lahir</label>
                                        <div class="col-md-9">
                                            <input type="text" id="tmt-lahir" name="tmt-lahir" class="form-control" value="<?= $row['tempat_lahir'] ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tgl Lahir</label>
                                        <div class="col-md-9">
                                            <input id="tgl-lahir" name="tgl-lahir" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" value="<?= $row['tgl_lahir'] ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="no-hp">No HP</label>
                                        <div class="col-md-9">
                                            <input type="text" id="no-hp" name="no-hp" class="form-control" data-inputmask="'mask' : '9999-9999-9999'" value="<?= $row['no_hp'] ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="jabatan">Jabatan</label>
                                        <div class="col-md-9">
                                            <select name="jabatan" id="jabatan" class="form-control" required>
                                                <option value="">-- Pilih Jabatan --</option>
                                                <option value="Ketua" <?= ($row['jabatan'] == 'Ketua') ? 'selected' : ''; ?>>Ketua</option>
                                                <option value="Bendahara" <?= ($row['jabatan'] == 'Bendahara') ? 'selected' : ''; ?>>Bendahara</option>
                                                <option value="Sekretaris" <?= ($row['jabatan'] == 'Sekretaris') ? 'selected' : ''; ?>>Sekretaris</option>
                                                <option value="Anggota" <?= ($row['jabatan'] == 'Anggota') ? 'selected' : ''; ?>>Anggota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="pendidikan-terakhir">Pendidikan Terakhir</label>
                                        <div class="col-md-9">
                                            <input type="text" id="pendidikan-terakhir" name="pendidikan-terakhir" class="form-control" value="<?= $row['pendidikan_terakhir'] ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="lama-kerja">Lama Kerja</label>
                                        <div class="col-md-8">
                                            <input type="number" id="lama-kerja" name="lama-kerja" class="form-control" value="<?= $row['lama_kerja'] ?>">
                                        </div>
                                        <label class="col-form-label label-align" for="tahun">Tahun</label>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tugas-pokok">Tugas Pokok</label>
                                        <div class="col-md-9">
                                            <input type="text" id="tugas-pokok" name="tugas-pokok" class="form-control" value="<?= $row['tugas_pokok'] ?>">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="user_id">Username</label>
                                        <div class="col-md-9">
                                            <select name="user_id" id="user_id" class="form-control" required>
                                                <option value="">-- Pilih Username --</option>
                                                <?php foreach ($users as $m) : ?>
                                                    <option value="<?= $m['id_users']; ?>" <?= ($m['id_users'] == $row['user_id']) ? 'selected' : ''; ?>><?= $m['username']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
