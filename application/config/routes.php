<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;


$route['onas'] = 'home/about';
$route['oferty'] = 'home/offers';
$route['oferta_1'] = 'home/offer_1';
$route['oferta_2'] = 'home/offer_2';
$route['oferta_3'] = 'home/offer_3';
$route['realizacje'] = 'home/reals';
$route['realizacja_1'] = 'home/real_1';
$route['realizacja_2'] = 'home/real_2';
$route['realizacja_3'] = 'home/real_3';
$route['projekty'] = 'home/projects';
$route['praca'] = 'home/work';
$route['kontakt'] = 'home/contact';
$route['aktualnosci'] = 'home/blog';
$route['wpis/(.*)/(.+)'] = 'home/single_article/$1/$2';
$route['kontakt'] = 'home/contact';
$route['kontakt_old'] = 'home/contact_old';
//SCIAGA
// $route['odziez/(.*)/(.+)'] = 'home/odziez/$1/$2';
// $route['obuwie/(.*)/(.+)'] = 'home/obuwie/$1/$2';
// $route['akcesoria/(.*)/(.+)'] = 'home/akcesoria/$1/$2';
// $route['kolekcje/(.*)/(.+)'] = 'home/kolekcje/$1/$2';
// $route['gazetka/(.*)/(.+)'] = 'home/gazetka/$1/$2';
// $route['produkt/(.*)/(.+)'] = 'home/produkt/$1/$2';
// $route['o_nas'] = 'home/o_nas';
// $route['wydarzenia'] = 'home/wydarzenia';
// $route['wpis'] = 'home/wpis';
// $route['aktualnosci'] = 'p/aktualnosci';
// $route['uzywane_podglad/(.*)/(.+)'] = 'p/uzywane_podglad/$1/$2';
// $route['promocje'] = 'p/promocje';
// $route['promocja/(.*)/(.+)'] = 'p/promocja/$1/$2';
// $route['uslugi'] = 'p/uslugi';
// $route['usluga/(.*)/(.+)'] = 'p/usluga/$1/$2';
// $route['o-nas/(.*)/(.+)'] = 'p/o_nas/$1/$2';
// $route['kontakt/(.*)/(.+)'] = 'p/kontakt/$1/$2';
// $route['media'] = 'p/media';
// $route['nowe/(.*)/(.+)'] = 'p/nowe/$1/$2';
// $route['nowe'] = 'p/nowe';
// $route['akcesoria/(.*)'] = 'p/akcesoria/$1';
