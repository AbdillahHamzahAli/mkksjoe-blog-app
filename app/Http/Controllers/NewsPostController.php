<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:60',
            'slug' => 'required|string|unique:news_posts,slug',
            'thumbnail' => 'required',
            'description' => 'required|string|max:240',
            'content' => 'required',
            'category' => 'required',
            'status' => 'required'
        ], [], $this->attributes());

        if ($validator->fails()) {
            if ($request['category']) {
                $request['category'] = Category::select('id', 'title')->whereIn('id', $request->category)->get();
            }
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // dd($request->all());
        DB::beginTransaction();

        try {
            $post = NewsPost::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'thumbnail' => parse_url($request->thumbnail)['path'],
                'description' => $request->description,
                'content' => $request->content,
                'status' => $request->status,
                'user_id' => Auth::user()->id
            ]);
            // $post->tag()->attach($request->tag);
            $post->categories()->attach($request->category);

            Alert::success(
                trans('newspost.alert.create.title'),
                trans('newspost.alert.create.message.success')
            );

            return redirect()->route('newspost.index');
        } catch (\Throwable $th) {
            DB::rollBack();
            Alert::error(
                trans('newspost.alert.create.title'),
                trans('newspost.alert.create.message.error', ['error' => $th->getMessage()])
            );
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
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
    private function attributes()
    {
        return [
            'title' => __('newspost.form_control.input.title.attribute'),
            'slug' => __('newspost.form_control.input.slug.attribute'),
            'thumbnail' => __('newspost.form_control.input.thumbnail.attribute'),
            'description' => __('newspost.form_control.textarea.description.attribute'),
            'content' => __('newspost.form_control.textarea.content.attribute'),
            'category' => __('newspost.form_control.input.category.attribute'),
            'status' => __('newspost.form_control.select.status.attribute')
        ];
    }
}
