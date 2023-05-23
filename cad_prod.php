<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CadastraSorvete</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                        <h5 class="card-title text-center">Cadastrar Sorvetes</h5>
                        <p class="card-category">Adicione novos sorvetes nessa tela.</p>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="cod/cadastra.php">
                            <table class="table">
                                <tr>
                                    <td>Nome do Sorvete:</td>
                                    <td>
                                        <input type="text" class="form-control" name="nomepizza">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Preço:</td>
                                    <td>
                                        <input type="text" class="form-control" name="preco">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Url da imagem:</td>
                                    <td>
                                        <input type="text" class="form-control" name="urlimagem">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=2>
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>