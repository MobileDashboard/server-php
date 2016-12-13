<?php
/**
 * MobileDashboard JSON-REST API.
 *
 * @author Ondrej Donek, <ondrejd@gmail.com>
 * @license GNU General Public License Version 3 http://www.gnu.org/licenses/gpl.txt
 * @link https://github.com/MobileDashboard/server-php for canonical repository
 */

namespace MobileDashboard\Api;

/**
 * Main API class.
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 */
class Api
{
    /**
     * @var MobileDashboard\Api\Configuration $configuration
     */
    protected $configuration;

    /**
     * Constructor
     *
     * @param MobileDashboard\Api\Configuration $configuration
     * @return void
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    } // end __construct()

    /**
     * Implementation of REST API method "info".
     * 
     * @link https://github.com/MobileDashboard/server-php#method-info
     * @param Request $request (Optional.)
     * @return void
     */
    public function info(Request $request = null)
    {
        // ...
    }

    /**
     * Implementation of REST API method "messages".
     * 
     * @link https://github.com/MobileDashboard/server-php#method-messages
     * @param Request $request (Optional.)
     * @return void
     */
    public function messages(Request $request = null)
    {
        // ...
    }

    /**
     * Implementation of REST API method "add".
     * 
     * @link https://github.com/MobileDashboard/server-php#method-add
     * @param Request $request (Optional.)
     * @return void
     */
    public function add(Request $request = null)
    {
        // ...
    }

    /**
     * Implementation of REST API method "update".
     * 
     * @link https://github.com/MobileDashboard/server-php#method-update
     * @param Request $request (Optional.)
     * @return void
     */
    public function update(Request $request = null)
    {
        // ...
    }

    /**
     * Implementation of REST API method "remove".
     * 
     * @link https://github.com/MobileDashboard/server-php#method-remove
     * @param Request $request (Optional.)
     * @return void
     */
    public function remove(Request $request = null)
    {
        // ...
    }
} // End of Api

