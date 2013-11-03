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
);
