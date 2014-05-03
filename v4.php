<?php

require_once 'vendor/autoload.php';
require_once 'v3.php';

use Pimple\Container as Pimple;

$container = new Pimple();

// User
$container['user'] = function ($c) {
    return new User("masnun", "masnun@gmail.com", "http://masnun.me");
};

// Blogpost

$container['post'] = function ($c) {
    return new BlogPost("Hello world!", $c['user']);
};


// Test it out

$blogPost = $container['post'];
echo $blogPost->getUser()->getEmail() . PHP_EOL;