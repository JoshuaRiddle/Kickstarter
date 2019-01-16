<?php

class Kickstarter_Admin {

	private static $instance;

	static function init() {
		if (self::$instance == null)
		{
			self::$instance = new Kickstarter_Admin();
		}
		return self::$instance;
	}
}
