<?php
/**
 * TrydFileUploader
 *
 * @copyright Copyright (c) 2013 - 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/projects/trydfileuploader
 */

namespace Tryd\FileUploader\Form;

use Zend\Form\Form;

class Upload extends Form
{
    /**
     * @param string $name [optional]
     * @return void
     */
    public function __construct($name = null)
    {
        parent::__construct($name ?: 'file_upload');
        $this->setAttribute('method', 'post');
        $this->setAttribute('enctype', 'multipart/form-data');

        $this->add(array(
            'type' => 'Zend\Form\Element\File',
            'name' => 'file',
            'options' => array(
                'label' => 'File(s)',
            ),
            'attributes' => array(
                'id' => 'file',
                'multiple' => true,
            ),
        ));

        $this->add(array(
            'type' => 'Zend\Form\Element\Submit',
            'name' => 'submit',
            'attributes' => array(
                'value' => 'Upload',
            ),
        ));
    }
}
