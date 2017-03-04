<?php
/**
 * Created by PhpStorm.
 * User: Studio
 * Date: 17/3/4
 * Time: 上午11:37
 */

namespace App\Models;

use Corcel\User as Corcel;

class User extends Corcel
{
    protected $connection = 'wordpress';
}