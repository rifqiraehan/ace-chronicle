<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <i class="bi bi-substack pe-none me-2 fs-4"></i>
        <span class="fs-4">ACE Blog</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link text-white {{ Request::is('dashboard') ? 'active' : '' }} d-flex align-items-center" aria-current="page">
              <i class="bi bi-layout-text-sidebar-reverse pe-none me-2 fs-6"></i>
              Dashboard
            </a>
        </li>

        <li>
            <a href="/dashboard/posts" class="nav-link text-white {{ Request::is('dashboard/posts*') ? 'active' : '' }} d-flex align-items-center">
            <i class="bi bi-file-earmark-text pe-none me-2 fs-6"></i>
              My Posts
            </a>
        </li>
        @can('admin')
        <hr>
        <li>
            <a href="/dashboard/users" class="nav-link text-white {{ Request::is('dashboard/users*') ? 'active' : '' }} d-flex align-items-center">
            <i class="bi bi-person pe-none me-2 fs-6"></i>
              Daftar User
            </a>
        </li>
        <li>
            <a href="/dashboard/categories" class="nav-link text-white {{ Request::is('dashboard/categories*') ? 'active' : '' }} d-flex align-items-center">
            <i class="bi bi-grid pe-none me-2 fs-6"></i>
              Kategori Post
            </a>
        </li>
        @endcan
    </ul>

    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}.png" alt="" width="32" height="32"
                class="rounded-circle me-2">
            <strong>{{ auth()->user()->username }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            {{-- <li><a class="dropdown-item" href="#">
              <i class="bi bi-person-circle pe-none me-2 fs-6"></i>
              Profile
            </a></li>
            <li>
                <hr class="dropdown-divider">
            </li> --}}
            <li><a class="dropdown-item d-flex align-items-center" href="/">
              <i class="bi bi-file-earmark-text pe-none me-2 fs-6"></i>
              Posts
            </a></li>

            <li><a class="dropdown-item d-flex align-items-center" href="/dashboard/profile">
              <i class="bi bi-person pe-none me-2 fs-6"></i>
              Profile
            </a></li>

            <li>
                <hr class="dropdown-divider">
            </li>

            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="dropdown-item d-flex align-items-center"><i class="bi bi-box-arrow-right pe-none me-2 fs-6"></i> Logout</a></button>
            </form>
        </ul>
    </div>
</div>