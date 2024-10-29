<?php
namespace Lukasbableck\ContaoMoreBackendWidgetsBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Lukasbableck\ContaoMoreBackendWidgetsBundle\ContaoMoreBackendWidgetsBundle;

class Plugin implements BundlePluginInterface {
	public function getBundles(ParserInterface $parser): array {
		return [BundleConfig::create(ContaoMoreBackendWidgetsBundle::class)->setLoadAfter([ContaoCoreBundle::class])];
	}
}
