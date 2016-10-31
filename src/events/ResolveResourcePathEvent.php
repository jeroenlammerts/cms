<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\app\events;

/**
 * ResolveResourcePathEvent class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class ResolveResourcePathEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var string The resource URI (sans "cpresources/").
     */
    public $uri;

    /**
     * @var string The file path that the URI should resolve to.
     */
    public $path;
}
