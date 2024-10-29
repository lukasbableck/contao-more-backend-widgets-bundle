<?php

use Contao\System;
use Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend\NumberWidget;
use Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend\RangeWidget;
use Symfony\Component\HttpFoundation\Request;

$GLOBALS['BE_FFL']['number'] = NumberWidget::class;
$GLOBALS['BE_FFL']['range'] = RangeWidget::class;


if (System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(System::getContainer()->get('request_stack')->getCurrentRequest() ?? Request::create(''))) {
	$GLOBALS['TL_CSS'][] = 'bundles/contaomorebackendwidgets/backend.css';
}
