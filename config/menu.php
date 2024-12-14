<?php
return [
    'main' => [
        'title' => 'Main',
        'items' => [
            [
                'label' => 'Dashboard',
                'icon' => 'fe fe-home',
                'route' => 'admin.dashboard',
                'active' => 'admin',
            ],
        ],
    ],
    'blog' => [
        'items' => [
            [
                'label' => 'Blog',
                'icon' => 'fe fe-file-text',
                'route' => 'admin.blogs.index',
                'active' => 'admin/blogs',
            ],
        ],
    ],
    'case-studies' => [
        'items' => [
            [
                'label' => 'Case Studies',
                'icon' => 'fe fe-file-text',
                'route' => 'admin.cases.index',
                'active' => 'admin/cases',
            ],
        ],
    ],
    'media' => [
        'items' => [
            [
                'label' => 'Media & Publications',
                'icon' => 'fe fe-file-text',
                'route' => 'admin.medias.index',
                'active' => 'admin/medias'
            ],
        ],
    ],
    'tools' => [
        'title' => 'Tools & Management',
        'items' => [
            [
                'label' => 'Users',
                'icon' => 'fe fe-user',
                // 'route' => 'javascript:void(0)',
                'active' => 'admin/users*',
                'sub_items' => [
                    [
                        'label' => 'Manage Users',
                        'route' => 'admin.users.index',
                        'active' => 'admin/users*',
                    ],
                ],
            ],
        ],
    ],
];
