<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['classes'] = 'Posts/classes';
$route['schedule'] = 'Posts/schedule';
$route['register'] = 'Posts/register';
$route['contact'] = 'Posts/contact';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
