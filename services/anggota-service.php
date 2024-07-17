<?php

require_once __DIR__ . '/../db/db.php';

class AnggotaService
{
    private static $conn;

    public static function init()
    {
        if (self::$conn === null) {
            $conn = new Connection();
            self::$conn = $conn->getConnection();
        }
    }

    public static function index($search)
    {
        self::init();

        $sql = "SELECT * FROM anggota WHERE nama LIKE '%" . $search . "%'";
        $result = self::$conn->query($sql);

        $anggota = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $anggota[] = $row;
            }
        }

        return $anggota;
    }

    public static function show($id)
    {
        self::init();

        // Prepare statement
        $sql = "SELECT * FROM anggota WHERE id = ?";
        $stmt = self::$conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return null;
        }

        // Fetch data
        $anggota = $result->fetch_assoc();
        return $anggota;
    }

    public static function create($nama, $jenis_kelamin, $alamat, $foto)
    {
        self::init();

        $sql = "INSERT INTO anggota (nama, jenis_kelamin, alamat, foto) VALUES (?, ?, ?, ?)";
        $stmt = self::$conn->prepare($sql);
        $stmt->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $foto);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }

        $stmt->close();
    }

    public static function update($id, $nama, $jenis_kelamin, $alamat, $foto)
    {
        self::init();

        $sql = "SELECT id FROM anggota WHERE id = ?";
        $stmt = self::$conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return false;
        }

        // Update record
        $sql = "UPDATE anggota SET nama = ?, jenis_kelamin = ?, alamat = ?, foto = ? WHERE id = ?";
        $stmt = self::$conn->prepare($sql);
        $stmt->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $foto, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function destroy($id)
    {
        self::init();

        $sql = "SELECT * FROM anggota WHERE id = ?";
        $stmt = self::$conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return false; // ID not found
        }

        $foto = $result->fetch_assoc()['foto'];

        $oldFile = "../../public/img/upload/" . $foto;
        if (file_exists($oldFile)) {
            unlink($oldFile);
        }

        $sql = "DELETE FROM anggota WHERE id = ?";
        $stmt = self::$conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false; // Delete failed
        }
    }
}
