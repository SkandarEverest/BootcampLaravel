<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Biodata</h1>
    <form action="/kirim" method="POST">
        @csrf
        <label>Nama Lengkap</label>
        <input type="text" name="nama"> <br><br>
        <label>Alamat</label>
        <textarea name="address" cols="30" rows="10"></textarea><br><br>
        <input type="sumbit" value="Kirim">
</body>
</html>