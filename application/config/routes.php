<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['home'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Auth Routes
$route['login']='auth/login';

//User Route
$route['user']='user/index';
$route['user/create']='user/create';

//News Route
$route['news']='news/index';
$route['news/create']='news/create';
$route['news/edit/(:any)']='news/edit/$1';
$route['news/update']='news/update';
$route['news/delete']='news/delete';
