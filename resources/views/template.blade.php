<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>


    <title>CRUD</title>
</head>
<body>
<container>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/create" id="" role="button" aria-expanded="false">
                            Create
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/read" id="" role="button" aria-expanded="false">
                            Read
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/update" id="" role="button" aria-expanded="false">
                            Update
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/delete" id="" role="button" aria-expanded="false">
                            Delete
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container-fluid">
    <div class="row">
        @yield('content')
    </div>
</div>
</container>
</body>
</html>
