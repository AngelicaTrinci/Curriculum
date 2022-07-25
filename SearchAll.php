<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Database curriculum mandati! </title>
        <link rel="icon" type="image/x-icon" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <div class="container">
                <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                    <a href="/Lavoro/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <span class="fs-4"> Curriculum </span>
                    </a>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a href="/Lavoro/index.html" class="nav-link active" aria-current="page"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Lavoro/Ricerca.html" class="nav-link"> Search </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Lavoro/Insert.php" class="nav-link"> Insert </a>
                        </li>
                    </ul>
                </header>
            </div>
        </main>
        <?php
            //Apertura connessione al database
            $dbCon = new mysqli('localhost', 'root', '', 'curriculummandati');

            if($dbCon -> connect_error) {
                echo "Non riesco a connettere";
                die('Could not connect to the server');
            }

            $sql = "SELECT * FROM curriculum";
            if($result = mysqli_query($dbCon, $sql)) {
                if(mysqli_num_rows($result) > 0) {
                    echo '
                    <div class="container">
                    <div class="table-responsive-sm">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                            <th scope="col"> Modifica </th>
                                <th scope="col"> Nome Azienda </th>
                                <th scope="col"> Candidatura </th>
                                <th scope="col"> Luogo </th>
                                <th scope="col"> Data </th>
                                <th scope="col"> Stato </th>
                                <th scope="col"> Link </th>
                            </tr>
                        </thead>
                        <tbody>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        /*echo '
                        <tr>
                            <th scope="row"> ' . $row["NomeAzienda"] . '</th>
                            <th scope="row"> ' . $row["Candidatura"] . '</th>
                            <th scope="row"> ' . $row["Luogo"] . '</th>
                            <th scope="row"> ' . $row["DataInvio"] . '</th>
                            <th scope="row"> ' . $row["Stato"] . '</th>
                            <th class="col-2" scope="row"> ' . $row["Link"] . '</th>
                            <th class="justify-content-start" scope="row">
                                <button type="button" class="btn btn-outline-danger">Danger</button>
                                <button type="button" class="btn btn-outline-primary">Primary</button>
                            </th>
                        </tr>';
                    }
                    echo '</tbody>
                        </table>
                        </div>
                       </div> ';*/
                       echo '
                            <tr>
                                <td> 
                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                </td>
                                <td>' .$row["NomeAzienda"] . '</td>
                                <td>' .$row["Candidatura"] . '</td>
                                <td>' .$row["Luogo"] . '</td>
                                <td>' .$row["DataInvio"] .'</td>
                                <td>' .$row["Stato"] .'</td>
                                <td>' .$row["Link"] .'</td>
                                </tr>
                            ';
                }
                echo '</tbody>
                </table>';
                }
            }
        ?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>