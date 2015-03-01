<?php
/*
* This file is part of prooph/link.
 * (c) prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 03.01.15 - 19:32
 */

namespace Prooph\Link\FileConnector\Service;

use Prooph\Processing\Type\Prototype;
use Prooph\Processing\Type\Type;

/**
 * Interface FileTypeAdapter
 *
 * @package FileConnector\Service
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
interface FileTypeAdapter
{
    /**
     * @param string $filename
     * @param Prototype $prototype
     * @param array $metadata
     * @return mixed
     */
    public function readDataForType($filename, Prototype $prototype, array &$metadata = []);

    /**
     * @param string $filename
     * @param Type $type
     * @param array $metadata
     * @return void
     */
    public function writeDataOfType($filename, Type $type, array &$metadata = []);
}
 