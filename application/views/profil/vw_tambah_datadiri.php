<div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            
                <form class="form-sample" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                <div class="form-group">
                    <label for="gambar">Gambar</label>
                        <div class="custom-file">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <input type="file" class="custom-file-input" name="gambar" id="gambar" value="<?= set_value('gambar'); ?>">
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama</label>
                          <div class="col-sm-9">
                          <input name="nama" type="text" value="<?= $user['nama']; ?>" style="width:1000px" readonly class="form-control" id="nama">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                          <input name="email" type="text" value="<?= $user['email']; ?>" style="width:1000px" readonly class="form-control" id="nama">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">User</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="user" id="user" style="width:1000px">
                              <option value="<?= set_value('user'); ?>">Pilih User</option>
                              <?php foreach ($user as $u) : ?>
                                    <option value="<?= $u['id']; ?>"><?= $u['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('user', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>" style="width:1000px">
                              <option value="">Pilih Jenis Kelamin</option>
                              <option value="Laki-Laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
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
                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= set_value('alamat'); ?>" style="width:1000px"/>
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">No HP</label>
                          <div class="col-sm-9">
                            <input type="number" class="form-control" name="no_hp" id="no_hp" value="<?= set_value('no_hp'); ?>" style="width:1000px"/>
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2" name="tambah">Simpan</button>
                    <a href="<?= base_url('Profil') ?>" class="btn btn-light">Kembali</a>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>