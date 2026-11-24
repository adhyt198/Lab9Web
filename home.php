
<?php
require_once __DIR__ . '/helpers/helpers.php';
require_once __DIR__ . '/views/header.php';
?>

<section class="content">
    <h2>Halaman Home</h2>
    <p>Ini adalah konten khusus halaman beranda.</p>

    <h3>Hasil Pengujian Function</h3>

    <p>
        Celsius 30 ke Fahrenheit:
        <?php echo konversiCelciusKeFahrenheit(30); ?> °F
    </p>

    <p>
        Total Belanja:
        Rp <?php echo number_format(hitungTotal(10000, 3), 0, ',', '.'); ?>
    </p>
</section>

<?php
require_once __DIR__ . '/views/footer.php';
?>
