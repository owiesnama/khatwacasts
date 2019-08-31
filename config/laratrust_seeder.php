<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'podcast' => 'c,r,u,d',
            'comments' => 'c,r,u,d'
        ],
        'administrator' => [
            'podcast' => 'c,r,u,d',
            'users' => 'r,u'
        ],
        'user' => [
            'podcast' => 'r'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
