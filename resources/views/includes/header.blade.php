<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <h2 class="text-danger pe-5">Comics</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{ request()->routeIs('home.index') ? 'active' : ''}}" aria-current="page" href="{{route('home.index')}}">Home</a>
                </div>
                <div class="navbar-nav">
                    <a class="nav-link {{ request()->routeIs('comics.create') ? 'active' : ''}}" aria-current="page" href="{{route('comics.create')}}">New Comic</a>
                </div>
            </div>
        </div>
        </nav>
</header>