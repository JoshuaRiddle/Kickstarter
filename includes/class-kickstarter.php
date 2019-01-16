<?php

class Kickstarter {

	private static $instance;

	static function get_instance() {
		if (self::$instance == null)
		{
			self::$instance = new Kickstarter();
		}
		return self::$instance;
	}

	public function init() {
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_kickstarter_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_kickstarter_stylesheets' ] );
	}

	public function enqueue_kickstarter_scripts() {
		wp_deregister_script( 'jquery' );
		wp_enqueue_script('kickstarter', get_template_directory_uri() . '/assets/js/kickstarter.js' );
	}

	public function  enqueue_kickstarter_stylesheets(){
		wp_enqueue_style( 'kickstarter', get_template_directory_uri() . '/assets/css/kickstarter.css' );
	}
}
