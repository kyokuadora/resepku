<body>
    <form action="" method="post">
        <label>sayur : </label>
        <select name="sayur">
            <option value=""></option>
        </select>
        <label>buah : </label>
        <select name="buah">
            <option value=""></option>
        </select>
        <label>bumbu : </label>
        <select name="bumbu">
            <option value=""></option>
</select>
        <input type="submit" name="dor" value="kirim">
</form>
<hr>
<?php
include'../process.php';
$bahan = cek_data_post("sayur"),cek_data_post("buah"),cek_data_post("bumbu");
Select_resep($bahan);
