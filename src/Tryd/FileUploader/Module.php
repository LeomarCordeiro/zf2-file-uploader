<?php
/**
 * Tryd\FileUploader
 *
 * @copyright Copyright (c) 2013 - 2014, Yassel Avila (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/project/zf2-file-uploader
 */

namespace Tryd\FileUploader;

use Tryd\Base\Module\AbstractModule;

class Module extends AbstractModule
{
    /**
     * {@inheritDoc}
     */
    public function getModuleDependencies()
    {
        return [
            'Tryd\AssetManager',
            'Tryd\JQuery',
            'Tryd\I18n',
        ];
    }
}
