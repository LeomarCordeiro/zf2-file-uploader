<?php
/**
 * TrydFileUploader
 *
 * @copyright Copyright (c) 2013 - 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/projects/trydfileuploader
 */

namespace Tryd\FileUploader\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use Zend\Stdlib\ResponseInterface as Response;
use Zend\View\Model\ViewModel;
use Tryd\FileUploader\Form\Upload as UploadForm;

class UploadManager extends AbstractPlugin implements
    ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;

    /**
     * @var UploadForm
     */
    protected $form;

    /**
     * Plugin entry point
     *
     * @return UploadManager
     */
    public function __invoke()
    {
        return $this;
    }

    /**
     * Perform file upload
     *
     * @return Response|ViewModel|mixed
     */
    public function upload()
    {
        $controller = $this->getController();
        $form = $this->getForm();

        $prg = $controller->fileprg($form);

        if ($prg instanceof Response) {
            return $prg;
        }

        if ((false !== $prg) && $form->isValid()) {
            /* Save the form and redirect */
            return $controller->redirect()->refresh();
        }

        $viewModel = new ViewModel([
            'form' => $form,
        ]);

        $viewModel->setTemplate('tryd-fileuploader/upload/upload');

        return $viewModel;
    }

    /**
     * @return UploadForm
     */
    public function getForm()
    {
        if (null === $this->form) {
            $serviceLocator = $this->getController()->getServiceLocator();
            $this->form = $serviceLocator->get('Tryd\FileUploader\Form\Upload');
        }

        return $this->form;
    }

    /**
     * @param UploadForm $form
     * @return UploadManager
     */
    public function setForm(UploadForm $form)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * @return string Target file path or directory
     */
    public function getTarget()
    {
        $inputFilter = $this->getForm()->getInputFilter();
        $renameUploadFilter = $inputFilter->getRenameUploadFilter();
        $target = $renameUploadFilter->getTarget();

        return $target;
    }

    /**
     * @param string $target Target file path or directory
     * @return UploadManager
     */
    public function setTarget($target)
    {
        $inputFilter = $this->getForm()->getInputFilter();
        $renameUploadFilter = $inputFilter->getRenameUploadFilter();
        $renameUploadFilter->setTarget($target);

        return $this;
    }
}
