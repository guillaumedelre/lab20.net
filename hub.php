<?php

$meta = array();
$meta['blog'] = 'Blog';
$meta['404'] = 'Erreur 404';
$meta['profil'] = 'Consultant Web - Développeur PHP';
$meta['competences'] = 'Compétences';
$meta['realisations'] = 'Réalisations';
$meta['timeline'] = 'Timeline';
$meta['contact'] = 'Contact';

$page['blog'] = 'blog';
$page['404'] = 'errors/404';
$page['profil'] = 'profile';
$page['competences'] = 'skills';
$page['realisations'] = 'projects';
$page['timeline'] = 'timeline';
$page['contact'] = 'contact';

$menu = (!isset($_GET['p'])) ? 'profil' : $_GET['p'];

if (!array_key_exists($menu, $meta)) header("location:http://$_SERVER[HTTP_HOST]");

define('CURRENT_MENU', $menu);
define('CURRENT_META', $meta[$menu]);
define('CURRENT_PAGE', $page[$menu]);

function isMenuActive($_menu) {
	return (CURRENT_MENU == $_menu) ? ' class="active" ' : '';
}

function isNavActive($_menu) {
	return (CURRENT_MENU == $_menu) ? ' selected="" ' : '';
}