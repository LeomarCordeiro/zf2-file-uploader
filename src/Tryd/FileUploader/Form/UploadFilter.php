<?php
/**
 * TrydFileUploader
 *
 * @copyright Copyright (c) 2013 - 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/project/trydfileuploader
 */

namespace Tryd\FileUploader\Form;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\FileInput;
use Tryd\FileUploader\Filter\File\RenameUpload as RenameUploadFilter;

class UploadFilter extends InputFilter
{
    /**
     * @var RenameUploadFilter
     */
    protected $renameUploadFilter;

    /**
     * @return void
     */
    public function __construct()
    {
        $fileInput = new FileInput('file');
        $fileInput->setRequired(true);

        $fileInput->getFilterChain()
                  ->attach($this->getRenameUploadFilter());

        $this->add($fileInput, 'file');
    }

    /**
     * @return RenameUploadFilter
     */
    public function getRenameUploadFilter()
    {
        if (null === $this->renameUploadFilter) {
            $this->renameUploadFilter = new RenameUploadFilter([
                'overwrite' => false,
                'randomize' => false,
                'use_upload_name' => true,
                'use_upload_extension' => true,
            ]);
        }

        return $this->renameUploadFilter;
    }
}
