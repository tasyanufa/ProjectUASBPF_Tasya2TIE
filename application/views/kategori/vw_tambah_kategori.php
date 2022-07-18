<div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <!-- <p class="card-description">
                    Basic form elements
                  </p> -->
                  <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nama_kategori">Nama Kategori</label>
                      <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" value="<?= set_value('nama_kategori'); ?>">
                      <?= form_error('nama_kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <input type="text" class="form-control" id="keterangan" rows="5" name="keterangan" value="<?= set_value('keterangan'); ?>" placeholder="Keterangan">
                      <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <!-- <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <input type="text" class="form-control" id="nama_kategori" name="keterangan" placeholder="Nama Kategori" value="">
                      
                    </div>
                    <div class="form-group">
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
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">City</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Textarea</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div> -->
                    
                    <button type="submit" class="btn btn-primary mr-2" name="tambah">Tambah Kategori</button>
                    <a href="<?= base_url('Kategori') ?>" class="btn btn-light">Kembali</a>
                    <!-- <button class="btn btn-light">Kembali</button> -->
                  </form>
                  </div>
                    </div>
                </div>
            </div>
        </div>    