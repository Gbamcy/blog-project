<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsFormRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function newComment(CommentsFormRequest $request)
    {
        $comment = new Comment(array(
            'post_id'=>$request->get('post_id'),
            'content'=>$request->get('content')

        ));
        $comment ->save();

        return redirect()->back()->with('status','your comments created');
    }
}
