<!-- Footer Start -->
<footer class="footer text-center">
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-md-12">
                <?= date('Y'); ?> | <a href="<?= base_url('dashboard'); ?>">Jatisaba</a>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Vendor js -->
<script src="<?= base_url(); ?>assets/vertical/dist/assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="<?= base_url(); ?>assets/vertical/dist/assets/js/app.min.js"></script>

<!-- Modal-Effect -->
<script src="<?= base_url(); ?>assets/vertical/dist/assets/libs/custombox/custombox.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/sweetalert2.all.min.js"></script>
<!-- ChartJs -->
<script src="<?= base_url(); ?>assets/js/chartjs.js"></script>
<script src="<?= base_url(); ?>assets/js/myscript.js"></script>

<script>
    var ctx = document.getElementById('donat').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['K1', 'K2', 'K3', 'K4'],
            datasets: [{
                label: 'kluster',
                data: [
                    <?= $k1; ?>,
                    <?= $k2; ?>,
                    <?= $k3; ?>,
                    <?= $k4; ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
    });
</script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                'Blok 1', 'Blok 2', 'Blok 3', 'Blok 4', 'Blok 5', 'Blok 6', 'Blok 7', 'Blok 8', 'Blok 9', 'Blok 10',
                'Blok 11', 'Blok 12', 'Blok 13', 'Blok 14', 'Blok 15', 'Blok 16', 'Blok 17', 'Blok 18', 'Blok 19', 'Blok 10',
                'Blok 21', 'Blok 22', 'Blok 23', 'Blok 24', 'Blok 25', 'Blok 26', 'Blok 27', 'Blok 28', 'Blok 29', 'Blok 20',
                'Blok 31', 'Blok 32', 'Blok 33', 'Blok 34', 'Blok 35', 'Blok 36', 'Blok 37', 'Blok 38', 'Blok 39', 'Blok 40',
                'Blok 41', 'Blok 42', 'Blok 43', 'Blok 44', 'Blok 45', 'Blok 46', 'Blok 47', 'Blok 48', 'Blok 49', 'Blok 50', '0'
            ],
            datasets: [{
                label: 'Perblok',
                data: [

                    <?= $blok1; ?>, <?= $blok2; ?>, <?= $blok3; ?>, <?= $blok4; ?>, <?= $blok5; ?>, <?= $blok6; ?>, <?= $blok7; ?>, <?= $blok8; ?>, <?= $blok9; ?>, <?= $blok10; ?>,
                    <?= $blok11; ?>, <?= $blok12; ?>, <?= $blok13; ?>, <?= $blok14; ?>, <?= $blok15; ?>, <?= $blok16; ?>, <?= $blok17; ?>, <?= $blok18; ?>, <?= $blok19; ?>, <?= $blok20; ?>,
                    <?= $blok21; ?>, <?= $blok22; ?>, <?= $blok23; ?>, <?= $blok24; ?>, <?= $blok25; ?>, <?= $blok26; ?>, <?= $blok27; ?>, <?= $blok28; ?>, <?= $blok29; ?>, <?= $blok30; ?>,
                    <?= $blok31; ?>, <?= $blok32; ?>, <?= $blok33; ?>, <?= $blok34; ?>, <?= $blok35; ?>, <?= $blok36; ?>, <?= $blok37; ?>, <?= $blok38; ?>, <?= $blok39; ?>, <?= $blok40; ?>,
                    <?= $blok41; ?>, <?= $blok42; ?>, <?= $blok43; ?>, <?= $blok44; ?>, <?= $blok45; ?>, <?= $blok46; ?>, <?= $blok47; ?>, <?= $blok48; ?>, <?= $blok49; ?>, <?= $blok50; ?>, , 0
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
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

</body>

</html>