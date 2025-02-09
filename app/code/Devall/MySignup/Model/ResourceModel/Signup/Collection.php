<?php

namespace Devall\MySignup\Model\ResourceModel\Signup;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Devall\MySignup\Model\Signup as SignupModel;
use Devall\MySignup\Model\ResourceModel\Signup as SignupResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(SignupModel::class, SignupResource::class);
    }
}
