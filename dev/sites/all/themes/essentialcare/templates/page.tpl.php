<?php
global $base_url, $user;
$theme_path = "$base_url/".path_to_theme();
?>

<header class="header">
    <a class="nav-toggle"><span></span></a>
	<?php print essential_care_breadcrumb(); ?>
	<span class="actions-right actions"></span>
</header>


<!-- Sidebar -->
<nav id="sidebar-wrapper" class="nav">
	<?php if ($user->uid <= 0) : ?>
	<ul class="sidebar-nav">
		<li>
        	<a href="/">Login</a>
        	<a href="/client-request-for-care">Request for Care</a>
        	<a href="/caregiver-application-resume">Caregiver Application</a>
    	</li>
    </ul>
    <?php else: ?>
		<?php require_once('sidebar.php'); ?>
	<?php endif; ?>
</nav>
<!-- /#sidebar-wrapper -->

    <!-- Page Content -->
<div id="page-content-wrapper" class="page">
	<div class="content">
		<div class="ui-section">
				<?php if (!empty($page['highlighted'])): ?>
				<div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
				<?php endif; ?>
				<a id="main-content"></a>
				<?php print $messages; ?>
				<?php if (!empty($tabs)): ?>
				<?php print render($tabs); ?>
				<?php endif; ?>
				<?php if (!empty($page['help'])): ?>
				<?php print render($page['help']); ?>
				<?php endif; ?>
				<?php if (!empty($action_links)): ?>
				<ul class="action-links"><?php print render($action_links); ?></ul>
				<?php endif; ?>
				<?php 
				if ($user->uid <= 0 
					&& !preg_match("/^\/client\-request\-for\-care/", $_SERVER['REQUEST_URI']) 
					&& !preg_match("/^\/caregiver\-application\-resume/", $_SERVER['REQUEST_URI'])
					&& !preg_match("/^\/login\/(.{25,40})$/", $_SERVER['REQUEST_URI'])
                    && !preg_match("/^\/user/", $_SERVER['REQUEST_URI'])
                    ) {
					//not logged in - print login form
					$block = module_invoke('user', 'block_view', 'login');
					print render($block['content']);
				} else {
					//logged in - print content
					print render($page['content']);
				}
				?>
		</div>
	</div>
</div>
<!-- /#page-content-wrapper -->