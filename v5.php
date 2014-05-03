<?php

require_once 'vendor/autoload.php';
require_once 'v3.php';

use Pimple\Container as Pimple;

$container = new Pimple();


// Set parameters
$container['user.name'] = "masnun";
$container['user.email'] = "masnun@gmail.com";
$container['user.website'] = "http://masnun.me";

$container['post.content'] = "Hello World!";

// User
$container['user'] = function ($c) {
    return new User($c['user.name'], $c['user.email'], $c['user.website']);
};

// Blogpost

$container['post'] = function ($c) {
    return new BlogPost($c['post.content'], $c['user']);
};


// Test it out

$blogPost = $container['post'];
echo $blogPost->getUser()->getEmail() . PHP_EOL;