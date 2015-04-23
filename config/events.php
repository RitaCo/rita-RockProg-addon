<?php
use Cake\Event\Event;
use Cake\Event\EventManager;

EventManager::instance()->attach(function (Event $event) {
    $event->result['content'][] = 'Learning.Navigator/menu';
}, 'rita.admin.menu');
