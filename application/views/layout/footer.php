<script src="<?php echo base_url('assets4/')?>vendors/js/vendor.bundle.base.js"></script>
<footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url('assets4/')?>vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('assets4/')?>vendors/chart.js/Chart.min.js"></script>
  <script src="<?= base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url('assets4/')?>js/off-canvas.js"></script>
  <script src="<?php echo base_url('assets4/')?>js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url('assets4/')?>js/template.js"></script>
  <script src="<?php echo base_url('assets4/')?>js/settings.js"></script>
  <script src="<?php echo base_url('assets4/')?>js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url('assets4/')?>js/dashboard.js"></script>
  <script src="<?= base_url('assets4/')?>js/Chart.roundedBarCharts.js"></script>
  <script src="<?= base_url('assets4/')?>js/chart.js"></script>
  <script src="<?= base_url('assets/')?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/')?>js/demo/datatables-demo.js"></script>


  <script>
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    })
    $(document).ready(function() {
            $("#jumlah").on('keydown keyup change blur', function() {
                var harga = $("#harga").val();
                var jumlah = $("#jumlah").val();

                var total = parseInt(harga) * parseInt(jumlah);
                $("#total").val(total);
                    if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
                        alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
                        reset()
                    }
                });
                
                function reset() {
                $('input[name="jumlah"]').val('')
                $('input[name="total"]').val('')
            }
        })
  </script>
  <!-- <script type="text/javascript">
    var ctx = document.getElementById('barChart').getContext('2d');
    var chart = new Chart(ctx {
      type: 'bar',
      data = {
      labels: [
            <?php
                    foreach ($totalb as $data) {
                    echo "'" . $data['produk'] . "',";
                    }
                ?>
              ],
              datasets: [{
                label: 'Jumlah Produk Terjual',
                data: [
                  <?php
                    foreach ($totalb as $data) {
                      echo $data['jum'] . ",";
                     }
                    ?>
                ],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false
    }]
  },
  options = {
    scales: {
      yAxes: [{
        time: {
          unit: 'produk'
        },
        ticks: {
          beginAtZero: true
        }
      }]
    },
    legend: {
      display: false
    },
    elements: {
      point: {
        radius: 0
      }
    }
  };
  });

  </script> -->
  <script type="text/javascript">
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
            labels: [
                <?php
                    foreach ($totalb as $data) {
                    echo "'" . $data['produk'] . "',";
                    }
                ?>
                ],
                datasets: [{
                label: 'Jumlah Produk Terjual',
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: [
                    <?php
                        foreach ($totalb as $data) {
                        echo $data['jum'] . ", ";
                        }
                    ?>
                ]
            }]
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
                }
            },
            scales: {
            xAxes: [{
            time: {
                unit: 'produk'
            },
            gridLines: {
                display: false,
                drawBorder: false
            },
            ticks: {
                maxTicksLimit: 20
            },
                maxBarThickness: 50,
            }],
            yAxes: [{
            gridLines: {
            color: "rgb(234, 236, 244)",
            zeroLineColor: "rgb(234, 236, 244)",
            drawBorder: false,
            borderDash: [2],
            zeroLineBorderDash: [2]
            }
            }],
            },
            tooltips: {
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            },
            }
            });
    </script>
  <!-- End custom js for this page-->
</body>

</html>
