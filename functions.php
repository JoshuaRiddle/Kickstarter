<?php
require_once 'includes/class-kickstarter.php';
require_once 'includes/class-kickstarter-admin.php';

if (!is_admin()) {
	$kickstarter = Kickstarter::get_instance();
	$kickstarter->init();
} else {
	$kickstarter = Kickstarter_Admin::init();
}