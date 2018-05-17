<?php

namespace BringYourOwnIdeas\UpdateChecker\Tests;

use BringYourOwnIdeas\UpdateChecker\ComposerLoader;
use PHPUnit_Framework_TestCase;
use SapphireTest;

/**
 * @mixin PHPUnit_Framework_TestCase
 */
class ComposerLoaderTest extends SapphireTest
{
    public function testGetJson()
    {
        $loader = new ComposerLoader();
        $this->assertNotEmpty(
            $loader->getJson()->require->{'silverstripe/framework'},
            'JSON file is loaded and parsed'
        );
    }

    public function testGetLock()
    {
        $loader = new ComposerLoader();
        $this->assertNotEmpty(
            $loader->getLock()->packages,
            'Lock file is loaded and parsed'
        );
    }
}
