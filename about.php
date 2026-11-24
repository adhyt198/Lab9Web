
<?php

require_once __DIR__ . '/helpers/helpers.php';
require_once __DIR__ . '/views/header.php';

?>

<section class="content">

    <h2>Tentang Aplikasi</h2>
    <p>Halaman ini menjelaskan tujuan aplikasi.</p>

    <h3>Pengujian Function Status Nilai</h3>

    <?php
    $nilai = 90;
    $status = tentukanStatusNilai($nilai);
    ?>

    <p>Nilai: <?php echo $nilai; ?></p>
    <p>Predikat: <?php echo $status; ?></p>

</section>

<?php

require_once __DIR__ . '/views/footer.php';

?>
