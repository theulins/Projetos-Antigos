<?php
$dados = array(
    "nome" => $nome = $_POST['nome'],
    "competencias" => $competencias = $_POST['competencias'],
    "telefone" => $telefone = $_POST['telefone'],
    "email" => $email = $_POST['email'],
    "cep" => $cep = $_POST['cep'],
    "rua" => $rua = $_POST['rua'],
    "numero" => $numero = $_POST['numero'],
    "cidade" => $cidade = $_POST['cidade'],
    "experiencias" => $experiencias = $_POST['experiencias'],
    "experienciasc" => $experienciasc = $_POST['experienciasc'],
    "formacao" => $formacao = $_POST['formacao'],
    "formacaoc" => $formacaoc = $_POST['formacaoc'],
    "idioma" => $idioma = $_POST['idioma']
);

require_once("modelo/modelo.php");
