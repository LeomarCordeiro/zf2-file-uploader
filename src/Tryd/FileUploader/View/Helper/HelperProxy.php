<?php
/**
 * TrydFileUploader
 *
 * @copyright Copyright (c) 2013, Yassel Avila Gil (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/projects/trydfileuploader
 */

namespace Tryd\FileUploader\View\Helper;

use Tryd\Base\View\Helper\AbstractHelperProxy;

/**
 * Helper Proxy for Tryd\FileUploader
 */
class HelperProxy extends AbstractHelperProxy
{
    /**
     * @var array
     */
    protected $invokableClasses = array(
        'dndWidget' => 'Tryd\FileUploader\View\Helper\DndWidget',
    );

    /**
     * @var array
     */
    protected $shared = array(
        'dndWidget' => false,
    );
}
