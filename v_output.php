<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Toko Sepatu</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Form Output Transaksi Toko Sepatu
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
                <th>Nama Pembeli</th>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <th>No HP</th>
                <td>:</td>
                <td>
                    <?= $nohp; ?>
                </td>
            </tr>
            <tr>
                <th>Merk Sepatu</th>
                <td>:</td>
                <td>
                    <?= $merk; ?>
                </td>
            </tr>

            <tr>
                <th>Ukuran Sepatu</th>
                <td>:</td>
                <td>
                    <?= $ukuran; ?>
                </td>
            </tr> 
            
            <tr>
                <th>Harga Sepatu</th>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr> 

            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('tokosepatu'); ?>">Kembali</a>
            </tr>
            </table>
        </form>
    </center>
<body>
</html>
