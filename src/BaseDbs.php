<?php

namespace Everglory\BaseModel;

use Eloquent;

class BaseDbs extends Eloquent
{
    protected $connection = 'ec_dbs';
}