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
                '_name' => 'www.post'  
            ]
         );
         
          $routes->connect(
            '/category/:id/:slug', 
            ['controller' => 'categories', 'action' => 'view'],
            [
                'id' => '[0-9]+',
                'pass' => ['id', 'slug'],
                '_name' => 'www.cat'   
            ]
         );
         
                  $routes->fallbacks();
    });

});


Router::prefix('admin',  function ($routes) {
    $routes->plugin('RockProg',['path' => '/rockprog'], function ($routes) {
         $routes->redirect('/', ['controller' => 'programs', 'action' => 'index']);
         $routes->fallbacks();
    });

});
