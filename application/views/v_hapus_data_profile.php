<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= base_url('profile/action_hapus_data') ?>" method="post">
    <table>
        <tr>
                <td>Nama Depan</td>
                <td>:</td>
                <td><input type="text" name="nama_depan" class="form-control"></td>
            </tr>
            <tr>
                <td>Nama Belakang</td>
                <td>:</td>
                <td><input type="text" name="nama_belakang" class="form-control"></td>
            </tr>
            <tr>
                <td>Tempat lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" class="form-control"></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td>:</td>
                <td><input type="text" name="tanggal_lahir" class="form-control"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value='L'>L
                    <input type="radio" name="jenis_kelamin" value='p'>P
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea type="text" name="alamat" class="form-control"></textarea><td>
            </tr>
            <tr>
                <td>jenjang pendidikan</td>
                <td>:</td>
                <td>
                    <select name="jenjang_pendidikan" id="" class="form-control">
                        <option value="SMK">SMK sederajat</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>  
                        <option value="S2">S2</option>
                    </select>
                </td>   
            </tr>
            <tr>
                <td colspan="3"><hr></td>
                    <button type="submit" class="btn btn-primary"> simpan </button>
                    <a href="" class="btn btn-warning">kembali</a>
                </td>
            </tr>
         </table>
      </form>
</body>
</html>