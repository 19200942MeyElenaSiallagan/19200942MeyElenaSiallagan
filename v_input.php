<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Toko Sepatu</title>
</head>
<body>
    <center>
        <form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Transaksi Toko Sepatu
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
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>No HP</th>
                <td>:</td>
                <td>
                    <input type="text" name="nohp" id="nohp">
                </td>
            </tr>
            <tr>
                <th>Merk Sepatu</th>
                <td>:</td>
                <td>
                    <select name="merk" id="merk">
                            <option>-- Pilih MERK --</option> 
                            <option value="Nike">Nike</option> 
                            <option value="Adidas">Adidas</option> 
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th>Ukuran Sepatu</th>
                <td>:</td>
                <td>
                    <select name="ukuran" id="ukuran">
                            <option>-- Pilih Ukuran --</option>
                            <option value="32">32</option> 
                            <option value="33">33</option> 
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                    </select>
                </td>
            </tr> 

            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Simpan">
                </td>
            </tr>
            </table>
        </form>
    </center>
<body>
</html>

        




                