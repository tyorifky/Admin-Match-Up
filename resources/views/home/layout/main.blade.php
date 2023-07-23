<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="container-fluid" style="overflow: hidden">
        <div class="row vh-100 vw-100 ">
            <div class="col-2 bg-primary-mu p-0 h-100 d-flex flex-column justify-content-between">
                <div style="height: 60px" class="p-3" >
                    <div class="logo-sm blank"></div>
                </div>
                <div class="d-flex flex-column" >
                    <a href="/statistik" class="w-100 navbar-button ps-3 {{ ($title === 'statistik') ? 'active' : '';}} ">
                        <div class="logo-xsm d-inline-block blank"></div>
                        <p class="m-0 ms-3">Statistik</p>
                    </a>
                    <a href="/pengguna" class="w-100 navbar-button ps-3 {{ ($title === 'pengguna') ? 'active' : '';}}" >
                        <div class="logo-xsm d-inline-block blank"></div>
                        <p class="m-0 ms-3">Pengguna</p>
                    </a>
                    <a href="/kompetisi" class="w-100 navbar-button ps-3 {{ ($title === 'kompetisi') ? 'active' : '';}}" >
                        <div class="logo-xsm d-inline-block blank"></div>
                        <p class="m-0 ms-3">Kompetisi</p>
                    </a>
                    <a href="/peta" class="w-100 navbar-button ps-3 {{ ($title === 'peta') ? 'active' : '';}}" >
                        <div class="logo-xsm d-inline-block blank"></div>
                        <p class="m-0 ms-3">Peta</p>
                    </a>
                </div>
                <a href="/" class="w-100 navbar-button ps-3 " >
                    <div class="logo-xsm d-inline-block blank"></div>
                    <p class="m-0 ms-3">log Out</p>
                </a>
            </div>
            <div class="col-10" style="overflow-y: auto">
                @yield('content')
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
</body>
</html>