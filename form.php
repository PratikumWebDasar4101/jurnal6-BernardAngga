<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran</title>
</head>
<body>
    <form action="proses.php" method="post">
        <table align="center">
            <tr valign="top">
                <td>username</td>
            </tr>
            <tr>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>password</td>
            </tr>
            <tr>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="NIM">
                </td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <input type="radio" name="Kelas" value="D3MI4101">D3MI4101
                    <input type="radio" name="Kelas" value="D3MI4102">D3MI4102
                    <input type="radio" name="Kelas" value="D3MI4103">D3MI4103
                    <input type="radio" name="Kelas" value="D3MI4104">D3MI4104
                </td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="kelamin" value="Laki-laki">Laki-laki
                    <input type="radio" name="kelamin" value="Perempuan">Perempuan
                    </td>
            </tr>
             <tr>
                <td>HOBI</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="bersepeda">Bersepeda<br>
                    <input type="checkbox" name="hobi[]" value="berenang">Berenang<br>
                    <input type="checkbox" name="hobi[]" value="bermain games">Bermain Games<br>
                    <input type="checkbox" name="hobi[]" value="membaca novel">Membaca Novel<br>
                </td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>:</td>
                <td>
                    <select>
                    <option value="ilmu terapan">Fakultas Ilmu Terapan</option>
            <option value="ilmu terapan">Fakultas Ilmu Terapan</option>
            <option value="teknik elektro">Fakultas Teknik Elektro</option>
            <option value="desain kreatif">Fakultas Desain Kreatif</option>
            <option value="komunikasi bisnis">Fakultas Komunikasi Bisnis</option>
            <option value="ekonomi bisnis">Fakultas Ekonomi Bisnis</option>
            <option value="rekayasa industri">Fakultas Rekayasa Industri</option>
            <option value="informatika">Fakultas Informatika</option>
        </select>
    </td>
</tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="daftar"></td>
            </tr>
        </table>
    </form>
</body>
</html>