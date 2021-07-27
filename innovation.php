<?php require('elements/header.php'); ?>

<div class="innovation">
  <section class="hero">
    <h1>Innovation<br />
      <span>of Retail</span></h1>
  </section>
  <section class="self-checkout">
    	<div class="heading-image">
    		<img src="<?php echo $this->getThemePath(); ?>/img/innovation/self-checkout.png" alt="Self Checkout" data-aos="zoom-in">
    	</div>
    	<div class="kiosks">
     		<div class="container">
          <img src="<?php echo $this->getThemePath(); ?>/img/kiosks.png" alt="Kiosks" class="kiosks-pic" data-aos="zoom-in">
     		<img src="<?php echo $this->getThemePath(); ?>/img/complete-retail-solutions.png" alt="Complete Retail Solutions" class="complete">
     		</div>
  		</div>
  </section>
 
  <section class="registers">
    <div class="container">
      <div class="inner">
            <?php
              $a = new Area('Self Checkout Specs');
              $a->display($c);
          ?>
      </div>
    <div class="scroll-wrapper" data-aos="flip-up">
      <div class="scroller">
        <img src="<?php echo $this->getThemePath(); ?>/img/innovation/TC_300.png" alt="Register 1"> 
        <img src="<?php echo $this->getThemePath(); ?>/img/innovation/TC_700.png" alt="Register 2"> 
        <img src="<?php echo $this->getThemePath(); ?>/img/innovation/allinone.png" alt="All in One"> 
      </div>
    </div>
  </div>
  </section>
  <div class="container">
     <div class="inner">
      <h3>Registers</h3>
       <?php
            $a = new Area('Registers Accordion');
            $a->display($c);
        ?>
    </div>
  </div>
    <section class="peripheral two-column">
      <div class="text">
        <img src="<?php echo $this->getThemePath(); ?>/img/innovation/peripheral-solutions.png" alt="Peripheral Solutions" data-aos="zoom-in">
      <div class="inner">
        <?php
            $a = new Area('Solutions Tech Accordion');
            $a->display($c);
        ?>
      </div>
    </div>
    <div class="picture">
      <div class="scroll-wrapper" data-aos="flip-up">
        <div class="scroller">
          <img src="<?php echo $this->getThemePath(); ?>/img/innovation/memor_carousel.png" alt="Phone">  
          <img src="<?php echo $this->getThemePath(); ?>/img/innovation/scanner_carousel.png" alt="Scanner" data-aos="flip-up"> 
        </div>
      </div>
           
    </div>
  </section>
  <section class="software-solution">
    <img src="<?php echo $this->getThemePath(); ?>/img/innovation/software-solutions.png" alt="Software Solutions" data-aos="zoom-in" class="software-header">

    <div class="background-text">
      <div class="reliability" data-aos="zoom-in">Reliability</div>
      <div class="trusted" data-aos="zoom-in">Trusted<br />Advisor</div>
      <div class="support" data-aos="zoom-in">24/7<br />Support</div>
    </div>

    <div class="inner black">
      <img src="<?php echo $this->getThemePath(); ?>/img/innovation/software-mockup.png" alt="Store Front" data-aos="flip-up" class="storefront">
      <?php
              $a = new Area('Software Text');
              $a->display($c);
          ?>

      <div class="two-column accordion">
        <div>
           <?php
              $a = new Area('Software Specs 1');
              $a->display($c);
          ?>
        </div>
        <div>
          <?php
              $a = new Area('Software Specs 2');
              $a->display($c);
          ?>
        </div>
      </div>
      <div class="two-column accordion">
        <div>
          <?php
              $a = new Area('Ace Retail Solutions Text');
              $a->display($c);
          ?>
        </div>
        <div>
          <?php
              $a = new Area('TCSSKY Text');
              $a->display($c);
          ?>
        </div>
      </div>
      <div class="two-column accordion">
        <div>
          <?php
              $a = new Area('Retail Solutions Specs');
              $a->display($c);
          ?>
        </div>
        <div>
          <?php
              $a = new Area('TCSSKY Specs');
              $a->display($c);
          ?>
        </div>
      </div>
    </div>
  </section>
  <section class="badger two-column">
    <div class="picture">
      <img src="<?php echo $this->getThemePath(); ?>/img/innovation/badger-product.png" alt="Badger Product" data-aos="fade-right">
    </div>
    <div class="text">
      <img src="<?php echo $this->getThemePath(); ?>/img/innovation/badger.png" alt="Badger" data-aos="zoom-in">
      <div class="inner">
        <?php
            $a = new Area('Badger Text');
            $a->display($c);
        ?>
        <?php
              $a = new Area('Badger Specs');
              $a->display($c);
          ?>
      </div>
    </div>
  </section>
  <section class="label two-column">
    <div class="text">
      <img src="<?php echo $this->getThemePath(); ?>/img/innovation/electronic.png" alt="Electronic Shelf Label" data-aos="zoom-in">
       <div class="inner">
         <?php
            $a = new Area('Electronic Shelf Label Text');
            $a->display($c);
        ?>
         <?php
              $a = new Area('Electronic Shelf Label Specs');
              $a->display($c);
          ?>
       </div>
    </div>
    <div class="picture">
      <img src="<?php echo $this->getThemePath(); ?>/img/innovation/e-label.png" alt="E-Label" data-aos="flip-left">
    </div>
  </section>
  
</div>


<?php require('elements/footer.php'); ?>
