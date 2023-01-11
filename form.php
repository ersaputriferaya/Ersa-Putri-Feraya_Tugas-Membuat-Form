<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>

<body style="background-color: #FBF1D3;">
    <div class="menu">
        <ul id="navigasi">
            <li><a href="#ekskul" style="font-size: 20px;">Form Ekskul</a></li>
            </li>
        </ul>
    </div>
    <br>
    <center>
        <img src="panah.png">
    </center>
    <h3 style="font-family: cursive;" align="center">Silahkan Isi Form Ekskul Di bawah ini Sesuai Ekskul Yang Diminati
    </h3>
    <br>
    <h2 style="font-family: cursive;" id="ekskul" align="center">Form Ekskul</h2>
    <fieldset style="width: 500px; background-color: antiquewhite; margin-left: 360px;">
        <form action="inputform.php" method="post">

            <div>
                <label style="font-family: cursive;">Nama Lengkap : </label>
                <input name="nama" type="text" placeholder="Masukkan Nama">
            </div>
            <br>
            <div>
                <label style="font-family: cursive;">E-mail : </label>
                <input name="email" type="text" placeholder="Masukkan Email">
            </div>
            <br>
            <div>
                <label style="font-family: cursive;">Kelas : </label>
                <select name="kelas">
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <br>
            <div>
                <label style="font-family: cursive;">No.HP : </label>
                <input name="nomor" type="text" placeholder="Masukkan No.Hp">
            </div>
            <br>
            <div>
                <label style="font-family: cursive;">Pilihan Ekskul : </label>
                <p style="font-family: cursive;">(Pilih Salah Satu Dari Setiap Bidang)</p>
                <p style="font-family: cursive;">(Note: Untuk Ekskul Pramuka Wajib)</p>
                <label style="font-family: cursive;">Ekskul Wajib : </label>
                <br>
                <label style="font-family: cursive;"><input type="radio" name="wajib" value="Pramuka"/> Pramuka</label>
                <br>
                <label style="font-family: cursive;">Ekskul Bidang Seni : </label>
                <select name="seni">
                    <option value="Gamelan">Gamelan</option>
                    <option value="Paduan Suara">Paduan Suara</option>
                    <option value="Tari Tradisional">Tari Tradisional</option>
                    <option value="Teater">Teater</option>
                </select>
                <br>
                <label style="font-family: cursive;">Ekskul Bidang IT : </label>
                <select name="it">
                    <option value="Fotografi">Fotografi</option>
                    <option value="Robotik">Robotik</option>
                    <option value="Design Grafis">Design Grafis</option>
                </select>
            </div>
            <br>
            <div>
                <label style="font-family: cursive;">Alasan Memilih Ekskul Tersebut : </label>
                <textarea name="alasan"></textarea>
            </div>
            <br>
            <div>
                <button onclick="alert('Form Berhasil Terkirim, Terimakasih')"
                    style="width: 100px; background-color: #EAC7C7; font-family: cursive; font-size: 15px; border: 0px; border-radius: 10px; height: 30px;">Submit</button>
            </div>

        </form>
    </fieldset>
</body>

</html>