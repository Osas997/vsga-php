<?php
$page = 'anggota';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../template/head.php'; ?>
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
                            <p class="fs-3">Create anggota</p>
                            <a href="/app/anggota/index.php" class="btn btn-primary">Kembali</a>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-8 col-12">
                                <form method="post" action="/proses/anggota/store.php" onsubmit="return validateData(event)" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama">
                                        <p id="error-nama" class="text-danger pt-2"></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">alamat</label>
                                        <input type="alamat" class="form-control" id="alamat" name="alamat">
                                        <p id="error-alamat" class="text-danger pt-2"></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="">Pilih Gender</option>
                                            <option value="1">Laki-laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                        <p id="error-jenis_kelamin" class="text-danger pt-2"></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="photo" class="form-label">Foto</label>
                                        <input type="file" class="form-control" id="photo" name="foto" accept="image/*">
                                        <p id="error-photo" class="text-danger pt-2">
                                            <?php if (isset($_GET['error-img'])) echo $_GET['error-img']; ?>
                                        </p>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../validation/anggota.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>