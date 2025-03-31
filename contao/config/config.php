<?php

use Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend\CharPickerWidget;
use Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend\ColorWidget;
use Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend\NumberWidget;
use Lukasbableck\ContaoMoreBackendWidgetsBundle\Widget\Backend\RangeWidget;

$GLOBALS['BE_FFL']['charPicker'] = CharPickerWidget::class;
$GLOBALS['BE_FFL']['color'] = ColorWidget::class;
$GLOBALS['BE_FFL']['number'] = NumberWidget::class;
$GLOBALS['BE_FFL']['range'] = RangeWidget::class;
