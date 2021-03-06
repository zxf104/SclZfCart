<?php

namespace SclZfCartTests\Controller\Plugin;

use SclZfCart\Controller\Plugin\Cart;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-08 at 17:05:29.
 */
class CartTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Cart
     */
    protected $object;

    protected $serviceLocator;

    protected $controller;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Cart;

        $this->serviceLocator = $this->getMock('Zend\ServiceManager\ServiceLocatorInterface');

        $this->controller = $this->getMock('Zend\Mvc\Controller\AbstractActionController');

        $this->controller->expects($this->any())
            ->method('getServiceLocator')
            ->will($this->returnValue($this->serviceLocator));

        $this->object->setController($this->controller);
    }

    /**
     * @covers SclZfCart\Controller\Plugin\Cart::getServiceLocator
     * @covers SclZfCart\Controller\Plugin\Cart::__invoke
     */
    public function test__invoke()
    {
        $this->serviceLocator->expects($this->once())
            ->method('get')
            ->with($this->equalTo('SclZfCart\Cart'))
            ->will($this->returnValue('CART_OBJECT'));

        $this->assertEquals('CART_OBJECT', $this->object->__invoke());
    }
}
