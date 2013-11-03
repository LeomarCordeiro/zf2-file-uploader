<?php
/**
 * TrydFileUploader
 *
 * @copyright Copyright (c) 2013, Yassel Avila Gil (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/projects/trydfileuploader
 */

namespace Tryd\FileUploader\Controller\Plugin;

use Tryd\Base\Mvc\Controller\Plugin\AbstractPluginProxy;

/**
 * Controller Plugin Proxy for Tryd\FileUploader
 */
class PluginProxy extends AbstractPluginProxy
{
    /**
     * @var array
     */
    protected $invokableClasses = array(
        'uploadManager' => 'Tryd\FileUploader\Controller\Plugin\UploadManager',
    );
}
