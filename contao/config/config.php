<?php

use Contao\System;
use Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend\NumberWidget;
use Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend\RangeWidget;

$GLOBALS['BE_FFL']['number'] = NumberWidget::class;
$GLOBALS['BE_FFL']['range'] = RangeWidget::class;

$route = System::getContainer()->get('request_stack')->getCurrentRequest()->get('_route');
if ('contao_backend' === $route) {
	$GLOBALS['TL_CSS'][] = 'bundles/contaomorebackendwidgets/backend.css';
}
