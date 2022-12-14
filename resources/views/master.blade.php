<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                Muhamad Khoirul Fahmi
            </a>
            <ul class="navbar-nav">
                <li class="nav-item @yield('menu')">
                    <a class="nav-link" href="/dashboards">Dashboard</a>
                </li>
                <li class="nav-item @yield('menu1')">
                    <a class="nav-link" href="/dosens">Dosen</a>
                </li>
                <li class="nav-item @yield('menu2')">
                    <a class="nav-link" href="/mahasiswas">Mahasiswa</a>
                </li>
                <li class="nav-item @yield('menu3')">
                    <a class="nav-link" href="/matakuliahs">Mata Kuliah</a>
                </li>
            </ul>    
        </div>
    </nav>
    @yield('content')
    <footer>
        <p class="text-center">Faiz Agil Firmansyah - 2010631170067</p>
    </footer>
</body>
</html>