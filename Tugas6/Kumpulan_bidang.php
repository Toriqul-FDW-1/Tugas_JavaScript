<!DOCTYPE html>
<html>
<head>
    <title>Data Bidang</title>
</head>
<body>
    <h1 style="text-align: center;">Data Bidang</h1>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Keterangan</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once 'Lingkaran.php';
            require_once 'PersegiPanjang.php';
            require_once 'Segitiga.php';

            $lingkaran = new Lingkaran(7);
            $persegiPanjang = new PersegiPanjang(5, 8);
            $segitiga = new Segitiga(6, 4);

            $bidangList = [$lingkaran, $persegiPanjang, $segitiga];

            foreach ($bidangList as $index => $bidang) {
                echo "<tr>";
                echo "<td align='center';>" . ($index + 1) . "</td>";
                echo "<td>" . $bidang->namaBidang() . "</td>";
                echo "<td>" . $bidang->keterangan() . "</td>"; 
                echo "<td>" . $bidang->luasBidang() . "</td>";
                echo "<td>" . $bidang->kelilingBidang() . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
