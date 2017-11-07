<nav class="navbar navbar-expand-md navbar-light bg-light navbar-static-top">
    <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ set_active_route('root_path') }}">
                <a class="nav-link" href="{{ route('root_path') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ set_active_route('about_path') }}">
                <a class="nav-link" href="{{ route('about_path') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Artisan</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="http://laravel.com">laravel.com</a>
                    <a class="dropdown-item" href="http://laravel.io">laravel.io</a>
                    <a class="dropdown-item" href="http://laracaste.com">laracaste</a>
                    <a class="dropdown-item" href="http://larajobs.com">larajobs</a>
                    <a class="dropdown-item" href="http://laravel-news.com">laravel News</a>
                    <a class="dropdown-item" href="http://larachat.co">larachat</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" href="#">Contact</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right ">
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Register</a>
            </li>

        </ul>
    </div>
</nav>