<?php
/**
 * TrydFileUploader
 *
 * @copyright Copyright (c) 2013 - 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/project/trydfileuploader
 */

namespace Tryd\FileUploader\Form\Element\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Tryd\FileUploader\Form\Element\DndFile;

class DndFileElementFactory implements
    FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return DndFile
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $element = new DndFile();

        return $element;
    }
}
