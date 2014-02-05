<?php
return [
    'service_manager' => [
        'factories' => [
            /* Forms */
            'Tryd\FileUploader\Form\Upload' => 'Tryd\FileUploader\Form\Service\UploadFormFactory',
        ],
        'shared' => [
            'Tryd\FileUploader\Form\Upload' => false,
        ],
    ],

    'controllers' => [
        'invokables' => [
            'Tryd\FileUploader\Controller\Upload' => 'Tryd\FileUploader\Controller\UploadController',
        ],
    ],

    'controller_plugins' => [
        'invokables' => [
            'trydFileUploader' => 'Tryd\FileUploader\Controller\Plugin\PluginProxy',
        ],
    ],

    'view_helpers' => [
        'invokables' => [
            'trydFileUploader' => 'Tryd\FileUploader\View\Helper\HelperProxy',
        ],
    ],

    'view_manager' => [
        'template_map' => [
            /* Views */
            'tryd-fileuploader/upload/upload' => __DIR__ . '/../view/tryd-fileuploader/upload/upload.phtml',
            /* Views for Widgets */
            'tryd-fileuploader/widget/dnd' => __DIR__ . '/../view/tryd-fileuploader/widget/dnd.phtml',
        ],
        'template_path_stack' => [
            'Tryd\FileUploader' => __DIR__ . '/../view',
        ],
    ],

    'tryd_i18n' => [
        'translator' => [
            'translation_file_patterns' => [
                [
                    'type'     => 'gettext',
                    'base_dir' => __DIR__ . '/../language',
                    'pattern'  => '%s.mo',
                    'text_domain' => 'Tryd\FileUploader',
                ],
            ],
        ],
    ],

    'asset_manager' => [
        'resolver_configs' => [
            'paths' => [
                'Tryd\FileUploader' => __DIR__ . '/../public',
            ],
            'collections' => [
                'file-uploader/css/all.css' => [
                    'file-uploader/css/file-uploader.css',
                ],
                'file-uploader/js/all.js' => [
                    'file-uploader/js/file-uploader.js',
                ],
            ],
            'map' => [
                /* Styles */
                'file-uploader/css/file-uploader.css' => __DIR__ . '/../public/css/file-uploader.css',
                /* Scripts */
                'file-uploader/js/file-uploader.js' => __DIR__ . '/../public/js/file-uploader.js',
                /* Images */
                'file-uploader/img/file-add.png' => __DIR__ . '/../public/img/file-add.png',
            ],
        ],
    ],
];
