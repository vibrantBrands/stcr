<?php require('elements/header.php'); ?>

        <section class="hero" style="background:url(<?php echo $header_bg ?>) #B22336">

        <h1>Blog</h1>
</section>
<div class="page-content">
	<div class="container">
		<?php
	        $a = new Area('Content');
	        $a->display($c);
	    ?>
	</div>
	<a href="/stcr-blog" class="btn red">< Back to Blog List</a>
</div>
<a href="/buyers-guide" class="btn red request-btn">Request a Buyer's Guide</a>

<?php require('elements/footer.php'); ?>
