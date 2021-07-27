<?php require('elements/header.php'); ?>

<?php
       $page = Page::getCurrentPage();

        if($c->getAttribute('header_bg')):
              $header_bg = $c->getAttribute('header_bg')->getVersion()->getRelativePath();
        ?>
        <?php endif; ?>
        <section class="hero" style="background:url(<?php echo $header_bg ?>) #B22336">
       <?php
            if($c->getAttribute('hero_text_1')):
              $hero_text_1 = $c->getAttribute('hero_text_1');
        ?>
       <?php endif; ?>

        <h1><?php echo $hero_text_1 ?></h1>
</section>
<div class="page-content">
	<div class="container">
		<?php
	        $a = new Area('Content');
	        $a->display($c);
	    ?>
	</div>
</div>
<a href="/buyers-guide" class="btn red request-btn">Request a Buyer's Guide</a>

<?php require('elements/footer.php'); ?>
