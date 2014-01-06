<?php
	function get_platform_list () {
		global $ppaccess;
		return $ppaccess->get_platform_list();
	}
	function get_industry_list () {
		global $ppaccess;
		return $ppaccess->get_industry_list();
	}
	function get_applications_list_of_industry ($industry_key) {
		global $ppaccess;
		return $ppaccess->get_applications_list_of_industry($industry_key);
	}