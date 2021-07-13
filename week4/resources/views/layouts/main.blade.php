<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <header>
        <meta charset="UTF-8" />
        <h1>Charisara't Books Stores - @yield('title')</h1>
        <nav>
            <ul>
            <li><a href="{{route('product-list')}}">Product</a></li>
            <li><a href="{{route('category-list')}}">Category</a></li>
            <ul>
            </nav>
        </header>
        <div>
            @yield('content')
        </div>
        <footer>
            &#xA9; Copyright Week-04, 2020 Charisara't Books Stores.
        </footer>
    </body>
</html>