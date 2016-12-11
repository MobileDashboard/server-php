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
     * @return MobileDashboard\Api\Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    } // end getConfiguration()

} // End of Api

