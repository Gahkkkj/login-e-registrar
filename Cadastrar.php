<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./assents/CSS/cadastrar.css">
    <title>Cadastrar-se</title>
</head>

<body>
    <section>
        <div class="container text-light">

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form onsubmit="event.preventDefault()" class="box">
                            <div class="mx-auto">
                                <H1>Cadastre-se</h1>
                                <ul class="social-network social-circle">
                                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a></li>
                                </ul>
                                <p class="text-muted"> Por favor coloque suas informações!</p>
                            </div>

                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" required class="form-control" name="nome" value="<?php echo isset($obCategoria->nome) ? $obCategoria->nome : ''; ?>">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <label>Email</label>
                                    <input type="text" required class="form-control" name="nome" value="<?php echo isset($obCategoria->nome) ? $obCategoria->nome : ''; ?>">
                                </div>

                                <div class="form-group col-md-6">


                                    <label>Senha</label>
                                    <input type="text" required class="form-control" name="nome" value="<?php echo isset($obCategoria->nome) ? $obCategoria->nome : ''; ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Endereço</label>
                                    <input type="text" required class="form-control" name="nome" value="<?php echo isset($obCategoria->nome) ? $obCategoria->nome : ''; ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCidade">Cidade</label>
                                    <input type="text" class="form-control" id="inputCidade">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Endereço</label>
                                    <input type="text" required class="form-control" name="nome" value="<?php echo isset($obCategoria->nome) ? $obCategoria->nome : ''; ?>">
                                </div>

                                 
                                <div class="form-group col-md-6">
                                    <label>Endereço</label>
                                    <input type="text" required class="form-control" name="nome" value="<?php echo isset($obCategoria->nome) ? $obCategoria->nome : ''; ?>">
                                </div>

                            </div>

                            <a class="forgot text-muted" href="./login.php">Ja tem login?</a><br>
                            <input type="submit" name="" value="Logar" href="#">
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