

    
    
    
    <?php if ( !empty($page_items->display_image) && file_exists((CHARITABLE_PROGRAM_BANNER_PATH . $page_items->banner))) { ?>
    <section class="">
    <img src="<?php echo CHARITABLE_PROGRAM_BANNER_PATH . $page_items->banner; ?>" alt="donate-banner">
<!-- <div class="xs-black-overlay"></div>
<div class="container">
<div class="color-white xs-inner-banner-content">
<h2>Donate Now</h2>
<p>Give a helping hand for poor people</p>
<ul class="xs-breadcumb">
<li class="badge badge-pill badge-primary"><a href="index.html" class="color-white"> Home /</a> Donate</li>
</ul>
</div>
</div> -->
</section>
    <?php } ?>