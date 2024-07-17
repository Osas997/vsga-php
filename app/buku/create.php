<?php
$page = 'buku';
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
                            <p class="fs-3">Tambah Buku Baru</p>
                            <a href="/buku/index.php" class="btn btn-primary">Kembali</a>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-8 col-12">
                                <form id="form" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="judul" class="form-label">Judul Buku</label>
                                        <input type="text" class="form-control" id="judul" name="judul" required>
                                        <p id="error-judul" class="text-danger pt-2"></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="penerbit" class="form-label">Penerbit</label>
                                        <input type="text" class="form-control" id="penerbit" name="penerbit" required>
                                        <p id="error-penerbit" class="text-danger pt-2"></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="penulis" class="form-label">Penulis</label>
                                        <input type="text" class="form-control" id="penulis" name="penulis" required>
                                        <p id="error-penulis" class="text-danger pt-2"></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" id="status" name="status" required>
                                            <option value="">Pilih Status</option>
                                            <option value="Tersedia">Tersedia</option>
                                            <option value="Dipinjam">Dipinjam</option>
                                            <option value="Hilang">Hilang</option>
                                        </select>
                                        <p id="error-status" class="text-danger pt-2"></p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="sampul" class="form-label">Sampul Buku</label>
                                        <input type="file" class="form-control" id="sampul" name="sampul" accept="image/*" required>
                                        <p id="error-sampul" class="text-danger pt-2"></p>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>