<div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
            
<div class="container-fluid">
<?= $this->session->flashdata('message');
        ?>
    <div class="row">
    <div class="col-md-12">

        <table class="table">
            <thead>
                <tr colspan="4">
                    <td>No</td>
                    <td>No Pembelian</td>
                    <td>Tanggal</td>
                    <td>Total</td>
                    <td>Status</td>
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
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>

    <form action="" method="POST">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr colspan="5">
                        <td>No</td>
                        <td>No Pembelian</td>
                        <td>Produk</td>
                        <td>Jumlah</td>
                        <td>Total</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($detailbeli as $us) : ?>
                    <tr>
                        <td> <?= $i; ?>.</td>
                        <td><?= $us['no_penjualan']; ?></td>
                        <td><?= $us['nama_produk']; ?></td>
                        <td><?= $us['jumlah']; ?></td>
                        <td><?= $us['total']; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <input type="hidden" name="no_penjualan" value="<?= $us['no_penjualan']; ?>">
            <table class="table">
                <tr>
                    <td>Apakah Pesanan Sudah Anda Terima ?</td>
                    <td>
                        <select name="status" id="status" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="Diterima">Sudah</option>
                            <option value="Belum">Belum</option>
                        </select>
                        <?= form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Ubah Status</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    </div>
    </div>
</div>
</div>
</div>
</div>