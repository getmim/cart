<?php

return [
    '__name' => 'cart',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/cart.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/cart' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'product' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'Cart\\Model' => [
                'type' => 'file',
                'base' => 'modules/cart/model'
            ]
        ],
        'files' => []
    ],
    'libEnum' => [
        'enums' => [
            'cart.status' => ['Canceled', 'Active', 'Paid']
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'cart' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'items' => [
                    'type' => 'number'
                ],
                'quantity' => [
                    'type' => 'number'
                ],
                'price' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'status' => [
                    'type' => 'enum',
                    'enum' => 'cart.status'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'cart-item' => [
                'id' => [
                    'type' => 'number'
                ],
                'cart' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Cart\\Model\\Cart',
                        'field' => 'id',
                        'number' => 'number'
                    ],
                    'format' => 'cart'
                ],
                'product' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Product\\Model\\Product',
                        'field' => 'id',
                        'number' => 'number'
                    ],
                    'format' => 'product'
                ],
                'quantity' => [
                    'type' => 'number'
                ],
                'price' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'total' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
