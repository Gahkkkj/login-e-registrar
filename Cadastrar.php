<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/styles.css">
    <title>Cadastrar-se</title>
</head>

<body>


    <div class="mx-auto d-block">
        <H1 class="ttcadastro">Cadastre-se</h1>
            <i class='fab fa-facebook' style='font-size:48px;'></i>
            <i class='fab fa-twitter-square' style='font-size:48px;'></i>
            <i class='fab fa-google-plus' style='font-size:48px;'></i>
    </div>
    <div class="container m-auto text-light">

        <section class="formulario">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSenha">Senha</label>
                        <input type="Senha" class="form-control" id="inputSenha">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome">
                </div>
                <div class="form-group">
                    <label for="inputEndereco">Endereço</label>
                    <input type="text" class="form-control" id="inputEndereco2" placeholder="Apartamento, studio ou casa">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCidade">Cidade</label>
                        <input type="text" class="form-control" id="inputCidade">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEstado">Estado</label>
                        <select id="inputEstado" class="form-control">
                            <option selected>Escolher</option>
                            <option>RS</option>
                            <option>SP</option>
                            <option>RJ</option>
                            <option>PR</option>
                            <option>MG</option>
                            <option>BH</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Cpf</label>
                        <input type="text" class="form-control" id="inputCpf">
                    </div>
                </div>


                <a href="Login.php" class="btn btn-primary">Logar</a>
            </form>
        </section>
        <!-- icons -->
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    </div>
</body>

</html>