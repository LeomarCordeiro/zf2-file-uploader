<?php
return array(
    'service_manager' => array(
        'factories' => array(
            /* Forms */
            'Tryd\FileUploader\Form\Upload' => 'Tryd\FileUploader\Form\Service\UploadFormFactory',
        ),
        'shared' => array(
            'Tryd\FileUploader\Form\Upload' => false,
        ),
    ),

    'controllers' => array(
        'invokables' => array(
            'Tryd\FileUploader\Controller\Upload' => 'Tryd\FileUploader\Controller\UploadController',
        ),
    ),

    'controller_plugins' => array(
        'invokables' => array(
            'trydFileUploader' => 'Tryd\FileUploader\Controller\Plugin\PluginProxy',
        ),
    ),

    'view_manager' => array(
        'template_map' => array(
            /* Views */
            'tryd-fileuploader/upload/upload' => __DIR__ . '/../view/tryd-fileuploader/upload/upload.phtml',
        ),
        'template_path_stack' => array(
            'Tryd\FileUploader' => __DIR__ . '/../view',
        ),
    ),

    'tryd_i18n' => array(
        'translator' => array(
            'translation_file_patterns' => array(
                array(
                    'type'     => 'gettext',
                    'base_dir' => __DIR__ . '/../language',
                    'pattern'  => '%s.mo',
                    'text_domain' => 'Tryd\FileUploader',
                ),
            ),
        ),
    ),

    'asset_manager' => array(
        'resolver_configs' => array(
            'paths' => array(
                'Tryd\FileUploader' => __DIR__ . '/../public',
            ),
            'collections' => array(
                'asset/file-uploader/css/all.css' => array(
                    'asset/file-uploader/css/file-uploader.css',
                ),
                'asset/file-uploader/js/all.js' => array(
                    'asset/file-uploader/js/file-uploader.js',
                ),
            ),
            'map' => array(
                /* Styles */
                'asset/file-uploader/css/file-uploader.css' => __DIR__ . '/../public/file-uploader/css/file-uploader.css',
                /* Scripts */
                'asset/file-uploader/js/file-uploader.js' => __DIR__ . '/../public/file-uploader/js/file-uploader.js',
                /* Images */
                'asset/file-uploader/img/file-add.png' => __DIR__ . '/../public/file-uploader/img/file-add.png',
            ),
        ),
    ),
);
