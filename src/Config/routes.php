<?php
return [
    'student' => [
        'controller' => 'StudentController',
        'actions'    => [
            'add' => [
                'name'   => 'add',
                'method' => 'POST'
            ]
        ]
    ],
    'school-system' => [
        'controller' => 'SchoolSystemController',
        'actions'    => [
            'transfer' => [
                'name'   => 'transfer',
                'method' => 'GET'
            ]
        ]
    ]
];