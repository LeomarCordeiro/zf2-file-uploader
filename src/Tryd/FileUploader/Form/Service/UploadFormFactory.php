<?php
/**
 * Tryd\FileUploader
 *
 * @copyright Copyright (c) 2013 - 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/project/zf2-file-uploader
 */

namespace Tryd\FileUploader\Form\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Tryd\FileUploader\Form\Upload as UploadForm;
use Tryd\FileUploader\Form\UploadFilter;

class UploadFormFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return UploadForm
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $form = new UploadForm();
        $form->setInputFilter(new UploadFilter());

        return $form;
    }
}
