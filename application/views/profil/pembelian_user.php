<div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
<div class="container-fluid">
<?= $this->session->flashdata('message');
        ?>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
                    <p></p>
              <div class="card">
                <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>No Pembelian</td>
                        <td>Tanggal</td>
                        <td>Total</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pembelian as $us) : ?>
                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td><?= $us['no_penjualan']; ?></td>
                        <td><?= $us['tanggal']; ?></td>
                        <td><?= $us['total_bayar']; ?></td>
                        <td><?= $us['status']; ?></td>
                        <td>
                            <a href="<?= base_url('Profil/statusbeli/') . $us['no_penjualan']; ?>" class="badge badge-warning">Detail</a>
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