<?php

namespace App\Http\Controllers;

use App\BlogCommentary;
use Illuminate\Http\Request;

class BlogCommentaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogCommentaries = BlogCommentary::all();
        return response()->json($blogCommentaries);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_name' => 'required|string|max:255',
            'author_email' => 'email|string|required|max:255',
            'author_comment' => 'required|min:10|string',
        ]);


        BlogCommentary::create([
            'author_name' => $request->input('author_name'),
            'author_email' => $request->input('author_email'),
            'author_comment' => $request->input('author_comment'),
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogCommentary $blogCommentary
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCommentary $blogCommentary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogCommentary $blogCommentary
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCommentary $blogCommentary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\BlogCommentary $blogCommentary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCommentary $blogCommentary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogCommentary $blogCommentary
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCommentary $blogCommentary)
    {
        //
    }
}
