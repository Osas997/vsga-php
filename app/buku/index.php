<?php
$page = 'buku';

$datas = [
    [
        'id' => 1,
        'id_buku' => '000031',
        'judul' => 'Matematika menyenangkan',
        'penerbit' => 'Otto',
        'penulis' => 'fahmoy',
        "status" => 'Tersedia',
        'sampul' => 'https://marketplace.canva.com/EAGHMvjQr9I/1/0/1003w/canva-biru-ilustrasi-sampul-buku-matemetika-PLaUzNp7Ot4.jpg'
    ],
    [
        'id' => 2,
        'id_buku' => '000032',
        'judul' => 'Judul Buku Unik',
        'penerbit' => 'Otto',
        'penulis' => 'gus',
        "status" => 'Hilang',
        'sampul' => 'https://cdn1-production-images-kly.akamaized.net/hUVZC5iZ1Wu4vQ5O2zxpxuVT8As=/500x667/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2970863/original/016026200_1574075254-judul_buku_unik.jpg4.jpg'
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../template/head.php'; ?>
    <style>
        .member-photo {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <?php include '../../template/header.php'; ?>
    <?php include '../../template/navbar.php'; ?>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-2">
                    <?php include '../../template/sidebar.php'; ?>
                </div>
                <div class="col-md-9 col-lg-10">
                    <div class="content">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fs-3">Data buku</p>
                            <a href="/app/buku/create.php" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-8 col-12">
                                <div class="input-group my-3">
                                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">#</th>
                                        <th class="text-center" scope="col">ID Buku</th>
                                        <th class="text-center" scope="col">Sampul</th>
                                        <th class="text-center" scope="col">Judul Buku</th>
                                        <th class="text-center" scope="col">Penerbit</th>
                                        <th class="text-center" scope="col">Penulis</th>
                                        <th class="text-center" scope="col">Status</th>
                                        <th class="text-center" scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datas as $index => $data) : ?>
                                        <tr>
                                            <th scope="row"><?= $index + 1 ?></th>
                                            <th class="text-center align-middle" scope="row"><?= $data['id_buku'] ?></th>
                                            <td class="text-center align-middle">
                                                <img src="<?= $data['sampul'] ?>" alt="Foto <?= $data['judul'] ?>" class="member-photo">
                                            </td>
                                            <td class="text-center align-middle"><?= $data['judul'] ?></td>
                                            <td class="text-center align-middle"><?= $data['penerbit'] ?></td>
                                            <td class="text-center align-middle"><?= $data['penulis'] ?></td>
                                            <td class="text-center align-middle"><?= $data['status'] ?></td>
                                            <td class="text-center align-middle">
                                                <div class="d-flex justify-content-center">
                                                    <a href="/anggota/update.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-primary me-2">Update</a>
                                                    <a href="/anggota/delete.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>