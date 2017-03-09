<?php
use MobileDashboard\Api\Item\Dashboard;

class DashboardTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $a = new Dashboard();
        $this->assertEmpty($a->getId());
        $this->assertEmpty($a->getParentId());
        $this->assertEmpty($a->getHash());
        $this->assertEmpty($a->getName());
        $this->assertEmpty($a->__toString());
    }
    
    public function testGetId()
    {
        $a = new Dashboard(11, 5, 'TEST0', 'Test Board');
        $this->assertEquals(11, $a->getId());
    }
    
    public function testSetId()
    {
        $a = new Dashboard();
        $a->setId(11);
        $this->assertEquals(11, $a->getId());
    }
    
    public function testGetParentId()
    {
        $a = new Dashboard(11, 5, 'TEST0', 'Test Board');
        $this->assertEquals(5, $a->getParentId());
    }
    
    public function testSetParentId()
    {
        $a = new Dashboard();
        $a->setParentId(5);
        $this->assertEquals(5, $a->getParentId());
    }
    
    public function testGetHash()
    {
        $a = new Dashboard(11, 5, 'TEST0', 'Test Board');
        $this->assertEquals('TEST0', $a->getHash());
    }
    
    public function testSetHash()
    {
        $a = new Dashboard();
        $a->setHash('TEST0');
        $this->assertEquals('TEST0', $a->getHash());
    }
    
    public function testGetName()
    {
        $a = new Dashboard(11, 5, 'TEST0', 'Test Board');
        $this->assertEquals('Test Board', $a->getName());
        $this->assertEquals('Test Board', $a->__toString());
    }
    
    public function testSetName()
    {
        $a = new Dashboard();
        $a->setName('Test Board');
        $this->assertEquals('Test Board', $a->getName());
    }
}
