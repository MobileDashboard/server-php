<?php
/**
 * MobileDashboard JSON-REST API.
 *
 * @author Ondrej Donek, <ondrejd@gmail.com>
 * @license GNU General Public License Version 3 http://www.gnu.org/licenses/gpl.txt
 * @link https://github.com/MobileDashboard/server-php for canonical repository
 */

namespace MobileDashboard\Api\Item;

/**
 * Class that implements configuration for the API.
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 */
class Configuration
{
    /**
     * @var string $serverUrl
     */
    protected $serverUrl;
    
    /**
     * @var array $dashboardHash
     */
    protected $dashboardHash;
    
    /**
     * Constructor
     *
     * @param string $serverUrl
     * @param array|string $dashboardHash
     * @return void
     */
    public function __construct($serverUrl = null, $dashboardHash = null)
    {
        $this->serverUrl = $serverUrl;
        
        if (is_array($dashboardHash)) {
            $this->dashboardHash = $dashboardHash;
        }
        elseif (!empty($dashboardHash)) {
            $this->dashboardHash = array();
            $this->dashboardHash[] = $dashboardHash;
        }
        else {
            $this->dashboardHash = array();
        }
    } // end __construct()

    /**
     * @return string
     */
    public function getServerUrl()
    {
        return $this->serverUrl;
    } // end getServerUrl()

    /**
     * @return array
     */
    public function getDashboardHash()
    {
        return $this->dashboardHash;
    } // end getDashboardHash()

} // End of Configuration

