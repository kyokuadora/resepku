<?php

// 1. Buat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "resepku");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Function buat cek input
function cek_data($jenis) {
    if (isset($_POST[$jenis])) {
        return $_POST[$jenis];
    } else {
        return "";  
    }
}

// Function proses simpan
function bebas($conn) {
    $user = cek_data("user");
    $pass = cek_data("pass");

    if ($user == "" || $pass == "") {
        echo "<script>alert('Data tidak boleh kosong');</script>";
    } else {
        // Mencegah error karakter khusus pada query
        $safe_user = mysqli_real_escape_string($conn, $user);
        $safe_pass = mysqli_real_escape_string($conn, $pass);

        // Query insert tanpa typo koma
        $query = "INSERT INTO resep VALUES (
            NULL,
            '1',
            '$safe_user',
            '$safe_user',
            '$safe_pass',
            'rakyat'
        )";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        } else {
            echo "Gagal: " . mysqli_error($conn);
        }
    }
}

// Jalankan fungsi HANYA ketika tombol 'daftar' diklik
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    bebas($conn);
}

?>

<!DOCTYPE html>
<html>
<body>

<form action="" method="POST">
    <div class="form">
        <div class="user">
            <label>username: </label>
            <input type="text" name="user">
        </div>
        <div class="pass">
            <label>password: </label>
            <input type="password" name="pass">
        </div>
        <input type="submit" value="daftar">
    </div>
</form>

</body>
</html>