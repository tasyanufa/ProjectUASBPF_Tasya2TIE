

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url('assets4/')?>images/logo/3copy.png" alt="logo" width="100px">
              </div>
              <h4>Hello!</h4>
              <h6 class="font-weight-light">Silahkan login terlebih dahulu</h6>
              <form class="user" method="POST" action="<?= base_url('auth'); ?>">
              <?= $this->session->flashdata('message'); ?>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?=set_value('email'); ?>" placeholder="Email">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" value="<?=set_value('nama'); ?>" placeholder="Password">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" value="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  LOGIN
                </button>
                <!-- <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOG IN</a>
                </div> -->
                <div class="my-2 d-flex justify-content-between align-items-right">
                  <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div> -->
                  <a href="<?= site_url('auth/lupa_password')?>" class="auth-link text-black">Forgot password?</a>
                </div>
                
                <div class="text-center mt-4 font-weight-light">
                  Belum memiliki Akun? <a href="<?= base_url('Auth/registrasi')?>" class="text-primary">Buat</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  
  
