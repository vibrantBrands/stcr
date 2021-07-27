<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
  <div class="row">
    <div class="row">
        <div class="logo-box">
          <a href="/"><img src="<?php echo $this->getThemePath(); ?>/img/stcr-logo.png" alt="STCR Logo" class="logo"></a>
          <p>ready. reliable. results.</p>
        </div>
    </div>
    <div>
       <p>10 Prospect Street • Endwell, NY 13760</p>
        <p>P: <a href="tel:6077570181">607-757-0181</a> | F: 607-757-9202 | <a href="mailto:sales@stcr.com">sales@stcr.com</a> </p>
    </div>
    <div class="social">
      <a href="https://www.facebook.com/stcrpos" target="social" aria-label="Visit our Facebook Page"><i class="fab fa-facebook"></i></a>
      <a href="https://www.linkedin.com/company/stcr/" target="social" aria-label="Visit our LinkedIn Page"><i class="fab fa-linkedin"></i></a>
      <a href="https://www.youtube.com/channel/UCSWcsJARYjaQnz0T5o4p9DQ" target="social" aria-label="Visit our YouTube Channel"><i class="fab fa-youtube"></i></a> 
      <a href="https://vimeo.com/user29430299/videos/sort:date/format:detail" target="social" aria-label="Visit our Vimeo Page"><i class="fab fa-vimeo"></i></a> 
      <a href="https://twitter.com/stcrpos" target="social" aria-label="Visit our Twitter Page"><i class="fab fa-twitter"></i></a>   
    </div>
  </div>
  <div class="row bottom-bar">
      <div class="row">
        <img src="<?php echo $this->getThemePath(); ?>/img/pci.png" alt="PCI Logo" class="logo">
        <img src="<?php echo $this->getThemePath(); ?>/img/rspa.png" alt="RSPa Logo" class="logo">
      </div>
      <div>
        <ul class="row bottom-nav">
          <li><a href="/contact-us">Contact Us</a></li>
          <li><a href="/careers">Careers</a></li>
          <li><a href="/disclaimer">Disclaimer</a></li>
          <li><a href="/stcr-blog">Blog</a></li>
          <li><a href="/e-news">E-News</a></li>
        </ul>
      </div>
    </div>
    <div class="row copyright">
      All content &copy; 2021 STCR
    </div>
</footer>

<?php $this->inc('elements/footer_bottom.php');?>
