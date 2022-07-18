<!-- <div class="main-panel">
        <div class="content-wrapper">
        <div class="container-fluid">
            <?= $this->session->flashdata('message'); ?>
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                </div>
                <!-- <div class="float-right">
                    <a href="<?= base_url() ?>Pelanggan/tambah" class="btn btn-primary">Tambah Produk</a>
                </div> -->
            </div>
            <p></p>
              <div class="card">
                <div class="card-body">
                 

<div class="row">
    <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacinf="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Pelanggan</th>
                          <th>Email</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i =1; ?>
                                        <?php foreach ($user as $us): ?>
                                        <tr class="table-info">
                                            <td><?= $i; ?>.</td>
                                            <td><?= $us['nama']; ?></td>
                                            <td><?= $us['email']; ?></td>
                                            <td>
                                                <a href="<?= base_url('Pelanggan/hapus/') . $us['id']; ?>" class="badge badge-warning">Hapus</a>
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
        </div> -->