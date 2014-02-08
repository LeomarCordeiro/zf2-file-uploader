<?php
/**
 * TrydFileUploader
 *
 * @copyright Copyright (c) 2013 - 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/project/trydfileuploader
 */

namespace Tryd\FileUploader\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class UploadController extends AbstractActionController
{
    /**
     * Action: Upload
     *
     * @return mixed
     */
    public function uploadAction()
    {
        $uploadManager = $this->trydFileUploader()->uploadManager();
        $uploadManager->setTarget('./data/upload/');

        return $uploadManager->upload();
    }
}
