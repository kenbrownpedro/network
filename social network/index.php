<?php
require_once("class/pages.php");
require_once("inc/head.php");
?>
<div class="container">
    <?php  $pages->getpages(); ?>
</div>
   
<?php
require_once("inc/foot.php");
?>