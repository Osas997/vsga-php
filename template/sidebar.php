<div class="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link <?php if ($page == 'beranda') echo 'active'; ?>" href="/"><i class="fas fa-home"></i> Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  <?php if ($page == 'anggota') echo 'active'; ?>" href="/app/anggota/index.php"><i class="fas fa-users"></i> Data anggota</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  <?php if ($page == 'buku') echo 'active'; ?>" href="/app/buku/index.php"><i class="fas fa-book"></i> Data buku</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  <?php if ($page == 'transaksi') echo 'active'; ?>" href="/app/transaksi/peminjaman/index.php"><i class="fas fa-exchange-alt"></i> Transaksi peminjaman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  <?php if ($page == 'pengembalian') echo 'active'; ?>" href="/app/#"><i class="fas fa-undo"></i> Transaksi pengembalian</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  <?php if ($page == 'laporan') echo 'active'; ?>" href="/app/#"><i class="fas fa-chart-bar"></i> Laporan</a>
        </li>
    </ul>
</div>