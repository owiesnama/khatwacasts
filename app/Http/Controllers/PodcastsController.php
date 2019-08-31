<?php

namespace App\Http\Controllers;

use App\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PodcastsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $podcasts = Podcast::latest()->paginate(10);

        if (request()->wantsJson()) {
            return $podcasts;
        }

        return view('index', compact('podcasts'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'podcast' => ['required', 'file']
        ]);
        $filename = time() . "_" . Str::slug($request->title) . "." . $request->podcast->getClientOriginalExtension();
        $podcast = new Podcast();
        $podcast->title = $request->title;
        $podcast->description = $request->description;
        $podcast->name = $filename;

        $request->file('podcast')->storeAs('public/podcasts', $filename);


        $podcast->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param Podcast $podcast
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Podcast $podcast)
    {
        return view('podcast.show', compact('podcast'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
