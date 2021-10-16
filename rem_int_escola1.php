<?php
include_once ('config.php');
$nome = $_POST ['nome'];
$data_nascimento = $_POST ['data_nascimento'];
$naturalidade = $_POST ['naturalidade'];
$genero = $_POST ['genero'];
$cor = $_POST ['cor'];
$especial = $_POST ['especial'];
$especial_aee = $_POST ['especial_aee'];
$medicamento = $_POST ['medicamento'];
$responsavel = $_POST ['responsavel'];
$nome_responsavel = $_POST ['nome_responsavel'];
$telefone = $_POST ['telefone'];
$email = $_POST ['email'];
$cep = $_POST ['cep'];
$municipio = $_POST ['municipio'];
$endereco = $_POST ['endereco'];
$localizacao = $_POST ['localizacao'];
$transporte = $_POST ['transporte'];
$edp = $_POST ['edp'];


$result_msg_contato = "INSERT INTO remanejamento_interno_escola2 (nome, data_nascimento, naturalidade, genero, cor_raca, edu_esp, especial_aee, medicamento, responsavel, nome_responsavel, telefone, email, cep, municipio, endereco, localizacao, transporte, edp) VALUES ('$nome', '$data_nascimento', '$naturalidade', '$genero', '$cor', '$especial', '$especial_aee', '$medicamento', '$responsavel', '$nome_responsavel', '$telefone', '$email', '$cep', '$municipio', '$endereco', '$localizacao', '$transporte', '$edp' )";


$resultado_msg_contato= mysqli_query($conn, $result_msg_contato)

?>




//"INSERT INTO remanejamento_interno_escola2 (nome, data_nascimento, naturalidade, genero, cor, especial, especial_aee, medicamento, responsavel, nome_responsavel, telefone, email, cep, municipio, endereco, localizacao, transporte, edp)"
