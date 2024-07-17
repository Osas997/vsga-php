<?php
$page = 'transaksi';

$datas = [
    [
        'id' => 1,
        'id_buku' => '00001',
        'judul_buku' => 'Matematika menyenangkan',
        'nama_peminjam' => 'fahmoy',
        "tanggal_pinjam" => '2022-01-01',
        "status" => 'Dipinjam',
    ],
    [
        'id' => 2,
        'id_buku' => '00002',
        'judul_buku' => 'Judul Buku Unik',
        'nama_peminjam' => 'gus',
        "tanggal_pinjam" => '2022-01-01',
        "status" => 'Dikembalikan',
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../../template/head.php'; ?>
    <style>
        .member-photo {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <?php include '../../../template/header.php'; ?>
    <?php include '../../../template/navbar.php'; ?>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-lg-2">
                    <?php include '../../../template/sidebar.php'; ?>
                </div>
                <div class="col-md-9 col-lg-10">
                    <div class="content">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fs-3">Peminjaman buku</p>
                            <a href="/app/transaksi/peminjaman/create.php" class="btn btn-primary">Tambah Data</a>
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
                                        <th class="text-center" scope="col">Judul Buku</th>
                                        <th class="text-center" scope="col">Nama Peminjam</th>
                                        <th class="text-center" scope="col">Tgl. Peminjaman</th>
                                        <th class="text-center" scope="col">Status</th>
                                        <th class="text-center" scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($datas as $index => $data) : ?>
                                        <tr>
                                            <th scope="row"><?= $index + 1 ?></th>
                                            <td class="text-center align-middle"><?= $data['id_buku'] ?></td>
                                            <td class="text-center align-middle"><?= $data['judul_buku'] ?></td>
                                            <td class="text-center align-middle"><?= $data['nama_peminjam'] ?></td>
                                            <td class="text-center align-middle"><?= $data['tanggal_pinjam'] ?></td>
                                            <td class="text-center align-middle"><?= $data['status'] ?></td>
                                            <td class="text-center align-middle">
                                                <div class="d-flex justify-content-center">
                                                    <a href="/anggota/update.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-success me-2">Kembalikan</a>
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