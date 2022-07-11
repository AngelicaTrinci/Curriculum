<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Inserimento dati</h2>
                    </div>
                
                    <form action="SendDataToSave.php" method="post">
                        <div class="form-group">
                            <label>Nome Azienda</label>
                            <input type="text" name="nAzienda" class="form-control">
                        </div> 

                        <div class="form-group">
                            <label>Candidatura</label>
                            <input type="text" name="candidatura" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Luogo</label>
                            <input type="text" name="luogo" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" name="link" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>DataInvio</label>
                            <input type="Date" name="dataInvio" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-primary" name="submit">
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>