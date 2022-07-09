<!doctype html>
<html lang="en">


<head>
	<?php $this->load->view($head); ?>
</head>

<body class="">

<!-- <div id="preloader">
<div class="spinner">
<div class="double-bounce1"></div>
<div class="double-bounce2"></div>
</div>
</div> -->


<main class="xs-main">


	<header id="header" class="header">
	<?php //$this->load->view($mobile_nav); ?>
		<?php //$this->load->view($topbar); ?>
		<?php //$this->load->view($navbar); ?>
	</header>
	<div class="main-content">
		<?php $this->load->view($banner); ?>
		<?php $this->load->view($view_path); ?>
	</div>
<?php $this->load->view($footer); ?>
	<!--====== GO TO TOP PART START ======-->

	<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
	<!--====== GO TO TOP PART ENDS ======-->

	<?php $this->load->view($javascripts); ?>
	<?php if (!empty($scripts) && count($scripts) > 0) : ?>
		<?php foreach ($scripts as $script) : ?>
			<script src="<?php echo $script; ?>"></script>
		<?php endforeach ?>
	<?php endif ?>
		</main>

</body>

</html>



