<?php
/**
 * Part of Arcsecond package
 *
 * Arcsecond Facade
 *
 * @package arcsecond-laravel
 * @author Andrii Pushkar <zingeon1@gmail.com>
 * @access public
 */

namespace Zingeon\ArcsecondLaravel\Facades;
use Illuminate\Support\Facades\Facade;

class Arcsecond extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor() {
        return 'arcsecond';
    }
}
