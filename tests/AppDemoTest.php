<?php

namespace App\Tests;

use App\AppDemo;
use PHPUnit\Framework\TestCase;

class AppDemoTest extends TestCase
{
    public function testItShouldSayHello(): void
    {
        $app = new AppDemo("world");
        self::assertEquals("Hello world", $app->sayHello());
    }
}
