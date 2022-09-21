<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'welcome/login';
$route['admin'] = 'admin/Admin';
$route['admin/about'] = 'admin/Admin/about';
$route['admin/hero_add'] = 'admin/Admin/hero_add';
$route['admin/hero_view'] = 'admin/Admin/hero_view';
$route['admin/hero_edit'] = 'admin/Admin/hero_edit';
