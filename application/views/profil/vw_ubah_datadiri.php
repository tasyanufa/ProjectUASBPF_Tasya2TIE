<div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
                <form class="form-sample" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $pelanggan['id']; ?>">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" value="<?= $pelanggan['nama']; ?>"/>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">User</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="user" id="user">
                              <option value="">Pilih User</option>
                                <?php foreach ($user as $u) : ?>
                                    <option value="<?= $u['id']; ?>"
                                    <?php if($user['user'] == $p['id']) {
                                        echo "selected";
                                    } ?>
                                    ><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('user', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gambar</label>
                          <div class="col-sm-9">
                          <div class="custom-file">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <input type="file" class="custom-file-input" name="gambar" id="gambar" value="<?= $produk['gambar']; ?>">
                          </div>
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                              <option value="<?= set_value('jenis_kelamin'); ?>">Pilih Jenis Kelamin</option>
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Alamat</label>
                          <div class="col-sm-9">
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pelanggan['alamat']; ?>"/>
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kota</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="kota" value="<?= $pelanggan['kota']; ?>"/>
                            <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Provinsi</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="provinsi" id="provinsi">
                              <option value="">Pilih Provinsi</option>
                                <?php foreach ($provinsi as $p) : ?>
                                    <option value="<?= $p['id_provinsi']; ?>"
                                    <?php if($provinsi['provinsi'] == $p['id_provinsi']) {
                                        echo "selected";
                                    } ?>
                                    ><?= $p['nama_provinsi']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('provinsi', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kode Pos</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" id="kode_pos" value="<?= $pelanggan['kode_pos']; ?>"/>
                            <?= form_error('kode_pos', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No HP</label>
                          <div class="col-sm-9">
                            <input type="number" name="no_hp" class="form-control" id="no_hp" value="<?= $pelanggan['no_hp']; ?>"/>
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="editPelanggan">Edit</button>
                    <a href="<?= base_url('Profil') ?>" class="btn btn-light">Kembali</a>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>