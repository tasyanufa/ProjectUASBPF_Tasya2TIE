

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
              <h4>Lupa Password</h4>
              <h6 class="font-weight-light">Silahkan masukkan alamat email anda</h6>
              <?= $this->session->flashdata('message'); ?>
              <form class="user" method="POST" action="<?= base_url('auth/reset_password'); ?>">
             
                <div class="form-group">
                <input type="text" name='email'
													value="<?= set_value('email') ?>" class="form-control"
													id="email" name="email">
                          <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>




                <button type="submit" value="reset" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  SUBMIT
</button>
                
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
  
  
