<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Dasboard', 'Dasboard::index');
$routes->add('/pages/charts/chartjs.php', 'Dasboard::chartjs');
$routes->add('/pages/charts/flot.php', 'Dasboard::flot');
$routes->add('/pages/charts/inline.php', 'Dasboard::inline');
$routes->add('/pages/charts/uplot.php', 'Dasboard::uplot');
$routes->add('/pages/UI/general.php', 'Dasboard::general');
$routes->add('/pages/UI/icons.php', 'Dasboard::icons');
$routes->add('/pages/UI/buttons.php', 'Dasboard::buttons');
$routes->add('/pages/UI/sliders.php', 'Dasboard::sliders');
$routes->add('/pages/UI/modals.php', 'Dasboard::modals');