<?php 

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


//-----Carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


//-----Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//-----Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("ad");
//echo json_encode($search);

//-----Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("cintia", "1234566789");
//echo $usuario;

//-----Criando um novo usuario
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@alun0");
//$aluno->insert();
//echo $aluno;


$usuario = new Usuario();

$usuario->loadById(9);
$usuario->update("professor", "19011979");

echo $usuario;
 ?>