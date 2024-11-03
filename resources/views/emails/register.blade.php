<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Berhasil</title>
</head>
<body>
    <h1>Selamat, {{ $name }}!</h1>
    <p>Akun Anda telah berhasil terdaftar.</p>
    <p>Berikut adalah informasi pendaftaran Anda:</p>
    <ul>
        <li>Nama: {{ $name }}</li>
        <li>Email: {{ $email }}</li>
    </ul>
    <p>Terima kasih telah mendaftar!</p>
</body>
</html>
