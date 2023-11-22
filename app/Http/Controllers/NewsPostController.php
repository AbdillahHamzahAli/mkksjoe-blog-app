<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use Illuminate\Http\Request;

class NewsPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('news.index', [
            'newsposts' => NewsPost::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create', [
            'statuses' => $this->statuses()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsPost $newsPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsPost $newsPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsPost $newsPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsPost $newsPost)
    {
        //
    }
    private function statuses()
    {
        return [
            'draft' => __('newspost.form_control.select.status.option.draft'),
            'publish' => __('newspost.form_control.select.status.option.publish')
        ];
    }
}
