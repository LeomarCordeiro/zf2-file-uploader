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
);
