<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ $pageTitle === 'Daftar Tamu' ? 'active' : '' }}" href="/dashboard/bukutamus">
                    <span data-feather="list"></span>
                    Daftar Tamu
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $pageTitle === 'Input Tamu Baru' ? 'active' : '' }}"
                    href="/dashboard/bukutamus/create">
                    <span data-feather="edit-3"></span>
                    Input Tamu Baru
                </a>
            </li>
        </ul>
    </div>
</nav>
