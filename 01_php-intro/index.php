<!-- 01_php-intro/index-php -->
<!--
    Disciplina: Desenvolvimento Web 2
    Aula: 03 - Arquitetura Web e Introdução ao PHP
    Autor: MATHEUS FLIZICOSKI BERALDI
    Data: 09/03/2009
    Repositório: https://github.com/MatheusFlizicoskiBeraldi/2026-DWII-MatheusB
-->





<?php
$nome = "Matheus Flizicoski Beraldi";
$curso = "Técnico em Informática - IFPR";
$ano = "2026";
?>


<!DOCTYPE html>

<?php

$nome        = "[SEU NOME]";
$profissao   = "Estudante de Tecnologia";
$curso       = "Técnico em Informática – IFPR";
$pagina_atual = "inicio";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio – <?php echo $nome; ?></title>

<style>
    body { font-family: Arial, sans-serif; margin: 0; background: #f3f4f6; }
    nav { background: #b91900; padding: 15px 30px; }
    nav a { color: white; text-decoration: none; margin-right: 20px; font-weight: bold; }
    nav a:hover { text-decoration: underline; }
    .hero { background: linear-gradient(135deg, #046f28, #2a4080); color: white;
        text-align: center; padding: 60px 20px; }
    .hero h1 { font-size: 2.5em; margin-bottom: 10px; }
    .hero p { font-size: 1.2em; opacity: 0.9; }
    .container { max-width: 800px; margin: 40px auto; padding: 0 20px; }
    footer { background: #010000; color: #6b7280; text-align: center;
        padding: 20px; margin-top: 60px; font-size: 14px; }

</style>
<body>
 <?php include 'includes/cabecalho.php'; ?>


    <div class = "hero">
        <h1><?php echo $nome; ?></h1>
        <p><?php echo $profissao; ?> | <?php echo $curso; ?></p>
</div>

    <div class="container">
        <h2>Bem-vindo ao meu portfolio</h2>
        <p>Esta página foi gerada pelo PHP em:
            <strong><?php echo date("d/m/Y \à\s H:i:s"); ?></strong></p>
</div>

<?php include 'includes/rodape.php'; ?>

</body>
</html>