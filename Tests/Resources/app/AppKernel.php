<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2016 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Cmf\Component\Testing\HttpKernel\TestKernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends TestKernel
{
    public function configure()
    {
        $this->requireBundleSets([
            'default', 'phpcr_odm',
        ]);

        $this->addBundles([
            new \Symfony\Cmf\Bundle\ResourceBundle\CmfResourceBundle(),
        ]);
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config.php');
    }
}
