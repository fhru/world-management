<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container py-2">
        <a class="navbar-brand" href="#">Growtopia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link @if($title=='Home') active @endif" href=" /">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title=='About') active @endif" href=" /about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title=='Blog') active @endif" href="/blog">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>