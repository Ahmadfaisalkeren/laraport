<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container flex-lg-column">
        @foreach ($profil as $item)
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
                <img src="{{ $item->image }}" class="d-none d-lg-block rounded-circle" alt="">
            </a>
        @endforeach
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Keahlian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#project">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#certificate">Sertifikat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Kontak</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
