
<div class="main-panel">
        <div class="content-wrapper">
        <div class="container-fluid">
            <?= $this->session->flashdata('message'); ?>
            <div class="clearfix">
                <div class="float-left">
                    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                </div>
                <div class="float-right">
                    <a href="<?= base_url() ?>Kategori/tambah" class="btn btn-primary">Tambah Kategori</a>
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
                                            <th>Nama Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php $i =1; ?>
                                            <?php foreach ($kategori as $us): ?>
                                            <tr class="table-info">
                                                <td><?= $i; ?>.</td>
                                                <td><?= $us['nama_kategori']; ?></td>
                                                <td><?= $us['keterangan']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Kategori/hapus/') . $us['id']; ?>" class="btn btn-warning btn-icon-text">
                                                        <i class="mdi mdi-delete"></i>
                                                        Hapus
                                                    </a>
                                                    <a href="<?= base_url('Kategori/edit/') . $us['id']; ?>" class="btn btn-dark btn-icon-text">
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