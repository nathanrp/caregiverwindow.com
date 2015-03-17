<header class="header <?php if($page=='0') echo 'home-header';?>">
	<h1 class="<?php if($page=='0') echo 'home';?>">
		<a href="<?php echo $path;?>">
			<span>Caregiver</span>
			<span>Window</span>
		</a>
	</h1>
	<nav>
		<ul>
			<li class="<?php if($page=='1') echo 'active';?>"><a href="<?php echo $path;?>pricing/">Pricing</a></li>
			<li><a href="<?php echo $path;?>support/">Support</a></li>
			<li><a class="btn" href="<?php echo $path;?>https://app.caregiverwindow.com">Sign In</a></li>
		</ul>
	</nav>
</header>