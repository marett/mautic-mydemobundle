<?php
return array(
    'name'        => 'MyDemo',
    'description' => 'My bare-bones Mautic plugin demo',
    'author'      => 'Brendan Marett',
    'version'     => '0.1.0',

    'routes' => array(
        'main' => array(
            'mydemo_index'  => array(
                'path'       => '/mydemo',
                'controller' => 'MyDemoBundle:Default:index'
            )
        )
    ),

    'menu'   => array(
        'main' => array(
            'priority' => 13,
            'items'    => array(
                'plugin.mydemo.menu.index' => array(
                    'route'     => 'mydemo_index',
                    'iconClass' => 'fa-lightbulb-o'
                )
            )
        )
    )
);
