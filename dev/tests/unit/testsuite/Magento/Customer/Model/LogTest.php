<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Customer\Model;

/**
 * Customer log model test.
 *
 * @package Magento\Customer\Model
 */
class LogTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Customer log model.
     *
     * @var \Magento\Customer\Model\Log
     */
    protected $log;

    /**
     * @var array
     */
    protected $logData = [
        'customer_id' => 369,
        'last_login_at' => '2015-03-04 12:00:00',
        'last_visit_at' => '2015-03-04 12:01:00',
        'last_logout_at' => '2015-03-04 12:05:00',
    ];

    protected function setUp()
    {
        $objectManagerHelper = new \Magento\TestFramework\Helper\ObjectManager($this);

        $this->log = $objectManagerHelper->getObject(
            'Magento\Customer\Model\Log',
            [
                'customerId' => $this->logData['customer_id'],
                'lastLoginAt' => $this->logData['last_login_at'],
                'lastVisitAt' => $this->logData['last_visit_at'],
                'lastLogoutAt' => $this->logData['last_logout_at']
            ]
        );
    }

    public function testGetCustomerId()
    {
        $this->assertEquals($this->logData['customer_id'], $this->log->getCustomerId());
    }

    public function testGetLastLoginAt()
    {
        $this->assertEquals($this->logData['last_login_at'], $this->log->getLastLoginAt());
    }

    public function testGetLastVisitAt()
    {
        $this->assertEquals($this->logData['last_visit_at'], $this->log->getLastVisitAt());
    }

    public function testGetLastLogoutAt()
    {
        $this->assertEquals($this->logData['last_logout_at'], $this->log->getLastLogoutAt());
    }
}
