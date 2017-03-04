<?php
/**
 * Created by PhpStorm.
 * User: Studio
 * Date: 17/3/4
 * Time: 上午11:39
 */

namespace app\Http\Controllers\WordPress;

use App\Models\Post as Post;

class PostController extends Post
{

    /*
     * For testing Post model
     * */
    public function index()
    {
        $posts = Post::all(); // using the 'wordpress' connection
        var_dump( $posts[0] -> attributes );
    }
}