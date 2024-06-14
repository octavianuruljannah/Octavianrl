<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>
    <h1> Form Registrasi<h1>
    <form action="hasildata.php"method="post">
    <pre>
        Nama             :<input type="text" name="Nama">
        Tempat Lahir     :<input type="text" name="TempatLahir">
        Tanggal Lahir    :<input type="date" class="form-control" required name="TanggalLahir">
        Jenis Kelamin    :<input type="radio" name="jeniskel" value="Laki-Laki"> Laki-Laki <input type="radio" name="jeniskel" value="Perempuan"> Perempuan
        Pendidikan       :<select name="Pendidikan"> <option value="-pilih-"> <option value="SMA/SMK">SMA/SMK <option value="S1">S1 <option value="S2">S2 <option value="S3">S3 <option value="Lain-Lain">Lain-Lain </select>
        Alamat           :<textarea name="Alamat" rows="5" cols="40"></textarea>
    </pre>
                <input type="submit" value="TAMPIL"><input type="reset" value="BATAL">
</body>
</html>