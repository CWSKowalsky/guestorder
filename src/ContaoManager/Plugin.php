<?php

namespace SKowalsky\GuestOrder\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{

    public function getBundles(ParserInterface $parser)
    {
        return [
            (new BundleConfig('SKowalsky\GuestOrder\SKowalskyGuestOrder'))
                ->setReplace(['sk-guestorder'])
                ->setLoadAfter(['LeadingSystems\MerconisBundle\LeadingSystemsMerconisBundle'])
        ];
    }
    
}
