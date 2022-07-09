
	<meta charset="utf-8">
    <title><?php echo $page_items->meta_title; ?></title>
    <meta name="title" content="<?php echo $page_items->meta_title; ?>"/>
    <meta name="keywords" content="<?php echo $page_items->meta_keywords; ?>"/>
    <meta name="description" content="<?php echo $page_items->meta_description; ?>"/>
    <base href="<?php echo base_url(); ?>"/>
    <?php $parts = $this->uri->segment(1); ?>
    <?php if (!empty($page_url) && $page_url > 1) {
        ?>   <link rel="canonical" href="<?php echo base_url() . $parts . '/' . $page_url; ?>"/>
    <?php } else if (!empty($page_items->canonical_url)) { ?>
        <link rel="canonical" href="<?php echo $page_items->canonical_url; ?>"/>
        <?php
    } if (!empty($page_items->redirection_link)) {
        header('Location:' . $page_items->redirection_link);
    }
    ?>
    <?php echo $page_items->other_meta_tags; ?>
    <?php
    $robots = array();
    if (!empty($page_items->nofollow_ind)) {
        $robots[] = 'NOINDEX';
    }
    if (!empty($page_items->noindex_ind)) {
        $robots[] = 'NOFOLLOW';
    }
    if (count($robots) > 0):
        ?>
        <META NAME="ROBOTS" CONTENT="<?php echo implode(', ', $robots); ?>" />
    <?php endif ?>

    <meta name="author" content="Sathish-Kumar">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--<link rel="shortcut icon" href="<?php echo $settings->FAVICON_IMAGE ?>" type="image/x-icon">-->
	<link rel="icon" href="<?php echo SETTINGS_UPLOAD_PATH.$settings->FAVICON_IMAGE ?>" type="image/png">
 
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
    
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto+Slab:400,700" rel="stylesheet">

    <link rel="apple-touch-icon" href="apple-touch-icon.html">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/xsIcon.css">
<link rel="stylesheet" href="assets/css/isotope.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/plugins.css" />

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css" />
<link rel='stylesheet alternate' title='color-1' type='text/css' href='assets/css/colors/color-1.css'>
<link rel='stylesheet alternate' title='color-2' type='text/css' href='assets/css/colors/color-2.css'>
<link rel='stylesheet alternate' title='color-3' type='text/css' href='assets/css/colors/color-3.css'>
<link rel='stylesheet alternate' title='color-4' type='text/css' href='assets/css/colors/color-4.css'>
<link rel='stylesheet alternate' title='color-5' type='text/css' href='assets/css/colors/color-5.css'>
<link rel='stylesheet alternate' title='color-6' type='text/css' href='assets/css/colors/color-6.css'>
<link rel='stylesheet alternate' title='color-7' type='text/css' href='assets/css/colors/color-7.css'>

<script src="assets/js/jquery-3.2.1.min.js"></script>