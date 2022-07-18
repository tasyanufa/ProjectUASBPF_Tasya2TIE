<div class="main-panel">
        <div class="content-wrapper">
        <div class="container-fluid">
            <?= $this->session->flashdata('message'); ?>
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                </div>
                <div class="float-right">
                    <a href="<?= base_url() ?>Produk/tambah" class="btn btn-primary">Tambah Produk</a>
                </div>
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
                          <th>Gambar</th>
                          <th>Nama Barang</th>
                          <!-- <th>Kategori</th> -->
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Keterangan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i =1; ?>
                        <?php foreach ($produk as $us): ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td>
                                <img src="<?= base_url('assets4/images/produk/').$us['gambar']; ?>">
                            </td>
                            <td><?= $us['nama']; ?></td>
                            <!-- <td><?= $us['kategori']; ?></td> -->
                            <td><?= $us['harga']; ?></td>
                            <td><?= $us['stok']; ?></td>
                            <td><?= $us['keterangan']; ?></td>
                            <td>
                                <a href="<?= base_url('Produk/hapus/') . $us['id']; ?>" class="btn btn-warning btn-icon-text">
                                <i class="mdi mdi-delete"></i>
                                Hapus</a>
                                <a href="<?= base_url('Produk/edit/') . $us['id']; ?>" class="btn btn-dark btn-icon-text">
                                <i class="mdi mdi-table-edit"></i>
                                Edit</a>
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