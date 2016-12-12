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
 * Class representing single dashboard.
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 */
class Dashboard
{
    /**
     * Unique numeric identifier of the dashboard.
     * @var integer $id
     */
    protected $id;
    
    /**
     * Unique numeric identifier of the dashboard's parent.
     * @var integer $id
     */
    protected $parentId;
    
    /**
     * Hash of the dashboard.
     * @var string $hash
     */
    protected $hash;
    
    /**
     * Displayed name of the dashboard.
     * @var string $name
     */
    protected $name;

    /**
     * Constructor
     *
     * @param integer $id (Optional.) Id of the dashboard.
     * @param integer $parentId (Optional.) Id of the dashboard's parent.
     * @param string $hash (Optional.) Hash of the dashboard.
     * @param string $name (Optional.) Name of the dashboard.
     * @return void
     */
    public function __construct($id = null, $parentId = null, $hash = null, $name = null)
    {
        $this->setId($id);
        $this->setParentId($parentId);
        $this->setHash($hash);
        $this->setName($name);
    } // end __construct()

    /**
     * @return integer ID of the dashboard.
     */
    public function getId() {
        return $this->id;
    } // end getId()

    /**
     * Set ID of the dashboard.
     * @param integer $id
     * @return void
     */
    public function setId($id) {
        $this->id = (int) $id;
    } // end setId($id)

    /**
     * @return integer ID of the dashboard's parent.
     */
    public function getParentId() {
        return $this->parentId;
    } // end getParentId()

    /**
     * Set ID of the dashboard's parent.
     * @param integer $parentId
     * @return void
     */
    public function setParentId($parentId) {
        $this->parentId = (int) $parentId;
    } // end setParentId($parentId)

    /**
     * @return string Hash of the dashboard.
     */
    public function getHash() {
        return $this->hash;
    } // end getHash()

    /**
     * Set hash of the dashboard.
     * @param string $hash
     * @return void 
     */
    public function setHash($hash) {
        $this->hash = $hash;
    } // end setHash($hash)

    /**
     * @return string Name of the dashboard.
     */
    public function getName() {
        return $this->name;
    } // end getName()

    /**
     * Set name of the dashboard.
     * @param string $name
     * @return void 
     */
    public function setName($name) {
        $this->name = $name;
    } // end setName($name)
    
    /**
     * @return string
     */
    public function __toString() {
        return $this->name;
    } // end __toString()
} // End of Dashboard

