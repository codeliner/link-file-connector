<?php
/*
* This file is part of prooph/link.
 * (c) prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 04.01.15 - 20:50
 */

namespace Prooph\Link\FileConnector\Service\FileNameRenderer;

use Zend\ServiceManager\Config;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class MixinManagerFactory
 *
 * @package FileConnector\Service\FileNameRenderer
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
final class MixinManagerFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @throws \InvalidArgumentException
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('config');

        if (! array_key_exists('prooph.link.fileconnector', $config)) throw new \InvalidArgumentException('Missing prooph.link.fileconnector root config key');
        if (! is_array($config['prooph.link.fileconnector'])) throw new \InvalidArgumentException("Config for prooph.link.fileconnector must be an array");
        if (! array_key_exists('filename_mixins', $config['prooph.link.fileconnector'])) throw new \InvalidArgumentException('Missing filename_mixins in prooph.link.fileconnector config');

        $fileNameMixinManager = new MixinManager(new Config($config['prooph.link.fileconnector']['filename_mixins']));

        $fileNameMixinManager->setServiceLocator($serviceLocator);

        return $fileNameMixinManager;
    }
}
 