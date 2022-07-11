<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            /* Niente bordi bianchi sulla pagina*/
            margin: 0px;
            box-sizing: border-box;
        }
        /* --------------------------------------------------------------- */
        /*Testata pagina*/
        
        #header {
            background-color: rgb(0, 128, 96);
            padding: 50px;
            margin-top: -9px;
            text-align: center;
            color: white;
            width: 100%;
        }
        /* --------------------------------------------------------------- */
        /*Corpo principale*/
        
        .principale {
            float: left;
            width: 50%;
            padding: 10px;
            margin-left: 5%;
            text-decoration: none;
            height: 90%;
        }
        
        h6 {
            font-size: xx-large;
            text-align: center;
            margin: 30px 10px;
        }
        
        .button {
            float: left;
            background-color: #4CAF50;
            border: none;
            color: white;
            display: block;
            padding: 16px 32px;
            font-size: 20px;
            margin: 5px 240px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        
        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
            padding: 16px 43px;
        }
        
        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }
        
        .button2 {
            background-color: white;
            color: black;
            border: 2px solid rgb(13, 13, 255);
        }
        
        .button2:hover {
            background-color: rgb(0, 0, 255);
            color: white;
        }
        /* --------------------------------------------------------------- */
        /* Fine corpo principale, inizio corpo lato sinistro */
        /* Manca il calendario interattivo */
        
        .lati {
            float: left;
            background-color: rgb(14, 187, 66);
            border: 2px solid rgb(14, 187, 66);
            color: rgb(14, 187, 66);
            width: 20%;
            height: 500px;
        }
        /* --------------------------------------------------------------- */
        /* Pulizia dopo le due colonne, così che non si ammontini il resto */
        
        section::after {
            content: "";
            display: table;
            clear: both;
        }
        /* --------------------------------------------------------------- */
        /* Fine impaginazione*/
        
        footer {
            position: absolute;
            color: white;
            background-color: #2f302f;
            padding: 15px;
            bottom: 0;
            width: 100%;
        }
    </style>
    <title> Database curriculum mandati! </title>
    <link rel="icon" type="image/x-icon" href="">
</head>

<body>
    <h1 id="header"> Benvenuta! </h1>
    <section>
        <div class="lati"> Ancora vuoto </div>
        <div class="principale">
            <h6> Scegli l'operazione da svolgere</h6>
            <button class="button button1" onclick="document.location = 'http://localhost/Lavoro/Ricerca.php'"> Cerca </button>
            <button class="button button2" onclick="document.location ='Inserimento.html'"> Inserisci </button>
        </div>
    </section>

    <footer>
        <p> Contattami a questa <a href="mailto: angelica.trinci@gmail.com"> email </a> <br> Oppure al numero di telefono +39 366 48 32939 </p>
        <p style="text-align: center;"> Versione 1.1</p>
    </footer>

</body>

</html>