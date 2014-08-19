<?php
/**
 * Tryd\FileUploader
 *
 * @copyright Copyright (c) 2013 - 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/project/zf2-file-uploader
 */

namespace Tryd\FileUploader\Form\Element;

use Zend\Form\Element\File as BaseFile;
use Tryd\FileUploader\Filter\File\RenameUpload as RenameUploadFilter;

class File extends BaseFile
{
    /**
     * @var RenameUploadFilter
     */
    protected $renameUploadFilter;

    /**
     * @return RenameUploadFilter
     */
    public function getRenameUploadFilter()
    {
        if (null === $this->renameUploadFilter) {
            $this->renameUploadFilter = new RenameUploadFilter([
                'target'=>'./data/',//TODO
                'overwrite' => false,
                'randomize' => false,
                'use_upload_name' => true,
                'use_upload_extension' => true,
            ]);
        }

        return $this->renameUploadFilter;
    }

    /**
     * @param RenameUploadFilter $renameUploadFilter
     * @return File
     */
    public function setRenameUploadFilter(RenameUploadFilter $renameUploadFilter)
    {
        $this->renameUploadFilter = $renameUploadFilter;
        return $this;
    }

    /**
     * Should return an array specification compatible with
     * {@link Zend\InputFilter\Factory::createInput()}.
     *
     * @return array
     */
    public function getInputSpecification()
    {
        return [
            'type' => 'Zend\InputFilter\FileInput',
            'name' => $this->getName(),
            'required' => false,
            'filters' => [
                $this->getRenameUploadFilter(),
            ],
        ];
    }
}
