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
 * Class that encapsulates request to the server.
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 */
class Request
{
    /**
     * @var string $method
     */
    protected $method;

    /**
     * @var integer $type
     */
    protected $type = INPUT_GET;

    /**
     * Retrieves requested method (info, messages, add, update, remove).
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Get for request parameters.
     * @param string $name
     * @return string Returns NULL if name doesn't exist in the request.
     */
    public function __get($name)
    {
        return filter_input($this->type, $name, FILTER_DEFAULT);
    }
} // End of Request

