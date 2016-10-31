<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\app\events;

/**
 * RegisterCpAlertsEvent class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class RegisterCpAlertsEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var array The registered CP alerts
     */
    public $alerts = [];
}
