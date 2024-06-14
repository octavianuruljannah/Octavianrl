<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
    <h1> From Input Data Mahasiswa <h1>
    <form action="hasiltesujianinput.php"method="post">
    <pre>
        Nim             :<input type="number" class="form-control" required name="Nim">
        Nama            :<input type="text" name="Nama">
        Jenis Kelamin   :<input type="radio" name="jeniskel" value="Laki-Laki"> Laki-Laki <input type="radio" name="jeniskel" value="Perempuan"> Perempuan
        Tanggal Lahir   :<input type="date" class="form-control" required name="TanggalLahir">
        Tempat Lahir    :<input type="text" name="TempatLahir">
        Jurusan         :<select name="Jurusan"> <option value="-pilih-"> <option value="Ilmu Komunikasi">Ilmu Komunikasi <option value="Sistem Informasi">Sistem Informasi <option value="Teknik Informasi">Teknik Informasi <option value="Sastra Inggris">Sastra Inggris </select>
        Tahun Masuk     :<select name="TahunMasuk"> <option value="-pilih-"> <option value="2021">2021 <option value="2022">2022 <option value="2023">2023 <option value="2024">2024 </select>
    </pre>
                <input type="submit" name="submit" value="submit">
</body>
</html>