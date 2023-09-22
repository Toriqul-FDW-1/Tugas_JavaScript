<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form method="POST">
                    <table>
                        <tr>
                            <th colspan="2">
                                <h2>Form Input Data</h2>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Nama </label>
                            </td>
                            <td>
                                <input type="text" name="nama" id="nama" placeholder="Masukan Nama" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Pekerjaan</label>
                            </td>
                            <td>
                                <select name="pekerjaan" id="pekerjaan">
                                    <option value="">---Pilih Pekerjaan---</option>
                                    <option value="pekerja1">Pekerja 1</option>
                                    <option value="pekerja2">Pekerja 2</option>
                                    <option value="pekerja3">Pekerja 3</option>
                                    <option value="pekerja4">Pekerja 4</option>
                                    <option value="pekerja5">Pekerja 5</option>
                                    <option value="pekerja6">Pekerja 6</option>
                                    <option value="pekerja7">Pekerja 7</option>
                                    <option value="pekerja8">Pekerja 8</option>
                                    <option value="pekerja9">Pekerja 9</option>
                                    <option value="pekerja10">Pekerja 10</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Hobby</label>
                            </td>
                            <td class="hobi">
                                <input type="radio" name="hobi" value="Hobi1"> Hobi 1
                                <input type="radio" name="hobi" value="Hobi2"> Hobi 2
                                <input type="radio" name="hobi" value="Hobi3"> Hobi 3
                                <input type="radio" name="hobi" value="Hobi4"> Hobi 4
                                <input type="radio" name="hobi" value="Hobi5"> Hobi 5
                                <input type="radio" name="hobi" value="Hobi6"> Hobi 6
                                <input type="radio" name="hobi" value="Hobi7"> Hobi 7
                                <input type="radio" name="hobi" value="Hob8"> Hobi 8
                                <input type="radio" name="hobi" value="Hobi9"> Hobi 9
                                <input type="radio" name="hobi" value="Hobi10"> Hobi 10
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <button type="submit" name="simpan">Simpan</button>
                            </td>
                        </tr>

                    </table>

                </form>
            </div>
            <div class="col-md-6">
                <!-- php -->
                <?php
                if (isset($_POST['simpan'])) {
                    $nama = $_POST['nama'];
                    $pekerjaan = $_POST['pekerjaan'];
                    $hobby = $_POST['hobi'];

                    // Simpan data ke dalam tabel 
                    echo "<div class='hasil'>";
                    echo "<table class='tab_hasil'>";
                    echo "<tr><th colspan='2'><h2>Hasil Input Data</h2></th></tr>";
                    echo "<tr><th>Nama</th><th>Pekerjaan</th><th>Hobby</th></tr>";
                    echo "<tr><td>$nama</td><td>$pekerjaan</td><td>$hobby</td></tr>";
                    echo "</table>";
                    echo "</div>";
                } else {
                    echo "Data belum disimpan.";
                }
                ?>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>