<?php

require_once "../../services/anggota-service.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $foto = '';

    if (!isset($_FILES['foto']) || $_FILES['foto']['error'] == UPLOAD_ERR_NO_FILE) {
        header('Location: /app/anggota/create.php?error-img=img field is required');
        return;
    }

    if ($_FILES['foto']['error'] != UPLOAD_ERR_OK) {
        header('Location: /app/anggota/create.php?error-img=img_upload_failed');
        return;
    }

    $foto = uploadFoto($_FILES['foto']);

    if ($foto) {
        $result = AnggotaService::create($nama, $jenis_kelamin, $alamat, $foto);
    } else {
        $result = false;
    }

    if ($result) {
        header('Location: /app/anggota/index.php');
    } else {
        echo "Gagal menambahkan data anggota.";
    }
} else {
    echo "404";
}

function uploadFoto($file)
{
    $targetDir = "../../public/img/upload/";
    $imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    $uniqueId = uniqid('', true);
    $targetFile = $targetDir . $uniqueId . "." . $imageFileType;

    $uploadOk = 1;

    $check = getimagesize($file["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($file["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    $allowedFormats = ["jpg", "png", "jpeg", "gif"];
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        return false;
    } else {
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return $uniqueId . "." . $imageFileType;
        } else {
            echo "Sorry, there was an error uploading your file.";

            return false;
        }
    }
}
