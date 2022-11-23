<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="./img/m3dPNG.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue">
        <link rel="icon" type="image/x-icon" href="../../../public/assets/m3dPNG.png">
        <link rel="stylesheet" href="../../../public/css/newadduserform.css">
        <title>Criação de Usuário</title>
    </head>
    <body>
        <div class="d-flex mx-auto overflow-hidden justify-content-center h-100 main form-modal" >
           <img src="../../../public/assets/MatflixLogoText.png" class="img-fluid mx-auto d-block" alt="" id="logo">
           <h2 class="mb-4" id="title">Criação de usuário</h2>
           <form action="POST" class="row gy-3 gx-3 align-items-center mt-2">
                <div class="form-group mb-3">
                    <label for="usuario" class="col-sm-auto col-form-label">Nome do usuário:</label>
                    
                    <input type="text" name="name" id="titulo" class="form-control">
                   
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="col-sm-auto col-form-label">E-mail:</label>
                    
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="senha" class="col-sm-auto col-form-label">Senha:</label>
                    
                    <input type="password"  value="" name="password" class="form-control"/>
                </div>
                <div class="col-sm-6">
                    <input type="submit" value="Criar" class="btn btn-lg formbtn form-control"></input>
                </div>

                <div class="col-sm-6">
                    <input type="reset" value="Limpar" class="btn btn-lg formbtn form-control"></input>
                </div>

                <div>
                    <button class="btn btn-lg formbtn form-control align-self-center col-sm-6">Cancelar</button>
                </div>
           </form>
        </div>
    </body>
</html>