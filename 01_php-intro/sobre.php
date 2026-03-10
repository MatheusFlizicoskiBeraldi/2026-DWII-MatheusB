<!-- 01_php-intro/sobre.php -->
<?php

$nome        = "Matheus Flizicoski Beraldi";
$pagina_atual = "sobre";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre – <?php echo $nome; ?></title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; background: #f3f4f6;">

<?php include 'includes/cabecalho.php'; ?>

    <div style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
        <h1 style="color: #9d3b97;">🦈 Sobre mim</h1>
        <p>Olá! Sou <strong><?php echo $nome; ?></strong>, estudante de
        Técnico em Informática no IFPR de Ponta Grossa.</p>
        <p> Eu gosto muito de passar o meu tempo estudando sobre diversos assuntos, mas principalmente sobre a vida num geral, indo desde bactérias unicelulares até os mais diversos tipos de trilobitas vivos há mais de 500 milhões de anos atrás. Particularmente o meu animal preferido é o Spinosaurus Aegyptacus, o que me fascina o fato de existir um exemplar muito parecido com o gigante egípcio aqui no Brasil, descoberto no Nordeste, o Oxalaia Quilombensis. Pretendo me tornar um pesquisador, professor e trazer a paleontologia para o Brasil.</p>

        <a href="index.php"
        style="color: #3b579d; font-weight: bold;">← Voltar ao início</a>
    </div>

<?php include 'includes/rodape.php'; ?>

</body>
</html>