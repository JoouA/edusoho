<?php

namespace Topxia\Service\User\Tests;

use Topxia\Service\Common\BaseTestCase;
use Topxia\Service\User\LoginRecordService;
use Topxia\Service\User\UserService;
use Topxia\Common\ArrayToolkit;

// TODO

class LoginRecordServiceTest extends BaseTestCase
{

    private function getLoginRecordService()
    {
        return $this->getServiceKernel()->createService('User.LoginRecordService');
    }

}