<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collpse" data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggle-icon"></span>
        </button>
        <div class="collpse navbar-collpse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === "home") ? 'active' : '' }}"
                    aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === "profil") ? 'active' : '' }}"
                    aria-current="page" href="/profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === "mahasiswa") ? 'active' : '' }}"
                    aria-current="page" href="/mhs">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($slug === "prodi") ? 'active' : '' }}"
                    aria-current="page" href="/prodi">Prodi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>