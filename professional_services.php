<?php require('elements/header.php'); ?>

<div class="professional-services">
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
  <section class="gray-bg">
    <div class="container narrow" data-aos="fade-up">
      <?php
            $a = new Area('Professional Services Text');
            $a->display($c);
        ?>
    </div>
  </section>
  <section class="process" data-aos="fade-up">
    <div class="container narrow">
      <h2>The Process</h2>
      <?php
            $a = new Area('Process Accordion');
            $a->display($c);
        ?>
    </div>
  </section>
  <section class="experience-value" data-aos="fade-up">
    <img src="<?php echo $this->getThemePath(); ?>/img/value-experience.png" alt="Facility" data-aos="fade-right">
    <div class="container narrow">
       <?php
            $a = new Area('Summary Text');
            $a->display($c);
        ?>
    </div>
  </section>
  <section class="support" data-aos="fade-up">
    <div class="container narrow" data-aos="zoom-in">
      <?php
            $a = new Area('Support Text');
            $a->display($c);
        ?>
      </div>
      </section>
  <a href="/buyers-guide" class="btn red request-btn">Request a Buyer's Guide</a>
</div>

<?php require('elements/footer.php'); ?>
