<?php
	global $user, $base_path;
		
	$menu_links = array();
	if (in_array('administrator', $user->roles)) {
		
	} elseif (in_array('franchisee', $user->roles)) {
		$menu_links = array(
			'notifications' => array('url' => '/ecw', 'title' => 'Notifications', 'icon' => 'icon-bell'),
			'schedule' => array('url' => '/ecw/schedule', 'title' => 'Schedule', 'icon' => 'icon-clock'),
			'reports' => array('url' => '/ecw/reports/invoices', 'title' => 'Reports', 'icon' => 'icon-layers'),
			'clients' => array('url' => '/ecw/clients', 'title' => 'Clients', 'icon' => 'icon-book'),
			'caregivers' => array('url' => '/ecw/caregivers', 'title' => 'Caregivers', 'icon' => 'icon-clipboard'),
			'settings' => array('url' => '/ecw/settings', 'title' => 'Settings', 'icon' => 'icon-cog'),
		);		
	} elseif (in_array('franchisor', $user->roles)) {
		$menu_links = array(
			'notifications' => array('url' => '/ecw', 'title' => 'Notifications', 'icon' => 'icon-bell'),
			'reports' => array('url' => '/ecw/reports', 'title' => 'Reports', 'icon' => 'icon-layers'),
			'franchisees' => array('url' => '/ecw/franchisees', 'title' => 'Franchisees', 'icon' => 'icon-book'),
			'forms' => array('url' => '/ecw/forms', 'title' => 'Forms', 'icon' => 'icon-paper'),
		);
	} elseif (in_array('caregiver', $user->roles)) {
		$menu_links = array(
			'notifications' => array('url' => '/ecw', 'title' => 'Notifications', 'icon' => 'icon-bell'),
			'schedule' => array('url' => '/ecw/schedule', 'title' => 'Schedule', 'icon' => 'icon-clock'),
			'clients' => array('url' => '/ecw/clients', 'title' => 'Clients', 'icon' => 'icon-book'),
			'skills' => array('url' => '/ecw/caregiver/'.$user->uid.'/skills', 'title' => 'Skills', 'icon' => 'icon-record'),
		);		
	} elseif (in_array('client', $user->roles)) {
		$menu_links = array(
			'photos' => array('url' => '/ecw', 'title' => 'Photos', 'icon' => 'icon-image'),
			'care_history' => array('url' => '/ecw/history', 'title' => 'Care History', 'icon' => 'icon-heart'),
			'billing' => array('url' => '/ecw/invoices', 'title' => 'Billing & Payments', 'icon' => 'icon-layers'),
			'care_agreement' => array('url' => '/client-application', 'title' => 'Care Agreement', 'icon' => 'icon-paper'),
		);			
	}
?>
<ul class="sidebar-nav">
<?php if (essential_care_has_role(array('franchisee','franchisor','client','caregiver'), $user->roles)) : ?>
<li class="profile <?php if (arg(0) == 'profile') { print 'active'; } ?>">
	<a href="/profile">
<?php endif; ?>
<div class="avatar">
	<img src="<?php print essential_care_profile_photo($user->uid, 'medium'); ?>" class="profile-photo" />
<?php
$ec_user = db_query("select * from {ec_all_users} where uid=:uid", array(':uid' => $user->uid))->fetch();
?>
</div>
<span class="name"><?php print "$ec_user->first_name $ec_user->last_name"; ?></span>
<?php if (essential_care_has_role(array('franchisee','franchisor','client','caregiver'), $user->roles)) : ?>
	</a>
</li>
<?php endif; ?>
<?php
	foreach ($menu_links as $key => $menu_link) {
		print '<li><i class="'.$menu_link['icon'].'"></i><a href="'.$menu_link['url'].'">'.$menu_link['title'].'</a></li>';
	}	
?>
<?php if (!essential_care_has_role(array('franchisee','franchisor','client','caregiver'), $user->roles)) : ?>
    <li>
        <i class="icon-paper"></i>
        <a href="/caregiver-application">Application</a>
    </li>    
<?php endif; ?>
	<li>
		<i class="icon-circle-cross"></i>
		<a href="/user/logout">Sign Out</a>
	</li>
</ul>