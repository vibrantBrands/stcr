<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header_top.php');

$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

<header class="header">
    <div class="logo-box">
      <a href="/"><img src="<?php echo $this->getThemePath(); ?>/img/stcr-logo.png" alt="STCR Logo" class="logo"></a>
      <img src="<?php echo $this->getThemePath(); ?>/img/tagline.png" alt="Tagline" class="tagline"></a>
      
    </div>
    <div class="cta-wrapper">
    	<div class="ctas">
        <a href="tel:16077570181" class="phone"><div>607.757.0181</div></a>
      		<a href="/request-demo" class="btn gray" role="button"><i class="fas fa-desktop"></i> <p>Request a Demo</p></a>
      		<a href="/buyers-guide" class="btn red" role="button"><i class="fas fa-download"></i><p>Request Your <span>FREE</span> Buyer's Guide</p></a>
  		</div>
      <div class="navigation">
      	 <!-- mobile menu -->
      <div class="toggle-wrapper">
        <div class="menu-toggle inactive">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <span class="bg"></span>
        </div>
        <p>MENU</p>
      </div>
      	<div class="nav">
      		<div class="nav">
          <ul class="nav"><li class=""><a href="https://www.stcr.com/innovation-retail" target="_self" class="">Retail Solutions</a></li><li class=""><a href="https://www.stcr.com/service-support" target="_self" class="">Professional Services</a></li><li class=""><a href="https://www.stcr.com/careers" target="_self" class="">Careers</a></li><li class=""><a href="https://www.stcr.com/contact-us" target="_self" class="">Contact us</a></li></ul>        </div>
      	</div>
      	
      </div>
    </div>
</header>
