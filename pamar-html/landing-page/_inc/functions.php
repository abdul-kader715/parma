<?php 
define('THEME', 'Pamar');
define('indexURL', 'Pamar - Plumbing & Repair Service HTML Template');

function get_header($version = 'script', $title = ''){
	include('headers/header-'.$version.'.php');
}

function get_breadcumb($version = '', $klass ='', $breadcumb_image = '',$breadcumb_title = '',$breadcumb_subtitle = ''){
	include('breadcumbs/breadcumb-'.$version.'.php');
}

function get_footer($version = 'v1', $klass = " "){
	include('footers/footer-'.$version.'.php');
}

function get_section($section = null, $klass = " "){
	include('sections/'.$section.'.php');
}

function get_widget($section = null, $klass = " "){
	include('widgets/widget-'.$section.'.php');
}