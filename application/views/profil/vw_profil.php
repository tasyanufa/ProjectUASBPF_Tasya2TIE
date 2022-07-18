<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="<?= base_url('assets4/images/profile/') . $user['gambar'];?>" class="card-img">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h4 class="card-title"><?= $user['nama']; ?></h4>
                                        <p class="card-text">
                                            <?= $user['email']; ?>
                                        </p>
                                        
                                        <p class="card-text">
                                            <small class="text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']); ?></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>