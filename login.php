<?php
include 'process.php';

if (isset($_GET["status"])) {

    if ($_GET["status"] == "salah") {
        echo "
        <script>
            alert('USER ATAU PASS SALAH !!');
        </script>
        ";

    } elseif ($_GET["status"] == "no_akun") {
        echo "
        <script>
            alert('BIKIN AKUN DULU !!!');
        </script>
        ";

    } elseif ($_GET["status"] == "kelar") {
        echo "
        <script>
            alert('Goodbye');
        </script>
        ";
    }

}
?>