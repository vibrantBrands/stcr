<?php require('elements/header.php'); ?>

  <?php
       $page = Page::getCurrentPage();
        ?>
        <section class="hero">
       <?php
            if($c->getAttribute('hero_text_1')):
              $hero_text_1 = $c->getAttribute('hero_text_1');
        ?>
       <?php endif; ?>
        <h1><?php echo $hero_text_1 ?></h1>

</section>
<div class="page-content">
  <div class="container products-wrapper">
    <?php
          $a = new Area('Content');
          $a->display($c);
      ?>
  </div>
</div>
<a href="/buyers-guide" class="btn red request-btn">Request a Buyer's Guide</a>



<?php require('elements/footer.php'); ?>
