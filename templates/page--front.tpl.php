<div class="wrapper">
	<div class="masthead"> 
		<div class="logowrapper"><a class="logo" href="http://www.humboldt.edu/"> 
			<span class="visuallyhidden">Humboldt State University</span></a> 
		</div> 
	</div>

<div class="content-wrap">	
	<div class="clearfix inner">
		<header><h1><a href="<?php print $front_page ?>"><?php print $site_name; ?></a></h1></header>
	<div class="skip"><a href="#main">skip navigation</a></div>

	<div class="section-wrap">	
		<div class="left-side">
			<nav>
				<?php print render($main_menu_expanded); ?>
			</nav>
			<?php print render($page['sidebar_second']); ?>

		</div>


		<div class="photo">
			<?php if ($photos_rotate): ?>
				<?php print render($all_photos); ?>
			<?php else: ?>
				<img src="<?php print render($photos_select); ?>" alt=" " />
			<?php endif; ?>
		</div>

	
	<div id="main">
		<?php print $messages; ?>

	  <?php if ($page['intro']): ?>
		  <?php print render($page['intro']); ?>
	  <?php endif; ?>


		<div class="primary-content">
			
		
			<?php print render($title_prefix); ?>
			<?php if ($title): ?><h2 class="title"><?php print $title; ?></h2><?php endif; ?>
			<?php print render($title_suffix); ?>
		
		
			<?php if ($tabs): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
			<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

	
		
			<?php print render($page['content']); ?>
			
			<!--<?php print $feed_icons; ?>-->
		</div>
		
	</div>
	</div>

	</div>
</div>


		<div class="circleh"><a href="http://www.humboldt.edu"><span class="visuallyhidden">Humboldt State University</span></a>
			<div class="circle"></div>
		</div>
		
<div class="footer-wrap">	
	<footer class="clearfix">

			<?php print render($page['footer_firstcolumn']); ?>		

			<?php print render($page['footer_secondcolumn']); ?>

			<?php print render($page['footer_thirdcolumn']); ?>
		
	</footer>
</div>
</div>