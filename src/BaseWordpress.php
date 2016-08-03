<?php

namespace Everglory\BaseModel;

use Eloquent;

class BaseWordpress extends Eloquent
{
    protected $connection = 'wordpress';
}