<?php
use Cake\Routing\Router;

Router::scope('/', ['prefix' => 'front'], function ($routes) {
    $routes->plugin('RockProg', ['path' => '/programs'], function ($routes) {
         $routes->connect('/', ['controller' => 'programs', 'action' => 'index']);
          $routes->connect(
            '/:id/:slug', 
            ['controller' => 'posts', 'action' => 'view'],
            [
                'id' => '[0-9]+',
                'pass' => ['id', 'slug'],
                '_name' => 'Learning.post'  
            ]
         );
         
          $routes->connect(
            '/category/:id/:slug', 
            ['controller' => 'categories', 'action' => 'view'],
            [
                'id' => '[0-9]+',
                'pass' => ['id', 'slug'],
                '_name' => 'Learning.cat'   
            ]
         );
         
                  $routes->fallbacks();
    });

});


Router::prefix('admin',  function ($routes) {
    $routes->plugin('Learning', function ($routes) {
         $routes->redirect('/', ['controller' => 'posts', 'action' => 'index']);
         $routes->fallbacks();
    });

});
