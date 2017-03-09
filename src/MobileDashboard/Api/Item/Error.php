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
 * Class representing single dashboard error message.
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 */
class Error
{
    /**
     * Error message.
     * @var string $message
     */
    protected $message;

    /**
     * Constructor
     *
     * @param string $message (Optional.) Error message.
     * @return void
     */
    public function __construct($message = null)
    {
        $this->setMessage($message);
    } // end __construct()

    /**
     * @return string Error message.
     */
    public function getMessage()
    {
        return $this->message;
    } // end getMessage()

    /**
     * Set error message
     * @param string $message
     * @return void
     */
    public function setMessage($message)
    {
        $this->message = $message;
    } // end setMessage($message)
    
    /**
     * @return string
     */
    public function __toString() {
        return $this->message;
    } // end __toString()
} // End of Error

