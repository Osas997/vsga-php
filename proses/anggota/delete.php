<?php
require_once "../../services/anggota-service.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $result = AnggotaService::destroy($id);

        if ($result) {
            // var_dump($result);
            header('Location: /app/anggota/index.php');
            exit();
        } else {
            echo "Gagal menghapus anggota.";
        }
    } else {
        echo "ID anggota tidak tersedia.";
    }
} else {
    echo "404";
}
