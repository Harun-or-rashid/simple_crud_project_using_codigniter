<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['home'] = 'auth/login';


//Auth Routes
$route['login']='auth/login';

//User Route
$route['user']='user/index';
$route['user/create']='user/create';
$route['user/profile']='user/profile';

//News Route
$route['news']='news/index';
$route['news/create']='news/create';
$route['news/edit/(:any)']='news/edit/$1';
$route['news/update']='news/update';
$route['news/delete']='news/delete';

$route['image']='user/upload_image';
