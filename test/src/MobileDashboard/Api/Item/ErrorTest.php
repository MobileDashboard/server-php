<?php
use PHPUnit\Framework\TestCase;
use MobileDashboard\Api\Item\Error;

class ErrorTest extends TestCase
{
    public function testConstruct()
    {
        $a = new Error('Test message');
        $this->assertEquals('Test message', $a->__toString());
        
        $aa = new Error();
        $this->assertEmpty($aa->__toString());
    }
    
    public function testGetMessage()
    {
        $a = new Error();
        $this->assertEmpty($a->getMessage());
    }
    
    public function testSetMessage()
    {
        $a = new Error();
        $a->setMessage('Test message');
        $this->assertEquals('Test message', $a->getMessage());
    }
}
