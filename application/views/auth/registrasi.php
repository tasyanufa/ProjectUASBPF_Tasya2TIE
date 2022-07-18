<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url('assets4/')?>images/logo/3copy.png" alt="logo">
              </div>
              <h4>Belum memiliki akun?</h4>
              <h6 class="font-weight-light">Silahkan registrasi terlebih dahulu</h6>
              <?= $this->session->flashdata('message'); ?>
              <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
              <?= $this->session->flashdata('message'); ?>
              <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="nama" name="nama" value="<?=set_value('nama'); ?>" placeholder="Nama Lengkap">
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" name="email" value="<?=set_value('email'); ?>" placeholder="Email">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-lg"
                      id="password1" name="password1" value="<?= set_value('password1'); ?>" placeholder="Password">
                      <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-lg"
                      id="password2" name="password2" placeholder="Ulangi Password">
                  </div>
                </div>
                <div class="mb-4">
                  <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div> -->
                </div>
                <button type="submit" value="registrasi" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  REGISTRASI
                </button>
                <div class="text-center mt-4 font-weight-light">
                  Sudah memiliki akun? <a href="<?= base_url('Auth')?>" class="text-primary">Login</a>
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