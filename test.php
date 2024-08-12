<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Santri</title>
</head>
<body>
    <h2>Form Tambah Santri</h2>
    <form action="ExClass.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>

        <label for="umur">Umur:</label>
        <input type="text" id="umur" name="umur"><br><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan"><br><br>

        <label for="pondok">Pondok Pesantren:</label>
        <select id="pondok" name="pondok">
            <option value="Pondok IT">Pondok IT</option>
            <option value="Pondok IT BARU">Pondok IT BARU</option>
        </select><br><br>

        <input type="submit" value="Tambahkan Santri">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'ExClass.php';
            $test = new addNewPondok('Pondok IT', "Yogyakarta");
            $test->addSantri($test);
            $test->showData($test);
        }
    ?>
</body>
</html>
