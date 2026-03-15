<?php
/**
 * --------------------------------------------------------------
 * ARQUIVO     : 02_formularios/contato.php (versão com validação)
 * Disciplina  : Desenvolvimento Web II (2026-DWII)
 * Aula        : 04 – PHP para Web: Formulários, GET e POST
 * Autor       : Matheus Flizicoski Beraldi
 * --------------------------------------------------------------
 */

// — VARIÁVEIS DO TEMPLATE —
$nome          = "Matheus Flizicoski Beraldi";
$pagina_atual  = "contato";
$caminho_raiz  = "../";
$titulo_pagina = "Contato";

// — ESTADO INICIAL —
$nome_visitante = '';
$mensagem       = '';
$erros          = [];

// — PROCESSAR SOMENTE SE VEIO POST —
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome_visitante = trim($_POST['nome_visitante'] ?? '');
    $mensagem       = trim($_POST['mensagem'] ?? '');

    // — VALIDAÇÕES —
    if (empty($nome_visitante)) {
        $erros[] = 'O campo Nome é obrigatório.';
    }

    if (empty($mensagem)) {
        $erros[] = 'O campo Mensagem é obrigatório.';
    } 
    elseif (strlen($mensagem) < 10) {
        $erros[] = 'A mensagem deve ter pelo menos 10 caracteres.';
    }
}
?>

<?php include '../includes/cabecalho.php'; ?>

<div class="container">

<h1 class="titulo-secao">📬 Formulário de Contato</h1>

<form class="form-container" action="contato.php" method="post">

    <label>Seu nome:</label>
    <input type="text" name="nome_visitante"
           value="<?php echo htmlspecialchars($nome_visitante); ?>">

    <label>Sua mensagem:</label>
    <textarea name="mensagem" rows="4"><?php echo htmlspecialchars($mensagem); ?></textarea>

    <button type="submit">Enviar</button>

</form>

<!-- BLOCO DE EXIBIÇÃO DE ERROS -->
<?php if (!empty($erros)): ?>
    <div class="alerta-erro">
        <h3>🚫 Corrija os erros:</h3>

        <?php foreach ($erros as $erro): ?>
            <p style="margin:4px 0;">✗ <?php echo htmlspecialchars($erro); ?></p>
        <?php endforeach; ?>

    </div>
<?php endif; ?>

<!-- EXIBIR DADOS SE NÃO HOUVER ERROS -->
<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($erros)): ?>
    <div class="alerta-sucesso" style="margin-top:20px;">
        <h3>✅ Dados recebidos!</h3>

        <p><strong>Nome:</strong>
            <?php echo htmlspecialchars($nome_visitante); ?>
        </p>

        <p><strong>Mensagem:</strong>
            <?php echo htmlspecialchars($mensagem); ?>
        </p>
    </div>
<?php endif; ?>

</div>

<?php include '../includes/rodape.php'; ?>