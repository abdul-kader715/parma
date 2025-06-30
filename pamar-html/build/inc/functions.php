<?php 
define('themeName', 'Pamar');
define('themeTitle', 'Plumbing & Repair Service HTML Template');
define('THEME', themeName .' - '. themeTitle);
define('Author', 'Pamar');
define('indexURL', 'index.html');

function get_header($version = 'script', $pageName = '', $klass=''){
	include('headers/header-'.$version.'.php');
}

function get_breadcumb($version = '',  $breadcumb_title = '',$breadcumb_subtitle = '', $klass ='',  $breadcumb_image = '', $breadcumb_attr = ''){
	include('breadcumbs/breadcumb-'.$version.'.php');
}

function get_footer($version = 'v1', $klass = " "){
	include('footers/footer-'.$version.'.php');
}

function get_section($section = null, $klass = '', $y = '100'){
	include('sections/'.$section.'.php');
}

function get_widget($section = null, $klass = " "){
	include('widgets/widget-'.$section.'.php');
}