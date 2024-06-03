<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate('2')->sortByDesc('created_at');
        return view('posts.create', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {    // validate the data

        $validated = $request->validate([
          'title'  => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
        // store in the
         $post = new Post;
         $post -> title = $request ->title;
         $post -> body =  $request -> body;
         $post -> save();
        // redirect to another page
         return redirect()->route('posts.index')->with('success', 'created successfully');

    }

    /**
     * Display the specified resource.
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $post = Post::findOrfail($id);

        $comments = $post ->comments()->get();
        return view('posts.show', compact('post','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param $id
     * @return
     */
    public function edit( $id )
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post ->title = $request ->get('title');
        $post ->body = $request ->get('body');
        $post-> save();
        return redirect('posts')->with('status',' Updated successfully..!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id )
    {
        $post = Post::findOrFail($id);
        $post ->Delete();
        return redirect('posts')->with('status',' Deleted Successfully ');
    }
}
