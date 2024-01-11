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
$routes->add('/pages/UI/navbar.php', 'Dasboard::navbar');
$routes->add('/pages/UI/timeline.php', 'Dasboard::timeline');
$routes->add('/pages/UI/ribbons.php', 'Dasboard::ribbons');
$routes->add('/pages/forms/general.php', 'Form::general');
$routes->add('/pages/forms/advanced.php', 'Form::advanced');
$routes->add('/pages/forms/editors.php', 'Form::editors');
$routes->add('/pages/forms/validation.php', 'Form::validation');
