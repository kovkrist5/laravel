<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('categories.index')}}">categories</a></li>
                <li><a href="{{route('categories.create')}}">new category</a></li>
                
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer></footer>
</body>
</html>