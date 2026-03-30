<?php
/**
 * --------------------------------------------------------------
 * ARQUIVO     : includes/cabecalho.php
 * Disciplina  : Desenvolvimento Web II (2026-DWII)
 * Aula        : 04 – PHP para Web: Formulários, GET e POST
 * Autor       : Matheus Flizicoski Beraldi
 * Conceitos   : Modularização, include, isset(), caminho dinâmico
 * --------------------------------------------------------------
 *
 * Responsabilidade: gera <meta>, <title>, link para o CSS
 * externo e inclui o nav.php.
 *
 * Variáveis esperadas na página que inclui este arquivo:
 *   $titulo_pagina – string (opcional): texto da aba do navegador
 *   $caminho_raiz  – string: caminho relativo até a raiz do projeto
 *                    Ex: '../' para páginas em 01_php-intro/ ou
 *                    02_formularios/ (um nível acima)
 */

 if (!isset($titulo_pagina)) $titulo_pagina = "Portfólio DWII";
 if (!isset($caminho_raiz))  $caminho_raiz  = "../"; 
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($titulo_pagina); ?></title>

<link rel="stylesheet" href="<?php echo $caminho_raiz; ?>includes/style.css">

<?php
include __DIR__ . '/nav.php';
?>