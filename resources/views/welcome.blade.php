@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>

        <div id="welcome">
            <h2>Welcome</h2>

            <example-component></example-component>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var welcome = new Vue({
            el: '#welcome',
            data: {
            },
            methods: {
            }
        });
    </script>
@endsection