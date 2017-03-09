<?php
use MobileDashboard\Api\Item\Message;

class MessageTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return Message
     */
    protected function getMessage() {
        return  new Message(14, 7, 'Test message', 'Content of the test message', 
                'ondrejd', 'http://www.test.cz/', '2016-12-09 19:45:00', 
                '2016-12-24 12:00:00', '2016-12-11 20:05:00', '2016-12-11 20:05:00');
    }

    public function testConstruct()
    {
        $a = new Message();
        $this->assertEmpty($a->getId());
        $this->assertEmpty($a->getDashboardId());
        $this->assertEmpty($a->getTitle());
        $this->assertEmpty($a->getContent());
        $this->assertEmpty($a->getAuthor());
        $this->assertEmpty($a->getLink());
        $this->assertEmpty($a->getCreated());
        $this->assertEmpty($a->getExpired());
        $this->assertEmpty($a->getDeleted());
        $this->assertEmpty($a->getUpdated());
        $this->assertEmpty($a->__toString());
    }
    
    public function testGetId()
    {
        $a = $this->getMessage();
        $this->assertEquals(14, $a->getId());
    }
    
    public function testSetId()
    {
        $a = new Message();
        $a->setId(14);
        $this->assertEquals(14, $a->getId());
    }
    
    public function testGetDashoardtId()
    {
        $a = $this->getMessage();
        $this->assertEquals(7, $a->getDashboardId());
    }
    
    public function testSetDashboardtId()
    {
        $a = new Message();
        $a->setDashboardId(7);
        $this->assertEquals(7, $a->getDashboardId());
    }
    
    public function testGetTitle()
    {
        $a = $this->getMessage();
        $this->assertEquals('Test message', $a->getTitle());
    }
    
    public function testSetTitle()
    {
        $a = new Message();
        $a->setTitle('Test message');
        $this->assertEquals('Test message', $a->getTitle());
    }
    
    public function testGetContent()
    {
        $a = $this->getMessage();
        $this->assertEquals('Content of the test message', $a->getContent());
    }
    
    public function testSetContent()
    {
        $a = new Message();
        $a->setContent('Content of the test message');
        $this->assertEquals('Content of the test message', $a->getContent());
    }
    
    public function testGetAuthor()
    {
        $a = $this->getMessage();
        $this->assertEquals('ondrejd', $a->getAuthor());
    }
    
    public function testSetAuthor()
    {
        $a = new Message();
        $a->setAuthor('ondrejd');
        $this->assertEquals('ondrejd', $a->getAuthor());
    }
    
    public function testGetLink()
    {
        $a = $this->getMessage();
        $this->assertEquals('http://www.test.cz/', $a->getLink());
    }
    
    public function testSetLink()
    {
        $a = new Message();
        $a->setLink('http://www.test.cz/');
        $this->assertEquals('http://www.test.cz/', $a->getLink());
    }
    
    public function testGetCreated()
    {
        $a = $this->getMessage();
        $this->assertEquals('2016-12-09 19:45:00', $a->getCreated());
    }
    
    public function testSetCreated()
    {
        $a = new Message();
        $a->setCreated('2016-12-09 19:45:00');
        $this->assertEquals('2016-12-09 19:45:00', $a->getCreated());
    }
    
    public function testGetExpired()
    {
        $a = $this->getMessage();
        $this->assertEquals('2016-12-24 12:00:00', $a->getExpired());
    }
    
    public function testSetExpired()
    {
        $a = new Message();
        $a->setExpired('2016-12-24 12:00:00');
        $this->assertEquals('2016-12-24 12:00:00', $a->getExpired());
    }
    
    public function testGetDeleted()
    {
        $a = $this->getMessage();
        $this->assertEquals('2016-12-11 20:05:00', $a->getDeleted());
    }
    
    public function testSetDeleted()
    {
        $a = new Message();
        $a->setDeleted('2016-12-11 20:05:00');
        $this->assertEquals('2016-12-11 20:05:00', $a->getDeleted());
    }
    
    public function testGetUpdated()
    {
        $a = $this->getMessage();
        $this->assertEquals('2016-12-11 20:05:00', $a->getUpdated());
    }
    
    public function testSetUpdated()
    {
        $a = new Message();
        $a->setUpdated('2016-12-11 20:05:00');
        $this->assertEquals('2016-12-11 20:05:00', $a->getUpdated());
    }
}
