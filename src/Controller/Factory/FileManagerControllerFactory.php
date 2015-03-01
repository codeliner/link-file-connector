<?php
/*
* This file is part of prooph/link.
 * (c) prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 07.01.15 - 17:48
 */

namespace Prooph\Link\FileConnector\Controller\Factory;

use Prooph\Link\FileConnector\Controller\FileManagerController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class FileManagerControllerFactory
 *
 * @package FileConnector\Controller\Factory
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
final class FileManagerControllerFactory implements FactoryInterface
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

        return new FileManagerController($fileTypeAdapters->getAvailableFileTypes());
    }
}
 