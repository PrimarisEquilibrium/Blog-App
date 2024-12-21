<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('user')->get();
        return Inertia::render("Blogs/Index", ["blogs" => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render("Blogs/Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => ["required", "max:255", "string"],
            "content" => ["required", "string"]
        ]);

        $blog = Blog::create($data);

        return to_route("blogs.show", ["blog" => $blog->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $blog->load("user");
        return Inertia::render("Blogs/Show", ["blog" => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
