<div class="wrapper">
	<div id="masthead"> 
		<div id="logowrapper"><a id="logo" href="http://www.humboldt.edu/"> 
			<span class="visuallyhidden">Humboldt State University</span></a> 
		</div> 
	</div>

<div id="content-wrap">	
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
	
	<div id="main"<?php if ($page['sidebar_first']): print ' class="twocol"'; endif; ?>>

		<div class="primary-content">
		
			<?php print $messages; ?>
		
			<?php print render($title_prefix); ?>
			<?php if ($title): ?><h2 class="title"><?php print $title; ?></h2><?php endif; ?>
			<?php print render($title_suffix); ?>
		
			<?php if ($tabs): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
			<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
		

					<?php print render($page['sidebar_first']); ?>

	

	
		
			<?php print render($page['content']); ?>
		
		
			<!--<?php print $feed_icons; ?>-->
		</div>
		
	</div>
	</div>
	</div>
</div>

		<div id="circleh"><a href="http://www.humboldt.edu"><span class="visuallyhidden">Humboldt State University</span></a>
			<div class="circle"></div>
		</div>
		
<div id="footer-wrap">	
	<footer class="clearfix">

			<?php print render($page['footer_firstcolumn']); ?>

			<?php print render($page['footer_secondcolumn']); ?>

			<?php print render($page['footer_thirdcolumn']); ?>
		
	</footer>
</div>
</div>