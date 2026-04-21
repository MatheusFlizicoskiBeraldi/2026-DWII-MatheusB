<?php
/**
 * --------------------------------------------------------------
 * ARQUIVO     : includes/nav.php
 * Disciplina  : Desenvolvimento Web II (2026-DWII)
 * Aula        : 04 – PHP para Web: Formulários, GET e POST
 * Autor       : Matheus Flizicoski Beraldi
 * Conceitos   : Menu dinâmico, operador ternário, $caminho_raiz
 * --------------------------------------------------------------
 *
 * Mesmo padrão do nav.php da Aula 03, com duas melhorias:
 *   1. Links montados via $caminho_raiz → funciona de qualquer pasta
 *   2. Classe CSS "ativo" em vez de style inline → CSS externo controla
 *
 * Variáveis esperadas:
 *   $pagina_atual  – string: identifica qual item destacar no menu
 *   $caminho_raiz  – string: caminho relativo até a raiz
 */


if (!isset($pagina_atual)) $pagina_atual = "";
if (!isset($caminho_raiz)) $caminho_raiz = "./";


function menu_class($item, $atual) {
    return ($item === $atual) ? 'class="ativo"' : '';
}

$logado = isset($_SESSION['usuario']);

?>
                                                                                                                                                                                                                                                                                                   

<nav>


<a href="<?php echo $caminho_raiz; ?>index.php"
   <?php echo menu_class("inicio", $pagina_atual); ?>>
   🏠 Início
</a>

<a href="<?php echo $caminho_raiz; ?>01_php-intro/sobre.php"
   <?php echo menu_class("sobre", $pagina_atual); ?>>
   👤 Sobre
</a>

<a href="<?php echo $caminho_raiz; ?>01_php-intro/projetos.php"
   <?php echo menu_class("projetos", $pagina_atual); ?>>
   🚀 Projetos
</a>


<a href="<?php echo $caminho_raiz; ?>02_formularios/contato.php"
   <?php echo menu_class("contato", $pagina_atual); ?>>
   📬 Contato
</a>


<?php if ($logado): ?>
   <a href="<?php echo $caminho_raiz; ?>painel.php"
      <?php echo menu_class('painel', $pagina_atual); ?>> 
      Painel </a>
   <a href="<?php echo $caminho_raiz; ?>logout.php"
      <?php echo menu_class('logout', $pagina_atual); ?>> 
      Logout </a>
<?php else: ?>
   <a href="<?php echo $caminho_raiz; ?>login.php"
   <?php echo menu_class('login', $pagina_atual); ?>>
login 
</a>

<?php endif; ?>

</nav>