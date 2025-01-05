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
                'icon' => 'fe fe-book-open',
                'route' => 'admin.cases.index',
                'active' => 'admin/cases',
            ],
        ],
    ],
    'media' => [
        'items' => [
            [
                'label' => 'Media & Publications',
                'icon' => 'fe fe-camera',
                'route' => 'admin.medias.index',
                'active' => 'admin/medias'
            ],
        ],
    ],
    'attoneys' => [
        'items' => [
            [
                'label' => 'Attorneys',
                'icon' => 'fe fe-briefcase',
                'route' => 'admin.attorneys.index',
                'active' => 'admin/attorneys',
            ],
        ],
    ],
    'clients' => [
        'items' => [
            [
                'label' => 'Clients',
                'icon' => 'fe fe-users',
                'route' => 'admin.clients.index',
                'active' => 'admin/clients',
            ],
        ],
    ],
    'gallerys' => [
        'items' => [
            [
                'label' => 'Gallery',
                'icon' => 'fe fe-image',
                'route' => 'admin.gallerys.index',
                'active' => 'admin/gallerys',
            ],
        ],
    ],
    'reviews' => [
        'items' => [
            [
                'label' => 'Reviews',
                'icon' => 'fe fe-user',
                'route' => 'admin.reviews.index',
                'active' => 'admin/reviews',
            ],
        ],
    ],
    'internship' => [
        'items' => [
            [
                'label' => 'Internship',
                'icon' => 'fe fe-user',
                'route' => 'admin.internships.index',
                'active' => 'admin/internships',
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
