<?php

require_once '../../services/anggota-service.php';
require_once '../../helper/helper.php';

$datas = AnggotaService::index($_GET['search'] ?? '')

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
            border-radius: 50%;
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
                            <p class="fs-3">Data anggota</p>
                            <a href="/app/anggota/create.php" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-8 col-12">
                                <div class="my-3">
                                    <form action="" class="input-group" method="get">
                                        <input value="<?= $_GET['search'] ?? '' ?>" autocomplete="off" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                        <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php if (count($datas) == 0) : ?>
                            <div class="alert alert-danger" role="alert">
                                Tidak ada data
                            </div>
                        <?php else : ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" scope="col">#</th>
                                            <th class="text-center" scope="col">Foto</th>
                                            <th class="text-center" scope="col">Nama</th>
                                            <th class="text-center" scope="col">Gender</th>
                                            <th class="text-center" scope="col">Alamat</th>
                                            <th class="text-center" scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($datas as $index => $data) : ?>
                                            <tr>
                                                <th class="text-center align-middle" scope="row"><?= $index + 1 ?></th>
                                                <td class="text-center align-middle"><img src="/public/img/upload/<?= $data['foto'] ?>" alt="Foto <?= $data['nama'] ?>" class="member-photo"></td>
                                                <td class="text-center align-middle"><?= $data['nama'] ?></td>
                                                <td class="text-center align-middle"><?= getGender($data['jenis_kelamin']) ?></td>
                                                <td class="text-center align-middle"><?= $data['alamat'] ?></td>
                                                <td class="text-center align-middle">
                                                    <div class="d-flex justify-content-center">
                                                        <a href="/app/anggota/edit.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-primary me-2">Update</a>
                                                        <form action="/proses/anggota/delete.php?id=<?= $data['id'] ?>" method="post">
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>