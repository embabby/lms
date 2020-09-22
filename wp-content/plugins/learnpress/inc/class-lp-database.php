<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Class LP_Database
 */
class LP_Database {
	public static $_instance;
	public $wpdb;
	public $tb_lp_user_items;
	public $tb_lp_user_itemmeta;
	public $tb_lp_order_items;
	public $tb_postmeta;
	public $tb_posts;
	public $tb_lp_section_items;
	public $tb_lp_sections;

	protected function __construct() {
		/**
		 * @global wpdb
		 */
		global $wpdb;

		$this->wpdb                 = $wpdb;
		$this->tb_posts             = $this->wpdb->posts;
		$this->tb_postmeta          = $this->wpdb->postmeta;
		$this->tb_lp_user_items     = $this->wpdb->prefix . 'learnpress_user_items';
		$this->tb_lp_user_itemmeta  = $this->wpdb->prefix . 'learnpress_user_itemmeta';
		$this->tb_lp_order_items    = $this->wpdb->prefix . 'learnpress_order_items';
		$this->tb_lp_order_itemmeta = $this->wpdb->prefix . 'learnpress_order_itemmeta';
		$this->tb_lp_section_items  = $this->wpdb->prefix . 'learnpress_section_items';
		$this->tb_lp_sections       = $this->wpdb->prefix . 'learnpress_sections';
	}

	public static function getInstance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}
}

LP_Database::getInstance();

