<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: #FBF1D3;">
    <br>
    <br>
    <br>
    <br>
    <br>
    <h3 style="font-family: cursive;" align="center">Input Berhasil Terkirim, Berikut Hasilnya</h3>
    <fieldset style="width: 500px; background-color: antiquewhite; margin-left: 372px;">
        Nama : <?php echo $_POST["nama"]; ?>
        <br>
        E-mail : <?php echo $_POST["email"]; ?>
        <br>
        Kelas : <?php echo $_POST["kelas"]; ?>
        <br>
        No.HP : <?php echo $_POST["nomor"]; ?>
        <br>
        Pilihan Ekskul :
        <br>
        Ekskul Wajib : <?php echo $_POST["wajib"]; ?>
        <br>
        Ekskul Bidang Seni : <?php echo $_POST["seni"]; ?>
        <br>
        Ekskul Bidang IT : <?php echo $_POST["it"]; ?>
        <br>
        Alasan Memilih Ekskul : <?php echo $_POST["alasan"]; ?>
    </fieldset>
    <br>
    <br>
    <fieldset style="width: 725px; background-color: antiquewhite; margin-left: 260px;">
        <h4 style="font-family: cursive;">Terimakasih Sudah Mengisi Form Untuk Memilih Ekskul Yang Diminati, Semoga
            Sukses Selalu</h4>
        <button
            style="width: 100px; background-color: #EAC7C7; font-family: cursive; font-size: 15px; border: 0px; border-radius: 10px; height: 30px;"><a href="form.php" style="text-decoration: none;">Back</a></button>
    </fieldset>
</body>

</html>