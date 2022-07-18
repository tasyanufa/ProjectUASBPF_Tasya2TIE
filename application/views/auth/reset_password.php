

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
              <h4>Reset Password</h4>
              <h6 class="font-weight-light">Hello <span><?php echo $nama; ?></span></h6>
              <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                <div class="form-group">
                    <input type="password" name='password'
					    value="<?= set_value('password') ?>" class="form-control"
					    id="password" name="password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                        <label>Konfirmasi Password: </label>
                        <input type="password" name='passconf'
					    value="<?= set_value('passconf') ?>" class="form-control"
					    id="passconf" name="passconf">
                        <?= form_error('passconf', '<small class="text-danger pl-3">', '</small>'); ?>

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
  
  
