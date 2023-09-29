<?php
require 'konversiSuhu.php';

$Suhu1 = new KonversiSuhu('Celcius', 30, 'Fahrenheit');
$Suhu2 = new KonversiSuhu('Celcius', 40, 'Fahrenheit');
$Suhu3 = new KonversiSuhu('Fahrenheit', 86, 'Celcius');
$Suhu4 = new KonversiSuhu('Fahrenheit', 122, 'Celcius');
$Suhu5 = new KonversiSuhu('Celcius', 25, 'Rheamur');
$Suhu6 = new KonversiSuhu('Celcius', 30, 'Rheamur');
$Suhu7 = new KonversiSuhu('Rheamur', 55, 'Celcius');
$Suhu8 = new KonversiSuhu('Rheamur', 60, 'Celcius');

$SuhuArray = [$Suhu1, $Suhu2, $Suhu3, $Suhu4, $Suhu5, $Suhu6, $Suhu7, $Suhu8];

// Cetak data dalam tabel

echo '<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: #f2f2f2;
    }
</style>';
echo '<table>';
echo '<thead>
        <tr>
            <th>Satuan Suhu Awal</th>
            <th>Besaran Suhu</th>
            <th>Satuan Suhu Tujuan</th>
            <th>Hasil Konversi Suhu</th>
        </tr>
    </thead>';
echo '<tbody>';
foreach ($SuhuArray as $Suhu) {
    echo '<tr>';
    echo '<td>' . $Suhu->cetak() . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';


?>