<?php

if(! function_exists("sidebar")) {
	function sidebar()
	{
		$sidebar = array(
			array(
				"href" => route('dashboard'),
				"icon" => "fas fa-home",
				"title" => __("Dashboard"),
				"permission"=> true,
				"subMenu" => false
			),
			array(
				"href" => route('settings'),
				"icon" => "fas fa-gear",
				"title" => __("Settings"),
				"permission"=> true,
				"subMenu" => false
			),
			array(
				"href" => route('list-users'),
				"icon" => "fas fa-users",
				"title" => __("Users"),
				"permission"=> true,
				"subMenu" => false
			),
		);

		return $sidebar;
	}
}