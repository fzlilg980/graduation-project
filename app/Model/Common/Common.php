<?php

namespace App\Model\Common;

use Illuminate\Database\Eloquent\Model;

class Common extends Model
{
    public $timestamp = false;

    public function __construct()
    {
        $class = get_class($this);
        $class = explode('\\', $class);
        $class = $class[count($class) - 1];
        $table = toUnderScore($class);
        $this->table = $table;
        parent::__construct();
    }
}
