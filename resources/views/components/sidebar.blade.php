<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Dashboard</li>
        <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="/dashboard">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Menu Users</li>
        <li class="nav-item {{ Request::is('menu/daftar-user*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/daftar-user">
                <span class="icon-bg"><i class="mdi mdi-account menu-icon"></i></span>
                <span class="menu-title">Daftar User</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('menu/daftar-supplier*') ? 'active' : '' }}">
            <a class="nav-link" href="/menu/daftar-supplier">
                <span class="icon-bg"><i class="mdi mdi-truck-delivery menu-icon"></i></span>
                <span class="menu-title">Daftar Supplier</span>
            </a>
        </li>
        <li class="nav-item nav-category">Menu Barang</li>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <span class="icon-bg"><i class="mdi mdi-package-down menu-icon"></i></span>
                <span class="menu-title">Penerimaan Barang</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <span class="icon-bg"><i class="mdi mdi-package-up menu-icon"></i></span>
                <span class="menu-title">Pengeluaran Barang</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
                <span class="icon-bg"><i class="mdi mdi-tag-multiple menu-icon"></i></span>
                <span class="menu-title">Daftar Kategori</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
                <span class="icon-bg"><i class="mdi mdi-package menu-icon"></i></span>
                <span class="menu-title">Daftar Barang</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-cart-plus menu-icon"></i></span>
                <span class="menu-title">Daftar Order</span>
            </a>
        </li>
    </ul>
</nav>
