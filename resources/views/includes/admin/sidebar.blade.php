<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('dashboard') }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Data Transaksi Order</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Transaksi Order</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua Transaksi</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Proses Pembayaran</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Menunggu Konfirmasi</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Proses Pembuatan</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Proses Revisi</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Pembuatan Selesai</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Pesanan Telah diterima</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Pembayaran Order</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua Pembayaran</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Belum bayar</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">menunggu konfirmasi</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">pembayaran selesai</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Pembayaran Gagal</a></li>
                </ul>
            </li>
            <li class="menu-header">Manage Order</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Status Orderan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Pesanan Masuk</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Proses Pembuatan</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Proses Revisi</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Pembuatan Selesai</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Riwayat Orderan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Pesanan Telah diterima</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Masa aktif Countdown</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Masa aktif habis</a></li>
                </ul>
            </li>
            {{-- ================================= --}}
            <li class="menu-header">Keuangan Perusahaan</li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Dashboard Keuangan</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Setting</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-badge.html">Akun Kas</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Kategori pemasukan</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Kategori pengeluaran</a></li>
                </ul>
            </li>
            {{-- ============================ --}}
            <li class="menu-header">Data Trx Reseller</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Data Reseller</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua Reseller</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Reseller Aktif</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Reseller Non-aktif</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Domain Expired</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Transaksi Reseller</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua Pembayaran</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Belum bayar</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">menunggu konfirmasi</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">pembayaran selesai</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Pembayaran Gagal</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Permintaan domain</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua Pembayaran</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Proses</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Berhasil</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Gagal</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Permintaan TopUp</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Belum bayar</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">menunggu konfirmasi</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">pembayaran selesai</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Pembayaran Gagal</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Permintaan Penarikan</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Belum bayar</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">menunggu konfirmasi</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">pembayaran selesai</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Pembayaran Gagal</a></li>
                </ul>
            </li>


            <li class="menu-header">Data Tema</li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Semua Tema</span></a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Kategori Tema</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua kategori</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Pernikahan</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Ulang Tahun</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Jenis Tema</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua jenis</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Website</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Video</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Gambar</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Kualitas Tema</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Semua kualitas</a></li>
                    <li><a class="nav-link" href="bootstrap-alert.html">Basic</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Premium</a></li>
                </ul>
            </li>

            <li class="menu-header">Setting</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Data User</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-default.html">All User</a></li>
                    <li><a class="nav-link" href="layout-transparent.html">Finance, Staff</a>
                    </li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Reseller, Costumer</a>
                    </li>
                </ul>
            </li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Data Rekening
                        Perusahaan</span></a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i>
                    <span>Data Harga</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="bootstrap-alert.html">Harga Domain</a></li>
                    <li><a class="nav-link" href="bootstrap-badge.html">Harga Masa aktif</a></li>
                </ul>
            </li>


            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Documentation
                </a>
            </div>
    </aside>
</div>