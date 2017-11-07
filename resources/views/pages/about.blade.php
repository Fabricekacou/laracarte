@extends('layout.default', ['title' => 'about'])

@section('content')

    <div class="container">
        <h2>What is {{ config('app.name') }}?</h2>
        <p>
            Laracarte is a clone app of <a href="http://laramap.com">Laramap.com</a> .
        </p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <stron> <i class="fa fa-exclamation-triangle aria-hidden="true""></i> This app has been built by <a href="https://www.facebook.com/kacoufabrice">@kevan</a> for learning purposes.</stron>
                </p>
            </div>
        </div>

        <p>
            Feel free to help to improve the <a href="https://github.com/Fabricekacou/laracarte">source code</a>.
        </p>

        <hr>

        <h2>What is Laramap?</h2>
        <p>
            Laramap is the website by which {{ config('app.name') }} was inspired :).
        </p>
        <p>More info<a href="http://laramap.com/p/about"> here</a>.</p>

        <hr>

        <h2>Which tools and services are used in {{ config('app.name') }}?</h2>
        <p>
            Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.
        </p>
        <ul>
            <li>laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>

@stop