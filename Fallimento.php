<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <div class="container">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                    <a href="/Lavoro" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <span class="fs-4"> Curriculum </span>
                    </a>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a href="/Lavoro/index.html" class="nav-link active" aria-current="page"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"> Search </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Lavoro/Insert.php" class="nav-link"> Insert </a>
                        </li>
                    </ul>
                </header>
            </div>
            <div class="px-4 py-5 my-5 text-center">
            <h1> Fallimento! </h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4"> L'operazione da te effettuata e' fallita. Forse il dato inserito e' gia' presente. <br> La prego di ritornare al menu' o di inserire un altro elemento </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3" onclick="document.location = 'http://localhost/Lavoro/index.html'"> Home </button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="document.location ='http://localhost/Lavoro/Insert.php'"> Inserisci </button>
                </div>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>