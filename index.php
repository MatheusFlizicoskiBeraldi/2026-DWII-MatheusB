<?php

/**
 * ==============================================================
 * ARQUIVO   : index.php  (raiz do repositório 2026-DWII)
 * Disciplina : Desenvolvimento Web II (2026-DWII)
 * Aula       : 04 — PHP para Web: Formulários, GET e POST
 * Autor      : Matheus Flizicoski Beraldi
 * Conceitos  : Ponto de entrada, array associativo, foreach,
 *              date(), htmlspecialchars()
 * ==============================================================
 *
 * Hub de navegação — exibido quando o servidor sobe na raiz:
 *   php -S localhost:8000
 *
 * Por estar fora das subpastas, este arquivo NÃO usa os
 * includes compartilhados (cabecalho.php, nav.php, rodape.php).
 * Cabeçalho, nav e rodapé são definidos inline aqui.
 */
$pagina_atual = "inicio";

$nome = "Matheus Flizicoski Beraldi";
$subtitulo = "Repositório 2026 — Desenvolvimento Web II";

$aulas = [
    [
        "numero"    => "00",
        "nome"      => "Apresentação Pessoal",
        "descricao" => "Página estática com HTML e CSS — foto de perfil e layout responsivo.",
        "link"      => "00_apresentacao/index.html",
        "icone"     => "🦖",
        "cor"       => "#5f08cb",
        "conceitos" => "HTML semântico, CSS Flexbox, responsividade",
    ],
    [
        "numero"    => "03",
        "nome"      => "Portfólio Dinâmico com PHP",
        "descricao" => "Mini-site de portfólio com variáveis, includes e menu dinâmico.",
        "link"      => "01_php-intro/sobre.php",
        "icone"     => "🐘",
        "cor"       => "#5f08cb",
        "conceitos" => "Variáveis, echo, include, foreach, operador ternário",
    ],
    [
        "numero"    => "04",
        "nome"      => "Formulário de Contato",
        "descricao" => "Formulário com validação no servidor, proteção XSS e padrão PRG.",
        "link"      => "02_formularios/contato.php",
        "icone"     => "🦈",
        "cor"       => "#5f08cb",
        "conceitos" => "$_POST, validação, htmlspecialchars(), header() + exit",
    ],
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo htmlspecialchars($subtitulo); ?></title>

<link rel="stylesheet" href="includes/style.css">

<style>

body{
background:#000000;
color:#ffffff;
}

.secao{
color:#5f08cb;
}

.badge{
background:#5f08cb;
color:#ffffff;
}

.conceitos{
color:#ffffff;
opacity:0.85;
}

.btn{
color:#ffffff;
}

.card-aula{
background:#111111;
}

</style>

</head>
<body>

<?php include '../includes/cabecalho.php'; ?>

<div class="container">

<div class="box-info" style="margin-top:0; background:#111111; border-left:4px solid #5f08cb;">

<h3 style="color:#5f08cb;"> Como executar este repositório</h3>

<p style="font-size:14px;color:#ffffff;">
Suba o servidor PHP na <strong style="color:#5f08cb;">raiz</strong> para acessar todas as aulas:
</p>

<div style="background:#000000;color:#5f08cb;padding:10px 15px;
border-radius:6px;margin-top:10px;font-family:'Courier New',monospace;
font-size:13px;line-height:1.8;">

cd ~/workspaces/2026-DWII<br>
php -S localhost:8000

</div>

<p style="font-size:13px;color:#ffffff;margin-top:8px;">
Esta página é o hub de navegação. Use os botões abaixo para acessar cada projeto.
</p>

</div>

<h2 class="secao">📂 Projetos por Aula</h2>

<?php foreach ($aulas as $aula): ?>

<div class="card-aula"
style="border-left-color: <?php echo $aula['cor']; ?>;">

<div class="icone"><?php echo $aula['icone']; ?></div>

<div class="conteudo">

<span class="badge">
Aula <?php echo htmlspecialchars($aula['numero']); ?>
</span>

<h3 style="color: <?php echo $aula['cor']; ?>;">
<?php echo htmlspecialchars($aula['nome']); ?>
</h3>

<p style="color:#ffffff;">
<?php echo htmlspecialchars($aula['descricao']); ?>
</p>

<span class="conceitos">
🔑 <?php echo htmlspecialchars($aula['conceitos']); ?>
</span>
<br>

<a href="<?php echo htmlspecialchars($aula['link']); ?>"
class="btn"
style="background: <?php echo $aula['cor']; ?>;">
Abrir →
</a>

</div>

</div>

<?php endforeach; ?>

<p style="text-align:right;font-size:13px;color:#5f08cb;margin-top:8px;">
⏱️ Gerado em:
<?php echo date("d/m/Y \à\s H:i:s"); ?>
</p>

</div>

<?php include '../includes/rodape.php'; ?>

</body>
</html>