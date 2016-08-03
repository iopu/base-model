<?php

namespace Everglory\BaseModel;

use Eloquent;

class BaseProduct extends Eloquent
{
    protected $connection = 'eg_product';
}