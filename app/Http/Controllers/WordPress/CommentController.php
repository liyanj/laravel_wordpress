<?php
/**
 * Created by PhpStorm.
 * User: Studio
 * Date: 17/3/4
 * Time: 上午9:19
 */
namespace app\Http\Controllers\WordPress;

use App\Models\Comment as Comment;

class CommentController extends Comment
{

    /*
     * For testing Comment model
     * */
    public function index()
    {
        $comments = Comment::all(); // using the 'wordpress' connection
        var_dump( $comments[0] -> attributes );
    }
}