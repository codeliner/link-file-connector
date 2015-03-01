<?php
/*
* This file is part of prooph/link.
 * (c) prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Date: 04.01.15 - 21:00
 */

namespace ProophTest\Link\FileConnector\Service\FileNameRenderer;

use Prooph\Link\FileConnector\Service\FileNameRenderer\MixinManager;
use ProophTest\Link\FileConnector\Bootstrap;
use ProophTest\Link\FileConnector\TestCase;

final class MixinManagerTest extends TestCase
{
    /**
     * @var MixinManager
     */
    private $mixinManager;

    protected function setUp()
    {
        $this->mixinManager = Bootstrap::getServiceManager()->get('fileconnector.filename_mixin_manager');
    }

    /**
     * @test
     */
    public function it_provides_a_now_mixin()
    {
        $mixin = $this->mixinManager->get('now');

        $this->assertInstanceOf('FileConnector\Service\FileNameRenderer\Mixin\NowMixin', $mixin);
    }
}
 