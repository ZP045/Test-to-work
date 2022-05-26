
<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head> 
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cnd.jsdelivr.net/npm/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kwBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"  crossoringin="anonymous">
    <title>CRUD - PHP FETCHE</title>
</head>

  <body>
    <div class="container"> 
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div> 
                    <h4> Listar Usuários</h4>
                </div> 
                <div>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cadUsuarioModal">
    Cadastrar         
</button>                     </div>
  </div>
      </div>
   <hr>   
<span id="msgAlertaErroCad"></span>
   <div class="row">
       <div class="col-lg-12">
           <span class="listar-usuarios"></span>
  </div>
   </div>
</div>

 <div class="modal fade" id="CadUsuarioModal" tabindex="-1" aria-labellebdy="CadUsuarioModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="CadUsuarioModalLabel"> Cadastrar Usuário</h5>
                 <button type="button" class="btn-close" data-bs-dismis="modal" aria-label="Close"></button>
             </div>  
             <div class="modal-boddy">
                <form id="cad-usuario-form">  
                    <span id="msgAlertaErroCad"></span>        
                  <div class= "mb-3">
                        <label for="nome" class="com-form-label">Nome:</label> 
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome completo" required>
</div>
          <div class= "mb-3">
                        <label for="email" class="com-form-label">E-mail:</label> 
                        <input type="text" name="email" class="form-control" id="email" placeholder="Digite o seu e-mail" required>
</div>
  <div class= "mb-3">
                        <label for="cpf" class="com-form-label">CPF:</label> 
                        <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite o seu CPF" required>
</div>                      
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismis="modal">Fechar</button>
                 <input type="submit" class="btn btn--outline-success btn-sm" id="cad-usuario-btn" value="Cadastrar" />
               </div> 
                </form>              
  </div>
            
      </div>
 </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRh9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="js/custom.js"></script> 
      </body>
           
</html>
