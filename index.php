<?php

if(isset($_POST['submit']));
{
    print_r($_POST['name']);
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2022</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Matrículas 2022</h1>
    <div class="container">
        <!--Educação Infantil-->
        <div class="list">
            <input class="list__input" id="faq-ai__um" type="checkbox">
            <div class="list__trigger">
                <label for="faq-ai__um">
                    <h2 class="faq-title"><b>Educação Infantil</b></h2>
                </label>

                <div class="conteudo">

                    <!--escola 1-->

                    <div class="list__dois">
                        <input class="list__input__dois" id="faq-ai__dois" type="checkbox">
                        <div class="list__trigger">
                            <label for="faq-ai__dois">
                                <h2 class="faq-title__dois">escola 1</h2>
                            </label>

                            <div class="conteudo__dois">
                                <a class="btn" id="rem_inter_inf" href="#abrirModal1"><span>REMANEJAMENTO
                                        INTERNO</span></a>
                                <div id="abrirModal1" class="modal">
                                    <div class="box">
                                        <form action="index.php" method="post" id="frm" class="frm">
                                            <a href="#fechar" title="Fechar" id="fechar">x</a>
                                            <fieldset>
                                                <legend>REMANEJAMENTO INTERNO</legend>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="nome" id="nome" class=inputUser required>
                                                    <label for="nome" class="labelInput">Nome completo do
                                                        estudante</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <label for="data_nascimento">Data de Nascimento:</label>
                                                    <input type="date" name="data_nascimento" id="data_nascimento"
                                                        required>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <input type="text" name="naturalidade" id="natural" class=inputUser
                                                        required>
                                                    <label for="natural" class="labelInput">Naturalidade</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Gênero:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="genero" id="masculino"
                                                            value="masculino" required>
                                                        <label class="inputBox__radio"
                                                            for="masculino">Masculino</label><br>
                                                        <input type="radio" name="genero" id="feminino" value="feminino"
                                                            required>
                                                        <label class="inputBox__radio" for="feminino">Feminino</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Cor/Raça:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="cor" id="cor__branca" value="branca"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__branca">Branca</label><br>
                                                        <input type="radio" name="cor" id="cor__parda" value="parda"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__parda">Parda</label><br>
                                                        <input type="radio" name="cor" id="cor__indigena"
                                                            value="indigena" required>
                                                        <label class="inputBox__radio"
                                                            for="cor__indigena">Índigena</label><br>
                                                        <input type="radio" name="cor" id="cor__preta" value="preta"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__preta">Preta</label><br>
                                                        <input type="radio" name="cor" id="cor__amarela" value="amarela"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__amarela">Amarela</label><br>
                                                        <input type="radio" name="cor" id="cor__ndeclarada"
                                                            value="naoDeclarada" required>
                                                        <label class="inputBox__radio" for="cor__ndeclarada">Não
                                                            declarada</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>É aluno público alvo da Educação Especial?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="ee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="ee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Frequenta sala de recurso (AEE)?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="aee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="aee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Faz uso de medicamento contínuo?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="medicamento" id="me__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="me__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="me__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="me__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Responsável Legal:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="responsavel" id="rl__pai" value="pai"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__pai">Pai</label><br>
                                                        <input type="radio" name="responsavel" id="rl__mae" value="mae"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__mae">Mãe</label><br>
                                                        <input type="radio" name="responsavel" id="rl__responsavel"
                                                            value="responsavel_legal" required>
                                                        <label class="inputBox__radio" for="rl__responsavel">Responsável
                                                            Legal</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="responsavel" id="responsavel__legal"
                                                        class=inputUser required>
                                                    <label for="responsavel__legal" class="labelInput">Nome do
                                                        responsável
                                                        legal</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="tel" name="telefone" id="telefone" class=inputUser
                                                        required>
                                                    <label for="telefone" class="labelInput">Número do telefone</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="email" id="email" class=inputUser required>
                                                    <label for="email" class="labelInput">Email</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="cep" id="cep" class=inputUser required>
                                                    <label for="cep" class="labelInput">Cep</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="municipio" id="municipio" class=inputUser
                                                        required>
                                                    <label for="municipio" class="labelInput">Município</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="endereco" id="endereco" class=inputUser
                                                        required>
                                                    <label for="endereco" class="labelInput">Endereço</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Localização</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="localizacao" id="localizacao__urbana"
                                                            value="urbana" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__urbana">Urbana</label>
                                                        <input type="radio" name="localizacao" id="localizacao__rural"
                                                            value="rural" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__rural">Rural</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Necessita de transporte escolar?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="transporte" id="te__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="te__sim">Sim</label>
                                                        <input type="radio" name="transporte" id="te__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="te__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="edp" id="edp" class=inputUser required>
                                                    <label for="edp" class="labelInput">Número do Código da EDP (Talão
                                                        de
                                                        Energia)</label>
                                                </div>
                                                <br><br>

                                                <input type="submit" class="submit" name="submit" id="submit"
                                                    value="Enviar">

                                            </fieldset>

                                        </form>

                                    </div>

                                </div>

                                <a class="btn" id="rem_rede_inf" href="#abrirModal_i2"><span>REMANEJAMENTO EM
                                        REDE</span></a>
                                <div id="abrirModal_i2" class="modal">
                                    <div class="box">
                                        <form action="index.html" method="post" id="frm" class="frm">
                                            <a href="#fechar" title="Fechar" id="fechar">x</a>
                                            <fieldset>
                                                <legend>REMANEJAMENTO EM REDE</legend>
                                                <br><br>

                                                <div class="inputBox">
                                                    <label for="listInf" class="labelInput">Instituição de
                                                        Ensino Atual</label><br>
                                                    <select id="listInf" name="listRemIntInf" required>
                                                        <option class="listInf__opt" value="selecionar">Selecione a
                                                            Instituição Atual
                                                        </option>
                                                        <option value="instituicao1">Instituição 1</option>
                                                        <option value="instituicao2">Instituição 2</option>
                                                        <option value="instituicao3">Instituição 3</option>
                                                        <option value="instituicao4">Instituição 4</option>
                                                        <option value="instituicao5">Instituição 5</option>
                                                        <option value="instituicao6">Instituição 6</option>
                                                    </select>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Turno Pretendido:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="turno" id="matutino" value="matutino"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="matutino">Matutino</label><br>
                                                        <input type="radio" name="turno" id="vespertino"
                                                            value="vespertino" required>
                                                        <label class="inputBox__radio"
                                                            for="vespertino">Vespertino</label><br>
                                                        <input type="radio" name="turno" id="semturno"
                                                            value="semPreferenciaTurno" required>
                                                        <label class="inputBox__radio" for="semturno">Sem preferência de
                                                            turno</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <label for="listInf" class="labelInput">Turma pretendida</label><br>
                                                    <select id="listInf" name="listRemIntInf" required>
                                                        <option class="listInf__opt" value="escolher">Escolha a turma
                                                            pretendida</option>
                                                        <option value="creche2">Creche II (02 anos completados até a
                                                            data 31/03/2022)</option>
                                                        <option value="creche3">Creche III (03 anos completados até a
                                                            data 31/03/2022)</option>
                                                        <option value="pre1">Pré-Escola I (04 anos completados até a
                                                            data de 31/03/2021)</option>
                                                        <option value="pre2">Pré-Escola II (05 anos completados até a
                                                            data de 31/03/2021)</option>
                                                    </select>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <input type="text" name="nome" id="nome" class=inputUser required>
                                                    <label for="nome" class="labelInput">Nome completo do
                                                        estudante</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <label for="data_nascimento">Data de Nascimento:</label>
                                                    <input type="date" name="data_nascimento" id="data_nascimento"
                                                        required>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <input type="text" name="naturalidade" id="natural" class=inputUser
                                                        required>
                                                    <label for="natural" class="labelInput">Naturalidade</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Gênero:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="genero" id="masculino"
                                                            value="masculino" required>
                                                        <label class="inputBox__radio"
                                                            for="masculino">Masculino</label><br>
                                                        <input type="radio" name="genero" id="feminino" value="feminino"
                                                            required>
                                                        <label class="inputBox__radio" for="feminino">Feminino</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Cor/Raça:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="cor" id="cor__branca" value="branca"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__branca">Branca</label><br>
                                                        <input type="radio" name="cor" id="cor__parda" value="parda"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__parda">Parda</label><br>
                                                        <input type="radio" name="cor" id="cor__indigena"
                                                            value="indigena" required>
                                                        <label class="inputBox__radio"
                                                            for="cor__indigena">Índigena</label><br>
                                                        <input type="radio" name="cor" id="cor__preta" value="preta"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__preta">Preta</label><br>
                                                        <input type="radio" name="cor" id="cor__amarela" value="amarela"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__amarela">Amarela</label><br>
                                                        <input type="radio" name="cor" id="cor__ndeclarada"
                                                            value="naoDeclarada" required>
                                                        <label class="inputBox__radio" for="cor__ndeclarada">Não
                                                            declarada</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>É aluno público alvo da Educação Especial?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="ee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="ee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Frequenta sala de recurso (AEE)?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="aee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="aee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Faz uso de medicamento contínuo?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="medicamento" id="me__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="me__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="me__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="me__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Responsável Legal:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="responsavel" id="rl__pai" value="pai"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__pai">Pai</label><br>
                                                        <input type="radio" name="responsavel" id="rl__mae" value="mae"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__mae">Mãe</label><br>
                                                        <input type="radio" name="responsavel" id="rl__responsavel"
                                                            value="responsavel_legal" required>
                                                        <label class="inputBox__radio" for="rl__responsavel">Responsável
                                                            Legal</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="responsavel" id="responsavel__legal"
                                                        class=inputUser required>
                                                    <label for="responsavel__legal" class="labelInput">Nome do
                                                        responsável
                                                        legal</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="tel" name="telefone" id="telefone" class=inputUser
                                                        required>
                                                    <label for="telefone" class="labelInput">Número do telefone</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="email" id="email" class=inputUser required>
                                                    <label for="email" class="labelInput">Email</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="cep" id="cep" class=inputUser required>
                                                    <label for="cep" class="labelInput">Cep</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="municipio" id="municipio" class=inputUser
                                                        required>
                                                    <label for="municipio" class="labelInput">Município</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="endereco" id="endereco" class=inputUser
                                                        required>
                                                    <label for="endereco" class="labelInput">Endereço</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Localização</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="localizacao" id="localizacao__urbana"
                                                            value="urbana" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__urbana">Urbana</label>
                                                        <input type="radio" name="localizacao" id="localizacao__rural"
                                                            value="rural" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__rural">Rural</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Necessita de transporte escolar?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="transporte" id="te__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="te__sim">Sim</label>
                                                        <input type="radio" name="transporte" id="te__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="te__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="edp" id="edp" class=inputUser required>
                                                    <label for="edp" class="labelInput">Número do Código da EDP (Talão
                                                        de Energia)</label>
                                                </div>
                                                <br><br>

                                                <input type="submit" class="submit" name="submit" id="submit"
                                                    value="Enviar">

                                            </fieldset>

                                        </form>

                                    </div>

                                </div>

                                <a class="btn" id="cad_res_inf" href="#abrirModal_i3"><span>CADASTRO DE
                                        RESERVA</span></a>
                                <div id="abrirModal_i3" class="modal">
                                    <div class="box">
                                        <form action="index.html" method="post" id="frm" class="frm">
                                            <a href="#fechar" title="Fechar" id="fechar">x</a>
                                            <fieldset>
                                                <legend>CADASTRO DE RESERVA</legend>
                                                <br><br>

                                                <div class="inputBox">
                                                    <label for="listInf" class="labelInput">Turma pretendida</label><br>
                                                    <select id="listInf" name="listRemIntInf" required>
                                                        <option class="listInf__opt" value="escolher">Escolha a turma
                                                            pretendida</option>
                                                        <option value="creche2">Creche I (01 anos completados até a
                                                            data 31/03/2022)</option>
                                                        <option value="creche3">Creche II (02 anos completados até a
                                                            data 31/03/2022)</option>
                                                        <option value="pre1">Creche III (03 anos completados até a
                                                            data de 31/03/2021)</option>
                                                    </select>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Turno Pretendido:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="turno" id="matutino" value="matutino"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="matutino">Matutino</label><br>
                                                        <input type="radio" name="turno" id="vespertino"
                                                            value="vespertino" required>
                                                        <label class="inputBox__radio"
                                                            for="vespertino">Vespertino</label><br>
                                                        <input type="radio" name="turno" id="semturno"
                                                            value="semPreferenciaTurno" required>
                                                        <label class="inputBox__radio" for="semturno">Sem preferência de
                                                            turno</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <input type="text" name="nome" id="nome" class=inputUser required>
                                                    <label for="nome" class="labelInput">Nome completo do
                                                        estudante</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <label for="data_nascimento">Data de Nascimento:</label>
                                                    <input type="date" name="data_nascimento" id="data_nascimento"
                                                        required>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <input type="text" name="naturalidade" id="natural" class=inputUser
                                                        required>
                                                    <label for="natural" class="labelInput">Naturalidade</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Gênero:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="genero" id="masculino"
                                                            value="masculino" required>
                                                        <label class="inputBox__radio"
                                                            for="masculino">Masculino</label><br>
                                                        <input type="radio" name="genero" id="feminino" value="feminino"
                                                            required>
                                                        <label class="inputBox__radio" for="feminino">Feminino</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Cor/Raça:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="cor" id="cor__branca" value="branca"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__branca">Branca</label><br>
                                                        <input type="radio" name="cor" id="cor__parda" value="parda"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__parda">Parda</label><br>
                                                        <input type="radio" name="cor" id="cor__indigena"
                                                            value="indigena" required>
                                                        <label class="inputBox__radio"
                                                            for="cor__indigena">Índigena</label><br>
                                                        <input type="radio" name="cor" id="cor__preta" value="preta"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__preta">Preta</label><br>
                                                        <input type="radio" name="cor" id="cor__amarela" value="amarela"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__amarela">Amarela</label><br>
                                                        <input type="radio" name="cor" id="cor__ndeclarada"
                                                            value="naoDeclarada" required>
                                                        <label class="inputBox__radio" for="cor__ndeclarada">Não
                                                            declarada</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>É aluno público alvo da Educação Especial?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="ee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="ee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Frequenta sala de recurso (AEE)?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="aee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="aee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Faz uso de medicamento contínuo?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="medicamento" id="me__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="me__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="me__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="me__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Responsável Legal:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="responsavel" id="rl__pai" value="pai"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__pai">Pai</label><br>
                                                        <input type="radio" name="responsavel" id="rl__mae" value="mae"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__mae">Mãe</label><br>
                                                        <input type="radio" name="responsavel" id="rl__responsavel"
                                                            value="responsavel_legal" required>
                                                        <label class="inputBox__radio" for="rl__responsavel">Responsável
                                                            Legal</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="responsavel" id="responsavel__legal"
                                                        class=inputUser required>
                                                    <label for="responsavel__legal" class="labelInput">Nome do
                                                        responsável
                                                        legal</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="tel" name="telefone" id="telefone" class=inputUser
                                                        required>
                                                    <label for="telefone" class="labelInput">Número do telefone</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="email" id="email" class=inputUser required>
                                                    <label for="email" class="labelInput">Email</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="cep" id="cep" class=inputUser required>
                                                    <label for="cep" class="labelInput">Cep</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="municipio" id="municipio" class=inputUser
                                                        required>
                                                    <label for="municipio" class="labelInput">Município</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="endereco" id="endereco" class=inputUser
                                                        required>
                                                    <label for="endereco" class="labelInput">Endereço</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Localização</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="localizacao" id="localizacao__urbana"
                                                            value="urbana" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__urbana">Urbana</label>
                                                        <input type="radio" name="localizacao" id="localizacao__rural"
                                                            value="rural" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__rural">Rural</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Necessita de transporte escolar?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="transporte" id="te__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="te__sim">Sim</label>
                                                        <input type="radio" name="transporte" id="te__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="te__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="edp" id="edp" class=inputUser required>
                                                    <label for="edp" class="labelInput">Número do Código da EDP (Talão
                                                        de Energia)</label>
                                                </div>
                                                <br><br>

																<div class="inputBox">
                                                   <p><b>Após a confirmação da vaga, o responsável pelo aluno deverá comparecer na Instituição com documentação, original e cópia para efetivação da matrícula</b></p>
																	<br>
																	<p>
																		Ducumentos originais e uma cópia de cada documento para efetivação da matrícula:
																		<br>
																		Foto 3/4 do estudante;<br>
																	</p>
                                                </div>
                                                <br><br>

                                                <input type="submit" class="submit" name="submit" id="submit"
                                                    value="Enviar">

                                            </fieldset>

                                        </form>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!--escola 2-->

                    <div class="list__dois">
                        <input class="list__input__dois" id="faq-ai__tres" type="checkbox">
                        <div class="list__trigger">
                            <label for="faq-ai__tres">
                                <h2 class="faq-title__dois">escola 2</h2>
                            </label>

                            <div class="conteudo__dois">

                                <a class="btn" id="rem_inter_inf" href="#abrirModal1"><span>REMANEJAMENTO
                                        INTERNO</span></a>

                                <div id="abrirModal1" class="modal">

                                    <div class="box">

                                        <form action="" id="frm" class="frm">
                                            <a href="#fechar" title="Fechar" id="fechar">x</a>

                                            <fieldset>

                                                <legend>REMANEJAMENTO INTERNO</legend>
                                                <br>

                                                <div class="inputBox">

                                                    <label for="listInf" class="labelInput">Instituição de
                                                        Ensino</label><br>
                                                    <select id="listInf" name="listRemIntInf" required>
                                                        <option class="listInf__opt" value="selecionar">Selecione a
                                                            Instituição
                                                        </option>
                                                        <option value="instituicao1">Instituição 1</option>
                                                        <option value="instituicao2">Instituição 2</option>
                                                        <option value="instituica3">Instituição 3</option>

                                                    </select>

                                                </div>

                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="nome" id="nome" class=inputUser required>
                                                    <label for="nome" class="labelInput">Nome completo do
                                                        estudante</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <label for="data_nascimento">Data de Nascimento:</label>
                                                    <input type="date" name="data_nascimento" id="data_nascimento"
                                                        required>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <input type="text" name="naturalidade" id="natural" class=inputUser
                                                        required>
                                                    <label for="natural" class="labelInput">Naturalidade</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Gênero:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="genero" id="masculino"
                                                            value="masculino" required>
                                                        <label class="inputBox__radio"
                                                            for="masculino">Masculino</label><br>
                                                        <input type="radio" name="genero" id="feminino" value="feminino"
                                                            required>
                                                        <label class="inputBox__radio" for="feminino">Feminino</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Cor/Raça:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="cor" id="cor__branca" value="branca"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__branca">Branca</label><br>
                                                        <input type="radio" name="cor" id="cor__parda" value="parda"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__parda">Parda</label><br>
                                                        <input type="radio" name="cor" id="cor__indigena"
                                                            value="indigena" required>
                                                        <label class="inputBox__radio"
                                                            for="cor__indigena">Índigena</label><br>
                                                        <input type="radio" name="cor" id="cor__preta" value="preta"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__preta">Preta</label><br>
                                                        <input type="radio" name="cor" id="cor__amarela" value="amarela"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__amarela">Amarela</label><br>
                                                        <input type="radio" name="cor" id="cor__ndeclarada"
                                                            value="naoDeclarada" required>
                                                        <label class="inputBox__radio" for="cor__ndeclarada">Não
                                                            declarada</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>É aluno público alvo da Educação Especial?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="ee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="ee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Frequenta sala de recurso (AEE)?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="aee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="aee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Faz uso de medicamento contínuo?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="medicamento" id="me__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="me__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="me__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="me__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Responsável Legal:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="responsavel" id="rl__pai" value="pai"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__pai">Pai</label><br>
                                                        <input type="radio" name="responsavel" id="rl__mae" value="mae"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__mae">Mãe</label><br>
                                                        <input type="radio" name="responsavel" id="rl__responsavel"
                                                            value="responsavel_legal" required>
                                                        <label class="inputBox__radio" for="rl__responsavel">Responsável
                                                            Legal</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="responsavel" id="responsavel__legal"
                                                        class=inputUser required>
                                                    <label for="responsavel__legal" class="labelInput">Nome do
                                                        responsável
                                                        legal</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="tel" name="telefone" id="telefone" class=inputUser
                                                        required>
                                                    <label for="telefone" class="labelInput">Número do telefone</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="email" id="email" class=inputUser required>
                                                    <label for="email" class="labelInput">Email</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="cep" id="cep" class=inputUser required>
                                                    <label for="cep" class="labelInput">Cep</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="municipio" id="municipio" class=inputUser
                                                        required>
                                                    <label for="municipio" class="labelInput">Município</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="endereco" id="endereco" class=inputUser
                                                        required>
                                                    <label for="endereco" class="labelInput">Endereço</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Localização</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="localizacao" id="localizacao__urbana"
                                                            value="urbana" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__urbana">Urbana</label>
                                                        <input type="radio" name="localizacao" id="localizacao__rural"
                                                            value="rural" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__rural">Rural</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Necessita de transporte escolar?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="transporte" id="te__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="te__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="te__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="te__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="edp" id="edp" class=inputUser required>
                                                    <label for="edp" class="labelInput">Número do Código da EDP (Talão
                                                        de
                                                        Energia)</label>
                                                </div>
                                                <br><br>

                                                <input type="submit" class="submit" name="submit" id="submit"
                                                    value="Enviar">

                                            </fieldset>

                                        </form>

                                    </div>

                                </div>

                                <a class="btn" id="rem_rede_inf" href="./anosIn/anosIn.html"><span>REMANEJAMENTO EM
                                        REDE</span></a>

                                <a class="btn" id="cad_res_inf" href="./anosFi/anosFi.html"><span>CADASTRO DE
                                        RESERVA</span></a>


                            </div>
                        </div>
                    </div>

                    <!--escola 3-->

                    <div class="list__dois">
                        <input class="list__input__dois" id="faq-ai__quatro" type="checkbox">
                        <div class="list__trigger">
                            <label for="faq-ai__quatro">
                                <h2 class="faq-title__dois">escola 3</h2>
                            </label>

                            <div class="conteudo__dois">

                                <a class="btn" id="rem_inter_inf" href="#abrirModal1"><span>REMANEJAMENTO
                                        INTERNO</span></a>

                                <div id="abrirModal1" class="modal">

                                    <div class="box">

                                        <form action="" id="frm" class="frm">
                                            <a href="#fechar" title="Fechar" id="fechar">x</a>

                                            <fieldset>

                                                <legend>REMANEJAMENTO INTERNO</legend>
                                                <br>

                                                <div class="inputBox">

                                                    <label for="listInf" class="labelInput">Instituição de
                                                        Ensino</label><br>
                                                    <select id="listInf" name="listRemIntInf" required>
                                                        <option class="listInf__opt" value="selecionar">Selecione a
                                                            Instituição
                                                        </option>
                                                        <option value="instituicao1">Instituição 1</option>
                                                        <option value="instituicao2">Instituição 2</option>
                                                        <option value="instituica3">Instituição 3</option>

                                                    </select>

                                                </div>

                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="nome" id="nome" class=inputUser required>
                                                    <label for="nome" class="labelInput">Nome completo do
                                                        estudante</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <label for="data_nascimento">Data de Nascimento:</label>
                                                    <input type="date" name="data_nascimento" id="data_nascimento"
                                                        required>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <input type="text" name="naturalidade" id="natural" class=inputUser
                                                        required>
                                                    <label for="natural" class="labelInput">Naturalidade</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Gênero:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="genero" id="masculino"
                                                            value="masculino" required>
                                                        <label class="inputBox__radio"
                                                            for="masculino">Masculino</label><br>
                                                        <input type="radio" name="genero" id="feminino" value="feminino"
                                                            required>
                                                        <label class="inputBox__radio" for="feminino">Feminino</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Cor/Raça:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="cor" id="cor__branca" value="branca"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__branca">Branca</label><br>
                                                        <input type="radio" name="cor" id="cor__parda" value="parda"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__parda">Parda</label><br>
                                                        <input type="radio" name="cor" id="cor__indigena"
                                                            value="indigena" required>
                                                        <label class="inputBox__radio"
                                                            for="cor__indigena">Índigena</label><br>
                                                        <input type="radio" name="cor" id="cor__preta" value="preta"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__preta">Preta</label><br>
                                                        <input type="radio" name="cor" id="cor__amarela" value="amarela"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__amarela">Amarela</label><br>
                                                        <input type="radio" name="cor" id="cor__ndeclarada"
                                                            value="naoDeclarada" required>
                                                        <label class="inputBox__radio" for="cor__ndeclarada">Não
                                                            declarada</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>É aluno público alvo da Educação Especial?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="ee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="ee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Frequenta sala de recurso (AEE)?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="aee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="aee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Faz uso de medicamento contínuo?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="medicamento" id="me__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="me__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="me__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="me__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Responsável Legal:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="responsavel" id="rl__pai" value="pai"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__pai">Pai</label><br>
                                                        <input type="radio" name="responsavel" id="rl__mae" value="mae"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__mae">Mãe</label><br>
                                                        <input type="radio" name="responsavel" id="rl__responsavel"
                                                            value="responsavel_legal" required>
                                                        <label class="inputBox__radio" for="rl__responsavel">Responsável
                                                            Legal</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="responsavel" id="responsavel__legal"
                                                        class=inputUser required>
                                                    <label for="responsavel__legal" class="labelInput">Nome do
                                                        responsável
                                                        legal</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="tel" name="telefone" id="telefone" class=inputUser
                                                        required>
                                                    <label for="telefone" class="labelInput">Número do telefone</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="email" id="email" class=inputUser required>
                                                    <label for="email" class="labelInput">Email</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="cep" id="cep" class=inputUser required>
                                                    <label for="cep" class="labelInput">Cep</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="municipio" id="municipio" class=inputUser
                                                        required>
                                                    <label for="municipio" class="labelInput">Município</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="endereco" id="endereco" class=inputUser
                                                        required>
                                                    <label for="endereco" class="labelInput">Endereço</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Localização</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="localizacao" id="localizacao__urbana"
                                                            value="urbana" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__urbana">Urbana</label>
                                                        <input type="radio" name="localizacao" id="localizacao__rural"
                                                            value="rural" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__rural">Rural</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Necessita de transporte escolar?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="transporte" id="te__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="te__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="te__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="te__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="edp" id="edp" class=inputUser required>
                                                    <label for="edp" class="labelInput">Número do Código da EDP (Talão
                                                        de
                                                        Energia)</label>
                                                </div>
                                                <br><br>

                                                <input type="submit" class="submit" name="submit" id="submit"
                                                    value="Enviar">

                                            </fieldset>

                                        </form>

                                    </div>

                                </div>

                                <a class="btn" id="rem_rede_inf" href="./anosIn/anosIn.html"><span>REMANEJAMENTO EM
                                        REDE</span></a>

                                <a class="btn" id="cad_res_inf" href="./anosFi/anosFi.html"><span>CADASTRO DE
                                        RESERVA</span></a>


                            </div>
                        </div>
                    </div>

                    <!--escola 4-->

                    <div class="list__dois">
                        <input class="list__input__dois" id="faq-ai__cinco" type="checkbox">
                        <div class="list__trigger">
                            <label for="faq-ai__cinco">
                                <h2 class="faq-title__dois">escola 4</h2>
                            </label>

                            <div class="conteudo__dois">

                                <a class="btn" id="rem_inter_inf" href="#abrirModal1"><span>REMANEJAMENTO
                                        INTERNO</span></a>

                                <div id="abrirModal1" class="modal">

                                    <div class="box">

                                        <form action="" id="frm" class="frm">
                                            <a href="#fechar" title="Fechar" id="fechar">x</a>

                                            <fieldset>

                                                <legend>REMANEJAMENTO INTERNO</legend>
                                                <br>

                                                <div class="inputBox">

                                                    <label for="listInf" class="labelInput">Instituição de
                                                        Ensino</label><br>
                                                    <select id="listInf" name="listRemIntInf" required>
                                                        <option class="listInf__opt" value="selecionar">Selecione a
                                                            Instituição
                                                        </option>
                                                        <option value="instituicao1">Instituição 1</option>
                                                        <option value="instituicao2">Instituição 2</option>
                                                        <option value="instituica3">Instituição 3</option>

                                                    </select>

                                                </div>

                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="nome" id="nome" class=inputUser required>
                                                    <label for="nome" class="labelInput">Nome completo do
                                                        estudante</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <label for="data_nascimento">Data de Nascimento:</label>
                                                    <input type="date" name="data_nascimento" id="data_nascimento"
                                                        required>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <input type="text" name="naturalidade" id="natural" class=inputUser
                                                        required>
                                                    <label for="natural" class="labelInput">Naturalidade</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Gênero:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="genero" id="masculino"
                                                            value="masculino" required>
                                                        <label class="inputBox__radio"
                                                            for="masculino">Masculino</label><br>
                                                        <input type="radio" name="genero" id="feminino" value="feminino"
                                                            required>
                                                        <label class="inputBox__radio" for="feminino">Feminino</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Cor/Raça:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="cor" id="cor__branca" value="branca"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__branca">Branca</label><br>
                                                        <input type="radio" name="cor" id="cor__parda" value="parda"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__parda">Parda</label><br>
                                                        <input type="radio" name="cor" id="cor__indigena"
                                                            value="indigena" required>
                                                        <label class="inputBox__radio"
                                                            for="cor__indigena">Índigena</label><br>
                                                        <input type="radio" name="cor" id="cor__preta" value="preta"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__preta">Preta</label><br>
                                                        <input type="radio" name="cor" id="cor__amarela" value="amarela"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__amarela">Amarela</label><br>
                                                        <input type="radio" name="cor" id="cor__ndeclarada"
                                                            value="naoDeclarada" required>
                                                        <label class="inputBox__radio" for="cor__ndeclarada">Não
                                                            declarada</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>É aluno público alvo da Educação Especial?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="ee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="ee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Frequenta sala de recurso (AEE)?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="aee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="aee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Faz uso de medicamento contínuo?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="medicamento" id="me__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="me__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="me__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="me__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Responsável Legal:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="responsavel" id="rl__pai" value="pai"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__pai">Pai</label><br>
                                                        <input type="radio" name="responsavel" id="rl__mae" value="mae"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__mae">Mãe</label><br>
                                                        <input type="radio" name="responsavel" id="rl__responsavel"
                                                            value="responsavel_legal" required>
                                                        <label class="inputBox__radio" for="rl__responsavel">Responsável
                                                            Legal</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="responsavel" id="responsavel__legal"
                                                        class=inputUser required>
                                                    <label for="responsavel__legal" class="labelInput">Nome do
                                                        responsável
                                                        legal</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="tel" name="telefone" id="telefone" class=inputUser
                                                        required>
                                                    <label for="telefone" class="labelInput">Número do telefone</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="email" id="email" class=inputUser required>
                                                    <label for="email" class="labelInput">Email</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="cep" id="cep" class=inputUser required>
                                                    <label for="cep" class="labelInput">Cep</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="municipio" id="municipio" class=inputUser
                                                        required>
                                                    <label for="municipio" class="labelInput">Município</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="endereco" id="endereco" class=inputUser
                                                        required>
                                                    <label for="endereco" class="labelInput">Endereço</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Localização</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="localizacao" id="localizacao__urbana"
                                                            value="urbana" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__urbana">Urbana</label>
                                                        <input type="radio" name="localizacao" id="localizacao__rural"
                                                            value="rural" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__rural">Rural</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Necessita de transporte escolar?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="transporte" id="te__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="te__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="te__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="te__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="edp" id="edp" class=inputUser required>
                                                    <label for="edp" class="labelInput">Número do Código da EDP (Talão
                                                        de
                                                        Energia)</label>
                                                </div>
                                                <br><br>

                                                <input type="submit" class="submit" name="submit" id="submit"
                                                    value="Enviar">

                                            </fieldset>

                                        </form>

                                    </div>

                                </div>

                                <a class="btn" id="rem_rede_inf" href="./anosIn/anosIn.html"><span>REMANEJAMENTO EM
                                        REDE</span></a>

                                <a class="btn" id="cad_res_inf" href="./anosFi/anosFi.html"><span>CADASTRO DE
                                        RESERVA</span></a>


                            </div>
                        </div>
                    </div>

                    <!--escola 5-->

                    <div class="list__dois">
                        <input class="list__input__dois" id="faq-ai__seis" type="checkbox">
                        <div class="list__trigger">
                            <label for="faq-ai__seis">
                                <h2 class="faq-title__dois">escola 5</h2>
                            </label>

                            <div class="conteudo__dois">

                                <a class="btn" id="rem_inter_inf" href="#abrirModal1"><span>REMANEJAMENTO
                                        INTERNO</span></a>

                                <div id="abrirModal1" class="modal">

                                    <div class="box">

                                        <form action="" id="frm" class="frm">
                                            <a href="#fechar" title="Fechar" id="fechar">x</a>

                                            <fieldset>

                                                <legend>REMANEJAMENTO INTERNO</legend>
                                                <br>

                                                <div class="inputBox">

                                                    <label for="listInf" class="labelInput">Instituição de
                                                        Ensino</label><br>
                                                    <select id="listInf" name="listRemIntInf" required>
                                                        <option class="listInf__opt" value="selecionar">Selecione a
                                                            Instituição
                                                        </option>
                                                        <option value="instituicao1">Instituição 1</option>
                                                        <option value="instituicao2">Instituição 2</option>
                                                        <option value="instituica3">Instituição 3</option>

                                                    </select>

                                                </div>

                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="nome" id="nome" class=inputUser required>
                                                    <label for="nome" class="labelInput">Nome completo do
                                                        estudante</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <label for="data_nascimento">Data de Nascimento:</label>
                                                    <input type="date" name="data_nascimento" id="data_nascimento"
                                                        required>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <input type="text" name="naturalidade" id="natural" class=inputUser
                                                        required>
                                                    <label for="natural" class="labelInput">Naturalidade</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Gênero:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="genero" id="masculino"
                                                            value="masculino" required>
                                                        <label class="inputBox__radio"
                                                            for="masculino">Masculino</label><br>
                                                        <input type="radio" name="genero" id="feminino" value="feminino"
                                                            required>
                                                        <label class="inputBox__radio" for="feminino">Feminino</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Cor/Raça:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="cor" id="cor__branca" value="branca"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__branca">Branca</label><br>
                                                        <input type="radio" name="cor" id="cor__parda" value="parda"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__parda">Parda</label><br>
                                                        <input type="radio" name="cor" id="cor__indigena"
                                                            value="indigena" required>
                                                        <label class="inputBox__radio"
                                                            for="cor__indigena">Índigena</label><br>
                                                        <input type="radio" name="cor" id="cor__preta" value="preta"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__preta">Preta</label><br>
                                                        <input type="radio" name="cor" id="cor__amarela" value="amarela"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__amarela">Amarela</label><br>
                                                        <input type="radio" name="cor" id="cor__ndeclarada"
                                                            value="naoDeclarada" required>
                                                        <label class="inputBox__radio" for="cor__ndeclarada">Não
                                                            declarada</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>É aluno público alvo da Educação Especial?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="ee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="ee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Frequenta sala de recurso (AEE)?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="aee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="aee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Faz uso de medicamento contínuo?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="medicamento" id="me__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="me__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="me__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="me__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Responsável Legal:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="responsavel" id="rl__pai" value="pai"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__pai">Pai</label><br>
                                                        <input type="radio" name="responsavel" id="rl__mae" value="mae"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__mae">Mãe</label><br>
                                                        <input type="radio" name="responsavel" id="rl__responsavel"
                                                            value="responsavel_legal" required>
                                                        <label class="inputBox__radio" for="rl__responsavel">Responsável
                                                            Legal</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="responsavel" id="responsavel__legal"
                                                        class=inputUser required>
                                                    <label for="responsavel__legal" class="labelInput">Nome do
                                                        responsável
                                                        legal</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="tel" name="telefone" id="telefone" class=inputUser
                                                        required>
                                                    <label for="telefone" class="labelInput">Número do telefone</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="email" id="email" class=inputUser required>
                                                    <label for="email" class="labelInput">Email</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="cep" id="cep" class=inputUser required>
                                                    <label for="cep" class="labelInput">Cep</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="municipio" id="municipio" class=inputUser
                                                        required>
                                                    <label for="municipio" class="labelInput">Município</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="endereco" id="endereco" class=inputUser
                                                        required>
                                                    <label for="endereco" class="labelInput">Endereço</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Localização</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="localizacao" id="localizacao__urbana"
                                                            value="urbana" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__urbana">Urbana</label>
                                                        <input type="radio" name="localizacao" id="localizacao__rural"
                                                            value="rural" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__rural">Rural</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Necessita de transporte escolar?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="transporte" id="te__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="te__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="te__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="te__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="edp" id="edp" class=inputUser required>
                                                    <label for="edp" class="labelInput">Número do Código da EDP (Talão
                                                        de
                                                        Energia)</label>
                                                </div>
                                                <br><br>

                                                <input type="submit" class="submit" name="submit" id="submit"
                                                    value="Enviar">

                                            </fieldset>

                                        </form>

                                    </div>

                                </div>

                                <a class="btn" id="rem_rede_inf" href="./anosIn/anosIn.html"><span>REMANEJAMENTO EM
                                        REDE</span></a>

                                <a class="btn" id="cad_res_inf" href="./anosFi/anosFi.html"><span>CADASTRO DE
                                        RESERVA</span></a>


                            </div>
                        </div>
                    </div>

                    <!--escola 6-->

                    <div class="list__dois">
                        <input class="list__input__dois" id="faq-ai__sete" type="checkbox">
                        <div class="list__trigger">
                            <label for="faq-ai__sete">
                                <h2 class="faq-title__dois">escola 6</h2>
                            </label>

                            <div class="conteudo__dois">

                                <a class="btn" id="rem_inter_inf" href="#abrirModal1"><span>REMANEJAMENTO
                                        INTERNO</span></a>

                                <div id="abrirModal1" class="modal">

                                    <div class="box">

                                        <form action="" id="frm" class="frm">
                                            <a href="#fechar" title="Fechar" id="fechar">x</a>

                                            <fieldset>

                                                <legend>REMANEJAMENTO INTERNO</legend>
                                                <br>



                                                <div class="inputBox">
                                                    <input type="text" name="nome" id="nome" class=inputUser required>
                                                    <label for="nome" class="labelInput">Nome completo do
                                                        estudante</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <label for="data_nascimento">Data de Nascimento:</label>
                                                    <input type="date" name="data_nascimento" id="data_nascimento"
                                                        required>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <input type="text" name="naturalidade" id="natural" class=inputUser
                                                        required>
                                                    <label for="natural" class="labelInput">Naturalidade</label>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Gênero:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="genero" id="masculino"
                                                            value="masculino" required>
                                                        <label class="inputBox__radio"
                                                            for="masculino">Masculino</label><br>
                                                        <input type="radio" name="genero" id="feminino" value="feminino"
                                                            required>
                                                        <label class="inputBox__radio" for="feminino">Feminino</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Cor/Raça:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="cor" id="cor__branca" value="branca"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__branca">Branca</label><br>
                                                        <input type="radio" name="cor" id="cor__parda" value="parda"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__parda">Parda</label><br>
                                                        <input type="radio" name="cor" id="cor__indigena"
                                                            value="indigena" required>
                                                        <label class="inputBox__radio"
                                                            for="cor__indigena">Índigena</label><br>
                                                        <input type="radio" name="cor" id="cor__preta" value="preta"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__preta">Preta</label><br>
                                                        <input type="radio" name="cor" id="cor__amarela" value="amarela"
                                                            required>
                                                        <label class="inputBox__radio"
                                                            for="cor__amarela">Amarela</label><br>
                                                        <input type="radio" name="cor" id="cor__ndeclarada"
                                                            value="naoDeclarada" required>
                                                        <label class="inputBox__radio" for="cor__ndeclarada">Não
                                                            declarada</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>É aluno público alvo da Educação Especial?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="ee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="ee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="ee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Frequenta sala de recurso (AEE)?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="especial" id="aee__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__sim">Sim</label>
                                                        <input type="radio" name="especial" id="aee__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="aee__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Faz uso de medicamento contínuo?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="medicamento" id="me__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="me__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="me__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="me__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="inputBox">
                                                    <p>Responsável Legal:</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="responsavel" id="rl__pai" value="pai"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__pai">Pai</label><br>
                                                        <input type="radio" name="responsavel" id="rl__mae" value="mae"
                                                            required>
                                                        <label class="inputBox__radio" for="rl__mae">Mãe</label><br>
                                                        <input type="radio" name="responsavel" id="rl__responsavel"
                                                            value="responsavel_legal" required>
                                                        <label class="inputBox__radio" for="rl__responsavel">Responsável
                                                            Legal</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="responsavel" id="responsavel__legal"
                                                        class=inputUser required>
                                                    <label for="responsavel__legal" class="labelInput">Nome do
                                                        responsável
                                                        legal</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="tel" name="telefone" id="telefone" class=inputUser
                                                        required>
                                                    <label for="telefone" class="labelInput">Número do telefone</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="email" id="email" class=inputUser required>
                                                    <label for="email" class="labelInput">Email</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="cep" id="cep" class=inputUser required>
                                                    <label for="cep" class="labelInput">Cep</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="municipio" id="municipio" class=inputUser
                                                        required>
                                                    <label for="municipio" class="labelInput">Município</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="endereco" id="endereco" class=inputUser
                                                        required>
                                                    <label for="endereco" class="labelInput">Endereço</label>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Localização</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="localizacao" id="localizacao__urbana"
                                                            value="urbana" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__urbana">Urbana</label>
                                                        <input type="radio" name="localizacao" id="localizacao__rural"
                                                            value="rural" required>
                                                        <label class="inputBox__radio"
                                                            for="localizacao__rural">Rural</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <p>Necessita de transporte escolar?</p>
                                                    <div class="inputBox__radio">
                                                        <input type="radio" name="transporte" id="te__sim" value="sim"
                                                            required>
                                                        <label class="inputBox__radio" for="te__sim">Sim</label>
                                                        <input type="radio" name="medicamento" id="te__nao" value="nao"
                                                            required>
                                                        <label class="inputBox__radio" for="te__nao">Não</label>
                                                    </div>
                                                </div>
                                                <br><br>

                                                <div class="inputBox">
                                                    <input type="text" name="edp" id="edp" class=inputUser required>
                                                    <label for="edp" class="labelInput">Número do Código da EDP (Talão
                                                        de
                                                        Energia)</label>
                                                </div>
                                                <br><br>

                                                <input type="submit" class="submit" name="submit" id="submit"
                                                    value="Enviar">

                                            </fieldset>

                                        </form>

                                    </div>

                                </div>

                                <a class="btn" id="rem_rede_inf" href="./anosIn/anosIn.html"><span>REMANEJAMENTO EM
                                        REDE</span></a>

                                <a class="btn" id="cad_res_inf" href="./anosFi/anosFi.html"><span>CADASTRO DE
                                        RESERVA</span></a>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--anos iniciais-->
        <div class="list">

            <input class="list__input" id="faq-edu" type="checkbox">

            <div class="list__trigger">
                <label for="faq-edu">
                    <h2 class="faq-title"><b>E.F. - Anos Iniciais</b></h2>
                </label>

                <div class="conteudo">
                    <a class="btn" id="rem_inter_inf" href="#abrirModal1"><span>REMANEJAMENTO INTERNO</span></a>

                    <div id="abrirModal1" class="modal">
                        <!--<a href="#fechar" title="Fechar" id="fechar">x</a>-->

                        <!--<p> Você pode fazer qualquer coisa aqui</p>-->

                        <div class="box">

                            <form action="" id="frm" class="frm">
                                <a href="#fechar" title="Fechar" id="fechar">x</a>

                                <fieldset>

                                    <legend>REMANEJAMENTO INTERNO</legend>
                                    <br>

                                    <div class="inputBox">

                                        <label for="listInf" class="labelInput">Instituição de Ensino</label><br>
                                        <select id="listInf" name="listRemIntInf" required>
                                            <option class="listInf__opt" value="selecionar">Selecione a Instituição
                                            </option>
                                            <option value="instituicao1">Instituição 1</option>
                                            <option value="instituicao2">Instituição 2</option>
                                            <option value="instituica3">Instituição 3</option>

                                        </select>

                                    </div>

                                    <br><br>

                                    <div class="inputBox">
                                        <input type="text" name="nome" id="nome" class=inputUser required>
                                        <label for="nome" class="labelInput">Nome completo do estudante</label>
                                    </div>
                                    <br>

                                    <div class="inputBox">
                                        <label for="data_nascimento">Data de Nascimento:</label>
                                        <input type="date" name="data_nascimento" id="data_nascimento" required>
                                    </div>
                                    <br>

                                    <div class="inputBox">
                                        <input type="text" name="naturalidade" id="natural" class=inputUser required>
                                        <label for="natural" class="labelInput">Naturalidade</label>
                                    </div>
                                    <br>

                                    <div class="inputBox">
                                        <p>Gênero:</p>
                                        <div class="inputBox__radio">
                                            <input type="radio" name="genero" id="masculino" value="masculino" required>
                                            <label class="inputBox__radio" for="masculino">Masculino</label><br>
                                            <input type="radio" name="genero" id="feminino" value="feminino" required>
                                            <label class="inputBox__radio" for="feminino">Feminino</label>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="inputBox">
                                        <p>Cor/Raça:</p>
                                        <div class="inputBox__radio">
                                            <input type="radio" name="cor" id="cor__branca" value="branca" required>
                                            <label class="inputBox__radio" for="cor__branca">Branca</label><br>
                                            <input type="radio" name="cor" id="cor__parda" value="parda" required>
                                            <label class="inputBox__radio" for="cor__parda">Parda</label><br>
                                            <input type="radio" name="cor" id="cor__indigena" value="indigena" required>
                                            <label class="inputBox__radio" for="cor__indigena">Índigena</label><br>
                                            <input type="radio" name="cor" id="cor__preta" value="preta" required>
                                            <label class="inputBox__radio" for="cor__preta">Preta</label><br>
                                            <input type="radio" name="cor" id="cor__amarela" value="amarela" required>
                                            <label class="inputBox__radio" for="cor__amarela">Amarela</label><br>
                                            <input type="radio" name="cor" id="cor__ndeclarada" value="naoDeclarada"
                                                required>
                                            <label class="inputBox__radio" for="cor__ndeclarada">Não declarada</label>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="inputBox">
                                        <p>É aluno público alvo da Educação Especial?</p>
                                        <div class="inputBox__radio">
                                            <input type="radio" name="especial" id="ee__sim" value="sim" required>
                                            <label class="inputBox__radio" for="ee__sim">Sim</label>
                                            <input type="radio" name="especial" id="ee__nao" value="nao" required>
                                            <label class="inputBox__radio" for="ee__nao">Não</label>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="inputBox">
                                        <p>Frequenta sala de recurso (AEE)?</p>
                                        <div class="inputBox__radio">
                                            <input type="radio" name="especial" id="aee__sim" value="sim" required>
                                            <label class="inputBox__radio" for="aee__sim">Sim</label>
                                            <input type="radio" name="especial" id="aee__nao" value="nao" required>
                                            <label class="inputBox__radio" for="aee__nao">Não</label>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="inputBox">
                                        <p>Faz uso de medicamento contínuo?</p>
                                        <div class="inputBox__radio">
                                            <input type="radio" name="medicamento" id="me__sim" value="sim" required>
                                            <label class="inputBox__radio" for="me__sim">Sim</label>
                                            <input type="radio" name="medicamento" id="me__nao" value="nao" required>
                                            <label class="inputBox__radio" for="me__nao">Não</label>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="inputBox">
                                        <p>Responsável Legal:</p>
                                        <div class="inputBox__radio">
                                            <input type="radio" name="responsavel" id="rl__pai" value="pai" required>
                                            <label class="inputBox__radio" for="rl__pai">Pai</label><br>
                                            <input type="radio" name="responsavel" id="rl__mae" value="mae" required>
                                            <label class="inputBox__radio" for="rl__mae">Mãe</label><br>
                                            <input type="radio" name="responsavel" id="rl__responsavel"
                                                value="responsavel_legal" required>
                                            <label class="inputBox__radio" for="rl__responsavel">Responsável
                                                Legal</label>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="inputBox">
                                        <input type="text" name="responsavel" id="responsavel__legal" class=inputUser
                                            required>
                                        <label for="responsavel__legal" class="labelInput">Nome do responsável
                                            legal</label>
                                    </div>
                                    <br><br>

                                    <div class="inputBox">
                                        <input type="tel" name="telefone" id="telefone" class=inputUser required>
                                        <label for="telefone" class="labelInput">Número do telefone</label>
                                    </div>
                                    <br><br>

                                    <div class="inputBox">
                                        <input type="text" name="email" id="email" class=inputUser required>
                                        <label for="email" class="labelInput">Email</label>
                                    </div>
                                    <br><br>

                                    <div class="inputBox">
                                        <input type="text" name="cep" id="cep" class=inputUser required>
                                        <label for="cep" class="labelInput">Cep</label>
                                    </div>
                                    <br><br>

                                    <div class="inputBox">
                                        <input type="text" name="municipio" id="municipio" class=inputUser required>
                                        <label for="municipio" class="labelInput">Município</label>
                                    </div>
                                    <br><br>

                                    <div class="inputBox">
                                        <input type="text" name="endereco" id="endereco" class=inputUser required>
                                        <label for="endereco" class="labelInput">Endereço</label>
                                    </div>
                                    <br><br>

                                    <div class="inputBox">
                                        <p>Localização</p>
                                        <div class="inputBox__radio">
                                            <input type="radio" name="localizacao" id="localizacao__urbana"
                                                value="urbana" required>
                                            <label class="inputBox__radio" for="localizacao__urbana">Urbana</label>
                                            <input type="radio" name="localizacao" id="localizacao__rural" value="rural"
                                                required>
                                            <label class="inputBox__radio" for="localizacao__rural">Rural</label>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="inputBox">
                                        <p>Necessita de transporte escolar?</p>
                                        <div class="inputBox__radio">
                                            <input type="radio" name="transporte" id="te__sim" value="sim" required>
                                            <label class="inputBox__radio" for="te__sim">Sim</label>
                                            <input type="radio" name="medicamento" id="te__nao" value="nao" required>
                                            <label class="inputBox__radio" for="te__nao">Não</label>
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="inputBox">
                                        <input type="text" name="edp" id="edp" class=inputUser required>
                                        <label for="edp" class="labelInput">Número do Código da EDP (Talão de
                                            Energia)</label>
                                    </div>
                                    <br><br>

                                    <input type="submit" class="submit" name="submit" id="submit" value="Enviar">

                                </fieldset>

                            </form>

                        </div>

                    </div>

                    <a class="btn" id="rem_rede_inf" href="./anosIn/anosIn.html"><span>REMANEJAMENTO EM REDE</span></a>

                    <a class="btn" id="cad_res_inf" href="./anosFi/anosFi.html"><span>CADASTRO DE RESERVA</span></a>

                </div>

            </div>
        </div>
        <!--Anos Finais-->
        <div class="list">
            <input class="list__input" id="faq-ai" type="checkbox">
            <div class="list__trigger">
                <label for="faq-ai">
                    <h2 class="faq-title"><b>E.F. - Anos Finais</b></h2>
                </label>

                <div class="conteudo">
                    <input type="radio" id="nomeEscolafund1_1" name="instituicao" value="nomeEscolafund1_1">
                    <label class="itens" for="nomeEscolafund1_1">Nome da Escola 1</label><br>

                    <input type="radio" id="nomeEscolafund1_2" name="instituicao" value="nomeEscolafund1_2">
                    <label class="itens" for="nomeEscolafund1_2">Nome da Escola 2</label><br>

                    <input type="radio" id="nomeEscolafund1_3" name="instituicao" value="nomeEscolafund1_3">
                    <label class="itens" for="nomeEscolafund1_3">Nome da Escola 3</label><br>

                    <input type="radio" id="nomeEscolafund1_4" name="instituicao" value="nomeEscolafund1_4">
                    <label class="itens" for="nomeEscolafund1_4">Nome da Escola 4</label><br>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="script.js"></script>
</body>

</html>