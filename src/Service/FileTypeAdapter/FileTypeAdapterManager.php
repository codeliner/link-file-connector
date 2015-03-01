<?php
/*
* This file is part of prooph/link.
 * (c) prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 03.01.15 - 19:59
 */

namespace Prooph\Link\FileConnector\Service\FileTypeAdapter;

use Prooph\Link\FileConnector\Service\FileTypeAdapter;
use Zend\ServiceManager\AbstractPluginManager;
use Zend\ServiceManager\Exception;

/**
 * Class FileTypeAdapterManager
 *
 * @package FileConnector\Service
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
final class FileTypeAdapterManager extends AbstractPluginManager
{
    /**
     * Validate the plugin
     *
     * Checks that the filter loaded is either a valid callback or an instance
     * of FilterInterface.
     *
     * @param  mixed $plugin
     * @throws \RuntimeException
     * @return void
     */
    public function validatePlugin($plugin)
    {
        if (! $plugin instanceof FileTypeAdapter) throw new \RuntimeException(sprintf("FileTypeAdapter %s does not implement FileConnector\Service\FileTypeAdapter", get_class($plugin)));
    }

    /**
     * @return array
     */
    public function getAvailableFileTypes()
    {
        return array_merge(array_keys($this->invokableClasses), array_keys($this->factories), array_keys($this->aliases), array_keys($this->instances));
    }
}
 