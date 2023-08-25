<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userBlog;
use Illuminate\Routing\Controller;

class userController extends Controller
{
    public function home()
    {
        return view('users.home');
    }

    // CREATE FUNCTION
    public function create()
    {
        return view('users.create');
    }

    // POST FUNCTION
    public function post(Request $request)
    {
        try {
            $newBlog = $request->validate([
                'title' => 'required',
                'content' => 'required'
            ]);

            userBlog::create($newBlog);

            return redirect()->route('blog.index')->with('created', 'Blog created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred. Please try again.']);
        }
    }


    // Blog controller
    public function blog()
    {
        $blog = userBlog::all();
        return view('users.blog', ['blogs' => $blog]);
    }

    // EDIT controller
    public function edit(userBlog $blog)
    {
        return view('users.edit', ['blog' => $blog]);
    }

    // UPDATE ROUTE
    public function update(Request $request, userBlog $blog){
        try {
            $updatedBlog = $request->validate([
                'title' => 'required',
                'content' => 'required'
            ]);

            $newUpdatedBlog = userBlog::findOrFail($blog->id);

            $newUpdatedBlog->update($updatedBlog);

            return redirect()->route('blog.index')->with('updated', 'Blog updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred. Please try again.']);
        }
    }


    // Delete controller
    public function delete(userBlog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index')->with('deleted', 'Blog deleted successfully');
    }
}
