<?php
/**
 * TrydFileUploader
 *
 * @copyright Copyright (c) 2013, Yassel Avila Gil (http://yasselavila.com/)
 * @license   http://tryd.net/license/new-bsd New BSD License
 * @link      http://tryd.net/projects/trydfileuploader
 */

namespace Tryd\FileUploader\View\Helper;

use Zend\View\Helper\AbstractHelper;

class DndWidget extends AbstractHelper
{
    /**
     * Helper entry point
     *
     * @return string
     */
    public function __invoke()
    {
        $result = $this->getView()->partial('tryd-fileuploader/widget/dnd');
        return $result;
    }
}
