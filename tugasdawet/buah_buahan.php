<?php
//koneksi ke db dan memilih database apa
$conn = mysqli_connect('localhost', 'root', '', 'buahseger');

//isi table database 
$result = mysqli_query($conn, "SELECT * FROM buah_buahan");

//mengubah database ke dalam array
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

//menampung ke dalam variabel
$buah_buahan = $rows
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buah segar</title>
</head>

<body>
    <h3>Jenis Buah-buahan segar</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>id_buah</th>
            <th>nama_buah</th>
            <th>bentuk_buah</th>
            <th>rasa_buah</th>
            <th>aksi</th>
        </tr>
        <?php foreach ($buah_buahan as $buah) : ?>
            <tr>
                <td><?= $buah['id_buah']; ?></td>
                <td><?= $buah['nama_buah']; ?></td>
                <td><?= $buah['bentuk_buah']; ?></td>
                <td><?= $buah['rasa_buah']; ?></td>
                <td>
                    <a href="">Update</a> <a href="">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

</body>

</html>