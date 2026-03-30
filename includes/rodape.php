<?php
/**
 * --------------------------------------------------------------
 * ARQUIVO     : includes/rodape.php
 * Disciplina  : Desenvolvimento Web II (2026-DWII)
 * Aula        : 04 – PHP para Web: Formulários, GET e POST
 * Autor       : Matheus Flizicoski Beraldi
 * Conceitos   : Modularização, date(), isset(), fallback defensivo
 * --------------------------------------------------------------
 */


$autor = isset($nome) ? htmlspecialchars($nome) : "Portfólio";
?>


<footer>

    <?php echo $autor; ?>
    &copy; <?php echo date("Y"); ?>
    | Desenvolvido com PHP
    | IFPR – Ponta Grossa

</footer>