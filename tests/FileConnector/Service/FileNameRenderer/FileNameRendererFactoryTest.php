<?php
/*
* This file is part of prooph/link.
 * (c) prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 04.01.15 - 21:23
 */

namespace ProophTest\Link\FileConnector\Service\FileNameRenderer;

use ProophTest\Link\FileConnector\Bootstrap;
use ProophTest\Link\FileConnector\TestCase;

/**
 * Class FileNameRendererFactoryTest
 *
 * @package FileConnectorTest\Service\FileNameRenderer
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
final class FileNameRendererFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_creates_a_filename_renderer_by_requesting_it_from_service_locator()
    {
        $renderer = Bootstrap::getServiceManager()->get('fileconnector.filename_renderer');

        $this->assertInstanceOf('FileConnector\Service\FileNameRenderer', $renderer);
    }
}
 