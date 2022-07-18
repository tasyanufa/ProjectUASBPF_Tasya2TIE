<div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
<div class="col-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                  <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="gambar">Gambar</label>
                        <div class="custom-file">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <input type="file" class="custom-file-input" name="gambar" id="gambar" value="<?= set_value('gambar'); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama Barang</label>
                      <input type="text" class="form-control" id="nama" placeholder="Nama Barang" name="nama" value="<?= set_value('nama'); ?>">
                      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="kategori">Nama Kategori</label>
                        <select name="kategori"  class="form-control" id="kategori">
                            <option value="<?= set_value('kategori'); ?>">Pilih Kategori</option>
                            <?php foreach ($kategori as $k) : ?>
                                <option value="<?= $k['id']; ?>"><?= $k['nama_kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                      <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga Barang</label>
                      <input type="number" class="form-control" id="harga" placeholder="Harga Barang" name="harga" value="<?= set_value('harga'); ?>">
                      <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="stok">Stok Barang</label>
                      <input type="number" class="form-control" id="stok" placeholder="Stok Barang" name="stok" value="<?= set_value('stok'); ?>">
                      <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan Barang</label>
                      <input type="text" class="form-control" id="keterangan" placeholder="Keterangan Barang" name="keterangan" value="<?= set_value('keterangan'); ?>">
                      <!-- <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?> -->
                    </div>
                    <!-- <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                    
                    <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div> -->
                    <button type="submit" name="tambah" class="btn btn-primary mr-2">Tambah Produk</button>
                    <a href="<?= base_url('Produk') ?>" class="btn btn-light">Kembali</a>
                  </form>
                  </div>
                    </div>
                </div>
            </div>
        </div>    