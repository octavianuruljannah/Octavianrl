<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body>
    <center>
        <br>
        <br>
        <form action="hasil.php" method="POST">
    <table>
        <tr>
            <td><input type="text" class="form-control" required name="nama" placeholder="masukan nama anda"></td>
        </tr>
        <tr>
            <td><input type="number" class="form-control" required name="nim" placeholder="masukan nim anda"></td>
        </tr>
        <tr>
            <td><input type="date" class="form-control" required name="ttl" placeholder="masukan ttl anda"></td>
        </tr>

        <tr>
            <td><button type="submit" name="kirim" class="btn btn-success">proses</button></td>
        </tr>

        </tr>
    </table>
    </form>
</body>
</html>