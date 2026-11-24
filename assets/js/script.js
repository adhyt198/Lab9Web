
// Menampilkan pesan ketika halaman selesai dimuat
document.addEventListener("DOMContentLoaded", function () {
    console.log("Aplikasi PHP Modular berhasil dijalankan.");

    // Efek konfirmasi pada menu navigasi
    const menuLinks = document.querySelectorAll("nav a");

    menuLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            console.log("Membuka halaman: " + link.textContent);
        });
    });
});
