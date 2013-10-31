<?php
/**
 * TrydFileUploader
 *
 * @copyright Copyright (c) 2013, Yassel Avila Gil (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/projects/trydfileuploader
 */

namespace Tryd\FileUploader;

use Tryd\Base\Module\AbstractModule;

class Module extends AbstractModule
{
    /**
     * Return an array of modules on which the current one depends on
     *
     * @return array
     */
    public function getModuleDependencies()
    {
        return array(
            'Tryd\I18n',
        );
    }
}
