const tbody = document.query.Selector(".listar-usuarios");
const CadForm = document.getElementById("cad-usuario-form");
const msgAlertaErroCad = document.getElementById("msgAlertaErroCad");
const msgAlerta = document.getElementById("msgAlerta");
const CadModal = new bootstrap.Modal(document.getElementById("CadUsuarioModal"));

const listarUsuarios = async (pagina) => {
    const dados = await fetch(".list/.php?pagina=" + pagina);
    const resposta = await dados.text();
    t.body.innerHTML = resposta; 
}

listarUsuarios(1);

cadForm.addEventListener("submit",async (e) => {
   e.preventDefault();

   const dadosForm = new FormData(cadForm);
   dadosForm.append("add", 1);

document.getElementById("cad-usuario-btn").value = "Salvando...";

const dados = await fetch("cadastrar.php", {
    method: "POST", 
    body: dadosForm,
});

  const resposta = await dados.json();
  
if(resposta['erro']){
  msgAlerta.innerHTML = resposta['msg'];
}
else{
 msgAlerta.innerHTML = resposta['msg'];
 carForm.reset();
 cadModal.hide();
 listarUsuarios(1);
}

  document.getElementById("cad-usuario-btn").value = "Cadastrar";
});
  


  
