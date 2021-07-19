<?php 
require_once 'contatos/cadastarTelefone';

$contatos = new Contatos();

// $contatos->cadastarTelefone($);

$ddd = $_POST['ddd'];
$numero = $_POST['numero'];

echo $ddd;
echo $numero;