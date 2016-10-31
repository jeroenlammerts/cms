<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\app\events;

/**
 * RegisterElementSourcesEvent class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class RegisterElementSourcesEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var string|null The context ('index' or 'modal').
     */
    public $context;

    /**
     * @var array List of registered sources for the element type.
     */
    public $sources = [];
}
