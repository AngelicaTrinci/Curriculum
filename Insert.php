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
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2>Inserimento dati</h2>
                        </div>
                    
                        <form action="SendDataToSave.php" method="post">
                            <div class="mb-3">
                                <label class="form-label">Nome Azienda</label>
                                <input type="text" name="nAzienda" class="form-control">
                            </div> 

                            <div class="mb-3">
                                <label class="form-label">Candidatura</label>
                                <input type="text" name="candidatura" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Luogo</label>
                                <input type="text" name="luogo" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Link</label>
                                <input type="text" name="link" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">DataInvio</label>
                                <input type="Date" name="dataInvio" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit"> Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>