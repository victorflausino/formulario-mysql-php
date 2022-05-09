<!DOCTYPE html>
<html lang="pt" <head>
<link rel="stylesheet" type="text/css" href="application.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="config.php" />
<title>IN8DEV</title>
<style>
    .textorodape {
        position: absolute;
        color: white;
        font: 'robotoregular';
        text-align: center;
        right: 46%;
        top: 38%;
        font-size: 125%;

    }

    .rodape {
        position: relative;
        top: 112px;
    }

    .container {
        height: 100vh;
        width: 100vw;
    }

    table,
    th,
    td {
        border: 6px solid black;
        border-color: #29abe1;


    }

    th {
        border-top: none;
        border-top-width: 0ch;
        border: none;
    }

    table {
        border-collapse: collapse;
        text-align: center;
        border-block-end: none;
        border-block-end: white;
        width: 55%;
        position: absolute;
        right: 1037px;
        top: 10px;
    }

    @font-face {
        font-family: 'helv';
        src: url('/fonte/HelveticaUltraLt_0.ttf'), url('ps.ttf') format('opentype') format("truetype");
        font-weight: normal;
        font-style: normal;
    }

    h1 {
        font-family: 'helv', Helvetica, sans-serif;
        font-weight: normal;

    }

    p1 {
        font-family: 'helv', Helvetica, sans-serif;
        font-weight: normal;

    }

    @font-face {
        font-family: 'robotolight';
        src: url('/fonte/Roboto-Light_0.ttf') format('opentype') format("truetype");
        font-weight: normal;
        font-style: normal;
    }

    h2 {
        font-family: 'robotolight', 'tipe', sans-serif;
        font-weight: normal;
    }

    p2 {
        font-family: 'robotolight', 'tipe', sans-serif;
        font-weight: normal;
    }

    @font-face {
        font-family: 'robotoregular';
        src: url('/fonte/Roboto-Regular_0.ttf') format('opentype') format("truetype");
        font-weight: normal;
        font-style: normal;
    }

    h3 {
        font-family: 'robotoregular', 'tipe', sans-serif;
        font-weight: normal;
    }

    p3 {
        font-family: 'robotoregular', 'tipe', sans-serif;
        font-weight: normal;

    }
</style>
</head>

<body>

    <header class="menusuperior">
        <main>

            <div class="sliderprincipal">
                <div><img src="index-image.jpg" s></div>
            </div>

            <div class="logo">
                <img src="logo-in8-dev.svg" style="width: 137px; float: left; margin-left: 200px; padding: 1px; margin-left: 292px;" />
            </div>

            <div class="redesocial">
                <ul style="color: white;color: white; margin-left: 977px; display: inline-flex; white-space: pre; 
                        position: absolute; top: -3%; font-size: 11px;">
                    <a href="" style="color: white; font-size: 25px; margin: 32px;">cadastro </a><br>
                    <li>
                        <h1>lista</h1>
                    </li><br>
                    <li>
                        <h1>sobre mim</h1>
                    </li><br>
                </ul>

            </div>

            <div class="estagio" style="font-size: 56px;
                    color: white;
                    margin-left: 342px;
                    display: inline-flex;
                    white-space: pre;       
                    position: absolute;
                    top: 26%;
                    font-weight: normal;
                    font-family: helv;
                    font-family: sans-serif;">


                <h1>ESTÁGIO</h1>

            </div>

            <div class="provaselecao" style="font-size: 36px;
                    color: white;
                    margin-left: 343px;
                    display: inline-flex;
                    white-space: pre;       
                    position: absolute;
                    top: 42%;
                    font-weight: normal;">


                <h1>PROVA DE SELEÇÃO</h1>
            </div>



        </main>
    </header>

    <main>
        <div class="box">
            <form action="index.php" method="POST">
                <legend>
                    <h1>CADASTRO</h1>
                </legend>
                <br>

                <div class="inputBox" style="font: 'robotoregular';">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox" style="font: 'robotoregular';">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox" style="font: 'robotoregular';">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox" style=" font: 'robotoregular';">
                    <input type="date" name="data" id="data" class="inputUser" required>
                    <label for="data" class="labelInput"></label>
                </div>

                <br><br>
                <input type="submit" name="submit" id="submit" value="CADASTRAR">

            </form>
        </div>
        </div>
        </fieldset>

        </form>
        </div>

    </main>

    <main>
        <div class="cadastro3" style=" color: #29abe1; position:relative ">


            <legend>
                <h1>LISTA DE CADASTRO</h1>
            </legend>


        </div>
    </main>

    <div class='tabela' style=" color: #012d51;
            position: relative;
            top: 82%;
            left: 29.5%;               
            text-align: -moz-left;
            background-color: transparent;">


        <main>


            <?php

            if (isset($_POST['submit'])); {
                ('Nome: ' . $_POST['nome']);

                ('Email: ' . $_POST['email']);
                ('<br>');
                ('Telefone: ' . $_POST['telefone']);
                ('<br>');
                ('Nascimento: ' . $_POST['data']);

                include_once('config.php');

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $data = $_POST['data'];


                $result_usuarios = mysqli_query($conexao, "SELECT * FROM usuarios(id,nome,email,telefone,data) ORDER BY id DESC");
                $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,data) VALUES ('$nome','$email','$telefone','$data')");
                $sel_base = mysqli_select_db($conexao, $dbname);
            }

            ?>



            <div class="tabelefinal">
                <table>

                    <tr>

                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Telefone</th>
                        <th>Nascimento</th>
                    </tr>
                    <tr>
                        <br>
                        <td><?= $nome ?></td>
                        <br>
                        <td><?= $email ?></td>
                        <br>
                        <td><?= $telefone ?></td>
                        <br>
                        <td>
                            <p><?= $data ?> </p>
                        </td>

                    </tr>


                </table>


            </div>



        </main>
    </div>

    <main class="rodape">
        <div class="rodape">
            <div><img src="rodape-desktop.jpg" s></div>
        </div>

        <div class="textorodape">

            <p><?= $nome ?> </p>
            <br>
            <p><?= $email ?> </p>
            <br>
            <p><?= $telefone ?> </p>
            <br>
            <p><?= $data ?> </p>


        </div>
    </main>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>


</body>



</html>