<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <title>MyPetLife</title>
    <style>
        #msg_delete {
            margin-left: 1%;
            margin-right: 1%;
        }

        .nav-item {
            color: #1976d2 !important;
        }
    </style>
</head>

<body style="background:#1976d2">
    <div>
        <center>
            <img src="assets/img/dog.png" alt="mypetlife" style="width: 100px;">
        </center>
    </div>

    <div style="background:white">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">MyPetLife</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link ml-5" href="javascript:void(0)" onclick="perfil_usuarios('minhaVariavel');">Sua conta
                        <span class="sr-only">(current)</span>
                    </a>
                    <a class="nav-item nav-link" href="index.php">
                        <button class="btn btn-outline-primary btn-sm">Sair</button>
                    </a>
                </div>
            </div>
        </nav>
        <center>
            <div class="container-fluid">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Nascimento</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Raça</th>
                                <th scope="col">Selecionar</th>
                                <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody id="test">

                        </tbody>
                    </table>
                </div>
            </div>
            <div id="msg_delete">

            </div>
            <button class="btn btn-success btn-sm ml-2 mb-5" data-toggle="collapse" data-target="#collapseExample">Adicionar novo animal</button>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <div class="container">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nome</label>
                                    <input type="text" class="form-control" id="nome" placeholder="nome">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Tipo</label>
                                    <input type="text" class="form-control" id="tipo" placeholder="cachorro, gato">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <div class="col">
                                    <label for="inputAddress">nascimento</label>
                                    <input type="date" class="form-control" id="nascimento" placeholder="dd/mm/aaaa">
                                </div>
                                <div class="col">
                                    <label for="inputAddress">Sexo</label>
                                    <input type="text" class="form-control" id="sexo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Raça</label>
                                <input type="text" class="form-control" id="raca" placeholder="Vira-lata">
                            </div>

                        </form>
                        <div id="msg_cadastro">

                        </div>
                        <button type="submit" class="btn btn-primary" id="cadastraranimal" onclick="return cadastraranimal('minhaVariavel')">Cadastrar</button>
                    </div>
                </div>
            </div>
    </div>
    </center>
    <center>
        <p style="color:white">&copy - Todos os direitos reservados. MyPetLife 2018</p>
    </center>
    <ul id="listaClientes"></ul>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="assets/js/animal.js"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>

</html>