<?php

use App\AppDemo;

test('example', function () {
    expect(true)->toBeTrue();
});

test('should say hello', function () {
    $app = new AppDemo("world");
    expect("Hello world")->toEqual($app->sayHello());
});