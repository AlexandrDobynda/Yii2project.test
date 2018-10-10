<?php

namespace frontend\tests;

use frontend\controllers\ProducersController;
use frontend\tests\fixtures\ProducersFixture;

class ProducersControllerTest extends \Codeception\Test\Unit
{
    /**
     * @var \frontend\tests\UnitTester
     */
    protected $tester;

    public function _fixtures()
    {
        return ['producers' => ProducersFixture::className()];
    }
    

    public function testActionDelete()
    {

    }
}