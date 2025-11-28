<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bold ms-2">UTS Susulan Alby</span>
        </a>
    </div>

    <ul class="menu-inner py-1">

        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active open' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div>Dashboard</div>
            </a>
        </li>

        <!-- Katalog Produk -->
        <li class="menu-item {{ request()->routeIs('products.*') ? 'active open' : '' }}">
            <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div>Katalog Produk</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('products.create') ? 'active' : '' }}">
                    <a href="{{ route('products.create') }}" class="menu-link">
                        <div>Tambah Data</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- HEADER DIPINDAH KE SINI -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Transaksi</span>
        </li>

        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div>Daftar Pesanan</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('pembayaran*') ? 'active open' : '' }}">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div>Pembayaran</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="ui-accordion.html" class="menu-link">
                        <div>Daftar Pembayaran</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-alerts.html" class="menu-link">
                        <div>Verifikasi Pembayaran</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
