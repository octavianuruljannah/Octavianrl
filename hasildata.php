<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>
<body>
    <h1> Data Registrasi <h1>
<?php
    $nama =$_POST['Nama'];
    $tempatlahir =$_POST['TempatLahir'];
    $tanggallahir =$_POST['TanggalLahir'];
    $jeniskel =$_POST['jeniskel'];
    $pendidikan =$_POST['Pendidikan'];
    $alamat =$_POST['Alamat'];
?>
    <table border=1 bgcolor="Cyan">
    <tr>
    <td colspan=2 align="center"><b>Data Registrasi</b></td>
    </tr>
    <tr>
    <td>Nama</td><td><?php echo $nama;?></td>
    </tr>
    <td>Tempat Lahir</td><td><?php echo $tempatlahir;?></td>
    </tr>
    <td>Tanggal Lahir</td><td><?php echo $tanggallahir;?></td>
    </tr>
    <td>Jenis Kelamin</td><td><?php echo $jeniskel;?></td>
    </tr>
    <td>Pendidikan</td><td><?php echo $pendidikan;?></td>
    </tr>
    <td>Alamat</td><td><?php echo $alamat;?></td>
    </tr></table>
</body>
</html>