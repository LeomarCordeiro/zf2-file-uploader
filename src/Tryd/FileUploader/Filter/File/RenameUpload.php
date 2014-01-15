<?php
/**
 * TrydFileUploader
 *
 * @copyright Copyright (c) 2013 - 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/projects/trydfileuploader
 */

namespace Tryd\FileUploader\Filter\File;

use Zend\Filter\File\RenameUpload as BaseRenameUpload;

class RenameUpload extends BaseRenameUpload
{
    /**
     * {@inheritDoc}
     */
    protected function applyRandomToFilename($source, $filename)
    {
        $filenameInfo = pathinfo($filename);
        $sourceInfo = pathinfo($source);

        $filename = $filenameInfo['filename'];
        $filename = empty($filename) ? uniqid() : ($filename . uniqid('-'));

        $extension = '';

        if ($this->getUseUploadExtension() && isset($sourceInfo['extension'])) {
            $extension = '.' . strtolower($sourceInfo['extension']);
        } elseif (isset($filenameInfo['extension'])) {
            $extension = '.' . strtolower($filenameInfo['extension']);
        }

        $ret = $filename . $extension;

        return $ret;
    }
}
