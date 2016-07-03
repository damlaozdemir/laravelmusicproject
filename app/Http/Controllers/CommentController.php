<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Album;
class CommentController extends Controller
{
    public function store(Request $request){

        /*$comment = new Comment;
        $comment->comment = $request->comment;
        $name->comments()->save($comment);
        //$name->addcomment($comment);*/
        return $request->all();
    }
}


?>
