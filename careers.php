<?php require('elements/header.php'); ?>

<section class="hero">
  <h1>Careers</h1>
</section>
<div class="page-content">
	<div class="container">
		<div class="career-listings">
      <div class="list">

        <?php
          $list = new \Concrete\Core\Page\PageList();
          $list->filterByPageTypeHandle(['career_listing']);
          $list->sortByDisplayOrder();
          $pages = $list->getResults();

          foreach($pages as $page) {
            $title = $page->getCollectionName();

            if($page->getAttribute('location')) {
              $location = $page->getAttribute('location');
            } ?>
            <div>
              <strong><?php echo $title ?></strong><br />
              Location: <?php echo $location ?>
            </div>

          <?php } ?>
      </div>
      <div class="descriptions">

        <!-- intro -->

        <div>
            <h1>MAKE A CAREER AT STCR</h1>
            <p>STCR, Inc. is a leader in the world of retail systems technology. We are constantly scouting for individuals who have outstanding qualities. If you're eager for a challenge and aspire to work in a fast-paced, high technology, team oriented environment and have the skills and drive necessary to maneuver in the ever-changing world of retail store solutions, we want to hear from you.</p>
            <p><strong><a href="https://secure.entertimeonline.com/ta/STCR.careers?CareersSearch" target="_blank">Apply Now</a></strong> or learn more about who we are and the opportunities we have to offer below.</p>
            <h1>OUR COMPANY</h1>
            <p>STCR offers an excellent benefits package, including health, dental, life insurance, 401K, tuition reimbursement, paid time off & holidays, plus company-sponsored training.</p>
            <h1>OUR MISSION</h1>
            <p>STCR, Inc. is committed to delivering exceptional service and proven solutions. We respect all individuals and encourage positive working relationships. Our goal to provide the highest level of customer satisfaction will ensure our continual growth.</p>
            <h1>OUR VISION</h1>
            <p>Working together to provide world class services and solutions that promote our customers' businesses and build lasting relationships.</p>
            <h1>OUR CULTURE</h1>
            <p>With a commitment to excellence and taking care of the customer we expect continuing improvement in everything we do. We endeavor to lead the way in products, services, technology, and employee relations, striving always to be the best. We believe the customer experience is the ultimate judge of our performance and should always be studied and improved upon. In an environment of professionalism, teamwork, and mutual respect we work hard everyday to deliver the highest value with our services and solutions to enhance our customers business and create win-win situations.</p>
            <p>If you're a like minded achiever come join our team and be a part of our success.</p>  
        </div>

        <?php
          $list = new \Concrete\Core\Page\PageList();
          $list->filterByPageTypeHandle(['career_listing']);
          $list->sortByDisplayOrder();
          $pages = $list->getResults();

          foreach($pages as $page) {
            $location = '';
            $page_content = '';
            $career_url = 'https://secure.entertimeonline.com/ta/STCR.careers';
            $career_image = '';
            $imagepath = '';

            $title = $page->getCollectionName();

            if($page->getAttribute('location')) {
              $location = $page->getAttribute('location');
            } 
            if($page->getAttribute('job_description')) {
              $job_description = $page->getAttribute('job_description');
            } 
            if($page->getAttribute('career_url')) {
              $career_url = $page->getAttribute('career_url');
            } 
            if($page->getAttribute('career_image')) {
              $career_image = $page->getAttribute('career_image');
              $imagepath = $career_image->getRelativePath();
            } 
            ?>

            <div>
              <img src="<?php echo $imagepath ?>" />
              <h1><?php echo $title ?></h1><br />
              <p>General Information:</p>
              <table>
                <tr>
                  <td>Location:</td>
                  <td><?php echo $location ?></td>
                </tr>
              </table>
              <p>
                <?php echo $job_description ?>
              </p>

               <a href="<?php echo $career_url ?>" class="btn" target="_blank">Apply for Job</a>
            </div>

          <?php } ?>

      </div>
    </div>
	</div>
</div>
<a href="/buyers-guide" class="btn red request-btn">Request a Buyer's Guide</a>

<?php require('elements/footer.php'); ?>
