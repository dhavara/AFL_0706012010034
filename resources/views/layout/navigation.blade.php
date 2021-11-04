<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="nav nav-inverse">
    <div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link">test</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($title == 'Home') {{ 'active' }} @endif" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($title == 'Mahasiswa') {{ 'active' }} @endif" href="/mahasiswa">MAHASISWA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($title == 'Prodi') {{ 'active' }} @endif" href="/prodi">PRODI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($title == 'About') {{ 'active' }} @endif" href="/about">ABOUT</a>
            </li>
        </ul>
    </div>
</nav>
