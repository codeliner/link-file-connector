<?php
/*
* This file is part of prooph/link.
 * (c) prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 07.01.15 - 23:10
 */

namespace Prooph\Link\FileConnector\Api\Factory;

use Prooph\Link\FileConnector\Api\FileConnector;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class FileConnectorFactory
 *
 * @package FileConnector\Api\Factory
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
final class FileConnectorFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $fileTypeAdapters = $serviceLocator->getServiceLocator()->get("prooph.link.fileconnector.file_type_adapter_manager");

        return new FileConnector($fileTypeAdapters->getAvailableFileTypes());
    }
}
 