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
 * Class representing single dashboard message.
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 */
class Message
{
    /**
     * Unique numeric identifier of the message.
     * @var integer $id
     */
    protected $id;
    
    /**
     * Numeric identifier of the dashboard.
     * @var integer $id
     */
    protected $dashboardId;
    
    /**
     * Title of the message.
     * @var string $title
     */
    protected $title;
    
    /**
     * Content of the message.
     * @var string $title
     */
    protected $content;
    
    /**
     * Author of the message.
     * @var string $title
     */
    protected $author;
    
    /**
     * Link of the message.
     * @var string $title
     */
    protected $link;
    
    /**
     * Datetime when was the message created.
     * @var string $title
     */
    protected $created;
    
    /**
     * Datetime when will the message expire.
     * NULL if the message will not expire.
     * @var string $title
     */
    protected $expired;
    
    /**
     * Datetime when was the message deleted.
     * NULL if the message wasn't deleted yet.
     * @var string $deleted
     */
    protected $deleted;
    
    /**
     * Datetime when was the message updated.
     * NULL if the message wasn't updated yet.
     * @var string $updated
     */
    protected $updated;

    /**
     * Constructor
     *
     * @param integer $id (Optional.) Unique numeric identifier of the message.
     * @param integer $dashboardId (Optional.) Numeric identifier of the dashboard.
     * @param string $title (Optional.) Title of the message.
     * @param string $content (Optional.) Content of the message.
     * @param string $author (Optional.) Author of the message.
     * @param string $link (Optional.) Link of the message.
     * @param string $created (Optional.) Datetime when was the message created.
     * @param string $expired (Optional.) Datetime when will the message expire.
     * @param string $deleted (Optional.) Datetime when was the message deleted.
     * @param string $updated (Optional.) Datetime when was the message updated.
     * @return void
     */
    public function __construct($id = null, $dashboardId = null, $title = null,
            $content = null, $author = null, $link = null, $created = null, 
            $expired = null, $deleted = null, $updated = null)
    {
        $this->setId($id);
        $this->setDashboardId($dashboardId);
        $this->setTitle($title);
        $this->setContent($content);
        $this->setAuthor($author);
        $this->setLink($link);
        $this->setCreated($created);
        $this->setExpired($expired);
        $this->setDeleted($deleted);
        $this->setUpdated($updated);
    } // end __construct()

    /**
     * @return integer ID of the message.
     */
    public function getId() {
        return $this->id;
    } // end getId()

    /**
     * Set ID of the message.
     * @param integer $id
     * @return void
     */
    public function setId($id) {
        $this->id = (int) $id;
    } // end setId($id)

    /**
     * @return integer ID of the dashboard to which message belongs.
     */
    public function getDashboardId() {
        return $this->dashboardId;
    } // end getDashboardId()

    /**
     * Set ID of the dashboard to which message belongs.
     * @param integer $dashboardId
     * @return void
     */
    public function setDashboardId($dashboardId) {
        $this->dashboardId = (int) $dashboardId;
    } // end setDashboardId($dashboardId)

    /**
     * @return string Title of the message.
     */
    public function getTitle() {
        return $this->title;
    } // end getTitle()

    /**
     * Set title of the message.
     * @param string $title
     * @return void 
     */
    public function setTitle($title) {
        $this->title = $title;
    } // end setTitle($title)

    /**
     * @return string Content of the message.
     */
    public function getContent() {
        return $this->content;
    } // end getContent()

    /**
     * Set content of the message.
     * @param string $content
     * @return void 
     */
    public function setContent($content) {
        $this->content = $content;
    } // end setContent($content)

    /**
     * @return string Author of the message.
     */
    public function getAuthor() {
        return $this->author;
    } // end getAuthor()

    /**
     * Set author of the message.
     * @param string $author
     * @return void 
     */
    public function setAuthor($author) {
        $this->author = $author;
    } // end setAuthor($author)

    /**
     * @return string Link attached to the message.
     */
    public function getLink() {
        return $this->link;
    } // end getLink()

    /**
     * Set link attached to the message.
     * @param string $link
     * @return void 
     */
    public function setLink($link) {
        $this->link = $link;
    } // end setLink($link)

    /**
     * @return string Datetime when was message created.
     */
    public function getCreated() {
        return $this->created;
    } // end getCreated()

    /**
     * Set datetime when was message created.
     * @param string $created
     * @return void
     */
    public function setCreated($created) {
        $this->created = $created;
    } // end setCreated($created)

    /**
     * @return string Datetime when will the message expire.
     */
    public function getExpired() {
        return $this->expired;
    } // end getExpired()

    /**
     * Set datetime when will the message expire.
     * @param string $expired
     * @return void
     */
    public function setExpired($expired) {
        $this->expired = $expired;
    } // end setExpired($expired)

    /**
     * @return string Datetime when was the message deleted.
     */
    public function getDeleted() {
        return $this->deleted;
    } // end getDeleted()

    /**
     * Set datetime when was the message deleted.
     * @param string $deleted
     * @return void
     */
    public function setDeleted($deleted) {
        $this->deleted = $deleted;
    } // end setDeleted($deleted)

    /**
     * @return string Datetime when was the message updated.
     */
    public function getUpdated() {
        return $this->updated;
    } // end getUpdated()

    /**
     * Set datetime when was the message updated.
     * @param string $updated
     * @return void
     */
    public function setUpdated($updated) {
        $this->updated = $updated;
    } // end setUpdated($deleted)
    
    /**
     * @return string
     */
    public function __toString() {
        return $this->title;
    } // end __toString()
} // End of Message

