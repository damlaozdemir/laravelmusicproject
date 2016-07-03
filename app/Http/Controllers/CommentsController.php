<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Album;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller {

	public function store(Request $request, Album $name)
	{

		$comment = new Comment;
        $comment->comment = $request->comment;
        $name->comments()->save($comment);
		return back();
        //$name->addcomment($comment);
	}


}
