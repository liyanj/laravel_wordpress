<?php
/**
 * Created by PhpStorm.
 * User: Studio
 * Date: 17/3/4
 * Time: 上午11:37
 */

namespace App\Models;

use Corcel\Post as Corcel;

class Post extends Corcel
{
    protected $connection = 'wordpress';
}