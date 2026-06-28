<?php
session_start();
include '../koneksi.php';



$id = $_GET['id'];

mysqli_query(
    $koneksi,
    "DELETE FROM status_barang
WHERE id='$id'"
);

echo "
<script>
    alert('Status berhasil dihapus');
    window.location='status.php';
</script>
";