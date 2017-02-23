<?php
namespace Jsuarez\Wikitude\Facades;
use Illuminate\Support\Facades\Facade;
class Wikitude extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'wikitude';
    }
}