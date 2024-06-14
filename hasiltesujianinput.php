<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Input Data Mahasiswa</title>
</head>
<body>
    <h1> From Input Data Mahasiswa <h1>
<?php
    $nim =$_POST['Nim'];
    $nama =$_POST['Nama'];
    $jeniskel =$_POST['jeniskel'];
    $tanggallahir =$_POST['TanggalLahir'];
    $tempatlahir =$_POST['TempatLahir'];
    $jurusan =$_POST['Jurusan'];
    $tahunmasuk =$_POST['TahunMasuk'];
?>
    <table border=1 bgcolor="Cyan">
    <tr>
    <td colspan=2 align="center"><b>Data Registrasi</b></td>
    </tr>
    <tr>
    <td>Nim</td><td><?php echo $nim;?></td>
    </tr>
    <td>Nama</td><td><?php echo $nama;?></td>
    </tr>
    <td>Jenis Kelamin</td><td><?php echo $jeniskel;?></td>
    </tr>
    <td>Tanggal Lahir</td><td><?php echo $tanggallahir;?></td>
    </tr>
    <td>Tempat Lahir</td><td><?php echo $tempatlahir;?></td>
    </tr>
    <td>Jurusan</td><td><?php echo $jurusan;?></td>
    </tr>
    <td>Tahun Masuk</td><td><?php echo $tahunmasuk;?></td>
    </tr>
    </tr></table>
    <a href="tesujianinput.php"> INPUT DATA LAGI</a>
</body>
</html>