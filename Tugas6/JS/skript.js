$(document).ready(function() {
    // Menampilkan profile pribadi
    $("#profile-link").click(function() {
        $("#result").html("<h2>Profile</h2><p>Nama : Toriqul Firdaus Tear P.</p>\n<p>Email  : idhofirdauz@gmail.com</p>");
    });

    // Menampilkan moto hidup dan alasan
    $("#moto-link").click(function() {
        $("#result").html("<h2>Moto Hidup</h2><p>``Keep calm and code on``.(Tetap tenang dan teruskan menulis kode.)</p>\n<p>Menekankan pentingnya tetap tenang dan terus bekerja ketika menghadapi kesulitan dalam pemrograman.</p>");
    });

    // Menampilkan keahlian dan pengalaman
    $("#keahlian-link").click(function() {
        $("#result").html("<h2>Keahlian</h2><p>JavaScript</p>\n<p>PHP</p>\n<p>Python</p>");
    });
});